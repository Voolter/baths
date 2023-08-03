<?php
    if ($_SERVER["REQUEST_METHOD"] === "GET") {
        $phoneNumber = $_GET["number"];
        if (!empty($phoneNumber)) {
            $filename = "numbers.txt";
            $file = fopen($filename, "a");
            fwrite($file, $phoneNumber . PHP_EOL);
            fclose($file);
        }
    }
    header("Location: ../secondpage.html");
    exit();
?>