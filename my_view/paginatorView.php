<?php
  require_once("my_model/usersModel.php");
  require_once("my_view/gridView.php");
  
  function display_tab_paginator($url, $numitems, $startingfrom, $recordcount, $indent = "") {
    echo $indent . '<div class="tabpaginator">' . PHP_EOL;
    echo $indent . '  <ul><li><a href="' . $url. '">Prev</a></li>' . PHP_EOL;
    $page = (int)$startingfrom/$recordcount + 1;
    while ($numitems > 0) {
      echo $indent . '    <li><a href="'. $url . 'startingfrom=' . $startingfrom . '&recordcount=' . $recordcount . '">' . $page . '</a></li>' . PHP_EOL;
      $page ++;  $startingfrom += $recordcount;    $numitems -= $recordcount;
    }
    echo $indent . '  <li><a href="' . $url. '">Next</a></li></ul>' . PHP_EOL;
    echo $indent . '</div>' . PHP_EOL;
  }
  
  function display_loadmore_paginator($url, $display_method, $initial_load, $indent = "") {
    if ($initial_load == 0) {
		$result = mysql_query("SELECT * FROM users ORDER BY users.ID DESC");
		$rows = mysql_fetch_array($result);
		$num_users = $rows["ID"];
		$result = get_users(0,$num_users);
		$initial_load = format_users_in_grid($result);
	}
    call_user_func($display_method, $initial_load, $indent);
    echo $indent . '<h2><a class="loadmorepaginator" href="' . $url . '">Display All Art</a></h2>' . PHP_EOL;
  }  
?>