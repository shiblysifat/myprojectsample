<?php
include 'calfun.php';

?>

<form action="" method="post">
	<table>
		<tr>
			<td>
				Enter first number :
			</td>
		
		
			<td>
				<input type="number" name="num1">
			</td>
			<tr>
			<td>
				Enter second number :
			</td>
			<td>
				<input type="number" name="num2">
			</td>
		</tr>
			<td>
				<input type="submit" name="Calculation" value="calculate">
			</td>
		</tr>
	</table>
</form>


<?php

if(isset($_POST['Calculation'])){
	$numOne=$_POST['num1'];
	$numTwo=$_POST['num2'];

	if(empty($numOne) or empty($numTwo)){
		echo "<span style=color:red;>Field must be empty.</span>";
	}else{

	echo "First number is : ".$numOne . "Second number is : ".$numTwo ."<br/>";

	$cal=new Calculate;
	$cal->add($numOne,$numTwo);
	$cal->sub($numOne,$numTwo);
	$cal->mul($numOne,$numTwo);
	$cal->div($numOne,$numTwo);
}

}





?>