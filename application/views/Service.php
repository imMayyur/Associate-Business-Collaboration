<?Php include "Headerusr.php";
	
 ?>
 <div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">
 <div class="jumbotron">
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
<form  method="post" enctype="multipart/form-data" name="form1" id="form1" action="Service/insert"  onsubmit="return validate()">
  <table border="0" align="center" class="innertable" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2" class="title1"><div align="center">Service</div></td>
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
        <textarea name="servicedesc" id="servicedesc" cols="45" rows="5"></textarea>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="submit" id="submit" value="Submit" />
      </label></td>
    </tr>
  </table>
</form>
<table class="table table-hover" align="center">
<tr>
<td>Service ID</td>
<td>Service Title</td>
<td>Status</td>
<td>Service Description</td>
<td></td>
</tr>
<?php
	foreach($servicedata as $row)
	{
	
	?>
	<tr>
		<td><?php echo $row['Service_id'];?></td>
        <td><?php echo $row['Service_title'];?></td>
        <td><?php echo $row['Status'];?></td>
		<td><?php echo $row['Service_desc'];?></td>
        <td><?php echo "<a href=Serviceupdate/?id=$row[Service_id]>Edit</a>"; ?></td>
	</tr>
	<?php
	}
?>
</table>
</div>
</div>
</body>
</html>
<?Php include "Footerusr.php";
	
 ?>