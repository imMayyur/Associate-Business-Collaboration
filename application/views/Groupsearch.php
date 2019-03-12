<?php include "headerusr.php";
?>
<div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">
  		<div class="jumbotron">
<form name="form1" method="post" action="">
<table border="0" align="center" class="innertable" cellpadding="5" cellspacing="5">
    <tr>
      <td  class="title1"><div align="center">Group Name</div></td>
      <td  class="title1"><div align="center">Group Image</div></td>
      <td  class="title1"><div align="center">Group Description</div></td>
      <td  ></td>
    </tr>
<?php
	foreach($groupdata as $row)
	{
	
	?>
	<tr>
		<td><div align="center"><?php echo $row['Group_name'];?></div></td>
		<td><div align="center"><img src="http://localhost/abc/upload/<?php echo $row['Group_img'];?>" height="80" width="80"></div></td>
		<td><div align="center"><?php echo $row['Group_desc'];?></div></td>
     	<td><div align="center"><?php echo "<a href=Groupdetails/?id=$row[Group_id]>View</a>"; ?></div></td>
	</tr>
	<?php
	}
?>
</table>
</form>
</div>
</div>
<?php include "footerusr.php";
?>