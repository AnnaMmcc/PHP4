<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Domaci</title>
	</head>
	<body>
		<form
			method="GET"
			action="calculatordomaci.php"
			style="
				display: flex;
				flex-direction: column;
				justify-content: flex-start;
				width: 20%;
			"
		>
			<input type="text" name="cenaProizvoda" />
			<select name="vrstaProizvoda">
				<option>Hrana</option>
				<option>Racunarska oprema</option>
			</select>
			<div style="display: flex">
				<input type="checkbox" name="porez" id="porez" />
				<label for="porez">Izracunaj porez</label>
			</div>
			<button style="width: 40%">Izracunaj cenu</button>
		</form>
	</body>
</html>
