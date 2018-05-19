<?php 

$groupId=intval($_GET['group']);
include('connect.php');

$query="select item_id , item_name from item_master where item_group_id='$groupId'";
				
$rs=mysql_query($query);
?>
<select name="item_id">
<option>Select Item</option>
<?php while($row=mysql_fetch_array($rs)) { ?>
<option value="<?php echo $row['item_id']?>"><?php echo $row['item_name']?></option>
<?php } ?>
</select>
