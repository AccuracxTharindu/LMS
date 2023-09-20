<?php


if(isset($_POST['f']) && function_exists($_POST['f'])){
	$_POST['f']();	
}

$oldReds = '';
$oldBlacks = '';
$oldBlues = '';


function sc(){
	$out = array();
	$id = $_POST['ID'];
	$jan = $_POST['JAN'];
	$feb = $_POST['FEB'];
	
	
	$con=mysqli_connect("localhost","apollolk_testing","85891720@testing","apollolk_testing")or die("Unable to connect");
					  if (!$con)
					  {
					  die('Could not connect: ' . mysql_error());
					  }
	
	
	if($id != ''){
	    
									$sql = "UPDATE tickets SET phone='$jan',tickets='$feb' ,send_status=1 ,book_date=now() where id = $id";
										if(mysqli_query($con, $sql)){
											//echo "Records added successfully.";
											$status = true;
												if($status){
												$out['type'] = "success";
												$out['msg'] = "Update successfully!";
												}else{
													$out['type'] = "error";
													$out['msg'] = "Update error!";
												}
												//echo $id ."=====". $comment;
												echo json_encode($out);
										} else{
											echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
										}
										
										$jan = '';
										$feb = '';
									

										
								
	$id = '';		
	}
	
	
	
}
?>
		
										