<!DOCTYPE html>
<html>


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Regd Campus List</title>

    <link href="<?=base_url()?>Adminassets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>Adminassets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?=base_url()?>Adminassets/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>Adminassets/css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <?php
        include 'layout/header.php';
        ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Register Campus List</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?= base_url('Dashbord')?>">Home</a>
                        </li>
                        <li>
                            Placement Management
                        </li>
                        <li class="active">
                            <strong>Register Campus List</strong>
                        </li>
                    </ol><br>
                </div>
            </div>
      			
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>List Of All Companies And Their Profile</h5>
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
				<th><center><b>Company Name</b></center></th>
				<th><center><b>Company Website</b></center></th>
				<th><center><b>Job Profile</b></center></th>
				<th><center><b>Job Location</b></center></th>
			 	<th><center><b>Target Branch</b></center></th>
			 	<th><center><b>Target Batch</b></center></th>
			 	<th><center><b>Job Position</b></center></th>
			 	<th><center><b>Placement Process</b></center></th>
			 	<th><center><b>Recruitment Criteria</b></center></th>
			 	<th><center><b>Package</b></center></th>
			 	<th><center><b>T & C</b></center></th>
			 	<th><center><b>Join Date</b></center></th>
			 	<th><center><b>Bond</b></center></th>
			 	<th><center><b>Date & Time</b></center></th>
			</tr>
                    </thead>
                    <tbody>
                         
                   <?php if($data){
                             foreach($data as $value): ?>
                                 
                             <tr>

                                     <td><?= $value->c_name?></td>
                                     <td><?= $value->c_website?></td>
                                     <td><?= $value->job_profile?></td>
                                     <td><?= $value->job_location?></td>
                                     <td><?= $value->trgt_branch?></td>
                                     <td><?= $value->trgt_batch?></td>
                                     <td><?= $value->job_position?></td>
                                     <td><?= $value-> plcmnt_process?></td>
                                     <td><?= $value->rcrtmnt_criteria?></td>
                                     <td><?= $value->salary_package?></td>
                                     <td><?= $value->t&c?></td>
                                     <td><?= $value->join_date?></td>
                                     <td><?= $value->bond?></td>
                                      <td><?= $value->dttime?></td>
                                </tr>
			             <?php endforeach;} ?>
                        
                       
                
                        
                        
                                <td class="center">
					<center><b>
                                             </b></center>
                                </td>
                        
                     
                            
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
