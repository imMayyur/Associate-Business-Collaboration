<?Php include "Headerusr.php";
?>
<div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">
<div class="jumbotron">
<script language="javascript">
	function validate()
    {
           if(isempty(document.form1.title,"Please Enter Title")){
		   if(isempty(document.form1.postdesc,"Please Enter  Post Description")){	
          		 return true;
        		}
			   }
		 return false;
        }
	

</script>
<form id="form1" name="form1" method="post" action="Post/insert" onsubmit="return validate()">
  <table border="0" align="center" class="innertable" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2" class="title1"><div align="center">Posting</div></td>
    <tr>
      <td><div align="right">Title</div></td>
      <td><label>
        <input type="text" name="title" id="title" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right">Status</div></td>
      <td><label>
        <select name="status" id="status">
          <option value="Active" selected="selected">Active</option>
          <option value="Deactive">Deactive</option>
                        </select>
      </label></td>
    </tr>
    <tr>
      <td><div align="right">Description</div></td>
      <td><label>
        <textarea name="postdesc" id="postdesc" cols="45" rows="5"></textarea>
      </label></td>
    </tr>
    <tr>
      <td><div align="right"></div></td>
      <td><label>
        <input type="submit" name="submit" id="submit" value="Submit" />
      </label></td>
    </tr>
  </table>
</form>
<table class="table table-hover" align="center">
<tr>
<td>Post ID</td>
<td>Title</td>
<td>Status</td>
<td>Post Description</td>
</tr>
<?php
	foreach($posting as $row)
	{
	
	?>
	<tr>
		<td><?php echo $row['Post_id'];?></td>
        <td><?php echo $row['Title'];?></td>
        <td><?php echo $row['Status'];?></td>
		<td><?php echo $row['Post_desc'];?></td>
		<td><?php echo "<a href=Postupdate/?id=$row[Post_id]>Edit</a>"; ?></td>
	</tr>
	<?php
	}
?>
</table>
</div>
</div>
<?php include "Footerusr.php"; ?>