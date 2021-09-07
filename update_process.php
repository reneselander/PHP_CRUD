<?php

// kom ihåg att lämna bort slut-taggen om det är endast php

    require_once 'inc/header.php';

    require_once '../../crud_zerothree.inc.php';

    $id = $_GET['id']; // get id through query string

    $sql = mysqli_query($conn,"select * from users where user_Id='$id'"); // select query

    $data = mysqli_fetch_array($sql); // fetch data

    if(isset($_POST['update'])) // when click on Update button

      {
        $first_name = $_POST['first_name'];

        $last_name = $_POST['last_name'];

        $age = $_POST['age'];

        $location = $_POST['location'];

        $gender = $_POST['gender'];
        
        $email = $_POST['email'];
        
        $ålänning = $_POST['ålänning'];

        $fordon1 = $_POST['fordon1'];
        
        $fordon2 = $_POST['fordon2'];

        $fordon3 = $_POST['fordon3'];

        $kroppstyp = $_POST['kroppstyp'];

        $ip = $_POST['ip'];
      
        $execute_update = mysqli_query($conn, "update users set first_name = '$first_name', last_name = '$last_name', age = '$age', location = '$location', 
        gender = '$gender', email = '$email', ålänning = '$ålänning', fordon1 = '$fordon1', fordon2 = '$fordon2', fordon3 = '$fordon3', kroppstyp = '$kroppstyp', ip = '$ip' where user_Id = '$id'");
      
        if($execute_update)

        {
            mysqli_close($conn); // Close connection

             header("location:read.php"); // redirects to all records page

            exit; 

        }

        else

        {

            echo mysqli_error();

        }    	

    }

?>

<table width = <?php echo "$ninezero%"; ?> class = 'middle_section'>

  <tbody>

    <tr>

      <th width = <?php echo "'$eightfive%'"; ?> scope = "col" valign = "top">&nbsp;

        <?php

        if (isset($_SESSION["useruid"])) {

          //echo "Hello " . $_SESSION["useruid"] . ".";

          echo "<table style = 'width: 100%;' border = '0' cellspacing = '10' cellpadding='2'><tbody><tr>

          <td valign = 'top'>&nbsp;&nbsp;Hello " . $_SESSION["useruid"] . ".          

          </td>

          <td valign = 'top'>&nbsp;<img src = 'img/capamerica.png' border = '0' width = '80' height = '80'></td>

          <td valign = 'top'>&nbsp;Hello " . $_SESSION["useruid"] . ".</td></tr></tbody></table>";


        } else {

          //middle section innertable width
          echo "<table width = '$onehundred%'; class = 'read_db2'><tbody><tr bgcolor = '#f0f0f0'>

          <td valign = 'top' width = '$twozero%'; style = 'text-align:center'>&nbsp;<img src = 'img/capamerica.png' border = '0' width = '80' height = '80'></td>

          <td valign = 'top' width = '$eightzero%'; style = 'text-align:center'>&nbsp;<form method = 'POST'>          

          <input type = 'text' name = 'first_name' value = " . $data['first_name'] . " placeholder = 'Enter First Name' Required><br><br>
          
          <input type = 'text' name = 'last_name' value = " . $data['last_name'] . " placeholder = 'Enter Last Name' Required><br><br>
          
          <input type = 'text' name = 'age' value = " . $data['age'] . " placeholder = 'Enter Age' Required><br><br>

          <input type = 'text' name = 'location' value = " . $data['location'] . " placeholder = 'Location' Required><br><br>

          <input type = 'text' name = 'gender' value = " . $data['gender'] . " placeholder = 'Gender' Required><br><br>

          <input type = 'text' name = 'email' value = " . $data['email'] . " placeholder = 'email' Required><br><br>

          <input type = 'text' name = 'ålänning' value = " . $data['ålänning'] . " placeholder = 'Ålänning' Required><br><br>

          <input type = 'text' name = 'fordon1' value = " . $data['fordon1'] . " placeholder = 'fordon1' Required><br><br>

          <input type = 'text' name = 'fordon2' value = " . $data['fordon2'] . " placeholder = 'fordon2' Required><br><br>

          <input type = 'text' name = 'fordon3' value = " . $data['fordon3'] . " placeholder = 'fordon3' Required><br><br>

          <input type = 'text' name = 'kroppstyp' value = " . $data['kroppstyp'] . " placeholder = 'Kroppstyp' Required><br><br>

          <input type = 'text' name = 'ip' value = " . $data['ip'] . " placeholder = 'ip'><br><br>

          <p style='text-align:center' class='loginbox'><input type = 'submit' name = 'update' value = 'Update'></p></form>

          <br><br></td></tr></tbody></table>";

        }
        
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