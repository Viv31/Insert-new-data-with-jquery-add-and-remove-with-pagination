<?php
require_once('config/conn.php'); 
if(isset($_POST['submit'])){
//echo "clicked"; die;


for($i=0; $i < count($_POST["title"]); $i++)
{

	$title = mysqli_real_escape_string($conn,$_POST['title'][$i]);
	$description = mysqli_real_escape_string($conn,$_POST['description'][$i]);
	$quantity = mysqli_real_escape_string($conn,$_POST['quantity'][$i]);
	$price = mysqli_real_escape_string($conn,$_POST['price'][$i]);
	$date_insert =  date('Y-m-d',strtotime($_POST['date_insert'][$i]));
	$product_img = $_FILES['product_img']['name'][$i]; 
	$temp_product = $_FILES['product_img']['tmp_name'][$i]; 
	$todays_date = date('Ymd').time();
	//echo $todays_date;
	
	$product_folder = "uploads/".$todays_date.$product_img;


if(trim($_POST["title"][$i] != ''))
{

$insert = "INSERT INTO products( `title`,  `description`, `quantity`,`price`, `date_insert`,`product_img`) VALUES (
'".$title."',
'".$description."',
'".$quantity."',
'".$price."',
'".$date_insert."',
'".$product_folder."'
)";

//$sql = "INSERT INTO info(name) VALUES('".mysqli_real_escape_string($conn, $_POST["name"][$i])."')";
mysqli_query($conn, $insert);

move_uploaded_file($temp_product, $product_folder);
//echo "Data Inserted Successfully";
header("location:index.php");
}
else
{
echo "Enter Your Name";
}
}
}
?>