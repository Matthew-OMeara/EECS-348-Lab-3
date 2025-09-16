<!DOCTYPE html>
<html>

<head>
  <h1>PHP Multiplication Table</h1>
</head>
<body>
  <form action="practice4script.php" method="post">
    <label for="num">Enter Number: </label>
    <input type="text" id="num" name="num"><br><br>
    <input type="submit" value="Submit">
    <br><br>
  </form>
</body>

</html>

<?php
function createTable($num)
{
	if (!(is_numeric($num)) or ($num <= 0)) {
		return;
	}
	echo "<table border=\"1\" style='border-collapse: collapse; width:100%'>";
	echo "<tr> \n";
	echo "<th></th> \n";
	for ($col = 1; $col <= $num; $col++) {
		echo "<th>$col</th> \n";
	}
	for ($row = 1; $row <= $num; $row++) {
		echo "<tr> \n";
		echo "<th>$row</th> \n";
		
		for ($col = 1; $col <= $num; $col++) {
			$product = $row * $col;
			echo "<td>" . $product . "</td> \n";
		}
		
		echo "</tr>";
	}
	echo "</table>";
}

$passedNum = isset($_POST['num']) ? $_POST['num'] : 0;
createTable($passedNum);
?>
