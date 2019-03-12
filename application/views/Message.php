<?php include "Headerusr.php";
	
?>
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
<div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">
  		<div class="jumbotron">
<form action="insert" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return validate()">
  <table border="0" align="center" class="innertable" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2" class="title1"><div align="center">Message</div></td>
      <tr>
        <td><div align="right">To
          <label></label>
        </div></td>
        <td><label>
        <?php 
			foreach($messageto as $row)
			{
		?>
          <input type="text" name="msgto" id="msgto" value=<?php echo $row['Email'];?> />
          <?php
			}
		?>
        </label></td>
      </tr>
      <tr>
        <td><div align="right">From
          <label></label>
        </div></td>
        <td><label>
        <?php 
			foreach($messagefrom as $row)
			{
		?>
          <input type="text" name="msgfrom" id="msgfrom" value=<?php echo $row['Email'];?> />
          <?php
			}
		?>
        </label></td>
      </tr>
      <tr>
        <td><div align="right">Title</div></td>
        <td><label>
          <input type="text" name="msgtitle" id="msgtitle" />
          </label></td>
      </tr>
      <tr>
        <td><div align="right">Description</div></td>
        <td><label>
          <textarea name="msgdesc" id="msgdesc" cols="45" rows="5"></textarea>
        </label></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><label>
          <input type="submit" name="submit" id="submit" value="Submit" />
          </label></td>
      </tr>
    </table>      <label></label></td>
  </tr>
  </table>
</form>
</div>
</div>
<?php include "Footerusr.php";
	
?>