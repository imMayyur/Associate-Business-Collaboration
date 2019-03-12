<?php include "Headerlogin.php";
?>
<div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">
<div class="jumbotron">
<form id="form1" name="form1" method="post" action="Category/insert" onsubmit="return validate()">
  <table border="0" align="center" class="innertable" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2" class="title1"><div align="center">Password</div></td>
      </tr>
      <tr><td align="center">
<?php
	foreach($forgot as $row)
	{
 echo $row['Password'];
?>


<iframe src="http://www.itcodes.com/sms/sms.php?no=<?php echo $row['Mobileno'];?>&msg=Your Password is<?php echo $row['Password'];?>" height="100" width="200">

</iframe>

<?php 
	}
?></td></tr>

</table>
</div>
</div>
<?php include "footerusr.php";
?>