<?php include "Headerlogin.php";
?>
        
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">

  		<div class="jumbotron">
        <script language="javascript">
        function validate()
        {
           if(isempty(document.form1.uname,"Please Enter User Name")){
		   if(isempty(document.form1.pwd,"Please Enter Password")){
			if(lengthRestriction(document.form1.pwd,6)){	
          		 return true;
        		}
			 }	
	}
		 return false;
        }
</script>
<form name="form1" method="post" action="Usrlogin/Login" onsubmit="return validate()" >
  <table border="0" align="center" class="innertable" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2" class="title1"><div align="center">User Login</div></td>
    </tr>
    <tr>
      <td width="166"><div align="right">User Name</div></td>
      <td width="238">
        <input type="text" name="uname" id="uname">
      </td>
    </tr>
    <tr>
      <td><div align="right">Password</div></td>
      <td><span id="sprytextfield2">
        <input type="password" name="pwd" id="pwd">
     </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <input name="btnLogin" type="submit" class="my-btn" id="btnLogin" value="Login" height="1px">
      </td>
    </tr>
    <tr>
     <td><div align="right"></div></td>
     <td><div align="right"><a href="http://localhost/abc/index.php/fpwd1">Forgot Password</a></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="right"><a href="http://localhost/abc/index.php/signup">Sign Up</a></div></td>
    </tr>
  </table>
</form>
</div>
</div>
<?php include "Footerusr.php"; ?>
