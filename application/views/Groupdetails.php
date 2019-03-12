<?php include "Headerusr.php";
?>
<div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">
<div class="jumbotron">
<form name="form1" method="post" action="request">
<?php
	foreach ($groupdata as $row)
	{
?>
	<table class="table table-hover" align="center">
    	<tr><td colspan="2" class="title1">Group Details</td></tr>
        <tr><td colspan="2" align="center"><img src="http://localhost/abc/upload/<?php echo $row['Group_img'];?>" height="100" width="100"></td></tr>
        <tr><td>Group Name</td><td><?php echo $row['Group_name'];?></td></tr>
        <tr><td>Group Description</td><td><?php echo $row['Group_desc'];?></td></tr>
    	<tr><td><td><input name="btnsubmit" type="submit" id="btnsubmit" value="Send Request"></td></tr>
    </table>
    <input type="hidden" name="gid" value="<?php echo $row['Group_id'];?>">
<?php
	}
?>
</form>
</div>
</div>       
<?php include "Footerusr.php";
?>