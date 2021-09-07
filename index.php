<?php

// kom ihåg att lämna bort slut-taggen om det är endast php

    require_once 'inc/header.php';

    include 'inc/variables.inc.php';

?>

<!-- Middle section -->
<table width = <?php echo "$ninezero%"; ?> class = 'middle_section'>

  <tbody>

    <tr>

      <th width = <?php echo "'$eightfive%'"; ?> scope = "col" valign = "top">&nbsp;

        <?php

        if (isset($_SESSION["useruid"])) {

          //echo "Hello " . $_SESSION["useruid"] . ".";

          echo "<table width = $onezero'%';><tbody><tr>

          <td valign = 'top'>&nbsp;&nbsp;Hello " . $_SESSION["useruid"] . ".</td>

          <td valign = 'top'>&nbsp;<img src = 'img/capamerica.png' border = '0' width = '80' height = '80'></td>

          <td valign = 'top'>&nbsp;Hello " . $_SESSION["useruid"] . ".</td></tr></tbody></table>";


        } else {

          echo "<table width = '$ninezero%'; class = 'middle_section_innertable'><tbody><tr>

          <td width = '$threethree%'; valign = 'top'>&nbsp;&nbsp;Hello guest.</td>

          <td width = '$threethree%'; valign = 'top'>&nbsp;<img src = 'img/capamerica.png' width = '80' height = '80'></td>

          <td width = '$threethree%'; valign = 'top'>&nbsp;Hello guest. $sevenzero</td></tr></tbody></table>";

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
