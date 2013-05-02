<?php
  require_once('database.php');

  function get_fans($startingindex, $recordcount) {
    $options = array('options' => array('min_range' => 0), 'flags' => FILTER_FLAG_ALLOW_OCTAL,);
    filter_var($recordcount, FILTER_VALIDATE_INT, $options) or  display_input_error("invalid record count");
    if (!filter_var($startingindex, FILTER_VALIDATE_INT, $options) && $startingindex != 0) display_input_error("invalid starting index");

    $result = mysql_query("SELECT * from fans WHERE fans.FanID = fans.ID ORDER BY fans.LastName LIMIT " . $startingindex . ", " . $recordcount);
    $records = array();
    while ($row = mysql_fetch_array($result))
       $records[] = $row;
    return $records;
  }

  function register_fan($lastname, $firstname, $email, $password, $yearenrolled) {
    $email = strtoupper($email);
    preg_match("/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/", $email) or display_input_error("Email is invalid");        
    preg_match("/^[0-9]{4}$/", $yearenrolled) or display_input_error("Enrolled year is invalid");
    preg_match("/^[A-Za-z]+$/", $lastname) or display_input_error("Last name is invalid");
    preg_match("/^[A-Za-z]+$/", $firstname) or display_input_error("First name is invalid");        
    $result = mysql_query("SELECT COUNT(*) from fans WHERE fans.Email = '". $email . "'");
    if (mysql_result($result, 0) > 0) display_input_error("Fan account " . $email . " already exists!");

    $activationkey = sha1(mt_rand(10000,99999) . time() . $email);
    mysql_query("INSERT INTO fans (LastName, FirstName, Email, YearEnrolled, Password, ActivationKey, Verified) VALUES ('" . $lastname . "','" . $firstname . "','" . $email . "','" . $yearenrolled . "','" . sha1($email . $password) . "','" . $activationkey . "',FALSE)");

    $result = mysql_query("SELECT * from fans WHERE fans.Email = '". $email . "'");
    $row = mysql_fetch_array($result);
    return $row;
  }

  function activate_fan($email, $activationkey) {
    $email = strtoupper($email);
    preg_match("/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/", $email) or display_input_error("Email is invalid");
    if (strlen(mysql_real_escape_string($activationkey)) != 40) display_input_error("Invalid activation key");
      
    $result = mysql_query("SELECT fans.* from fans WHERE Email = '". $email . "'");
    if (mysql_num_rows($result) == 0) return "Nonexisting fan account " . $email;

    $row = mysql_fetch_array($result);
    $fanID = $row['ID'];
    if (mysql_real_escape_string($activationkey) != $row['ActivationKey']) return "The activation key doesn't match the one assigned to the fan account " . $email;

    mysql_query("UPDATE fans SET Verified = TRUE WHERE ID = " . $fanID);
    return "Congratulations! Fan account " . $email . " has been activated";
  }
  
  function add_fan($email) {
    $email = strtoupper($email);
    if (!preg_match("/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/", $email)) 
      display_input_error("Fan email is invalid");

    $result = mysql_query("SELECT ID from fans WHERE Email = '". $email . "'");
    if (mysql_num_rows($result) == 0) return "Nonexisting fan account " . $email;
    $fanID = mysql_result($result, 0);
  }

  function is_fan_valid($email, $password) {
    $email = strtoupper($email);
    if (!preg_match("/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/", $email))
      display_input_error("Fan email is invalid");

    $result = mysql_query("SELECT * from fans WHERE Email = '". $email . "'");
    if (mysql_num_rows($result) == 0) return "Nonexisting fan account " . $email;

    $row = mysql_fetch_array($result);
    if (sha1($email . mysql_real_escape_string($password)) != $row['Password']) return "Wrong Password";
    return "Welcome " . $row['FirstName'] . "!";
  }
?>