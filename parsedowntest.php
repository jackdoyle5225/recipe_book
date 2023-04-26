<?php include 'Parsedown.php'; ?>


<!DOCTYPE html>
<html>
<?php
    $parsedown = new Parsedown();

    $file = fopen('recipes/burger_sauce.md', 'r');
    $line = file('template.md');
?>

<head>
<link rel="stylesheet" href="style.css">
</head>

<body>
<?php include 'recipe_sidebar.php'; ?>
<div class="main">
    <?php echo $parsedown->text(fread($file, filesize('template.md'))); ?>
</div>

<?php require 'footer.php'; ?>
</body>
</html>
