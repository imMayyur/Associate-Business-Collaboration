<?Php include "Headerusr.php";
?>
<div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">
<div class="jumbotron">
<?php
foreach($postdata as $row)
{
?>
<script language="javascript">
        function validate()
        {
           if(isempty(document.form1.title,"Please Enter Title")){
		   if(isempty(document.form1.postdesc,"Please Enter Description")){
          		 return true;
		 }
		 }
		 	 return false;
         }
	

</script>
<form id="form1" name="form1" method="post" action="postupdate" onsubmit="return validate()">
  <table border="0" align="center" class="innertable" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2" class="title1"><div align="center">Update Post</div></td>
    <tr>
      <td><div align="right">Title</div></td>
      <td><label>
        <input type="text" name="title" id="title" value="<?php echo $row['Title']; ?>" />
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
        <textarea name="postdesc" id="postdesc" cols="45" rows="5"><?php echo $row['Post_desc']; ?></textarea>
      </label></td>
    </tr>
    <tr>
      <td><div align="right"></div></td>
      <td><label>
      	<input type="hidden" value="<?php echo $row['Post_id']; ?>" name="postid" />
        <input type="submit" name="submit" id="submit" value="Submit" />
      </label></td>
    </tr>
  </table>
</form>
</div>
</div>
<?php 
}
?>
<?php include "Footerusr.php"; ?>