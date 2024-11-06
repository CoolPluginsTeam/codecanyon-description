<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Start Generation Here -->
<?php
$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('.'));
$indexFiles = [];

foreach ($files as $file) {
    if ($file->isFile() && $file->getFilename() === 'index.html' && $file->getPathname() !== __FILE__) {
        $folderName = basename(dirname($file->getPathname()));
        echo '<a href="' . htmlspecialchars($file->getPathname()) . '" target="_blank">' . htmlspecialchars(strtoupper(str_replace('-', ' ', $folderName))) . '</a><br>';
    }
}
?>
</body>
</html>