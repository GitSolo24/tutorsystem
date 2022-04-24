<!DOCTYPE html>
<html>
<head>
<title>Simple star rating system using PHP, jQuery and Ajax</title>
<style type="text/css">
	.star_rated { color: gold; }
	.star {text-shadow: 0 0 1px #F48F0A; cursor: pointer;  }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
function ratestar($id, $rate){
	$.ajax({
		type: 'GET',
		url: 'rating.php',
		data: 'functionName=update&productid='+$id+'&rating='+$rate,
		success: function(data) { 
			location.reload();
		}
	});
}
</script>
</head>
<body>
<?php
	include 'rating.php';
	$db = new Rating();
	$data = $db->select();
?>
<table>
<thead>
<th>Product</th>
<th>Rating</th>
</thead>
<?php
foreach($data as $pro) {
?>
<tr>
	<td><?php echo $pro[1]; ?></td>
	<td>
    <div class="star">
	<?php
	for($i = 1; $i <= 5; $i++) {
	if($i <= $pro[2]) {
	?>
	<span class="star_rated" onclick="ratestar(<?php echo $pro[0]; ?>, <?php echo $i; ?>)">&#x2605;</span>
	<?php }  else {  ?>
	<span onclick="ratestar(<?php echo $pro[0]; ?>, <?php echo $i; ?>)">&#x2605;</span>
	<?php  }
	}
	?>
	</div>
	</td>
</tr>
<?php
}
?>
</table>        
</body>
</html>