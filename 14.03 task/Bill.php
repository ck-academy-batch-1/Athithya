<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EB Bill</title>
</head>


<?php
$total = $result = '';
if (isset($_POST['sub'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $result = calculate($units);
        $total = 'Total amount of ' . $units . ' = ' . $result;
    }
}

function calculate($units) {
    $unit_cost1 = 3.50;
    $unit_cost2 = 4.00;
    $unit_cost3 = 5.20;
    $unit_cost4 = 6.50;

    if($units <= 50) {
        $bill = $units * $unit_cost1;
    }
    else if($units > 50 && $units <= 100) {
        $temp = 50 * $unit_cost1;
        $rem_units = $units - 50;
        $bill = $temp + ($rem_units * $unit_cost2);
    }
    else if($units > 100 && $units <= 200) {
        $temp = (50 * 3.5) + (100 * $unit_cost2);
        $rem_units = $units - 150;
        $bill = $temp + ($rem_units * $unit_cost3);
    }
    else {
        $temp = (50 * 3.5) + (100 * $unit_cost2) + (100 * $unit_cost3);
        $rem_units = $units - 250;
        $bill = $temp + ($rem_units * $unit_cost4);
    }
    return number_format((float)$bill, 2, '.', '');
}

?>

<body>
	
		<h1>Calculate Electricity Bill</h1>

		<form action="" method="post">
            	<input type="text" name="units" id="units" placeholder="Enter no. of Units" />
            	<input type="submit" name="sub" id="sub" value="Submit" />
		</form>

		<div>
		    <?php echo '<br />' . $total; ?>
		</div>
	
</body>
</html>
