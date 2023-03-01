<!DOCTYPE html>
<html>
<body>
    <h2>Date & Time Format:</h>
    <style>
        h3{
            font-weight:bold;
            font-style:italic;
        }
        h2{
            text-align:center;
            font-weight:bold;
            font-style:italic;
        }
    </style>
    <h3>Day:</h3>
<?php
echo "Today is " . date("l") . "<br>";
echo"<br>";
?>
<hr>
<h3>Date:</h3>
<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo"<br>";
?>
<?php
echo "Today is " . date("Y.m.d") . "<br>";
echo"<br>";
?>
<?php
echo "Today is " . date("Y-m-d") . "<br>";
echo"<br>";
?>
<br/>
<hr>
<h3>Date Time_Zone:</h3>
<?php
date_default_timezone_set("Asia/Kolkata");
echo "The time is " . date("H:i:sa");
echo"<br><br>";
echo "The time is " . date("h:i:sa");
?>
<br/>
<hr>
<h3>MakeTime:</h3>
<?php
$t=mktime(12, 30, 24, 5, 1, 2022);
echo "Created date is " . date("Y-m-d h:i:sa", $t);
echo"<br><br>";
$t=mktime(12, 30, 24, 3, 1, 2023);
echo "Created date is " . date("Y-m-d H:i:sa", $t);
?>
<br/>
<hr>
<h3>Str To Time:</h3>
<?php
$d=strtotime("10:30pm August 9  2001");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
echo"<br><br>";
$d=strtotime("10:30pm February 6 2001");
echo "Created date is " . date("Y-m-d H:i:sa", $d);

?>
<hr>
</body>
</html>

