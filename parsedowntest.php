<?php include 'Parsedown.php'; ?>

<?php
    $parsedown = new Parsedown();

    $file = fopen('template.md', 'r');
    $line = file('template.md');
    echo $parsedown->text(fread($file, filesize('template.md')));
?>