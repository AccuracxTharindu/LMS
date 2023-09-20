<?php

if(isset($_POST['f']) && function_exists($_POST['f'])){
	$_POST['f']();	
}

function FEB(){
	$out = array();
	$id = $_POST['id2'];
	$comment = $_POST['comment2'];
	
	$con=mysqli_connect("localhost","apollolk_testing","85891720@testing","apollolk_testing")or die("Unable to connect");
					  if (!$con)
					  {
					  die('Could not connect: ' . mysql_error());
					  }
	
	
	if($id != '' && $comment != ''){
		
									$sql = "UPDATE registers_marks SET feb='$comment' where id = $id";
										if(mysqli_query($con, $sql)){
											//echo "Records added successfully.";
											$status = true;
												if($status){
												$out['type'] = "success";
												$out['msg'] = "Comment saved successfully!";
												}else{
													$out['type'] = "error";
													$out['msg'] = "Comment saved error!";
												}
												//echo $id ."=====". $comment;
												echo json_encode($out);
										} else{
											echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
										}	
									

										
								
	$id = '';		
	}
	
	
}

function JAN(){
	$out = array();
	$id = $_POST['id1'];
	$comment = $_POST['comment1'];
	
	$con=mysqli_connect("localhost","apollolk_testing","85891720@testing","apollolk_testing")or die("Unable to connect");
					  if (!$con)
					  {
					  die('Could not connect: ' . mysql_error());
					  }
	
	
	if($id != '' && $comment != ''){
		
										
						$sql = "UPDATE registers_marks SET jan='$comment' where id = $id";
										if(mysqli_query($con, $sql)){
											//echo "Records added successfully.";
											$status = true;
												if($status){
												$out['type'] = "success";
												$out['msg'] = "Comment saved successfully!";
												}else{
													$out['type'] = "error";
													$out['msg'] = "Comment saved error!";
												}
												//echo $id ."=====". $comment;
												echo json_encode($out);
										} else{
											echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
										}			

										
								
	$id = '';		
	}
	
	
}

function MAR(){
	$out = array();
	$id = $_POST['id3'];
	$comment = $_POST['comment3'];
	
	$con=mysqli_connect("localhost","apollolk_testing","85891720@testing","apollolk_testing")or die("Unable to connect");
					  if (!$con)
					  {
					  die('Could not connect: ' . mysql_error());
					  }
	
	
	if($id != '' && $comment != ''){
		
										
						$sql = "UPDATE registers_marks SET march='$comment' where id = $id";
										if(mysqli_query($con, $sql)){
											//echo "Records added successfully.";
											$status = true;
												if($status){
												$out['type'] = "success";
												$out['msg'] = "Comment saved successfully!";
												}else{
													$out['type'] = "error";
													$out['msg'] = "Comment saved error!";
												}
												//echo $id ."=====". $comment;
												echo json_encode($out);
										} else{
											echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
										}			

										
								
	$id = '';		
	}
	
	
}

?>
		
										