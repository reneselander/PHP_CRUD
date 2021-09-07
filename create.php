<?php

// kom ihåg att lämna bort slut-taggen om det är endast php

    require_once 'inc/header.php';

    require_once '../../crud_zerothree.inc.php';

?>

<table width = <?php echo "'$ninezero%'"; ?> class = 'middle_section'>

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

          echo "<table width = '$onehundred%'; class = 'read_db2'><tbody><tr>

          <td valign = 'top' width = '$twozero%'; style = 'text-align:center'>&nbsp;&nbsp;Hello .          

          </td>

          <td valign = 'top' width = '$eightzero%'; style = 'text-align:left'>
          
          <table width = '$eightzero%'; style = 'text-align:left'class = 'middle_section_innertable' >

          <tbody>

            <tr><form action = 'insert.php' method = 'POST'>

              <td valign = 'top' width = '50%' style='text-align:right'>First name:&nbsp;<br><br></td>

              <td valign = 'top' width = '50%' style='text-align:left'>&nbsp;<input type='text' name='first_name' id='firstname' required></td>

            </tr>

            <tr>

            <td valign = 'top' width = '50%' style='text-align:right'>Last name:&nbsp;<br><br></td>

              <td valign = 'top' width = '50%' style='text-align:left'>&nbsp;<input type='text' name='last_name' id='lastname' required></td>

            </tr>

            <tr>

            <td valign = 'top' width = '50%' style='text-align:right'>Age:&nbsp;<br><br></td>

              <td valign = 'top' width = '50%' style='text-align:left'>&nbsp;<input type='text' name='age' id='age'></td>

            </tr>

            <tr>

            <td valign = 'top' width = '50%' style='text-align:right'>Location:&nbsp;<br><br></td>

              <td valign = 'top' width = '50%' style='text-align:left'>&nbsp;<input type='text' name='location' id='location'></td>

            </tr>

            <tr>

            <td valign = 'top' width = '50%' style='text-align:right'>Gender:&nbsp;<br><br></td>

              <td valign = 'top' width = '50%' style='text-align:left'>&nbsp;<input type='text' name='gender' id='gender'></td>

            </tr>

            <tr>

            <td valign = 'top' width = '50%' style='text-align:right'>Email:&nbsp;<br><br></td>

              <td valign = 'top' width = '50%' style='text-align:left'>&nbsp;<input type='text' name= 'email' id='email'></td>

            </tr>

            <tr>

            <td valign = 'top' width = '50%' style='text-align:right'>Ålänning:&nbsp;<br><br></td>

              <td valign = 'top' width = '50%' style='text-align:left'>&nbsp;<select name = 'ålänning' id = 'ålänning'><option></option>
                          
              <option value = 'JA'>JA</option>

              <option value = 'NEJ'>NEJ</option>

              <option value = 'JONÄ'>JO NÄ</option>

              </select>

              </td>

            </tr>

            <tr>

            <td valign = 'top' width = '50%' style='text-align:right'><label for = 'vehicle1'> I have a bike</label>&nbsp;</td>

              <td valign = 'top' width = '50%' style='text-align:left'>&nbsp;<input type = 'hidden' name = 'fordon1' value = 'Nej'><input type = 'checkbox' id = 'fordon1' name = 'fordon1' value = 'Ja'>
              
              &nbsp;<label for = 'vehicle2'> I have a car</label>&nbsp;<input type = 'hidden' name = 'fordon2' value = 'Nej'><input type = 'checkbox' id = 'vehicle2' name = 'fordon2' value = 'Ja'>

              &nbsp;<label for = 'vehicle2'> I have a boat</label>&nbsp;<input type = 'hidden' name = 'fordon3' value = 'Nej'><input type = 'checkbox' id = 'vehicle3' name = 'fordon3' value = 'Ja'>

              <br><br>

              </td>

            </tr>

              <tr>

            <td valign = 'top' width = '50%' style='text-align:right'>Kroppstyp:&nbsp;<br><br></td>

              <td valign = 'top' width = '50%' style='text-align:left'>

              <input type = 'radio' name = 'kroppstyp' id = 'stor' value = 'stor'>Stor&nbsp;&nbsp;&nbsp;<input type = 'radio' name = 'kroppstyp' id = 'liten' value = 'liten'>Liten<br><br>

              </td>

            </tr>              

          </tbody>

        </table><p style='text-align:center' class='loginbox'><input type='submit' value='Submit' name = 'submit'></p></form><br>
          
          </td>

          </tr></tbody></table>";

        }

        /* $sql = "INSERT INTO users (user_Name, user_Email, user_Uid, age) VALUES ('Joakim', 'john@example.com','345', '17')";

                if (mysqli_query($conn, $sql)) {
                  echo "New record created successfully";
                } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }

          mysqli_close($conn); */

          

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
