<?php
    $items = ['Nature Cropped Tee', 'V2 Varsity Jacket', 'Hamilton Warmer'];


    switch ($items) {
     case 'Nature Cropped Tee';
          $price = "700";
          break;
     case 'V2 Varsity Jacket':
          $price = "1200";
          break;
     case 'Hamilton Warmer':
          $price = "900";
          break;
     default:
          $message = "Not available.";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <title>Enzo's Clothing Store</title>
        <link rel="stylesheet" href="styles.css">
    </head>
<body>
    <h1>Enzo's Clothing Store</h1>
    <h2>Provides timeless pieces.</h2>
    <p><?php
        $ordered = 1;
        $max = 5;
        $price = '700';
        while ($ordered <= $max) {
        echo $ordered;
        echo ' Nature Cropped Tee costs PHP ';
        echo $price * $ordered;
        echo '<br>';
        $ordered++;
    }
        echo '<br>';

        $ordered = 1;
        $max = 5;
        $price = '1200';
        while ($ordered <= $max) {
        echo $ordered;
        echo ' V2 Varsity Jacket costs PHP ';
        echo $price * $ordered;
        echo '<br>';
        $ordered++;
    }
        echo '<br>';

        $ordered = 1;
        $max = 5;
        $price = '900';
        while ($ordered <= $max) {
        echo $ordered;
        echo ' Hamilton Warmer costs PHP ';
        echo $price * $ordered;
        echo '<br>';
        $ordered++;
    }

    ?></p>
    <?php include 'includes/footer.php'; ?>
</body>    
</html>