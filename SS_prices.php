<?php   
  require_once("my_view/mheaderView.php");
  
  function update_price($amount) {
    preg_match("/^([0-9]*\.)?[0-9]{2}$/", $amount) or display_input_error("Please follow the XX.XX format");
    echo $amount;
  }
  
  if (!isset($_SESSION["role"]))
    $_SESSION["role"] = "visitor";
  if ($_SESSION["role"] == "visitor") {
    echo ' <h2>You must be a fan to view this page.</h2>' . PHP_EOL;
    return;
  }
  if ($_SESSION["role"] == "fan") {
?> 
  		<h2>Prices</h2>
			<br />
			<br />
			<span class="editinplace">
				<h1>Portrait (8.5" x 11"): </h1>
				<span id="portrait_cost">$10.00</span>
			</span>
<?php
  }
    if ($_SESSION["role"] == "admin") {
?>
			<h2>Prices</h2>
			<br />
			<br />
			<span class="editinplace">
				<h1>Portrait (8.5" x 11"): </h1>
				<span id="portrait_cost" onClick="edit('portrait_cost')">$10.00</span>
				<input type="text"/><input type="button" value="Save" onClick="modify('portrait_cost', true)"/>
				<input type="button" value="Cancel" onClick="modify('portrait_cost', false)"/>
			</span>
<?php
  }
  require_once("my_view/mfooterView.php");
?> 
