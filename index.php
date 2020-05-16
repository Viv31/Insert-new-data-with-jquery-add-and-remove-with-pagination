<?php include_once('inc/header.php'); 
		require_once('config/conn.php'); 
?>
<style type="text/css">
	body{
		background-image: url('img/emp2.jpg');
		background-repeat: repeat;
	}
	#form_div{
		background-color: rgba(0,0,0,0.7);
		padding: 15px;
		border-radius: 20px;
	}
</style>
<div class="container">
	<div class="col-md-4 mx-auto mt-5" id="form_div">
	<form name="add_me" id="add_me" action="insert.php" method="POST" enctype="multipart/form-data">
<table id="dynamic">
<input type="text" name="title[]" id="title" placeholder="Enter Your Name" class="form-control" /><br>
<input type="text" name="description[]" id="description" placeholder="Enter Your Description" class="form-control" /><br>
<input type="number" name="quantity[]" id="quantity" placeholder="Enter Quantity" class="form-control"><br>
<input type="number" name="price[]" id="price" placeholder="Enter Price" class="form-control"><br>
<input type="date" name="date_insert[]" id="date_insert" placeholder="Enter Date" class="form-control"><br>
<input type="file" name="product_img[]" id="product_img" value=""><br><br>
<button type="button" name="add" id="add_input" class="btn btn-primary">Add</button><br><br>
</table>
<br>
<input type="submit" name="submit" id="submit" class="btn btn-primary" value="Save" />
</form>
</div>

<div id="pagination_data" style="margin-top: 50px;"></div>


</div>





<script>
$(document).ready(function() {
var i = 1;
$('#add_input').click(function() {
i++;
$('#dynamic').append('<tr id="row' + i + '"><td><input type="text" name="title[]" id="title" placeholder="Enter Your Name" class="form-control" /><br><input type="text" name="description[]" id="description" placeholder="Enter Your Description" class="form-control" /><br><input type="number" name="quantity[]" id="quantity" placeholder="Enter Quantity" class="form-control"><br><input type="number" name="price[]" id="price" placeholder="Enter Price" class="form-control"><br><input type="date" name="date_insert" id="date_insert" placeholder="Enter Date" class="form-control"><br><input type="file" name="product_img" id="product_img" value=""></td><td><button type="button" name="remove" id="' + i + '" class="btn_remove"><i class="fa fa-minus"></i></button></td></tr>');
});
$(document).on('click', '.btn_remove', function() {
var button_id = $(this).attr("id");
$('#row' + button_id + '').remove();
});
$('#submit').click(function() {
	
var title = $("#title").val();
var description = $("#description").val();

if(title==""){
$("#title").css("border-color","red");
return false;

}

if(description == ""){
	$("#description").css("border-color","red");
	return false;


}


/*$.ajax({
url: "insert.php",
method: "POST",
data: $('#add_me').serialize(),
success: function(data) {
alert(data);
$('#add_me')[0].reset();
}
});*/
});
});
</script>

<script type="text/javascript">
	
$(document).ready(function(){
	load_data();

function load_data(page){
	$.ajax({
		url:"pagination.php",
		method:"POST",
		data:{page:page},
		success:function(data){
			$('#pagination_data').html(data);
		}

	});

}

$(document).on('click','.pagination_link',function(){

var page = $(this).attr("id");
load_data(page);

});


});

</script>
</body>
</html>