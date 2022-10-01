<!DOCTYPE html>
<html lang="en">
<head>
    <title>CI MSSQL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.js"></script>

</head>
<body>

    <div class="jumbotron text-center">
        <h1>CRUD CI4 & MS SQL</h1>
    </div>

    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/container-form') ?>" class="btn btn-success mb-2">Add Container</a>
    </div>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table id="example" class="table" style="width:100%">
                    <thead>
                    <tr>
                        <th>Container Number</th>
                        <th>Size</th>
                        <th>Type</th>
                        <th>Gate In Date</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                  <?php if($containers): ?>
                  <?php foreach($containers as $container): ?>
                  <tr>
                     <td><?php echo $container['Container_no']; ?></td>
                     <td><?php echo $container['Size']; ?></td>
                     <td><?php echo $container['Type']; ?></td>
                     <td><?php echo $container['Gate_In']; ?></td>
                     <td>
                      <a href="<?php echo base_url('edit-view/'.$container['id']);?>" class="btn btn-primary btn-sm">Edit</a>
                      <a href="<?php echo base_url('delete/'.$container['id']);?>" class="btn btn-danger btn-sm">Delete</a>
                      </td>
                  </tr>
                 <?php endforeach; ?>
                 <?php endif; ?>
               </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
            'excel','csv'
            ]
        } );
    } );
</script>
</html>
