<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 CRUD - Edit User Demo</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    .container {
      max-width: 500px;
    }
    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>
<body>
  <div class="container" style="margin-top: 100px;">
  	<a href="<?php echo base_url('generate') ?>">
        Download PDF
    </a>
  	<table class="table">
  		<tbody>
  			<tr>
  				<td>Container Number</td>
  				<td><?php echo $container_obj['Container_no']; ?></td>
  			</tr>
  			<tr>
  				<td>Size</td>
  				<td><?php echo $container_obj['Size']; ?></td>
  			</tr>
  			<tr>
  				<td>Type</td>
  				<td><?php echo $container_obj['Type']; ?></td>
  			</tr>
  			<tr>
  				<td>Gate In</td>
  				<td><?php echo $container_obj['Gate_In']; ?></td>
  			</tr>
  		</tbody>
  	</table>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
</body>
</html>