<?php include "Headeradm.php";

 ?>
 <div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">
  		<div class="jumbotron">
        <script language="javascript">
        function validate()
        {
           if(isempty(document.form1.Subcat_name,"Please Enter SubCategory Name")){
		   if(isempty(document.form1.scdesc,"Please Enter SubCategory Description")){
          		 return true;
        }
	}
		 return false;
        }
	

</script>
 <form id="form1" name="form1" method="post" action="subcategory/insert"  onsubmit="return validate()">
 <table border="0" align="center" class="innertable" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2" class="title1"><div align="center">Subcategory</div></td>
    <tr>
    	<td>Category</td>
        <td><label>
          <select name="category" id="category">
            <?php
			foreach($category as $row1)
			{
		  	?>
        	<option value="<?php echo $row1['cat_id']; ?>"><?php echo $row1['cat_name']; ?></option>
			<?php
				}
			?>
          </select>
        </label></td>
    </tr>
    <tr>
      <td>Subcategory_Name</td>
      <td><label>
        <input type="text" name="Subcat_name" id="Subcat_name" />
      </label></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><label>
        <textarea name="scdesc" id="scdesc" cols="45" rows="5"></textarea>
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
<td>SubCategory ID</td>
<td>Category ID</td>
<td>SubCategory Name</td>
<td>SubCategory Description</td>
</tr>
<?php
	foreach($subcategory as $row)
	{
	
	?>
	<tr>
		<td><?php echo $row['Subcat_id'];?></td>
		<td><?php echo $row['Cat_id'];?></td>
		<td><?php echo $row['Subcat_name'];?></td>
		<td><?php echo $row['Subcat_desc'];?></td>
	</tr>
	<?php
	}
?>
</table>
</div>
</div>
<?Php include "Footerusr.php";
?>
