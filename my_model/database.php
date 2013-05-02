<?php
  include_once("my_view/errorView.php");
  $db = mysql_connect("localhost", "root");
  mysql_select_db("amanda", $db) or display_db_error("unable to connect to the database");
?>