<?Php include "Headerusr.php";
?>
<div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">
<div class="jumbotron">
<?php
foreach($groupdata as $row)
{
?>
<script language="javascript">
        function validate()
        {
           if(isempty(document.form1.grpname,"Please Enter Group Name")){
		   if(isempty(document.form1.img,"Please choose Group Image")){
		   if(isempty(document.form1.grpdesc,"Please Enter  Group Description")){	
          		 return true;
			}
			}
			}
			 	return false;
        	}
	

</script>
<form action="Groupupdate" method="post" enctype="multipart/form-data" name="form1" onsubmit="return validate()">
  <table border="0" align="center" class="innertable" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2" class="title1"><div align="center">Update Group</div></td>
    </tr>
    <tr>
      <td><div align="right">Name</div></td>
      <td><label>
        <input type="text" name="grpname" id="grpname" value="<?php echo $row['Group_name']; ?>">
      </label></td>
    </tr>
    <tr>
      <td><div align="right">Image</div></td>
      <td><label>
        <input type="file" name="img" id="img">
      </label></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><label>
        <textarea name="grpdesc" id="grpdesc" cols="45" rows="5"><?php echo $row['Group_desc']; ?></textarea>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
      	<input type="hidden" value="<?php echo $row['Group_id']; ?>" name="postid" />
        <input type="submit" name="submit" id="submit" value="Submit">
      </label></td>
    </tr>
  </table>
</form>
<?php
}
?>
</div>
</div>
<?Php include "Footerusr.php";
?>