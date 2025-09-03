<?php
// index.php
//fai
$title = "Digital Fortress";
$message = "Access Granted. Welcome to the system. (Anon)";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <style>
        body {
            background-color: #000;
            color: #0f0;
            font-family: "Courier New", monospace;
            text-align: center;
            margin-top: 20%;
        }
        h1 {
            font-size: 2.5em;
            animation: blink 1s step-start infinite;
        }
        @keyframes blink {
            50% { opacity: 0; }
        }
    </style>
</head>
<body>
    <h1><?php echo $message; ?></h1>
</body>
</html>
