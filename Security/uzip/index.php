<?php
$zip = new ZipArchive;
if ($zip->open('Test.zip') === TRUE) {
    $zip->extractTo('./');
    $zip->close();
    echo 'ok';
} else {
    echo 'failed';
}
?>


