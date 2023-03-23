<?php

/**
 * @var $errno \wfm\ErrorHandler
 * @var $errstr \wfm\ErrorHandler
 * @var $errfile \wfm\ErrorHandler
 * @var $errline \wfm\ErrorHandler
 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Error</title>
</head>
<body>

<h1>An error has occurred</h1>
<p><b>Error code:</b> <?= $errno ?></p>
<p><b>Error message:</b> <?= $errstr ?></p>
<p><b>File, in which error occurred:</b> <?= $errfile ?></p>
<p><b>Line, in which error occurred:</b> <?= $errline ?></p>

</body>
</html>
