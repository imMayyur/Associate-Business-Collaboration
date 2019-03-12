<?php include "Headerusr.php";	
?>
<div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">
<div class="jumbotron">
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<form name="form1" method="post" action="">
  <table border="0" align="center" class="innertable" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2" class="title1"><div align="center">User Login</div></td>
    <tr>
      <td width="257"><div align="right">User Name</div></td>
      <td width="147"><span id="sprytextfield1">
        <input type="text" name="uname" id="uname">
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td><div align="right">Password</div></td>
      <td><span id="sprytextfield2">
        <input type="password" name="pwd" id="pwd">
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><a href="fpwd.php">
        <input type="submit" name="btnLogin" id="btnLogin" value="Login">
      </a></td>
    </tr>
    <tr>
      <td>
        <div align="right"></div></td>
      <td><div align="right"><a href="Fpwd1.php">
      Forgot Password?</a></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="right"><a href="Signup.php">Sign Up</a></div></td>
    </tr>
  </table>
</form>
<div align="right"></div>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
//-->
</script>
</div>
</div>
<?php include "Footerusr.php";
?>