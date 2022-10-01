<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 CRUD - Edit User Demo</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
      <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.css"> -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker.min.css"> 
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker-standalone.css"> 
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/js/bootstrap-datetimepicker.min.js"></script>
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
    <form method="post" id="update_container" name="update_container" 
    action="<?= site_url('/update') ?>">
      <input type="hidden" name="id" id="id" value="<?php echo $container_obj['id']; ?>">
      <div class="form-group">
        <label>Container Number</label>
        <input type="text" name="container_no" class="form-control" value="<?php echo $container_obj['Container_no']; ?>">
      </div>
      <div class="form-group">
        <label>Size</label>
        <input type="number" name="size" class="form-control" value="<?php echo $container_obj['Size']; ?>">
      </div>
      <div class="form-group">
        <label>Type</label>
        <select name="type" class="form-control">
          <option value="Dry" <?php if($container_obj['Type'] == "Dry") echo 'selected'; else echo ''?>>Dry</option>
          <option value="Refeer" <?php if($container_obj['Type'] == "Refeer")  echo 'selected'; else echo ''?>>Refeer</option>
        </select>
      </div>
      <div class="form-group">
        <label>Gate In </label>
        <label>Old: <?php echo date('d/m/Y h:i A', strtotime($container_obj['Gate_In'])); ?></label>
        <input type="text" name="gate_in" class="datepicker form-control">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Update Data</button>
      </div>

      <div class="form-group">
        <button href="<?php echo base_url('/index.php/containers-list') ?>" class="btn btn-danger btn-block">Cancel</button>
      </div>
    </form>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    $('.datepicker').datetimepicker();
    if ($("#update_container").length > 0) {
      $("#update_container").validate({
        rules: {
          container_number: {
            required: true,
          },
          size: {
            required: true,
          },
          type: {
            required: true,
          },
          gate_in: {
            required: true,
          },
        },
        messages: {
          container_number: {
            required: "Container Number is required",
          },
          size: {
            required: "Size is required",
          },
          type: {
            required: "Type is required",
          },
          gate_in: {
            required: "Gate In is required",
          },
        },
      })
    }
  </script>
</body>
</html>