<!-- ==============================================
//  Created by PHP Dev Zone           			 ||
//	http://php-dev-zone.blogspot.com             ||
//  Contact for any Web Development Stuff        ||
//  Email: ketan32.patel@gmail.com     			 ||
//=============================================-->

<?php $countryId=intval($_GET['country']);
 
 include('connect.php');

$query="select item_id,item_name from item_master where item_group_id='$countryId'";
$result=mysql_query($query);

?>
<select name="item_id">
<option>Select Item</option>
<?php while($row=mysql_fetch_array($result)) { ?>
<option value="<?php echo $row['item_id']?>"><?php echo $row['item_name']?></option>
<?php } ?>
</select>
