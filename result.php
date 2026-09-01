<!DOCTYPE html>
<style>
    body {
        font-family: Arial, sans-serif;
        justify-content: center;
        text-align: center;
        margin: 0 auto;
        padding: 100px;
    }
</style>

<body>
    <?php

    $num = $_GET['entnum'];


    if ($num == 0) {
        echo "The entered number is ZERO! ";
    } else if ($num > 0) {
        echo "The entered number is POSITIVE!";
    } else {
        echo "The entered number is NEGATIVE!";
    }

    if ($num % 2 == 0) {
        echo "<br> <br> The entered number is EVEN!";
    } else {
        echo "<br> <br> The entered number is ODD!";
    }
    ?>
</body>



</html>