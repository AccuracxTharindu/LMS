<?php  

if(isset($_POST['submit'])) {
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
              
			   
					
					
								include("db.php");
								
								
								
									$truncatetable= "TRUNCATE TABLE book_";
									$mysqli->query($truncatetable);
								
								echo "Clear Success. Go Back Please";
								
								
			   
            
	}
     
}

?>

