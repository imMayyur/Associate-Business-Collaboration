<?Php include "Headeradm.php"
 ?>
<div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">
<div class="jumbotron">
<form id="form1" name="form1" method="post" >
<table border="0" align="center" class="innertable" cellpadding="5" cellspacing="5">
<tr><td colspan="5" class="title1"><div align="center">Users</div></td></tr>
<tr><td>Name</td><td>Mobile No</td><td>Email</td><td>Status</td>
<?php 
	foreach($signup as $row)
	{
?>
<tr>
	<td><?php echo $row['User_name'];?></td>
    <td><?php echo $row['Mobileno'];?></td>
    <td><?php echo $row['Email'];?></td>
    <td><?php echo $row['Status'];?></td>
    <td><?php echo "<a href=http://localhost/abc/index.php/Banusr/?uid=$row[User_id]&&status=$row[Status]>Active/Deactive</a>"; ?></td>
</tr>
<?php
	}
?>
</table>
</form>
</div>
</div>
<?Php include "Footerusr.php"
?>
