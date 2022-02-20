<?php include 'Parsedown.php'; ?>

<?php

    $Parsedown = new Parsedown();
    $file = fopen('template.md', 'r');

    echo $Parsedown->text(fread($file, filesize('template.md')));
?>