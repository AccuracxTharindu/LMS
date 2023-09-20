<?php include ('header.php'); ?>

        <div class="page-title">
            <div class="title_left">
                <h3>
					<small>Home /</small> Books
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
							<a href="book_print.php" target="_blank" style="background:none;">
							<button class="btn btn-danger pull-right"><i class="fa fa-print"></i> Print Books List</button>
							</a>
							<a href="print_barcode1.php" target="_blank" style="background:none;">
							<button class="btn btn-danger pull-right"><i class="fa fa-print"></i> Print Books Barcode</button>
							</a>
							<br />
							<br />
                    <div class="x_title">
                        <h2><i class="fa fa-book"></i> Book List</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li>
							<a href="add_book.php" style="background:none;">
							<button class="btn btn-primary"><i class="fa fa-plus"></i> Add Book</button>
							</a>
							</li>
							
							
						<li>
						<a href="../addBook/uploadExcel.php" style="background:none;">
							<button class="btn btn-success btn-outline"><i class="fa fa-upload"></i> Import Books</button>
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
							<ul class="nav nav-pills">
								<li role="presentation" class="active"><a href="book.php">All</a></li>
								<!--<li role="presentation" ><a href="new_books.php">New Books</a></li>-->
								<li role="presentation"><a href="old_books.php">Old Books</a></li>
								<li role="presentation"><a href="lost_books.php">Lost Books</a></li>
								<li role="presentation"><a href="damage_books.php">Damaged Books</a></li>
								<li role="presentation"><a href="sub_rep.php">Subject for Replacement Books</a></li>
								<li role="presentation"><a href="hard_bound.php">Hardbound Books</a></li>
							</ul>
                        <div class="clearfix"></div>
                    </div>
                    
                    
                    
                    
                    
                    
                    <div class="x_content">
                        <!-- content starts here -->

				<center><a href="../dataTableSeverSide/" target="_blank"><h2>Click Here for Load All Books Data</h2></a></center>
						
                        <!-- content ends here -->
                    </div>
                    
                    
                    <!-- form  -->
                    
                    	<div class="page-title">
			    <div class="title_left">
				<h3>
							View / Edit / Delete Book
				</h3>
			    </div>
			</div>
        		<div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                <br>
                    <div class="x_title">
                    <br>
                        <h2>Search Book</h2>
                        
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->

                            <form method="post" enctype="multipart/form-data" class="form-horizontal form-label-left" action="view_book.php">
							
							
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="first-name">Enter Book ID <span class="required" style="color:red;">*</span>
                                    </label>
                                    <div class="col-md-4">
                                        <input type="text" name="book_id" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
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
                                
                     			
                        <!-- content ends here -->
                    </div>
                    </div>
                    </div>
                    </div>
                    
                    <!-- end form  -->
                    
                </div>
            </div>
        </div>
        
        

<?php include ('footer.php'); ?>
