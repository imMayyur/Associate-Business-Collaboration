<?php
  foreach ($subcate as $row)
        {
            //here we build a dropdown item line for each query result
            $output .= "<option value=".$row['Subcat_id'].">".$row['Subcat_name']."</option>";
        }
		echo $output;
?>