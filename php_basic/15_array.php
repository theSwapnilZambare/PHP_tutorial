<pre>
<?php 

$a1 = [10,20,30,40,50,60,70];

//$fa = array_slice($a1,2); //from 2 nd position, we can get whole array

$fa= array_slice($a1,2,4); // from 2 position we can get 2 values only

print_r($fa);

//$fa = array_splice($a1,3,1);
//$fa = array_splice($a1,3,0,100);

//print_r($a1);
/*
array_push($a1,100);
array_push($a1,200);
array_unshift($a1, 400);
*/
/*array_pop($a1);
array_shift($a1);
print_r($a1);
*/

//$subjects = ["HTML","CSS","BootStrap","JavaScript","PHP",'MySQL',"Agular","JSON"];





/*$user = [
	"name" => "Ram",
	"city" => "Hyderabad",
	"state" => "TS",
	"pincode" => 500032,
	"dno" => 789,
	"landmark" =>"ameerpet",
	"status" => true
];
*/
//echo array_key_exists("pincode",$user);

//echo array_search("Hello", $subjects); //4

//echo in_array("HTML",$subjects); // true // 1

/*$a2 = [100,200,300,400];

$a3 = [1000,2000,3000,4000];

//$fa = array_combine($a1,$a2, $a3);

$fa = array_merge($a1,$a2, $a3);

print_r($fa);
*/

//$arr = ["ram","Ravi","Ruby","Welcome","well","good","bad"];

//natcasesort($arr);
//print_r($arr);

//$arr = [10=>30, 4=>25,2=>45,1=>34,9=>98];
//krsort($arr);
//print_r($arr);


/*
$subjects = ["HTML","CSS","BootStrap","JavaScript","PHP",'MySQL',"Agular","JSON"];
//sort($subjects); // ASC
//rsort($subjects); // DESC
for($i = 0; $i < count($subjects); $i++)
{
	echo "<p>".$subjects[$i]."</p>";
}
*/


//Iteration or Loop
/*
$user = [
	"name" => "Ram",
	"city" => "Hyderabad",
	"state" => "TS",
	100,200,300,400
];
*/

/*$user = [
	"name" => "Ram",
	"city" => "Hyderabad",
	"state" => "TS",
	"pincode" => 500032,
	"dno" => 789,
	"landmark" =>"ameerpet",
	"status" => true
];

foreach($user as $key => $value)
{
	echo $key."=".$value."<br>";
}
*/




/*
echo $user['name'];
echo $user['city'];
echo $user['state'];
*/
/*
$subjects = ["HTML","CSS","BootStrap","JavaScript","PHP",'MySQL'];
$total = count($subjects);
for($i = 0; $i < $total; $i++)
{
	echo $subjects[$i]."<br>";
}
*/

/*
echo $subjects[0];
echo $subjects[1];
echo $subjects[2];
echo $subjects[3];
echo $subjects[4];
echo $subjects[5];
*/

/*
$arr = [20, "age"=>30,40, "plot"=>50];
echo $arr["age"]; // 30
echo $arr[1]; // 40
*/

//$arr = [20, "age"=>30,40, "plot"=>50];
//$arr = [1=>20, 1=>40, 1=>50];
/*$arr = [10.1=>25, 40,8=>50,70,80,90];
print_r($arr);
*/
//$arr = [10,20,30,40];

/*$subjects = ["HTML","CSS","BootStrap","JavaScript","PHP",'MySQL'];
$mix = [10,3.32,true,"Welcome", false];

$user = [
	"name" => "Ram",
	"city" => "Hyderabad",
	"state" => "TS",
	"pincode" => 500032,
	"address" => [
		"dno" => 789,
		"landmark" =>"ameerpet"
	],
	"status" => true,
];

print_r($subjects);
echo $subjects[3];

echo "<br>";

print_r($user);
echo $user["city"];

echo $user['address']['landmark'];
*/


/*echo $subjects[3];
echo $subjects[2];
echo "<br>";
print_r($subjects);
*/
?>