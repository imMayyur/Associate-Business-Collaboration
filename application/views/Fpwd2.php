<?php include "Headerlogin.php";
?>
<div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">
<div class="jumbotron">
<!-- Copyright 2000-2006 Adobe Macromedia Software LLC and its licensors. All rights reserved. -->
<title>
</title>
<?php 
	foreach($question as $row)
	{
?>
<form name="form1" method="post" action="Fpwd2/answer">
  <table border="0" align="center" class="innertable" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2" class="title1"><div align="center">Forgot Password</div></td>
    </tr>
    <tr>
      <td><div align="right">Security Question :&nbsp;</div></td>
      <td><label><?php echo $row['Squestion']; ?></label></td>
    </tr>
    <tr>
      <td><div align="right">Answer :&nbsp;</div></td>
      <td align="left">
        <input type="text" name="answer" id="answer">
      </td>
    </tr>
    <tr>
      <td><div align="right"></div></td>
      <td><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit"></td>
    </tr>
  </table>
</form>
<?php
	}
?>
</div>
</div>
<?php include "Footerusr.php";
?>