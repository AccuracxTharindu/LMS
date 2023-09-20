<?php  
function convertDate($dateValue) {    

  $unixDate = ($dateValue - 25569) * 86400;
  //return gmdate("Y-m-d", $unixDate);
  return gmdate("m-d-y", $unixDate);

}
ini_set("memory_limit", "2048M");
if(isset($_POST['submit'])) {
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    include("db.php");
            //if (empty($_POST["bank"])) {
              // echo "Bank Name / No, is required"."<br>";
            //}else {
               //$bank = $_POST["bank"];
			   //echo $bank."<br><br>";
			   
			    //$dbLink = new mysqli('localhost', 'apollolk_testing', 'p(X~S9kBTDtC', 'apollolk_dbschool');
                //if(mysqli_connect_errno()) {
                    //die("MySQL connection failed: ". mysqli_connect_error());
                //}
         
                // Gather all required data
			   
			   if(isset($_FILES['uploadFile']['name']) && $_FILES['uploadFile']['name'] != "") {
					$allowedExtensions = array("xls","xlsx");
					$ext = pathinfo($_FILES['uploadFile']['name'], PATHINFO_EXTENSION);
					
					if(in_array($ext, $allowedExtensions)) {
							// Uploaded file
						   $file = "uploads/".$_FILES['uploadFile']['name'];
						   
						   //echo $_FILES['uploadFile']['tmp_name']."<br>"."<br>";
						   //echo $file."<br>"."<br>";
						   $isUploaded = copy($_FILES['uploadFile']['tmp_name'], $file);
						   //$isUploaded = move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $file)
						   // check uploaded file
						   if($isUploaded) {
						   //echo "ghghhhh"."<br>";
								// Include PHPExcel files and database configuration file
								//include("db.php");
								require_once __DIR__ . '/vendor/autoload.php';
								include(__DIR__ .'/vendor/phpoffice/phpexcel/Classes/PHPExcel/IOFactory.php');
								try {
									// load uploaded file
									echo "loaded uploaded file"."<br>";
									$objPHPExcel = PHPExcel_IOFactory::load($file);
								} catch (Exception $e) {
									 die('Error loading file "' . pathinfo($file, PATHINFO_BASENAME). '": ' . $e->getMessage());
								}
								
								// Specify the excel sheet index
								$sheet = $objPHPExcel->getSheet(0);
								$total_rows = $sheet->getHighestRow();
								$highestColumn      = $sheet->getHighestColumn();	
								$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);		
								
								
									//$truncatetable= "TRUNCATE TABLE bank_statement";
									//$mysqli->query($truncatetable);
								
								
								//	loop over the rows
								for ($row = 2; $row <= $total_rows; ++ $row) {
									for ($col = 0; $col < $highestColumnIndex; ++ $col) {
										$cell = $sheet->getCellByColumnAndRow($col, $row);
										$val = $cell->getValue();
if($col == 0 || $col == 1 || $col == 2 || $col == 3 || $col == 4 || $col == 5 || $col == 6 || $col == 7 || $col == 8 || $col == 9 || $col == 10 || $col == 11 || $col == 12 || $col == 13 || $col == 14 || $col == 15){
            							 
            							 
            							  $records[$row][$col] = $val;
            							  //echo "yhuyhu"."<br>";
            							  //echo $val."<br>";
            						    }
										
									}
								}
								
								foreach($records as $row){
								    //echo "kkkkkkkkkkk"."<br>";
									$Accession_No = trim(isset($row[0]) ? $row[0] : '');
									$author = trim(isset($row[1]) ? $row[1] : '');
									$book_title = trim(isset($row[2]) ? $row[2] : '');
									$Edition = trim(isset($row[3]) ? $row[3] : '');
									$book_pub = trim(isset($row[4]) ? $row[4] : '');
									$copyright_year = trim(isset($row[5]) ? $row[5] : '');
									$Pages = trim(isset($row[6]) ? $row[6] : '');
									$Price = trim(isset($row[7]) ? $row[7] : '');
									$isbn = trim(isset($row[8]) ? $row[8] : '');
									$book_copies = trim(isset($row[9]) ? $row[9] : '');
									$Source = trim(isset($row[10]) ? $row[10] : '');
									$cat = trim(isset($row[11]) ? $row[11] : '');
									$cat = trim($cat,'\'"');
									$resultC= mysqli_query($mysqli,"select category_id from category where classname = '$cat'") or die (mysqli_error());
									$category_id = "";
									while ($rowC= mysqli_fetch_array ($resultC)){
										$category_id=$rowC['category_id'];
									}
									$Sub_Category = trim(isset($row[12]) ? $row[12] : '');
									$Class_No = trim(isset($row[13]) ? $row[13] : '');
									$Location = trim(isset($row[14]) ? $row[14] : '');
									$Library = trim(isset($row[15]) ? $row[15] : '');
									$status = "New";
									$remarks = 'Available';
									
									
									
									$Accession_No = trim($Accession_No,'\'"');
									$author = trim($author,'\'"');
									$book_title = trim($book_title,'\'"');
									$Edition = trim($Edition,'\'"');
									$book_pub = trim($book_pub,'\'"');
									$copyright_year = trim($copyright_year,'\'"');
									$Pages = trim($Pages,'\'"');
									$Price = trim($Price,'\'"');
									$isbn = trim($isbn,'\'"');
									$book_copies = trim($book_copies,'\'"');
									$Source = trim($Source,'\'"');
									$Sub_Category = trim($Sub_Category,'\'"');
									$Class_No = trim($Class_No,'\'"');
									$Location = trim($Location,'\'"');
									$Library = trim($Library,'\'"');
									
									$today = date("Y-m-d H:i:s");
									
									//echo $Accession_No . "--" .$author . "--" .$book_title . "--" .$book_pub . "--" .$copyright_year .  "--" .$isbn .  "<br>";
									
									$query = mysqli_query($mysqli,"SELECT * FROM `barcode` ORDER BY mid_barcode DESC ") or die (mysqli_error());
						$fetch = mysqli_fetch_array($query);
						$mid_barcode = $fetch['mid_barcode'];
						
						$new_barcode =  $mid_barcode + 1;
						$pre_barcode = "APLG";
						$suf_barcode = "LMS";
						$generate_barcode = $pre_barcode.$new_barcode.$suf_barcode;
						
						$pre = "APLG";
                $mid = $Accession_No;
                $suf = "LMS";
                $genBarCode = $pre.$mid.$suf;
									
									// Insert into database
									$con=mysqli_connect("localhost","apollolk_lms","85891720@Tsoo","apollolk_lms")or die("Unable to connect");
									  if (!$con)
									  {
									  die('Could not connect: ' . mysql_error());
									  }
									//echo $Accession_No . "--" .$author . "--" .$book_title . "--" .$genBarCode . "--" .$book_pub . "--" .$copyright_year .  "--" .$isbn .  "<br>";

									if($Accession_No != ''){
										//echo $Accession_No . "--" .$author . "--" .$book_title . "--" .$isbn .  "--" .$category_id .  "--" .$genBarCode . "--" .$Sub_Category. "<br>";
$query = "INSERT INTO book (Accession_No,author,book_title,Edition,book_pub,copyright_year,Pages,Price,isbn,book_copies,Source,category_id,Sub_Category,Class_No,Location,Library,status,remarks,book_barcode,date_added) values ('".$Accession_No."','".$author."','".$book_title."','".$Edition."','".$book_pub."','".$copyright_year."','".$Pages."','".$Price."','".$isbn."','".$book_copies."','".$Source."','".$category_id."','".$Sub_Category."','".$Class_No."','".$Location."','".$Library."','".$status."','".$remarks."','".$genBarCode."','".$today."')";
										if(mysqli_query($con, $query)){
											//echo "Records inserted successfully.";
											
											$sql = "insert into barcode (pre_barcode,mid_barcode,suf_barcode) values ('$pre', '$mid', '$suf')";
                                            if(mysqli_query($con, $sql)){
                                            //echo "klklklv";
                                                //echo "<script>alert('Code successfully added!');</script>";
                                            } else{
                                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
                                                //echo "<script>alert('Code ERROR added!');</script>";
                                            }
                                            
											
											
										} else{
											echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
										}
									}
									
								}
							
								echo "<br/>Data inserted in Database";
							
								unlink($file);
							} else {
								echo '<span class="msg">File not uploaded!</span>';
							}
					} else {
						echo '<span class="msg">Please upload excel sheet.</span>';
					}
				} else {
					echo '<span class="msg">Please upload excel file.</span>';
				}
			   
			   
            //}
	}
     
}

?>


