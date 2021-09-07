<?php

// remove end php tag if php page only

    require_once 'inc/header.php';

    require_once '../../crud_zerothree.inc.php';

?>

<table class = 'read_db' width = <?php echo "'$ninezero%'"; ?>>

  <tbody>

    <tr valign = "top">

      <th width = <?php echo "'$eightfive%'"; ?> scope = "col" valign = "top">&nbsp;

        <?php

        if (isset($_GET['page'])) {

            $page = $_GET['page'];

          } else {

              $page = 1;

          }

        $no_of_records_per_page = 5;

        $offset = ($page-1) * $no_of_records_per_page;

        // Check connection
        if (mysqli_connect_errno()){

            echo "Failed to connect to MySQL: " . mysqli_connect_error();

            die();

          }

        $total_pages_sql = "SELECT COUNT(*) FROM users";

        $result = mysqli_query($conn,$total_pages_sql);

        $total_rows = mysqli_fetch_array($result)[0];

        $total_pages = ceil($total_rows / $no_of_records_per_page);        

        if (isset($_SESSION["useruid"])) {

          //echo "Hello " . $_SESSION["useruid"] . ".";

          echo "<table style = 'width: 100%;' ><tbody><tr>

          <td valign = 'top'>&nbsp;&nbsp;Hello " . $_SESSION["useruid"] . ".</td>

          <td valign = 'top'>&nbsp;<img src = 'img/capamerica.png' border = '0' width = '80' height = '80'></td>

          <td valign = 'top'>&nbsp;Hello " . $_SESSION["useruid"] . ".</td></tr></tbody></table>";


          } else {

          $sql = "SELECT * FROM users LIMIT $offset, $no_of_records_per_page";
          //$res_data = mysqli_query($conn,$sql);

          $result = mysqli_query($conn, $sql);
  
          //if (mysqli_num_rows($result) > 0) {  
            $i = 0;

          // output data of each row
          while ($row = mysqli_fetch_assoc($result))
          
            {

            if ($i%2 == 0)
            
            {
              //middle section innertable width
              echo "<table width = '$onehundred%'; class = 'read_db'><tbody><tr bgcolor = '#ffffff'>

              <td valign = 'top' width = '$twozero%'; text-align: center;>&nbsp;<img src = 'img/capamerica.png' border = '0' width = '80' height = '80'></td>

              <td valign = 'top' width = '$eightzero%'; style = 'text-align:left'>&nbsp;Inlagd: " . $row["timestamp"]. " - Namn: " . $row["first_name"]. " " . $row["last_name"]. "<br><br>
              
              Ip: ".$row["ip"]."<br><br>
              
              Ålder " . $row["age"]. "<br><br>
              
              Ort: " . $row["location"] . "<br><br>Kön: " . $row["gender"] ."<br><br>Ålänning: " . $row["ålänning"] . "<br><br>Epost: ".$row["email"]."
              
              <p style = 'text-align:center'><a href='update_process.php?id=" . $row['user_Id'] . " '>Edit</a>
              
              </p>
              
              <br>
              
              </td>
              
              </tr>
              
              </tbody>
              
              </table>";

            }

            else

            {
              //middle section innertable width
              echo "<table width = '$onehundred%'; class = 'read_db'><tbody><tr bgcolor = '#cfcfcf'>

              <td valign = 'top' width = '$twozero%'; text-align: center;>&nbsp;<img src = 'img/capamerica.png' border = '0' width = '80' height = '80'></td>

              <td valign = 'top' width = '$eightzero%'; style = 'text-align:left'>&nbsp;Inlagd: " . $row["timestamp"]. " - Namn: " . $row["first_name"]. " " . $row["last_name"]. "<br><br>
              
              Ip: ".$row["ip"]."<br><br>
              
              Ålder " . $row["age"]. "<br><br>
              
              Ort: " . $row["location"] . "<br><br>Kön: " . $row["gender"] ."<br><br>Ålänning: " . $row["ålänning"] . "<br><br>Epost: ".$row["email"]."
              
              <p style = 'text-align:center'><a href='update_process.php?id=" . $row['user_Id'] . " '>Edit</a>
              
              </p>
              
              <br>
              
              </td>
              
              </tr>
              
              </tbody>
              
              </table>";

          }
          
          $i++;

        }

        }        

        mysqli_close($conn);

    ?>

        <br>

        <a href="?page=1">First</a>

        <?php if($page <= 1){ echo ''; } ?>

        <a href="<?php if($page <= 1){ echo '#'; } else { echo "?page=".($page - 1); } ?>">Prev</a>

        <?php if($page >= $total_pages){ echo ''; } ?>

        <a href="<?php if($page >= $total_pages){ echo '#'; } else { echo "?page=".($page + 1); } ?>">Next</a>

        <a href="?page=<?php echo $total_pages; ?>">Last</a>

        <br>

        <br>
    
      </th>

<?php

  require_once 'inc/rightside_menu.inc.php';

?>

</th>

    </tr>

  </tbody>

</table>

<br>

<?php

    require_once 'inc/footer.php';

?>