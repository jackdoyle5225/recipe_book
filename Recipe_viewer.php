<?php
    include 'Parsedown.php';

    $filename = 'recipes/burger_sauce.md';
    $file = fopen($filename, 'r');
    $line = file($filename);
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $line[0]; ?></title> <!-- this will be a php variable-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- recipe list -->
<?php include 'recipe_sidebar.php'; ?>

<!-- recipe -->
<div class="main">
<!--dynamically generate sidebar & use switch statement w recipe array varaible for recipe selection from sidebar -->
<?php 
    $parsedown = new Parsedown();
    echo $parsedown->text(fread($file, filesize($filename)));
?>
</div>

<!-- footer -->
<?php require 'footer.php'; ?>
</body>
</html>
</body>
