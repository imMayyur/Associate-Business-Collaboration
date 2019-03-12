<?php include"headerusr.php"; ?>
<form id="form1" name="form1" method="post" action="">
  <table width="540" border="0" cellspacing="1" cellpadding="0">
    <tr>
      <td><div align="right">User Id</div></td>
      <td><input type="text" name="textfield" id="textfield" /></td>
    </tr>
    <tr>
      <td><div align="right">Job Id</div></td>
      <td><input type="text" name="textfield2" id="textfield2" /></td>
    </tr>
    <tr>
      <td><div align="right">Status</div></td>
      <td><label>
        <select name="job_status" id="job_status">
          <option value="ac">active</option>
          <option value="dc">deactive</option>
                </select>
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <div align="center">
          <input type="submit" name="submit" id="submit" value="Submit" />
          </div>
      </label></td>
    </tr>
  </table>
</form>
<?php include "footerusr.php"; ?>
