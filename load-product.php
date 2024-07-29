<?php

include"conn.php";

$search_term = $_POST['pname'];

$sql = "SELECT * FROM addproduct WHERE pname LIKE '%{$search_term}%'";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");

$output = "<ul>";

	if(mysqli_num_rows($result) > 0){  
		while($row = mysqli_fetch_assoc($result)){
			$output .= "<li><a href='product-single.php?pid={$row['sno']}'>{$row['pname']}</a>
			<img src='Projectimages/{$row['pimage']}'  height='50' width='50'>
			</li>";
            
		}
  }else{  
  	$output .= "<li>Item Not Found</li>";
  } 
$output .= "</ul>";

echo $output;

?>
