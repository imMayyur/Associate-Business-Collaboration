<?php include "Headerusr.php"; ?>
<div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">
<div class="jumbotron">
		<script language="javascript">
        function validate()
        {
           if(isempty(document.form1.proimg,"Please Choose  Profile Picture")){
		   if(isempty(document.form1.dob,"Please Enter Date Of Birth")){
		   if(isempty(document.form1.address,"Please Enter  Address")){
		   if(isempty(document.form1.city,"Please Enter City")){
		   if(isAlphabet(document.form1.city,"Please Enter Only Alphabates")){	
		   if(isempty(document.form1.pin,"Please Enter Pincode")){
		   if(isNumeric(document.form1.pin,"Please Enter Only Numeric")){
			if(lengthRestriction1(document.form1.pin,6,"Please Enter Only 6 Number")){
		 	if(isempty(document.form1.qualification,"Please Enter Qualification")){
		   if(isAlphabet(document.form1.qualification,"Please Enter Only Alphabates")){
			if(isempty(document.form1.skill,"Please Enter Skill")){
		   if(isAlphabet(document.form1.skill,"Please Enter Only Alphabates")){
			if(isempty(document.form1.hobby,"Please Enter Hobby")){
		   if(isAlphabet(document.form1.hobby,"Please Enter Only Alphabates")){
		   if(isempty(document.form1.url,"Please Enter URL")){
			   
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
	}
		 return false;
        }
	

</script>
<form action="UserProfile/do_upload" method="post" enctype="multipart/form-data" name="form1" onsubmit="return validate()">
  <table border="0" align="center" class="innertable" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2" class="title1"><div align="center">User Profile</div></td>>
    <tr>
      <td><div align="right">Profile Image</div></td>
      <td><input type="file" name="proimg" id="proimg"></td>
    </tr>
    <tr>
      <td><div align="right">Date of Birth</div></td>
      <td><input type="text" name="dob" id="dob"></td>
    </tr>
    <tr>
      <td><div align="right">Address</div></td>
      <td><textarea name="address" id="address" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td><div align="right">City</div></td>
      <td><input type="text" name="city" id="city"></td>
    </tr>
    <tr>
      <td><div align="right">Pincode</div></td>
      <td><input type="text" name="pin" id="pin"></td>
    </tr>
    <tr>
      <td><div align="right">State</div></td>
      <td><select name="state">
        <option value="1">gj</option>
      </select></td>
    </tr>
    <tr>
      <td><div align="right">Country</div></td>
      <td><select name="country">
        <option value="1">ind</option>
      </select></td>
    </tr>
    <tr>
      <td><div align="right">Qualification</div></td>
      <td><input type="text" name="qualification" id="qualification"></td>
    </tr>
    <tr>
      <td><div align="right">Skills</div></td>
      <td><textarea name="skill" id="skill" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td><div align="right">Hobby</div></td>
      <td><input type="text" name="hobby" id="hobby"></td>
    </tr>
    <tr>
      <td><div align="right">Category</div></td>
        <td><select name="category">
          <option value="1">HR</option>
        </select></td>
    </tr>
    <tr>
      <td><div align="right">Sub Category</div></td>
        <td><select name="subcategory">
          <option value="1">manager</option>
        </select></td>
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
<?Php include "Footerusr.php"; ?>