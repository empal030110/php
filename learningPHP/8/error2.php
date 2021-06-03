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
        $prices = array(5.95, 3.00, 12.50);
        $total_price = 0;
        $tax_rate = 1.08;

        foreach($prices as $price){
            $total_price = $price * $tax_rate;
        }

        printf('총 가격(부가세 포함): $%.2f', $total_price);
    ?>
</body>
</html>