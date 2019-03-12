<?php include"headerusr.php"; ?>
<div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">
<div class="jumbotron">
<script language="javascript">
        function validate()
        {
           if(isempty(document.form1.job_title,"Please Enter Job Title")){
		   if(isempty(document.form1.job_desc,"Please Enter Job Description")){
          		 return true;
        	}
			}

		 return false;
        }
	

</script>

<form name="form1" method="post" action="job/insert" onsubmit="return validate()">
  <table border="0" align="center" class="innertable" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2" class="title1"><div align="center">Job</div></td>
      </tr>
      <td><div align="right">Title</div></td>
      <td><label>
        <input type="text" name="job_title" id="job_title">
      </label></td>
    </tr>
    <tr>
      <td><div align="right">Description</div></td>
      <td><label>
        <input type="text" name="job_desc" id="job_desc">
      </label></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><label>
        <input type="submit" name="btn_save" id="btn_save" value="Submit">
      </label></td>
    </tr>
  </table>
</form>
<?php
	foreach($jobdata as $row)
	{
?>
<table class="table table-hover" align="center">
<tr>
<td>Job Title</td>
<td>Job Description</td>
<td>Edit</td>
</tr>
	<tr>
		<td><?php echo $row['job_title'];?></td>
		<td><?php echo $row['job_desc'];?></td>
		<td><?php echo "<a href=Jobupdate/?id=$row[job_id]>Edit</a>"; ?></td>
	</tr>
</table>
<?php
	}
?>
</div>
</div>
<?php include "footerusr.php"; ?>
