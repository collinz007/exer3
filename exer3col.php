<!DOCTYPE html>
<html>
<body>
<?php
//Task1
$m=date('F');
if ($m == "August") {
  echo "It's August, so it's still holiday.";
}
else {
    echo "Not August, this is $m so I don't have any holidays";
}
echo "<br>";

//Task2
$color = "red";
//$color = "yellow";
if ($color == "red") {
  echo "The color is red. ";
}
else {
    echo "The color not red. ";
} 
echo "<br>";

//Task3
$grade = 80;
if ($grade>80){echo "Excelent";}
else if($grade>80){echo "Excelent";}
else if($grade>70){echo "Great";}
else if($grade>60){echo "Good";}
else if($grade>50){echo "Pass";}
else{
    echo "Fail";
    
}
echo "<br>";

//Task5
for ($x = 8; $x > 0 ; $x--){ 
	for ($y = 1; $y <= $x; $y++) // inner loop  
    {  
        echo "$y"; // print the Star  
    }  
    echo "\n";   
}
echo "<br>";

//Task6
$count=0;
do{
    $a=$count;
    $b=$count+1;
    $c=$count+2;
    for ($x = 1; $x <=$a; $x++){echo "*";}
    echo "\n";
    for ($x = 1; $x <=$b; $x++){echo "*";}
    echo "\n";
    for ($x = 1; $x <=$c; $x++){echo "*";}
    echo "\n";
    $count++;
}while($count<3);
?> 


<form action="Exer3col.php" method="POST">
Name: <input type="text" name="name"><br>
Age: <input type="number" name="age"><br>
<input type="submit">
</form>
<?php 
echo "name: ",$_POST["name"];
echo "\n";
echo "age: ",$_POST["age"];
if($_POST["age"]<18){
	echo "You are not eligible to vote yet.";
}
else{
	echo "You are eligible to vote.";
}


?>

</body>
</html>