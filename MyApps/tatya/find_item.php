<?php 

$groupId=intval($_GET['group']);
include('connect.php');

$query="select per_id , per_name from personal_book where led_id='$groupId'";
				
$rs=mysql_query($query);
?>
<select name="per_id">
<option>Select Item</option>
<?php while($row=mysql_fetch_array($rs)) { ?>
<option value="<?php echo $row['per_id']?>"><?php echo $row['per_name']?></option>
<?php } ?>
</select>
