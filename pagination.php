<?php
require_once("config/conn.php");
include_once('inc/header.php');
$records_per_page = 10;
$page ='';
$output = '';

if(isset($_POST["page"])){

	$page = $_POST["page"];
}else{
	$page = 1;
}

$start_from = ($page-1)* $records_per_page;

$query = "SELECT `id`, `title`, `description`, `quantity`, `price`, `date_insert`, `product_img` FROM `products`  ORDER BY id DESC LIMIT $start_from,$records_per_page";
$result = mysqli_query($conn,$query);
$no = 1;
$output .="
<table class='table table-dark'>
 <thead>
<tr>
<th>Sno</th>
<th>Title</th>
<th>Description</th>
<th>Quantity</th>
<th>Price</th>
<th>Date</th>
<th>Product image</th>
</tr>
 </thead>
";

while($row = mysqli_fetch_array($result)){
	$output.='
<tbody>
<tr>
<td>'.$no++.'</td>
<td>'.$row['title'].'</td>
<td>'.$row['description'].'</td>
<td>'.$row['quantity'].'</td>
<td>'.$row['price'].'</td>
<td>'.$row['date_insert'].'</td>
<td><img src='.$row['product_img'].' height="50" width="50"></td>

</tr>
<tbody>';

} 
$output.='</table><br/>';
$page_query = "SELECT * FROM products ORDER BY id DESC";
$page_result = mysqli_query($conn,$page_query);
$total_records = mysqli_num_rows($page_result);
$total_pages = ceil($total_records/$records_per_page);

for($i=1;$i<=$total_pages;$i++){
	$output.="<span class='btn btn-primary pagination_link' style ='cursor:pointer;margin:5px;' id ='".$i."'>".$i."</span>";
	
}
echo $output;
?>