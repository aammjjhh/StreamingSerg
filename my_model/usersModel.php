<?php
  require_once('my_model/database.php');
  require_once('my_utils/thumbnail.php');
  
  function get_users_count() {
    $result = mysql_query("SELECT COUNT(*) from users" . "'");
    return mysql_result($result, 0);
  }

  function get_users($startingindex, $recordcount) {
    $options = array('options' => array('min_range' => 0), 'flags' => FILTER_FLAG_ALLOW_OCTAL,);
    filter_var($recordcount, FILTER_VALIDATE_INT, $options) or  display_input_error("invalid record count");
    if (!filter_var($startingindex, FILTER_VALIDATE_INT, $options) && $startingindex != 0) display_input_error("invalid starting index");

    $result = mysql_query("SELECT users.* from users ORDER BY users.LastName LIMIT " . $startingindex . ", " . $recordcount);
    $records = array();
    while ($row = mysql_fetch_array($result))
       $records[] = $row;
    return $records;
  }

  function add_user($lastname, $firstname, $email, $yearentered) {
    $email = strtoupper($email);
    preg_match("/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/", $email) or display_input_error("Email is invalid");        
    preg_match("/^[0-9]{4}$/", $yearentered) or display_input_error("Entered year is invalid");
    preg_match("/^[A-Za-z]+$/", $lastname) or display_input_error("Last name is invalid");
    preg_match("/^[A-Za-z]+$/", $firstname) or display_input_error("First name is invalid");        
    $result = mysql_query("SELECT COUNT(*) from users WHERE users.Email = '". $email . "'");
    if (mysql_result($result, 0) > 0) display_input_error("User account " . $email . " already exists!");

    mysql_query("INSERT INTO users (LastName, FirstName, Email, YearEntered) VALUES ('" . $lastname . "','" . $firstname . "','" . $email . "','" . $yearentered . "')");
	
    $result = mysql_query("SELECT users.ID from users WHERE users.Email = '". $email . "'");
    $userID = mysql_result($result, 0);
	return $userID;
  }

  function update_user_picture($userID, $file) {
    $type = strtolower(substr(strrchr($file["name"], "." ), 1));
    if (($type != "jpg") && ($type != "gif") && ($type != "png"))
        display_input_error("Uploaded picture has invalid format: " . $type);

    // We use user.ID to index portrait & thumbnail files, such that there are no duplicate file names
    $portraitURL = "my_images/user" . $userID . "." . $type;
    $thumbnailURL = "my_thumbnails/user" . $userID . ".jpg";
    move_uploaded_file($file['tmp_name'], $portraitURL) or display_file_error("Failed to store the picture to " . $portraitURL);
    make_thumbnail($portraitURL, $thumbnailURL, 300, 400, 1);       

    $statement = "UPDATE users SET users.ThumbnailURL = '" . mysql_real_escape_string($thumbnailURL) . "', users.PortraitURL = '" . mysql_real_escape_string($portraitURL) . "' WHERE users.ID = '" . $userID . "'";
    mysql_query($statement);
    if (mysql_affected_rows() == 0) display_db_error("User ID " . $userID . " does not exist");
  }  
?>