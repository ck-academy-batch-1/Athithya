<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>
<body>
<title>Auto-Suggest Dropdown Example</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#district").change(function(){
				var district = $(this).val();
					$.ajax({
					type: "POST",
					url: "get village.php",
					data: { district: district },
					dataType: "json",
					success: function(data){
						$("#villages").empty();
						$.each(data, function(index, village){
							$("#villages").append('<option value="' + village + '">' + village + '</option>');
						});
					}
				});
			});
			$("#villages").change(function(){
				var village = $(this).val();
				alert("You selected " + village);
			});
		});
	</script>
	<h1>Trichy & Ariyalur District:</h1>
	<label for="district">Select District:</label>
	<select id="district">
		<option value="Trichy">Trichy</option>
		<option value="Ariyalur">Ariyalur</option>
	</select>
	<br>
	<label for="villages">Select Village:</label>
	<select id="villages">
		<option>Select a district first</option>
	</select>
</body>
</html>
