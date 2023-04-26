<?php include 'Parsedown.php'; ?>


<!DOCTYPE html>
<html>
<?php
    $parsedown = new Parsedown();

    $file = fopen('recipes/burger_sauce.md', 'r');
    $line = file('template.md');
?>

<head>
<title>burger_sauce</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="main">
    <?php echo $parsedown->text(fread($file, filesize('template.md'))); ?>
</div>

<?php require '../footer.php'; ?>
</body>
</html>
