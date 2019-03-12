<?php include "Headerlogin.php";

?>
<div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">
  		<div class="jumbotron">
        <script language="javascript">
        function validate()
        {
           if(isempty(document.form1.fname,"Please Enter First Name")){
		   if(isAlphabet(document.form1.fname,"Please Enter Only Alphabates")){
		   if(isempty(document.form1.lname,"Please Enter  Last Name")){
		   if(isAlphabet(document.form1.lname,"Please Enter Only Alphabates")){
		   if(isempty(document.form1.uname,"Please Enter  User Name")){	
		   if(isAlphabet(document.form1.uname,"Please Enter Only Alphabates")){
			if(isempty(document.form1.pwd,"Please Enter Password")){	
			if(lengthRestriction(document.form1.pwd,6)){	
			if(isempty(document.form1.cnpwd,"Please Enter Confirm Password")){
			if(isempty(document.form1.email,"Please Enter Email Id")){
			if(emailValidator(document.form1.email,"Please Enter valid  Email Id")){
				if(isempty(document.form1.mno,"Please Enter Password")){	
			if(lengthRestriction(document.form1.mno,10)){		
			 if(isempty(document.form1.answer,"Please Enter Answer")){	
          		 return true;
        		}
			   }
			 }	
			}
			}
			}
			}
			}
			}
    }
		   }
	}
	}
	}
		 return false;
        }
	

</script>
<form name="form1" method="post" action="Signup/insert"  onsubmit="return validate()">
  <table border="0" align="center" class="innertable" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2" class="title1"><div align="center">Registration</div></td>
    <tr>
      <td><div align="right">First Name</div></td>
      <td><input type="text" name="fname" id="fname"></td>
    </tr>
    <tr>
      <td><div align="right">Last Name</div></td>
      <td><input type="text" name="lname" id="lname"></td>
    </tr>
    <tr>
      <td><div align="right">User Name</div></td>
      <td><input type="text" name="uname" id="uname" /></td>
    </tr>
    <tr>
      <td><div align="right">Password</div></td>
      <td><input type="password" name="pwd" id="pwd"></td>
    </tr>
    <tr>
      <td><div align="right">Confirm Password</div></td>
      <td><input type="password" name="cnpwd" id="cnpwd"></td>
    </tr>
    <tr>
      <td><div align="right">Email Id</div></td>
      <td><input type="text" name="email" id="email"></td>
    </tr>
    <tr>
      <td><div align="right">Gender</div></td>
      <td><input  name="gender" type="radio" id="male" value="male" checked="checked">
        Male
        <input type="radio" name="gender" id="female" value="female">
        Female</td>
    </tr>
    <tr>
      <td><div align="right">Mobile No</div></td>
      <td><input type="text" name="mno" id="mno"></td>
    </tr>
    <tr>
    	<td><div align="right">Security Question</div></td><td><select name="sques"><option>--Select--</option><option value="What Is Your Pat Name?">What Is Your Pat Name?</option><option value="What Is Your Best Friend Name?">What Is Your Best Friend Name?</option><option value="What Is Your First MobileNo?">What Is Your First MobileNo?</option></select></td>	
    </tr>
    <tr>
   	  <td><div align="right">Answer</div></td>
   	  <td><input type="text" name="answer" id="answer"></td>
    </tr>
    <tr>
      <td><div align="right"></div></td>
      <td><input type="submit" name="btnsignup" id="btnsignup" value="Sign Up"> </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><a href="http://localhost/abc/index.php/usrlogin">If You Have Already Profile.</a></td>
    </tr>
  </table>
</form>
</div>
</div>
<?php include "Footerusr.php";
?>