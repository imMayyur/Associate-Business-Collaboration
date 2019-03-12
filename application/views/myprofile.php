<?php include "headerusr.php";
?>
<div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">
<div class="jumbotron">
  <form name="form1" method="post" action="">
  <?php foreach($Profiledata as $row)
  	{
   ?>
  	<table border="0" align="center" class="innertable" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2" class="title1"><div align="center">Profile</div></td>
    	<tr><td><img src="http://localhost/abc/upload/<?php echo $row['Profileimg'];?>" width="150" width="150"/></td>
    	<tr><td>First Name:</td><td><?php echo $row['Firstname'];?> </td>
        <tr><td>Last Name:</td><td><?php echo $row['Lastname'];?></td>
        <tr><td>Data Of Birth:</td><td><?php echo $row['Dob'];?></td>
        <tr><td>Address:</td><td><?php echo $row['Address'];?></td>
        <tr><td>City:</td><td><?php echo $row['City'];?></td>
        <tr><td>Pincode:</td><td><?php echo $row['Pincode'];?></td>
        <tr><td>State:</td><td><?php echo $row['State'];?></td>
        <tr><td>Country:</td><td><?php echo $row['Country'];?></td>
        <tr><td>Qualification:</td><td><?php echo $row['Quali'];?></td>
        <tr><td>Skill:</td><td><?php echo $row['Skills'];?></td>
        <tr><td>Hobby:</td><td><?php echo $row['Hobby'];?></td>
    </table>
    <?php
	}
	?>     
  </form>
</div>
</div>
<?php include "footerusr.php";
?>