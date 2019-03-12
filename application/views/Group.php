<?Php include "Headerusr.php";
?>
<div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">
<div class="jumbotron">
<script language="javascript" src="validation.js" >
</script>
		<script language="javascript">
        function validate()
        {
           if(isempty(document.form1.grpname,"Please Enter Group Name")){
		   if(isempty(document.form1.grpdesc,"Please Enter  Group Description")){	
          		 return true;
			}
			}
			 	return false;
        	}
	

</script>
<form action="Group/do_upload" method="post" enctype="multipart/form-data" name="form1" onsubmit="return validate()">
 <table border="0" align="center" class="innertable" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2" class="title1"><div align="center">Group</div></td>
    </tr>
    <tr>
      <td><div align="right">Name</div></td>
      <td><label>
        <input type="text" name="grpname" id="grpname">
      </label></td>
    </tr>
    <tr>
      <td><div align="right">Image</div></td>
      <td><label>
        <input type="file" name="img" id="img" size="20">
      </label></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><label>
        <textarea name="grpdesc" id="grpdesc" cols="45" rows="5"></textarea>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="submit" id="submit" value="submit">
      </label></td>
    </tr>
  </table>
</form>
<table class="table table-hover" align="center">
<tr>
<td>Group ID</td>
<td>Group Name</td>
<td>Group Image</td>
<td>Group Description</td>
</tr>
<?php
	foreach($groups as $row)
	{
	
	?>
	<tr>
		<td><?php echo $row['Group_id'];?></td>
        <td><?php echo $row['Group_name'];?></td>
        <td><img src="http://localhost/abc/upload/<?php echo $row['Group_img'];?>" height="80" width="80"></td>
		<td><?php echo $row['Group_desc'];?></td>
        <td><?php echo "<a href=Groupupdate/?id=$row[Group_id]>Edit</a>"; ?></td>
        <td><?php echo "<a href=Grouprequest/?id=$row[Group_id]>View Request</a>"; ?> </td>
        <td><?php echo "<a href=Groupusers/?id=$row[Group_id]>View Users</a>";?></td>
	</tr>
<?php
	}
?>
</table>
</div>
</div>
<?Php include "Footerusr.php";
?>