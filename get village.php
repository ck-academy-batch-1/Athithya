<?php
$villages = array(
	"Trichy" => array(
		"Thuraiyur",
		"Manapparai",
		"Marungapuri",
		"Srirangam",
		"Thriruchirappalli West Taluk",
		"Thriruchirappalli East Taluk",
		"Thiruverumbur",
		"Lalgudi",
		"Manachanallur",
		"Thottiyam",
	),
	"Ariyalur" => array(
		"Udayarpalayam",
		"Ariyalur",
		"Sendurai",
		
	)
);
$district = $_POST["district"];
if (!array_key_exists($district, $villages)) {
	echo json_encode(array());
	exit;
}
echo json_encode($villages[$district]);
?>
