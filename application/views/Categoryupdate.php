<?php include "Headerusr.php";
?>
<div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">
<div class="jumbotron">
<script language="javascript" src="validation.js" >
</script>
		<script language="javascript">
        function validate()
        {
           if(isempty(document.form1.catname,"Please Enter Category Name")){
		   if(isAlphabet(document.form1.catname,"Please Enter Only Alphabates")){
		   if(isempty(document.form1.cdesc,"Please Enter Category Description")){
		   if(isAlphabet(document.form1.cdesc,"Please Enter Only Alphabates")){
          		 return true;
        }
	}
	}
	}
		 return false;
        }
	

</script>
<?php
foreach($catdata as $row)
{
?>
<form id="form1" name="form1" method="post" action="updatecategory" onSubmit="return validate()">
  <table border="0" align="center" class="innertable" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2" class="title1"><div align="center">Category Update</div></td>
    </tr>
    <tr>
      <td>Category Name </td>
      <td><label>
        <input name="catname" type="text" id="catname" value="<?php echo $row['cat_name']; ?>" />
      </label></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><label>
        <textarea name="cdesc" id="cdesc" cols="45" rows="5"><?php echo $row['Cat_desc']; ?></textarea>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
	  	<input type="hidden" value="<?php echo $row['cat_id']; ?>" name="catid" />
        <input type="submit" name="submit" id="submit" value="Submit" />
      </td>
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