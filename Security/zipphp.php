<?php
$zip = new ZipArchive;
if ($zip->open('Test.zip') === TRUE) {
    $zip->extractTo('./test');
    $zip->close();
    echo 'ok';
} else {
    echo 'failed';
}
?>


