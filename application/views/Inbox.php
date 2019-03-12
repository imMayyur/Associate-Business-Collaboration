<?php include "Headerusr.php";
?>
<div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">
<div class="jumbotron">
<script language="javascript">
        function validate()
        {
           if(isempty(document.form1.msgtitle,"Please Enter Message Title")){
		   if(isAlphabet(document.form1.msgtitle,"Please Enter Only Alphabates")){
		   if(isempty(document.form1.msgdesc,"Please Enter  Message Description")){	
			return true;
		}
		}
		}
			 return false;
        }
	

</script>
  <form action="insert" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return validate()">
 <?php
	foreach($msgdata as $row)
	{
	?>
 <table border="0" align="center" class="innertable" cellpadding="5" cellspacing="5">
    <tr><td colspan="3" class="title1"><div align="center">Message</div></td></tr>
    <tr>
	<td>From</td>
	<td>Message</td>
	<td></td>
	</tr>
	
	<tr>
		<td><?php echo $row['Msg_from'];?></td>
        <td><?php echo $row['Msg_desc'];?></td>
		<td><?php echo "<a href=reply/?id=$row[Msg_id]>Reply</a>"; ?></td>
	</tr>
	<?php
	}
?>
</table>  
</form>
</div>
</div>
<?php include "Footerusr.php";
?>