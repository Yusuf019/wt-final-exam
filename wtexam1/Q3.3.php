<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Hi, I am Yosuff Hussain, A016, from batch B1 & currently pursuing MCA from MPSTME.\n";
fwrite($myfile, $txt);
$txt = "Hi, I am Yosuff Hussain, A016, from batch B1 & currently pursuing MCA from MPSTME.\n";
fclose($myfile);
?>

</body>
</html>