<h4 style="text-align:left;" class="btn btn-success"> Details for Closed Complaints*- Admin View</h4>
<form action="processLeave.php?action=addUser" method="post"  name="frmListUser" id="frmListUser">
  <table width="100%" height="200px" border="1" align="center" cellpadding="2" cellspacing="1" class="text">
    <tr align="left" id="listTableHeader">
      <td width="717">Complain Title</td>
      <td width="234">Comp. Type </td>
      <td width="146">Status</td>
      <td width="199">C.Attendant</td>
    </tr>
    <?php
	$cust_id = (int)$_SESSION['user_id'];
	$sql = "SELECT * 
			FROM tbl_complains
			WHERE status = 'close' 
			ORDER BY create_date DESC 
			LIMIT 0,20";
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
    <tr class="<?php echo $class; ?>" style="height:35px;">
      <td>&nbsp;<?php echo ucwords($comp_title); ?></td>
      <td width="234" align="left"><?php echo ucwords($comp_type); ?></td>
      <td width="146" align="left"><font color="#00CC66"><?php echo ucwords($status); ?></font></td>
      <td width="199" align="left"><?php echo ucwords($eng_name); ?></td>
    </tr>
    <?php
	} // end while
	?>
    
  </table>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
