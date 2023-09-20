<html>
<head>
		<link rel="stylesheet" type="text/css" href="../audit/css/css2.css"/>
		<!--<link rel="stylesheet" type="text/css" href="./excel/css/css1.css"/>-->
		<link rel="stylesheet" type="text/css" href="../audit/excel/css/css2.css"/>
		<script type="text/javascript" src="../audit/js/js3.js"></script>
		<script type="text/javascript" src="../audit/js/js4.js"></script>
		<!--<script type="text/javascript" src="./excel/js/js1.js"></script>
		<script type="text/javascript" src="./excel/js/js2.js"></script>-->
		<script type="text/javascript" src="../audit/excel/js/js3.js"></script>
		<script type="text/javascript" src="../audit/excel/js/js4.js"></script>
		<script type="text/javascript" src="../audit/excel/js/js5.js"></script>
		<script type="text/javascript" src="../audit/excel/js/js6.js"></script>
		<script type="text/javascript" src="../audit/excel/js/js7.js"></script>
		<script type="text/javascript" src="../audit/excel/js/js8.js"></script>
		
		<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
          
		
		<title>Lyceum Shuffle</title>
		<style>
        tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
		}
		</style>
		
		
		
		
		<script>
		$(document).ready(function() {
				
			
			
				// Setup - add a text input to each footer cell
				$('#example tfoot th').each( function () {
					
					var title = $(this).text();
					$(this).html( '<input type="text" placeholder="Search '+title+'" />' );
				} );
			 
				// DataTable
				var table = $('#example').DataTable({
					dom: 'Bfrtip',
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
				],
					initComplete: function () {
						// Apply the search
						this.api().columns().every( function () {
							var that = this;
 
                $( 'input', this.footer() ).on( 'keyup change clear', function () {
                    if ( that.search() !== this.value ) {
                        that
										.search( this.value )
										.draw();
								}
							} );
						} );
					}
				});
				
			
 
	} );
		
	
	
</script>
		
		
	
		
		
</head>
<body>

		

	
<div id="exceed90DIV" style="padding:5px">

<hr>
<br>
<br>
<h3>Gampaha Success Transactions</h3>
<br>
				<?php
				$con=mysqli_connect("localhost","apollolk_testing","85891720@testing","apollolk_testing")or die("Unable to connect");
					  if (!$con)
					  {
					  die('Could not connect: ' . mysql_error());
					  }
				
				
					
					if($rt = mysqli_query($con,"SELECT * FROM shuffle")){

					echo "<center><table id='example' class='display' style='width:100%; border-collapse: separate; border-spacing: 10px; *border-collapse: expression('separate', cellSpacing = '10px');'>
					<thead>
						<tr>
						<th><center>User</center></th>
						<th><center>Name</center></th>
						<th><center>Gender</center></th>
						<th><center>Old Class</center></th>
						<th><center>New Class</center></th>
						<th><center>House</center></th>
						<th><center>Average</center></th>
						<th><center>Lanuage</center></th>
						<th><center>Religeon</center></th>
						</tr>
					</thead>
					<tbody>";
								if(mysqli_num_rows($rt) > 0){
									while($rowt = mysqli_fetch_assoc($rt)){
										echo "<tr>";
										echo "<td><center>" . $rowt['index_no'] . "</center></td>";
										echo "<td><center>" . $rowt['name'] . "</center></td>";
										echo "<td><center>" . $rowt['gender'] . "</center></td>";
										echo "<td><center>" . $rowt['old_class'] . "</center></td>";
										echo "<td><center>" . $rowt['new_class'] . "</center></td>";
										echo "<td><center>" . $rowt['house'] . "</center></td>";
										echo "<td><center>" . $rowt['marks'] . "</center></td>";
										echo "<td><center>" . $rowt['language'] . "</center></td>";
										echo "<td><center>" . $rowt['religeon'] . "</center></td>";
										echo "</tr>";
									}
								}
					}

					echo "</tbody>
					<tfoot>
						<tr>
						<th><center></center></th>
						<th><center></center></th>
						<th><center></center></th>
						<th><center></center></th>
						<th><center></center></th>
						<th><center></center></th>
						<th><center></center></th>
						<th><center></center></th>
						<th><center></center></th>
						</tr>
					</tfoot>
					</table></center>";
				
				?>
</div>


		
</body>
</html>