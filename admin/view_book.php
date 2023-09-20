<?php include ('header.php'); ?>

        <div class="page-title">
            <div class="title_left">
                <h3>
					<small>Home / Books</small> / View Individual
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-info"></i> Individual Information</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li>
							<a href="book.php" style="background:none;">
							<button class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button>
							</a>
							</li>
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

						<div class="table-responsive">
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered">
								
							<thead>
								<tr>
									<th>Action</th>
									<th style="width:100px;">Book Image</th>
									<th>Barcode</th>
									<th>Title</th>
									<th>Author/s</th>
									<th>ISBN</th>
									<th>Publication</th>
									<th>Publisher</th>
									<th>Copyright</th>
									<th>Copies</th>
									<th>Category</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
<?php
			   
		if (isset($_GET['book_id']))
		$id=$_GET['book_id'];
		
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		$id=$_POST["book_id"];
		
		$result1 = mysqli_query($con,"SELECT * FROM book 
		LEFT JOIN category on book.category_id = category.category_id 
		WHERE book_id='$id'");
		while($row = mysqli_fetch_array($result1)){
		?>
		
							
		
		
							<tr>
							
							
							
								<td>
									<a class="btn btn-primary" for="ViewAdmin" href="view_book.php<?php echo '?book_id='.$id; ?>">
										<i class="fa fa-search"></i>
									</a>
									<a class="btn btn-warning" for="ViewAdmin" href="edit_book.php<?php echo '?book_id='.$id; ?>">
									<i class="fa fa-edit"></i>
									</a>
								<!--	<a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php //echo $id;?>" data-toggle="modal" data-target="#delete<?php //echo $id;?>">
										<i class="glyphicon glyphicon-trash icon-white"></i>
									</a>
								-->
			
									<!-- delete modal user -->
									<div class="modal fade" id="delete<?php  echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-user"></i> User</h4>
										</div>
										<div class="modal-body">
												<div class="alert alert-danger">
													Are you sure you want to delete?
												</div>
												<div class="modal-footer">
												<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-remove icon-white"></i> No</button>
												<a href="delete_user.php<?php echo '?book_id='.$id; ?>" style="margin-bottom:5px;" class="btn btn-primary"><i class="glyphicon glyphicon-ok icon-white"></i> Yes</a>
												</div>
										</div>
										</div>
									</div>
									</div>
								</td> 	
							
							
							
							
								<td>
								<?php if($row['book_image'] != ""): ?>
								<img src="upload/<?php echo $row['book_image']; ?>" width="150px" height="180px" style="border:4px groove #CCCCCC; border-radius:5px;">
								<?php else: ?>
								<img src="images/book_image.jpg" width="150px" height="180px" style="border:4px groove #CCCCCC; border-radius:5px;">
								<?php endif; ?>
								</td> 
								<td><?php echo $row['book_barcode']; ?></td>
								<td style="word-wrap: break-word; width: 10em;"><?php echo $row['book_title']; ?></td>
								<td style="word-wrap: break-word; width: 10em;"><?php echo $row['author']."<br />".$row['author_2']."<br />".$row['author_3']."<br />".$row['author_4']."<br />".$row['author_5']; ?></td>
								<td><?php echo $row['isbn']; ?></td>
								<td><?php echo $row['book_pub']; ?></td>
								<td><?php echo $row['publisher_name']; ?></td>
								<td><?php echo $row['copyright_year']; ?></td> 
								<td><?php echo $row['book_copies']; ?></td> 
								<td><?php echo $row['classname']; ?></td> 
								<td><?php echo $row['status']; ?></td> 
							</tr>
							<?php } ?>
							</tbody>
							</table>
						</div>
						
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>

<?php include ('footer.php'); ?>
