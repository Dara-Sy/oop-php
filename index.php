<?php
    include 'parentclass.inc.php';
    include 'newclass.inc.php';
    $object = new NewClass;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Object Oriented Programming PHP</title>
</head>
<body>

<?php
    echo $object->info;
?>

</body>
</html>
