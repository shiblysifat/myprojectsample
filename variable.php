<!DOCTYPE html>
<html>
<head>
	<style>
		
		
		.header{
			font-family: arial;
			background-color:#ddd;	
			padding: 15px;
			margin-left: 200px;
			margin-right: 200px;

			

				}
			.maincontent{

				background-color: #eee;
				display: block;
				padding: 180px;
				text-align: top;
				margin-left: 200px;
				margin-right: 200px;
				

					
			}
			.footer{
				font-family: arial;
			background-color:#ddd;	
			padding: 28px;
			margin-left: 200px;
			margin-right: 200px;
			text-align: center;

			}
			.nav a  {
				padding: 65px;
				
				text-align: center;
				
			}
			.nav a ul {
				border-radius: 20px;
				margin: auto;
				padding: 20px;
			}
			.body
			{
				background-color: #eeeeee;
			}

	</style>
</head>
<body>
	
	<section class="header">
		<ul class="nav">
			<a href="About">About</a>
			<a href="php">php</a>
			<a href="basic">Basic</a>
			<a href="practic">Practic</a>
			<button class="btn btn-primary" value="button" style="padding: 9px;">Login</button>
		</ul>
	</section>

<div class="maincontent" class="" >	

<?php

	// $hello = "This is a string";
	// $a_number=4;
	// $anotherNumber=8;
	// echo $hello."<br/>";
	// $total=$a_number+$anotherNumber;
	// echo $total;

	// echo "<br/>";

	// $feedback="shible";
	// $domain="@gmail.com";
	// // $feedback=$feedback.$domain;
	// $feedback .= $domain;
	// echo $feedback;

	// echo "<br/>";

	// $test=0;
	// $test = $test+1;
	// echo $test;

	// echo "<br/>";

	// $number=8; // global variable

	// function Calculation()
	// {
	// 	// $GLOBALS["number"];
	// 	global $number;
	// 	$number=10; //local variable
	// 	$second_number=20;
	// 	$addNumber=$number+$number+$second_number;
	// 	echo $addNumber;

	// }

	// echo "The \$number is function Calculation() it's value is $number";
	// echo "<br/>";

	// Calculation();
	// echo "<br/>";

	// function test_start()
	// {

	//     static $first_variable=0;
	// 	$first_variable++;

	// 	echo $first_variable;
	// 	echo "<br/>";
	// }
	// echo "function_test() value.";
	// echo "<br/>";
	// test_start();
	// test_start();
	// test_start();

	// echo "<br/>";//Constrant
	// define('base', 'Webcoachbd is a informative tutorial site');
	// echo base;

	// echo "<br/>";

	// //php data type
	// //scaler or boolean data type

	// $x=TRUE;
	// $y=9;
	// var_dump(is_bool($y));  //output bool(false)
	// var_dump(is_bool($x));   //output bool(true)
	// echo "<br/>";

	// $x=1011100;//binary number 92
	// var_dump(is_int($x));
	// echo "<br/>";
	// var_dump($x);
	// echo "<br/>";

	// $x=5.09494;
	// var_dump($x);

	// echo "<br/>";
	// echo "<br/>";

	// $hi="How are you....";
	// echo $hi;
	// echo "<br/>";

	// $x=9;
	// $x=(string) 9;
	// var_dump($x);
	// echo "<br/>";
	// $x=10;
	// var_dump($x);


	// echo "<br/>";
	// echo "<br/>";
	// $x='45';//now $x is string
	// $x=(int)$x;//type casting to interger
	// var_dump($x);//now output int(45)
	// $y=(array)$x;//now cating to array
	// var_dump($y);

	// echo "<br/>";

	// $my_string="o merciful make me blod and brave!";
	// echo "o merciful make me blod and brave!";
	// echo $my_string;
	// echo "<br/>";
	// echo "<br/>";
	// $x=15; $y=3;
	// echo 'Negation of $x:'.(-$x).'<br/>';
	// echo 'Addition of $x and $y:'.($x+$y).'<br/>';
	// echo 'Subtraction of $y form $x:'.($x-$y).'<br/>';
	// echo 'Remainder of $x divided by $y:'.($x%$y);
	// echo "<br/>";
	// $x=15;//15 asinged to $x(assingment operator)
	// //combained operator +=
	// $x+=15;//this means $x=$x+15
	// echo $x.'<br/>';
	// //combained operator .=
	// $y='Webcoachbd';
	// $y.=' tutorials';//this means $y=$y.'tutorials'
	// echo $y;
	// echo "<br/>";
	// //assingment by value
	// $x=15;
	// $y=&$x;

	// echo $x.'<br/>';
	// echo $y;
	// echo "<br/>";
	// //assingment by reference
	// $x=15;
	// $y=&$x;

	// $x=5;
	// echo $x.'<br/>';
	// echo $y;
	// echo "<br/>";




	echo   'php operator..'."<br/>";

	// $x=15;
	// $y=3;
	// echo $x & $y;
	// echo "<br/>";
	// echo $x | $y;

	// echo "<br/>";

	// echo $x ^ $y;

	// $x=15;
	// $y=17;
	// echo ~$x & $y;
	// echo "<br/>";
	// echo $x & ~$y;
	// $x=15;
	// $y=2;
	// echo $x << $y;
	// echo "<br/>";
	// echo $x >> $y;
	// echo "<br/>";
	// if ($x == $y) {

	// 	echo '$x and $y are equal';
	// }
	// else{
	// 	echo '$x and $y are not equal';
	// }

	// echo "<br/>";
	// var_dump($x < $y);
	// echo "<br/>";
	// var_dump($x > $y);
	// echo "<br/>";
	// var_dump($x <= $y);
	// echo "<br/>";
	// var_dump($x >= $y);
	// echo "<br/>";

	// var_dump(0 == 'test');
	// var_dump('1' == '01');
	// var_dump('100' == '1e2');
	// echo "<br/>";
	// echo "<br/>";

$x = 15;
$y = 5;
 if ($x < $y and $x + $y >10) {
 	echo 'Both are true';
 	# code...
 }
 elseif ($x < $y or $x + $y > 10) {
 	echo 'at least one of them true';
 	# code...
 }
 	echo "<br/>";
 $x=2;
 echo ++$x.'<br/>';
 echo $x;
 echo "<br/>";

 //++$x pre-increment ..$x ak bare , er por $x return kore
 //$x++ post-increment..age $x return kore, than $x bare
 //--$x pre-decrement...$x ak kombe, than $x return kore
 //$x-- post-decrement...age $x return kore,than $x ak kore kombe
// echo "hello.............";
// echo "<br/>";

//  $x=2;
//  echo --$x.'<br/>';
//  echo $x;
 echo "<br/>";
 $x=2;
 $y=5;
 if ($x<$y) {
 	echo '$x is small than $y';
 	# code...
 } else {
 	echo '$x is small than $y';
 	# code...
 }

 echo "<br/>";
 //tenary operator...
 $x=7;
 $y=5;
 echo ($x > $y) ? '$y is greter than $x' : '$x is greter than $x';

 echo "<br/>";
 echo "<br/>";

 $d=date("D");
 if ($d=="Sat") {
 	echo "have a nice day";
 	# code...
 }
 
 

/* $x=array(1 => "Dhaka", 2=> "Rangpur");
 $y=array("two" => "Chittagong", 3=> "Sylhet", 4=>"Khulna");
 echo '<pre>';

 print_r($x+$y).'<br/>';
 print_r($y+$x).'<br/>';
 echo "<br>";

 $x=array(0=> "Dhaka",1=> "Faridpur");
 $y=array("Dhaka","Faridpur");
 var_dump($x == $y);
 echo "<br/>";

 $x = array(0 => 6, 1 => "Rangpur");
$y = array(0 => 6, 1 => "Rangpur");
var_dump($x === $y);
var_dump($x == $y);
*/

echo "<br/>";

 $d = date("D"); 

 if ($d == "Sun")
 {

   echo 'Have a nice Day';
}
else
{
	echo "Today is not sturday";
}

echo "<br/>";

$number=50;
if ($number == 60) {
	echo "The number is 60";
	# code...
}
elseif ($number == 45) {
	echo "The number is 45";
	# code...
}
elseif ($number == 33) {
	echo "The number is 33";
	# code...
}
else
{
	echo "No number";
}
echo "<br/>";

$number=55;
 switch ($number) {
 	case 60:
 	echo "The number is 60";
 		# code...
 		break;
 	case 40:
 	echo "The number is 40";
 			# code...
 			break;	
 			case 33:
 			echo "the number is 33";

 				# code...
 				break;
 	
 	default:
 	echo "All Are Invalid Option...... ";
 		# code...
 		break;
 }

 echo "<br/>";

 $number=45;
 switch ($number) {
 	case 60:
 	case 45:
 	echo 'The number is grater than 40';
 		# code...
 		break;
 		# code...
 	case 33:
 	echo 'the number is 33';
 		# code...
 		break;
 	
 	default:
 	echo 'No number entry';
 		# code...
 		break;
 }

 echo "<br/>";

 //for loop while loop foreach loop do while loop
 $i=1;
 while ($i<6)
  {
  	echo 'A counter start from    ' . $i . '<br/>';

  	$i++;
 	# code...
 }

 echo "<br/>";
 //do while..........
 $i=6;
 do 
 {
 	echo 'A counetr start form shible  '.$i.'<br/>';
 	$i++;
 	# code...
 }
  while ($i<6);
  echo "<br/>";

  //for loop////////////
  for ($i=1; $i<=5 ; $i+1) 
  {

  	echo "The number is continued  ".$i."<br/>";
  	break;
  	# code...
  }









	






?>


















</div>


	<section class="footer">
		
		Copy & All Rights Reserved by Shible.
	
	</section>

</body>
</html>

