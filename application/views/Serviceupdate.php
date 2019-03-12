<?Php include "Headerusr.php";
?>
 <div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">
 <div class="jumbotron">
 <?php
foreach($servicedata as $row)
{

?>
<script language="javascript">
        function validate()
        {
           if(isempty(document.form1.title,"Please Enter Message Title")){
		   if(isempty(document.form1.servicedesc,"Please Enter  Message Description")){
			return true;
		}
		}
			 return false;
        }
	

</script>
<form  method="post" enctype="multipart/form-data" name="form1" id="form1" action="Serviceupdate"  onsubmit="return validate()">
  <table border="0" align="center" class="innertable" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2" class="title1"><div align="center">Update Service</div></td>
    <tr>
      <td><div align="right">Title</div></td>
      <td><label>
        <input type="text" name="title" id="title" value="<?php echo $row['Service_title']; ?>" />
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
        <textarea name="servicedesc" id="servicedesc" cols="45" rows="5"><?php echo $row['Service_desc']; ?></textarea>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
      	<input type="hidden" value="<?php echo $row['Service_id']; ?>" name="serviceid" />
        <input type="submit" name="submit" id="submit" value="Submit" />
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