<?php
  require_once("my_model/usersModel.php");
  require_once("my_view/paginatorView.php");
  require_once("my_view/gridView.php");
  require_once("my_view/formView.php");

  function format_users_in_grid($result) {
    $grid = array();
    for ($i = 0; $i < count($result); $i ++) {
      $griditem = array();
      $griditem["Tag"] = 'a';
      $griditem["Attributes"] = 'class="lightbox" href="' . $result[$i]["PortraitURL"] . '" title="' . $result[$i]["FirstName"] . ' ' . $result[$i]["LastName"] . ' portrait"';
      $griditem["Content"] = '';
      $childitem = array();
      $childitem["Tag"] = 'img';
      $childitem["Attributes"] = 'alt="' . $result[$i]["FirstName"] . ' ' . $result[$i]["LastName"] . ' portrait" src="'. $result[$i]["ThumbnailURL"] . '"';
      $childitem["Content"] = "";
      $griditem["Children"][0] = $childitem;
      $grid[$i][0] = $griditem;
      $griditem = array();
      //$griditem["Tag"] = "p";
      //$griditem["Attributes"] = "";
      //$griditem["Content"] = "by " . $result[$i]["FirstName"] . ' ' . $result[$i]["LastName"] . ' <br /> ' . $result[$i]["Email"];
      //$grid[$i][1] = $griditem;
    }
    return $grid;
  }

  function format_add_users() {
    $input = array();
    $input[0]["prompt"] = "First Name: ";
    $input[0]["name"] = "firstname";
    $input[0]["type"] = "text";          
    $input[1]["prompt"] = "Last Name: ";
    $input[1]["name"] = "lastname";
    $input[1]["type"] = "text";
    $input[2]["prompt"] = "Email: ";
    $input[2]["name"] = "email";
    $input[2]["type"] = "text";
    $input[3]["prompt"] = "Upload Picture: ";
    $input[3]["name"] = "portrait";
    $input[3]["type"] = "file";
    return $input;
  }

  if (isset($_GET["startingfrom"]) && isset($_GET["recordcount"])) {
    $result = get_users($_GET["startingfrom"], $_GET["recordcount"]);
    $grid = format_users_in_grid($result);
    display_grid($grid);
  }
  else if (isset($_GET["add"]) && $_GET["add"] == true) {
    $form = format_add_users();
    display_form($form, "SS_upload_your_art.php", "post", "");
  }
  else if (isset($_POST["lastname"]) && isset($_POST["firstname"]) && isset($_POST["email"]) && isset($_FILES["portrait"])) {
    $userID = add_user($_POST["lastname"], $_POST["firstname"], $_POST["email"], date("Y"));
    update_user_picture($userID, $_FILES["portrait"]);
    display_element('p', 'Successfully added ' . $_POST["firstname"] . ' ' . $_POST["lastname"], '', '         ');
    display_element('a', 'View Users', 'href="SS_upload_your_art.php"', '         ');
  }
  else if (isset($_GET["more"]) && $_GET["more"] == true) {
    display_loadmore_paginator("SS_upload_your_art.php?more=true", "display_grid", 0 ,"         ");
  display_element('a', 'Add a user', 'href="SS_upload_your_art.php?add=true" class="dialog"', '         ');
  }
  else {
    $result = get_users(0,2);
    $grid = format_users_in_grid($result);
	display_loadmore_paginator("SS_upload_your_art.php?more=true", "display_grid", $grid ,"         ");
    display_element('a', 'Add a user', 'href="SS_upload_your_art.php?add=true" class="dialog"', '         ');
  }
?>
