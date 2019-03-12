<?php include "Headerusr.php";
?>
<div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">
<div class="jumbotron">
<form action="" method="post">
<table border="0" align="center" class="innertable" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2" class="title1"><div align="center">Group Users</div></td>
    </tr>
<?php 
	foreach($Groupusers as $row)
	{
?>
	 <tr><div align="center"><td><?php echo $row['User_name'];?></td></div>
     <td><div align="center"><?php echo "<a href='http://localhost/abc/index.php/profile/?id=$row[User_id]'>View Profile</a>";?></td></div>
    </tr>
<?php
	}
?>
</table>
</form>
</div>
</div>
<?php include "Footerusr.php";
?>