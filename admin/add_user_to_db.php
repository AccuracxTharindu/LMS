<?php	
include ('header.php');
							include ('include/dbcon.php');
                if (isset($_POST['submit'])){
							
		//					if (!isset($_FILES['image']['tmp_name'])) {
		//					echo "";
		//					}else{
		//					$file=$_FILES['image']['tmp_name'];
		//					$image = $_FILES["image"] ["name"];
		//					$image_name= addslashes($_FILES['image']['name']);
		//					$size = $_FILES["image"] ["size"];
		//					$error = $_FILES["image"] ["error"];
		//					
		//					{
		//								if($size > 10000000) //conditions for the file
		//								{
		//								die("Format is not allowed or file size is too big!");
		//								}
		//								
		//							else
		//								{
		//
		//							move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
		//							$profile=$_FILES["image"]["name"];
									$school_number = $_POST['school_number'];
									$firstname = $_POST['firstname'];
									$middlename = $_POST['middlename'];
									$lastname = $_POST['lastname'];
									$contact = $_POST['contact'];
									$gender = $_POST['gender'];
									$address = $_POST['address'];
									$type = $_POST['type'];
									$level = $_POST['level'];
									$section = $_POST['section'];
					//echo "jhbsvhjsv";
					$result=mysqli_query($con,"select * from user WHERE school_number='$school_number' ") or die (mysqli_error());
					$row=mysqli_num_rows($result);
					if ($row > 0)
					{
					echo "<script>alert('ID Number already active!'); window.location='user.php'</script>";
					}
					else
					{
					
$sql = "insert into user (school_number,firstname, middlename, lastname, contact, gender,address, type, level, section, status, user_added) values ('$school_number','$firstname', '$middlename', '$lastname', '$contact', '$gender', '$address', '$type', '$level', '$section', 'Active', NOW())";
					if(mysqli_query($con, $sql)){
					    echo "<script>alert('User successfully added!'); window.location='user.php'</script>";
					} else{
					    //echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
					    echo "<script>alert('User ERROR added!'); window.location='user.php'</script>";
					}
					 
					// Close connection
					mysqli_close($con);
					
					/*
					
mysqli_query($con,"insert into user (school_number,firstname, middlename, lastname, contact, gender,address, type, level, section, status, user_added) values ('$school_number','$firstname', '$middlename', '$lastname', '$contact', '$gender', '$address', '$type', '$level', '$section', 'Active', NOW())")or die(mysqli_error());
						echo "<script>alert('User successfully added!'); window.location='user.php'</script>";
						*/
						
					}
			//						}
			//						}
							}
								?>
