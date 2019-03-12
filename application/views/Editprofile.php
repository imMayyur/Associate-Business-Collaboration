<?Php include "Headerusr.php";
?>
<div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">
<div class="jumbotron">
<script language="javascript">
        function validate()
        {
           if(isempty(document.form1.proimg,"Please Select Profile Image")){
		   if(isempty(document.form1.dob,"Please Enter Date Of Birth")){
		   if(isempty(document.form1.address,"Please Enter Address")){
		   if(isempty(document.form1.city,"Please Enter City")){
		   if(isAlphabet(document.form1.city,"Please Enter Only Alphabates")){
		   if(isempty(document.form1.pin,"Please Enter Pincode")){	
		   if(isNumeric(document.form1.pin,"Please Enter Only Number")){
		   if(lengthRestriction1(document.form1.pin,6,"Please Enter Only 6 digit")){ 
		   if(isempty(document.form1.state,"Please Select State")){
		   if(isempty(document.form1.country,"Please Select Country")){
		   if(isempty(document.form1.qualification,"Please Enter Qualification")){
		   if(isempty(document.form1.skill,"Please Enter Skill")){
		   if(isempty(document.form1.hobby,"Please Enter Hobby")){
		   if(isempty(document.form1.category,"Please Select Category")){
		   if(isempty(document.form1.subcategory,"Please Select Sub-Category")){
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
<script type= "text/javascript" src = "http://localhost/abc/js/countries.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

        
        <script type="text/javascript">
        
        
            $(document).ready(function() { 
				               
                $("#category").change(function(){
                 	

                     /*dropdown post *///
                      $.ajax({
			 		url:"http://localhost/abc/index.php/getsubcat",
					 data: {id: $(this).val()},
                    type: "POST",
                    success:function(data){ 
                        $("#subcategory").html(data);
                    }
                    
                    });
               
                });

            });
            
        </script>
        

<?php
	foreach($userdata as $row)
	{
?>
<form  method="post" enctype="multipart/form-data" name="form1" action="Editprofile/do_upload" onsubmit="return validate()">
  <table border="0" align="center" class="innertable" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2" class="title1"><div align="center">Edit Profile</div></td>
    </tr>
    <tr>
      <td><div align="right">Profile Image</div></td>
      <td><input type="file" name="proimg" id="proimg" value="<?php echo $row['Profileimg'];?>"></td>
    </tr>
    <tr>
      <td><div align="right">Date of Birth</div></td>
      <td><input type="text" name="dob" id="dob" value="<?php echo $row['Dob'];?>"></td>
    </tr>
    <tr>
      <td><div align="right">Address</div></td>
      <td><textarea name="address" id="address" cols="45" rows="5"><?php echo $row['Address'];?></textarea></td>
    </tr>
    <tr>
    <tr>
      <td><div align="right">Country</div></td>
      <td><select id="country" name ="country"><option selected="selected"><?php echo $row['Country'];?></option></select>
      </td>
    </tr>
    <tr>
      <td><div align="right">State</div></td>
      <td><select name ="state" id ="state"><option selected="selected"><?php echo $row['State'];?></option></select></td>
    </tr>
      <td><div align="right">City</div></td>
      <td><input type="text" name="city" id="city" value="<?php echo $row['City'];?>"></td>
    </tr>
    <tr>
      <td><div align="right">Pincode</div></td>
      <td><input type="text" name="pin" id="pin" value="<?php echo $row['Pincode'];?>"></td>
    </tr>
    <tr>
      <td><div align="right">Qualification</div></td>
      <td><input type="text" name="qualification" id="qualification" value="<?php echo $row['Quali'];?>"></td>
    </tr>
    <tr>
      <td><div align="right">Skills</div></td>
      <td><textarea name="skill" id="skill" cols="45" rows="5"><?php echo $row['Skills'];?></textarea></td>
    </tr>
    <tr>
      <td><div align="right">Hobby</div></td>
      <td><input type="text" name="hobby" id="hobby" value="<?php echo $row['Hobby'];?>"></td>
    </tr>
    <tr>
      <td><div align="right">Category</div></td>
        <td><select name="category" id="category">
          <?php
			foreach($catdata as $row1)
			{
		?>
        <option value="<?php echo $row1['cat_id']; ?>"><?php echo $row1['cat_name']; ?></option>

		<?php
			}
		?>

        </select></td>
    </tr>
    <tr>
      <td><div align="right">Sub Category</div></td>
        <td><select name="subcategory" id="subcategory">
          <option value="">Select</option>
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
<?php
	}
?>
<script language="javascript">
	populateCountries("country", "state");
</script>
</div>
</div>
<?Php include "Footerusr.php"; ?>
