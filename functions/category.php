<?php
   //Get Categories From DB
   function getCats(){
   global $con;
   $get_cats = "select * from categories";
   $run_cats = mysqli_query($con, $get_cats);
   	while($row_cats=mysqli_fetch_array($run_cats)){
   	$cat_id = $row_cats['cat_id'];
   		$cat_title = $row_cats['cat_title'];
   		echo "<a class=\"mdl-navigation__link\" href=''>$cat_title</a>";
   	}
   }
   ?>