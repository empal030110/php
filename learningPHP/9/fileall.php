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
        $fh = fopen('people.txt', 'rb');
        while((! feof($fh)) && ($line = fgets($fh))){
            $line = trim($line);
            $info = explode('|', $line);
            print '<li><a href="mailto:' .$info[0]. '">' .$info[1] ."</li>\n";
        }
        fclose($fh);
    ?>
</body>
</html>