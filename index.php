<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Javascript to PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<?php
//turn on error display for php code 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$image = array (
    "https://www.pixelstalk.net/wp-content/uploads/2016/08/HD-PC-Wallpaper-2016.jpg", 
    "https://wallpaperaccess.com/full/190815.jpg", 
    "https://images7.alphacoders.com/528/528418.jpg",
    "https://wallpaperaccess.com/full/300068.jpg", 
    "https://www.hdwallpaper.nu/wp-content/uploads/2016/02/golden-gate_wallpaper_030.jpg");

$strings = array (
    "Kirito",
    "Erza",
    "Akatsuki",
    "Shiro",
    "Leo",
    "Rundel-Haus-Code",
    "Ken Kaneki",
    "Glenn Radars",
    "Momonga-Sama",
);
$strings1 = array ();

?>
</head>
<body class="bg-light">
<header id="header" 
<?php
// change the header bg
    echo "style=\"background: url('".$image[rand(0, 4)]."')\"";
?>>

    <div class="overlay"></div>
    <div class="overlay-content">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Welcome to the Javascript - PHP exercise</h1>
                    <p>Read the code of this page, understand it, then convert it to the same functionality in PHP!</p>

                </div>
            </div>
        </div>
    </div>
</header>
<section id="exercises">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="loop-while" class="my-4 p-4 bg-white shadow-sm border">

<?php


function printArray ($strings,$strings1) {
   
    $strings2 = array_diff($strings, $strings1);
    
    while (!empty($strings2)) {
        $randIndex = array_rand($strings);
        array_push($strings1, $strings[$randIndex]);
        $strings2 = array_diff($strings, $strings1);
    }

    echo '<ul>';
    echo '<li>' . implode( '</li><li>', $strings1) . '</li>';
    echo '</ul>';
}

printArray($strings,$strings1);

?>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div id="username-generator" class="my-4 p-4 bg-white shadow-sm border">
<?php

$name = "Rafael Lambelin Selene Nijst";



function createUsername($name) {
    if (strpos($name," " ) === FALSE) {
        $strarr =  str_split ($name);
    } else {
        $strarr = explode (" ", $name);
    }
    $strarr1 = array();
    $strarr_len = count($strarr);
    //print_r($strarr_len);
    for ($i=0; $i<$strarr_len; $i++) {
        $subarr = str_split($strarr[$i]);
        for ($ii=0; $ii<count($subarr)/2; $ii++) {
            $randomLetter = array_rand($subarr);
            $subarr[$randomLetter] = "<span style='color: rgb(".mt_rand(0,255).",".mt_rand(0,255).",".mt_rand(0,255)."); text-transform:uppercase;'>".$subarr[$randomLetter]."</span>";                   
            
        }
        //echo (implode($subarr));
        array_push($strarr1,implode($subarr));    
    }
    echo (implode("-",$strarr1));
}
createUsername($name);
?>

                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>