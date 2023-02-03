<?php

extract($_GET);

if (isset($calc)) {
   $prod = $x + $y;
} else {
   $x = 0;
   $y = 0;
   $prod = 0;
}
?>

<html>

<body>

   <h3>PHP Calculator</h3>

   <form method="get" action="<?php print $_SERVER['PHP_SELF']; ?>">

      x = <input type="text" name="x" size="5" value="<?php print $x; ?>" />
      y = <input type="text" name="y" size="5" value="<?php print $y; ?>" />


      <input type="submit" name="calc" value="Calculate" />
      <input type="reset" name="clear" value="Clear" />
   </form>

   <?php if (isset($calc)) {

      print "<p>x + y = $prod</p>";
   } ?>

</body>

</html>