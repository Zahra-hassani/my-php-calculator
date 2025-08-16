<?php
$secureWord = "My php homework";
$text = "PHP progrmming is started";
$array =explode(" ",$text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    div{
        background-color: lightblue;
        height: 120vh;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 12px;
        padding: 10px auto;
    }
    h1{
        width: 100%;
        height: 90px;
        font-size: 35px;
        text-align: center;
        background-color: darkcyan;
        line-height: 90px;
        text-shadow:0 0 2px white, 0 0 2px white,0 0 2px white, 0 0 2px white;
    }
    h2{
        text-align: center;
    }
    </style>
</head>
<body>
    <div>
    <h1>Guess for the main word:</h1>
    <h2>I am a string by <?php echo strlen($secureWord)?> characters in length and <?php echo str_word_count($secureWord)?> words. Remember that one of words is php and located in <?php echo strpos($secureWord, "php") ?> .</h2>
    <h2>So, What am I🤔?</h2>
    </div>
    <h1 style="color:white;"><?php echo $secureWord ?></h1>
    <div>
        <h1><?php echo strtoupper($text)?></h1>
        <h2>without space: <?php echo trim($text) ?></h2>
        <h2>change to upper case:<?php echo strtoupper($text) ?></h2>
        <h2>change to lower case: <?php echo strtolower($text) ?></h2>
        <h2>replace the text: <?php echo str_ireplace("PHP","Java Script",$text) ?></h2>
        <h2>making an array: <?php print_r($array) ?></h2>
        <h2>reverse the text: <?php echo strrev($text) ?></h2>
        <h2>string length: <?php echo strlen($text) ?></h2>
        <h2>included words: <?php echo str_word_count($text) ?></h2>
    </div>
</body>
</html>