<?php include "Headerlogin.php";
?>
<div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">
<div class="jumbotron">
<form name="form1" method="post" action="fpwd1/forget">
  <table border="0" align="center" class="innertable" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2" class="title1"><div align="center">Forgot Password</div></td>
    </tr>
    <tr>
      <td align="right">Email Id</td>
      <td>
        <input type="text" name="email" id="email">
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" id="Submit" value="Submit"></td>
    </tr>
  </table>
</form>
</div>
</div>
<?php include "Footerusr.php";
?>