<?php

// kom ihåg att lämna bort slut-taggen om det är endast php

    require_once 'inc/header.php';

    require_once '../../crud_zerothree.inc.php';

?>

<table width = <?php echo "$ninezero%"; ?> class = 'middle_section'>

  <tbody>

    <tr>

      <th width = <?php echo "'$eightfive%'"; ?> scope="col" valign = "top">&nbsp;

      <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */


// Escape user inputs for security

$ip=@$_SERVER['REMOTE_ADDR'];

$timestamp = date('d.m.Y H:i:s');

$first_name = mysqli_real_escape_string($conn, $_REQUEST['first_name']);

$last_name = mysqli_real_escape_string($conn, $_REQUEST['last_name']);

$age = mysqli_real_escape_string($conn, $_REQUEST['age']);

$location = mysqli_real_escape_string($conn, $_REQUEST['location']);

$gender = mysqli_real_escape_string($conn, $_REQUEST['gender']);

$email = mysqli_real_escape_string($conn, $_REQUEST['email']);

$ålänning = mysqli_real_escape_string($conn, $_REQUEST['ålänning']);

$fordon1 = mysqli_real_escape_string($conn, $_REQUEST['fordon1']);

$fordon2 = mysqli_real_escape_string($conn, $_REQUEST['fordon2']);

$fordon3 = mysqli_real_escape_string($conn, $_REQUEST['fordon3']);

$kroppstyp = mysqli_real_escape_string($conn, $_REQUEST['kroppstyp']);
// Attempt insert query execution
$sql = "INSERT INTO users (timestamp, first_name, last_name, age, location, gender, email, ålänning, fordon1, fordon2, fordon3, kroppstyp, ip)

VALUES ('$timestamp', '$first_name', '$last_name', '$age', '$location', '$gender', '$email', '$ålänning', '$fordon1', '$fordon2', '$fordon3', '$kroppstyp', '$ip')";

if(mysqli_query($conn, $sql)){

  echo "<br><br>Records added successfully."; // or header("location:read.php"); // redirects to all records page

} else{

  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

}

// Close connection
mysqli_close($conn);

?>

      </th>

<?php

  require_once 'inc/rightside_menu.inc.php';

?>

</th>

    </tr>

  </tbody>

</table><br>

<?php

    require_once 'inc/footer.php';

?>
