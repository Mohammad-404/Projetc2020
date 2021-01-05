<?php
		include("include/db.php");

		$cat_name            = "guys";

        $query_select = "select cat_id from cetegory where cat_name = '$cat_name'";
        $result     = mysqli_query($conn,$query_select);
        while($row  = mysqli_fetch_assoc($result)){
        echo $cats  = $row['cat_id'];
	}

?>