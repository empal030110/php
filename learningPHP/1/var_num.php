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
        $price = 3.95;
        $tax_rate = 0.08;
        $tax_amount = $price * $tax_rate;
        $total_cost = $price + $tax_amount;

        print '세금은 ' .$tax_amount;
    ?> <br>
    <?php
        print '총 가격은 ' .$total_cost;
    ?>
</body>
</html>