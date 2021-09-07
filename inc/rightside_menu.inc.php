<?php include 'inc/variables.inc.php'; ?>

<th class = 'right_cell' width = <?php echo "'$twozero%'"; ?> scope = 'col' align = "right" valign = "top">

  <br>

<?php

// om inloggad
if (isset($_SESSION["useruid"])) {

  echo "<a href = 'profile.php'>Profile page</a><br><br>";

  echo "<a href = 'inc/logout.inc.php'>Log out</a>";

}

// om utloggad
else {

  echo "<img src = 'img/lock.png' border = '0' width = '100' height = '100'>&nbsp;";

  //echo "<a href = 'login.php'>Log in</a>";

}

?>