<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TNP Team List </title> 

    <link href="<?=base_url()?>Adminassets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>Adminassets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?=base_url()?>Adminassets/css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="<?=base_url()?>Adminassets/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>Adminassets/css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
        
        <?php
        include 'layout/header.php';
        ?>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>TNP Team Management</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?= base_url('Dashboard')?>">Home</a>
                        </li>
                        <li>
                            <a>TNP Management</a>
                        </li>
                        <li class="active">
                            <strong>TNP Team List</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>List Of All TNP Members</h5>
                        <div class="ibox-tools">
                            <div class="form-group">
                                <div class="row text-center"><br>
                                    <span class="text-success"></span>
                                </div>
                            </div>
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Branch</th>
                        <th>Mobile No.</th>
                        <th>About</th>
                        <th>Role</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                          <?php
                            if($data){
                              foreach($data as $value):?>
                                
                            <tr class="gradeC" style="padding:20px;">
							<td><a href="#">
										<div class="image">
											<img alt="image" style="max-width:250px;max-height:200px;" class="img-responsive img-fluid img-thumbnail" title="Gallery" src="<?=$value->image?>">
										</div>
									</a>
                            </td>
                              <td><?=$value->Name?></td>
                         
                              <td><?=$value->Branch?></td>
                          
                              <td><?=$value->mobileno?></td>
                          
                              <td><?=$value->about?></td>
                                
                               <td><?=$value->role?></td>
                            </tr>
                        <?php endforeach;} ?>
   
                    </tbody>
                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>
        <?php
        include 'layout/footer.php';
        ?>

        </div>
        



    <!-- Mainly scripts -->
    <script src="<?=base_url()?>Adminassets/js/jquery-3.1.1.min.js"></script>
    <script src="<?=base_url()?>Adminassets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>Adminassets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?=base_url()?>Adminassets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="<?=base_url()?>Adminassets/js/plugins/dataTables/datatables.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?=base_url()?>Adminassets/js/inspinia.js"></script>
    <script src="<?=base_url()?>Adminassets/js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>

</body>

</html>
