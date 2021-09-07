<?php

  session_start();

  include 'inc/variables.inc.php';

  function getDay() {

    $dowMap = array('sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');

    $dow_numeric = date('w');

    return $dowMap[$dow_numeric];

  }

    function getMonth() {

      $dowMonth = array('x', 'january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december');

      $dow_monthText = date('n');

      return $dowMonth[$dow_monthText];

    }

?>

<!doctype html>

<html>

<head>

<link rel="stylesheet" type="text/css" href="css/standard.css" media="screen"/>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">

<meta charset="utf-8">

<title>Medlemsplatsen v 0.0.2</title>

</head>

<center>

<body>

<table width = "90%" class = "header_menu">

  <tbody>

    <tr>

      <th colspan="2" scope="col"><img src = "img/header.png" width = <?php echo "$onehundred%"; ?> height = "120"></th>

    </tr>

    <tr height = "28">

      <td width = "30%" valign = "top"><b>

<?php

if (isset($_SESSION["useruid"])) {

echo "&nbsp;Hello " . $_SESSION["useruid"] . ",";

echo "&nbsp;today is ";

echo getDay();

echo ",&nbsp;";

echo getMonth();

echo "&nbsp;" . date("d Y") . "";

} else {

echo "&nbsp;Hello guest, today is ";

echo getDay();

echo ",&nbsp;";

echo getMonth();

echo "&nbsp;" . date("d Y") . "";
//echo "&nbsp;" . date("d") . " and the time is " . date("H:i:s") . "";

}

?>

</b></td>

      <td width = <?php echo "'$sevenzero%'"; ?> class = 'header_links'>&nbsp;

          <a href = "index.php">Front Page</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          <a href = "index.php">Info</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          <a href = "index.php">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <!-- <?php

          if (isset($_SESSION["useruid"])) {

            echo "<a href = 'profile.php'>Profile page</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

            echo "<a href = 'inc/logout.inc.php'>Log out</a>";

          }

          else {

            echo "<a href = 'signup.php'>Sign up</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

            echo "<a href = 'login.php'>Log in</a>";

          }

          ?> -->
          
          <a href = "create.php">Create</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          <a href = "read.php">Read</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          <a href = "update.php">Update</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          <a href = "delete.php">Delete</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><br>

    </tr>

  </tbody>

</table><br>
