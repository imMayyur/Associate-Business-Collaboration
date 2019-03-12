<?php include "Headeradm.php";
?>
<div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">
<div class="jumbotron">
<script language="javascript">
        function validate()
        {
           if(isempty(document.form1.catname,"Please Enter Category Name")){
		   if(isempty(document.form1.cdesc,"Please Enter Category Description")){
		   	
          		 return true;
    }
	}

		 return false;
        }
	

</script>
<form id="form1" name="form1" method="post" action="Category/insert" onsubmit="return validate()">
  <table border="0" align="center" class="innertable" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2" class="title1"><div align="center">Category</div></td>
      </tr>
      <tr>
      <td>Category Name </td>
      <td><label>
        <input name="catname" type="text" id="catname" />
      </label></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><label>
        <textarea name="cdesc" id="cdesc" cols="45" rows="5"></textarea>
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
<td>Category ID</td>
<td>Category Name</td>
<td>Category Description</td>
<td></td>
</tr>
<?php
	foreach($category as $row)
	{
	
	?>
	<tr>
		<td><?php echo $row['cat_id'];?></td>
		<td><?php echo $row['cat_name'];?></td>
		<td><?php echo $row['Cat_desc'];?></td>
		<td><?php echo "<a href=Categoryupdate/?id=$row[cat_id]>Edit</a>"; ?></td>
	</tr>
	<?php
	}
?>
</table>
</div>
</div>
<?Php include "Footerusr.php";
?>
