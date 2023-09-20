<?php

			include ('include/dbcon.php');
						$query = mysqli_query($con,"SELECT * FROM `barcode` ORDER BY mid_barcode DESC ") or die (mysqli_error());
						$fetch = mysqli_fetch_array($query);
						$mid_barcode = $fetch['mid_barcode'];
						
						$new_barcode =  $mid_barcode + 1;
						$pre_barcode = "APLG";
						$suf_barcode = "LMS";
						$generate_barcode = $pre_barcode.$new_barcode.$suf_barcode;
?>

<?php include ('header.php'); ?>

        <div class="page-title">
            <div class="title_left">
                <h3>
					<small>Home / Books /</small> Add Book
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-plus"></i> Add Book</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <!-- If needed 
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a></li>
                                    <li><a href="#">Settings 2</a></li>
                                </ul>
                            </li>
						-->
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->

                            <form method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
							<input type="hidden" name="new_barcode" value="<?php echo $new_barcode; ?>">
							
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Title <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="book_title" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Author 1 <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="author" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Author 2
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="author_2" id="first-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Author 3
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="author_3" id="first-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Author 4
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="author_4" id="first-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Author 5
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="author_5" id="first-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Publication
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="book_pub" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Publisher
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="publisher_name" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">ISBN <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="isbn" id="last-name2" class="form-control col-md-7 col-xs-12" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Copyright Year
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="copyright_year" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Copies <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-1">
                                        <input type="number" name="book_copies" step="1" min="0" max="1000" required="required"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Status <span class="required" style="color:red;">*</span>
                                    </label>
									<div class="col-md-4">
                                        <select name="status" class="select2_single form-control" tabindex="-1" required="required">
											<option value="New">New</option>
											<option value="Old">Old</option>
											<option value="Lost">Lost</option>
											<option value="Damaged">Damaged</option>
											<option value="Replacement">Replacement</option>
											<option value="Hardbound">Hardbound</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Category <span class="required" style="color:red;">*</span>
                                    </label>
									<div class="col-md-4">
                                        <select name="category_id" class="select2_single form-control" tabindex="-1" required="required">
										<?php
										$result= mysqli_query($con,"select * from category") or die (mysqli_error());
										while ($row= mysqli_fetch_array ($result) ){
										$id=$row['category_id'];
										?>
                                            <option value="<?php echo $row['category_id']; ?>"><?php echo $row['classname']; ?></option>
										<?php } ?>
                                        </select>
                                    </div>
                                </div>
                                
                                
                                
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Sub Category
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="subCat" id="last-name2" value="<?php echo $row['Sub_Category']; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Class No
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="classNo" id="last-name2" value="<?php echo $row['Class_No']; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Library
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="library" id="last-name2" value="<?php echo $row['Library']; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Location
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="location" id="last-name2" value="<?php echo $row['Location']; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Accession No
                                    </label>
                                    <div class="col-md-4">
                                       <input type="text" name="accessionNo" id="last-name2" value="<?php echo $row['Accession_No']; ?>" class="form-control col-md-7 col-xs-12">
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Edition
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="edition" id="last-name2" value="<?php echo $row['Edition']; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Source
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="source" id="last-name2" value="<?php echo $row['Source']; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Pages
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="pages" id="last-name2" value="<?php echo $row['Pages']; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Price
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="price" id="last-name2" value="<?php echo $row['Price']; ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                
                                
                                
                                
                                
                                
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="last-name">Book Image
                                    </label>
                                    <div class="col-md-4">
                                        <input type="file" style="height:44px;" name="image" id="last-name2" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <a href="book.php"><button type="button" class="btn btn-primary"><i class="fa fa-times-circle-o"></i> Cancel</button></a>
                                        <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus-square"></i> Submit</button>
                                    </div>
                                </div>
                            </form>
							
            <?php

include ('include/dbcon.php');
if (!isset($_FILES['image']['tmp_name'])) {
echo "";
}else{
    $file=$_FILES['image']['tmp_name'];
    $image = $_FILES["image"] ["name"];
    $image_name= addslashes($_FILES['image']['name']);
    $size = $_FILES["image"] ["size"];
    $error = $_FILES["image"] ["error"];

            if($size > 10000000) //conditions for the file
            {
            die("Format is not allowed or file size is too big!");
            }
            
        else
            {
//echo "KKKKKKK";
                move_uploaded_file($_FILES["image"]["tmp_name"],"upload/".$_FILES["image"]["name"]);			
                $book_image=$_FILES["image"]["name"];
                
                $book_title=$_POST['book_title'];
                $category_id=$_POST['category_id'];
                $author=$_POST['author'];
                $author_2=$_POST['author_2'];
                $author_3=$_POST['author_3'];
                $author_4=$_POST['author_4'];
                $author_5=$_POST['author_5'];
                $book_copies=$_POST['book_copies'];
                $book_pub=$_POST['book_pub'];
                $publisher_name=$_POST['publisher_name'];
                $isbn=$_POST['isbn'];
                $copyright_year=$_POST['copyright_year'];
                $status=$_POST['status'];
                
                $subCat=$_POST['subCat'];
					$classNo=$_POST['classNo'];
					$library=$_POST['library'];
					$location=$_POST['location'];
					$accessionNo=$_POST['accessionNo'];
					$edition=$_POST['edition'];
					$source=$_POST['source'];
					$pages=$_POST['pages'];
					$price=$_POST['price'];
                
                
                $pre = "APLG";
                //$mid = $_POST['new_barcode'];
                $mid = $accessionNo;
                $suf = "LMS";
                $gen = $pre.$mid.$suf;
                
                if ($status == 'Lost') {
                    $remark = 'Not Available';
                } elseif ($status == 'Damaged') {
                    $remark = 'Not Available';
                } else {
                    $remark = 'Available';
                }
                
            
                //echo "klfffklklv";
                
                $result=mysqli_query($con,"select * from book WHERE isbn = '$isbn' and status = 'New' ") or die (mysqli_error());
					$row=mysqli_num_rows($result);
					if ($row > 0)
					{
					echo "<script>alert('Book already active!'); window.location='add_book.php'</script>";
					}
					else
					{
                //echo "oooooooooooooooooooo";
                
if($accessionNo != '' || $accessionNo != null){
$sql = "insert into book (Sub_Category,Class_No,Library,Location,Accession_No,Edition,Source,Pages,Price,book_title,category_id,author,author_2,author_3,author_4,author_5,book_copies,book_pub,publisher_name,isbn,copyright_year,status,book_barcode,book_image,date_added,remarks) values ('$subCat','$classNo','$library','$location','$accessionNo','$edition','$source','$pages','$price','$book_title','$category_id','$author','$author_2','$author_3','$author_4','$author_5','$book_copies','$book_pub','$publisher_name','$isbn','$copyright_year','$status','$gen','$book_image',NOW(),'$remark')";
 
}else{
 $accessionNo = 0;
 //$qq = "SELECT MAX(Accession_No) FROM book";
 //$result = mysql_query($con , $qq);
    //$row = mysql_fetch_row($result);
    //$accessionNo = $row[0];
    
    $result=mysqli_query($con,"SELECT MAX(Accession_No) FROM book") or die (mysqli_error());
					$row=mysqli_num_rows($result);
					if ($row > 0){
					    $roww = mysqli_fetch_row($result);
					    $accessionNo = $roww[0];
						//echo "<script>alert('Book accession No :'+ $accessionNo); window.location='add_book.php'</script>";
						$accessionNo = $accessionNo + 1;
						echo "<script>alert('Book accession No :'+ $accessionNo); window.location='add_book.php'</script>";
					}
    
// echo "<script>alert('Book accession No :'+ $accessionNo); window.location='add_book.php'</script>";
/*
if (!$result) {
    die('Could not query:' . mysql_error());
}
$s = mysql_fetch_array($result);
$accessionNo = $s['Accession_No'];
 $accessionNo = $accessionNo+1;
 echo "<script>alert('Book accession No :'+ $accessionNo); window.location='add_book.php'</script>";
$sql = "insert into book (Sub_Category,Class_No,Library,Location,Accession_No,Edition,Source,Pages,Price,book_title,category_id,author,author_2,author_3,author_4,author_5,book_copies,book_pub,publisher_name,isbn,copyright_year,status,book_barcode,book_image,date_added,remarks) values ('$subCat','$classNo','$library','$location','$accessionNo','$edition','$source','$pages','$price','$book_title','$category_id','$author','$author_2','$author_3','$author_4','$author_5','$book_copies','$book_pub','$publisher_name','$isbn','$copyright_year','$status','$gen','$book_image',NOW(),'$remark')";
 
 */
 $gen = $pre.$accessionNo.$suf;
 $sql = "insert into book (Sub_Category,Class_No,Library,Location,Accession_No,Edition,Source,Pages,Price,book_title,category_id,author,author_2,author_3,author_4,author_5,book_copies,book_pub,publisher_name,isbn,copyright_year,status,book_barcode,book_image,date_added,remarks) values ('$subCat','$classNo','$library','$location','$accessionNo','$edition','$source','$pages','$price','$book_title','$category_id','$author','$author_2','$author_3','$author_4','$author_5','$book_copies','$book_pub','$publisher_name','$isbn','$copyright_year','$status','$gen','$book_image',NOW(),'$remark')";
 
 echo "<script>alert('Book successfully added!'); window.location='add_book.php'</script>";
 }
 
 	
 		
 		
 		if(mysqli_query($con, $sql)){
                //echo "klklklv";
                    echo "<script>alert('Book successfully added!'); window.location='add_book.php'</script>";
                } else{
                    //echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
                    echo "<script>alert('Book ERROR added!'); window.location='add_book.php'</script>";
                }
                
                $sql = "insert into barcode (pre_barcode,mid_barcode,suf_barcode) values ('$pre', '$mid', '$suf')";
                if(mysqli_query($con, $sql)){
                //echo "klklklv";
                    echo "<script>alert('Code successfully added!');</script>";
                } else{
                    //echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
                    echo "<script>alert('Code ERROR added!');</script>";
                }
                
                header("location: view_barcode.php?code=".$gen);
                
                // Close connection
                mysqli_close($con);
                
                
                
                
                
                }
                
                
                
                
                
                
                
                
                
            }
    }
?>
						
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>

<?php include ('footer.php'); ?>
