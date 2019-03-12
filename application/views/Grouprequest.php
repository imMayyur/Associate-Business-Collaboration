<?php include "headerusr.php";?>
<div style="width:60%; margin-left:auto; margin-right:auto; padding-top:50PX;">
<div class="jumbotron">
  <form name="form1" method="post" action="">
  <table class="table table-hover" align="center">
  <tr>
      <td colspan="2" class="title1"><div align="center">Group Request</div></td>
    </tr>
  <?php 
  	foreach($requestdata as $row)
	{
  ?>
    	<tr>
        	<td align="right"><?php echo $row['User_name']; ?></td>
            <td align="right"><?php echo "<a href=http://localhost/abc/index.php/Activateuser/?uid=$row[Group_id]>Accept Request</a>";?></td>
        </tr>
  <?php 
	}
  ?>
  </table>
  </form>
</div>
</div>
<?php include "footerusr.php";?>