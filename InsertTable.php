<?php
include('config.php');
$name=$_POST['name'];
$salary=$_POST['salary'];
$address=$_POST['address'];
echo $name." ".$salary." ".$address;
//$result=mysqli_query($conn,"select count(*) as cnt from emp");
$res=mysqli_query($conn,"insert into emp(name,salary,address) values('$name','$salary','$address')");
if(mysqli_query($conn,$res))
{
	echo "Record inserted successfully!";
}
//while($row=mysqli_fetch_array($result))
//{
	//$sql="insert into emp(name,salary,address) values('$name','$salary','$address')";
//}
mysqli_close($conn);
?>
