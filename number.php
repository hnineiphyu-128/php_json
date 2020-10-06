<?php 

	$num1 = 5630;
	$num2 = 2534;

	$add = $num1 + $num2;
	$sub = $num1 - $num2;
	$mul = $num1 * $num2;
	$div = $num1 / $num2;
	$mod = $num1 % $num2;

	$total = $add + $sub + $div + $mod;

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<!-- CSS Link -->
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
 </head>
 <body>

 	<div class="container">
 		<h3 class="text-center my-5">PHP Code in HTML Tag</h3>
	 	<div class="table-responsive">
	 		<table class="table table-bordered table-dark">
	 			<thead>
	 				<tr>
	 					<th>No.</th>
	 					<th>Operator</th>
	 					<th>Option</th>
	 					<th>Result</th>
	 				</tr>
	 			</thead>
	 			<tbody>
	 				<tr>
	 					<td>1.</td>
	 					<td>Add</td>
	 					<td><?php echo $num1.' + '.$num2; ?></td>
	 					<td><?php echo $add; ?></td>
	 				</tr>
	 				<tr>
	 					<td>2.</td>
	 					<td>Sub</td>
	 					<td><?php echo $num1.' - '.$num2; ?></td>
	 					<td><?php echo $sub; ?></td>
	 				</tr>
	 				<tr>
	 					<td>3.</td>
	 					<td>Mul</td>
	 					<td><?php echo $num1.' * '.$num2; ?></td>
	 					<td><?php echo $mul; ?></td>
	 				</tr>
	 				<tr>
	 					<td>4.</td>
	 					<td>Div</td>
	 					<td><?php echo $num1.' / '.$num2; ?></td>
	 					<td><?php echo $div; ?></td>
	 				</tr>
	 				<tr>
	 					<td>5.</td>
	 					<td>Mod</td>
	 					<td><?php echo $num1.' % '.$num2; ?></td>
	 					<td><?php echo $mod; ?></td>
	 				</tr>
	 				<tr>
	 					<td colspan="3">Total</td>
	 					<td><?php echo $total; ?></td>
	 				</tr>
	 			</tbody>
	 		</table>
	 	</div>
 	</div>
 
 </body>
 </html>