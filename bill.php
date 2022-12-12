<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<?php

$final = '';
$result = '';

if (isset($_POST['unit-submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $result = calculate_bill($units);
        $final = '<strong>Total amount of ' . $units . ' units - </strong>' . $result;
    }
}

//   To calculate electricity bill as per unit cost
function calculate_bill($units) {
    $unit_cost_first = 3.50;                       // for first 50 units
    $unit_cost_second = 4.00;                      // for next 100 units (50 - 150) 
    $unit_cost_third = 5.20;                       // for next 100 units (150 - 250)
    $unit_cost_fourth = 6.50;                      // for above 250 units

    if($units <= 50) {
        $bill = $units * $unit_cost_first;
    }
    else if($units > 50 && $units <= 150) {
        $temp = 50 * $unit_cost_first;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $unit_cost_second);
    }
    else if($units > 150 && $units <= 250) {
        $temp = (50 * 3.5) + (100 * $unit_cost_second);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $unit_cost_third);
    }
    else {
        $temp = (50 * 3.5) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $unit_cost_fourth);
    }
    return number_format((float)$bill, 2, '.', '');
}

?>

<body style="text-align: center;">

    <div id="container">
        <h1>Electricity Bill !!</h1><br><br>

        <form action="" method="post" id="quiz-form">
            <input type="number" name="units" id="units" placeholder="Enter Units" />
            <br><br>
            <input type="submit" name="unit-submit" id="unit-submit" class="btn btn-dark" value="Submit" />
        </form>

        <div>
            <?php echo '<br />' . $final; ?>
        </div>
    </div>
</body>

</html>