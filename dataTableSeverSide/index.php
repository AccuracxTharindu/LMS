<html>
<head>
<title>Datatables</title>
	<link rel="stylesheet"  href="datatables.min.css">	
	<link rel="stylesheet"  href="style.css">	
	<script src="jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="datatables.min.js" type="text/javascript"></script> 	
	<style>
	body {font-family: calibri;color:#4e7480;}
	</style>
</head>
<body>

<div class="container">
	<table id="contact-detail" class="display nowrap" cellspacing="0" width="100%">
	<thead>
		<!--
		<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Address</th>
		<th>Phone</th>
		<th>DOB</th>
		</tr>
		-->
		
								<tr>
									<!--<th>Action</th>
									<th style="width:100px;">Book Image</th>-->
									<th>BOOK-ID</th>
									<th>Barcode</th>
									<th>Title</th>
									<th>ISBN</th>
									<th>Author/s</th>
									<th>Copies</th>
									<!--<th>Category</th>-->
									<th>SubCategory</th>
									<th>ClassNo</th>
									<th>Status</th>
									<th>Remarks</th>
									<th>Library</th>
									<th>Location</th>
									<th>Added</th>
									
								</tr>
								
		
	</thead>
	</table>
	</div>


</body>
<script>
$(document).ready(function() {
    $('#contact-detail').dataTable({
		"scrollX": true,
		"pagingType": "numbers",
        "processing": true,
        "serverSide": true,
        "ajax": "server.php"
    } );
} );
</script>
</html>
