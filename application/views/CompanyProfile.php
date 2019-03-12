<?php include "Headerusr.php";
?>
<div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">
<div class="jumbotron">
<script language="javascript" src="validation.js" >
</script>
		<script language="javascript">
        function validate()
        {
           if(isempty(document.form1.proimg,"Please Choose Company Profile Picture")){
		   if(isempty(document.form1.compname,"Please Enter Company Name")){
		   if(lengthRestriction(document.form1.compname,4,"Enter Minimum 4 Characters")){	
		   if(isempty(document.form1.compdesc,"Please Enter Company Description")){
		   if(isAlphabet(document.form1.compdesc,"Please Enter Only Alphabates")){	
		   if(isempty(document.form1.address,"Please Enter Company Address")){
		   if(isempty(document.form1.city,"Please Enter City")){
		   if(isAlphabet(document.form1.city,"Please Enter Only Alphabates")){	
		   if(isempty(document.form1.pincode,"Please Enter Pincode")){
		   if(isNumeric(document.form1.pincode,"Please Enter Only Numeric")){
			if(lengthRestriction1(document.form1.pincode,6,"Please Enter Only 6 Number")){
		   if(isempty(document.form1.speciality,"Please Enter Speciality")){
		   if(isAlphabet(document.form1.speciality,"Please Enter Only Alphabates")){
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
		 return false;
        }
	

</script>
<form action="companyprofile/insert" method="post" enctype="multipart/form-data" name="form1" onsubmit="return validate()">
  <table border="0" align="center" class="innertable" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2" class="title1"><div align="center">Company Profile</div></td>
    </tr>
    <tr>
      <td><div align="right">Company Profile Image</div></td>
      <td><input type="file" name="proimg" id="proimg"></td>
    </tr>
    <tr>
      <td><div align="right">Company Name </div></td>
      <td><label>
        <input name="compname" type="text" id="compname" />
      </label></td>
    </tr>
    <tr>
      <td><div align="right">Description</div></td>
      <td><label>
        <textarea name="compdesc" id="compdesc" cols="45" rows="5"></textarea>
      </label></td>
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
      <td><input type="text" name="pincode" id="pincode"></td>
    </tr>
    <tr>
      <td><div align="right">State</div></td>
      <td><select name="state"><option></option></select></td>
    </tr>
    <tr>
      <td><div align="right">Country</div></td>
      <td><select name="country"><option></option></select></td>
    </tr>
    <tr>
      <td><div align="right">Speciality</div></td>
      <td><label>
        <input type="text" name="speciality" id="speciality">
      </label></td>
    </tr>
    <tr>
      <td><div align="right">URL</div></td>
      <td><label>
        <input type="text" name="url" id="url">
      </label></td>
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