<!DOCTYPE html>
<html>
<head>
	<title>PHP import Excel data</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1>Clear All Data</h1>
	<form method="POST" action="truncate.php" enctype="multipart/form-data">
		<div class="form-group">
			<button type="submit" name="submit" class="btn btn-success">Clear</button>
		</div>
	</form>
</div>

<div class="container">
	<h1>Upload Excel File (Please Use Given Format)</h1>
	
	<br>
	<h3>:OllllO:</h3>
	<br>
	
	<img src="../img/format.jpeg" alt="" width="100%" height="200px">
	
	<form method="POST" action="up.php" enctype="multipart/form-data">
		
		
		
		<div class="form-group">
			<label>Choose File</label>
			<input type="file" name="uploadFile" class="form-control" />
		</div>
		<div class="form-group">
			<button type="submit" name="submit" class="btn btn-success">Upload</button>
		</div>
	</form>
</div>






</body>
</html>
