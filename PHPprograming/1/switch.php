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
        $point = 'C';

        switch ($point){
         case 'A':
            echo '합격 라인';
            break;

        case 'B':
            echo '추가 시험 라인';
            break;

        default:
            echo '낙제 라인';
            break;
        }
    ?>
</body>
</html>