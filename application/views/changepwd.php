<?Php include "Headerusr.php";

 ?>
<div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">
<div class="jumbotron">
<script language="javascript">
        function validate()
        {
           if(isempty(document.form1.currentpwd,"Please Enter Current Password")){
		   if(lengthRestriction(document.form1.currentpwd,6)){
		   if(isempty(document.form1.newpwd,"Please Enter New Password")){
		   if(lengthRestriction(document.form1.newpwd,6)){
		   if(isempty(document.form1.cnnewpwd,"Please Enter Confirm Password")){
		   if(lengthRestriction(document.form1.ps,6)){
          		 return true;
        		}
			   }
			 }	
			}
			}
			}
		 return false;
        }
	

</script>
<form name="form1" method="post" action="Changepwd/insert" onsubmit="return validate()">
 <table border="0" align="center" class="innertable" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2" class="title1"><div align="center">Change Password</div></td>
    </tr>
     <tr>
       <td>Current Password</td>
       <td><label>
         <input type="password" name="currentpwd" id="currentpwd" />
       </label></td>
     </tr>
     <tr>
       <td>New Password</td>
       <td><label>
         <input type="password" name="newpwd" id="newpwd" />
       </label></td>
     </tr>
     <tr>
       <td>Confirm New Password</td>
       <td><label>
         <input type="password" name="cnnewpwd" id="cnnewpwd" />
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
</div>
</div>
<?Php include "Footerusr.php";
?>
