<?php

// kom ihåg att lämna bort slut-taggen om det är endast php

    require_once 'inc/header.php';

    require_once '../../crud_zerothree.inc.php';

    $id = $_GET['id']; // get id through query string

    $del = mysqli_query($conn,"delete from users where user_Id = '$id'"); // delete query

    if($del)

    {
    
      mysqli_close($db); // Close connection
    
      header("location:delete.php"); // redirects to all records page
    
      exit;	
    
    }
    
    else
    
    {
    
      echo "Error deleting record"; // display error message if not delete
    
    }

?>

<table width = <?php echo "$ninezero%"; ?> class = 'middle_section'>

  <tbody>

    <tr>

      <th width = <?php echo "'$eightfive%'"; ?> scope="col" valign = "top">&nbsp;

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