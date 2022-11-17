<html>

<body>
	<center>
        <table>
			<form method="POST">
				<tr>
				
					<td>Enter a number:</td>
					<td><input type="text" name="number"></td>

				</tr>
			
				<tr>
					<td></td>
					<td><input type="Submit" value="Get Multiplication Table"></td>
				</tr>	
			</form>
		</table>
	</center>

    <?php
if($_POST) {
	$num = $_POST["number"];

	echo nl2br("<p style='text-align: center;'>
		Multiplication Table of $num: </p>
	");
		
	for ($i = 1; $i <= 10; $i++) {
		echo ("<p style='text-align: center;'>$num"
			. " X " . "$i" . " = "
			. $num * $i . "</p>
		");
	}
}
?>

</body>

</html>

