<h4 class="btn btn-primary">Customer Attendant Details - Admin View</h4>
<p>To add New Customer Attendant <a href="view.php?mod=admin&view=addEngg" class="btn btn-success">Click Here</a> </p>
<form action="" method="post"  name="frmListUser" id="frmListUser">
  <table width="100%" border="1" align="center" cellpadding="2" cellspacing="1" class="text">
    <tr align="center" id="listTableHeader">
      <td width="453">Customer Attendant's Name </td>
      <td width="">Email</td>
      <td width="265">Mobile No. </td>
      <td width="207">Details</td>
    </tr>
    <?php
	$cust_id = (int)$_SESSION['user_id'];
	$sql = "SELECT * 
			FROM tbl_engineer
			ORDER BY ename ASC";
	$result = dbQuery($sql);
	$i=0;
	while($row = dbFetchAssoc($result)) {
	extract($row);
	if ($i%2) {
		$class = 'row1';
	} else {
		$class = 'row2';
	}
	$i += 1;
	?>
    <tr class="<?php echo $class; ?>" style="height:25px;">
      <td>&nbsp;<?php echo $ename; ?></td>
      <td width="371" align="center"><?php echo ucwords($email); ?></td>
      <td width="265" align="center"><?php echo ucwords($e_mobile); ?></td>
      <td width="207" align="center"><a href="javascript:editEnggDetail(<?php echo $eid; ?>);">Edit</a> / <a href="javascript:deleteEngg(<?php echo $eid; ?>);">Delete</a> </td>
    </tr>
    <?php
	} // end while
	?>
    
  </table>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
