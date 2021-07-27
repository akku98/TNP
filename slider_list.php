<!DOCTYPE html>
<html>


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin | Shop View</title>

    <link href="<?=base_url()?>Adminassets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>Adminassets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?=base_url()?>Adminassets/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>Adminassets/css/style.css" rel="stylesheet">

	<!-- ================== BEGIN EXTRA JS ================== -->
	<script type="application/javascript" src="<?= base_url()?>Adminassets/js/sweet.js"></script>
	<!-- ================== END EXTRA JS ================== -->
</head>

<body>

    <div id="wrapper">

        <?php
        include 'layout/header.php';
        ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Slider Management</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?= base_url('Dashbord')?>">Home</a>
                        </li>
                        <li>
                            Slider Management
                        </li>
                        <li class="active">
                            <strong>Slider View</strong>
                        </li>
                    </ol>

                </div>
            </div>

			
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>List Of All Slider</h5><br>
                        <div class="ibox-tools">
                            <div class="form-group">
                                <div class="row text-center">
                                    <span class="text-success"><?php echo $this->session->flashdata("msg"); ?></span>
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
							<th><center><b>Slider Image</b></center></th>
							<th><center><b>Slider Name</b></center></th>
							<th><center><b>Slider Description</b></center></th>
							<th><center><b>Date&Time</b></center></th>
							<th><center><b>Action</b></center></th>

						</tr>
                    </thead>
                    <tbody>
                    
                        <tr class="gradeC" style="padding:20px;">
							<td><a href="#">
										<div class="image">
											<img alt="image" style="max-width:130px;max-height:130px;" class="img-responsive img-fluid img-thumbnail" title="Gallery" src="#">
										</div>
									</a>
							</td>
							
							<td><a href="#">
										<div class="name">
											slider name
										</div>
									</a>
							</td>

							<td><a href="#">
										<div class="image">
										description
										</div>
									</a>
							</td>

							<td><a href="#">
										<div class="image">
											dttime
										</div>
									</a>
							</td>

							<td><a href="#">
										<div class="image">
										action
										</div>
									</a>
							</td>
						
							
                       
                        </tr>
                    
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
