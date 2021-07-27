<!DOCTYPE html>
<html>


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Career Preference List</title>

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
                <div class="col-lg-9">
                    <h2>Career Management</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?= base_url('Dashbord')?>">Home</a>
                        </li>
                        <li>
                            Student Management
                        </li>
                        <li class="active">
                            <strong>Career Preference List</strong>
                        </li>
                    </ol><br>
                </div>
            </div>
         <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>List Of All Students and Their Career Preference List</h5>
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
                        <th>Student Name</th>
                        <th>Gender</th>
                        <th>Branch</th>
                        <th>Pass Out Year</th>
                        <th>Semester</th>
                        <th>Email Id</th>
                        <th>Mobile No</th>
                        <th>whatsapp No</th>
                        <th>Want Job Through T&P Dept Of RIT(yes/no)</th>
                        <th>First And Primary Requirement Job(yes/no)</th>
                        <th>Want To JOin Family Business(yes/no)</th>
                        <th>Want To Become Entrepreneur/Self Employment(yes/no)</th>
                        <th>Higher Studies</th>
                        <th>Government Job</th>
                        <th>Location Preference for Job</th>
                        <th>Indusrty Preference</th>
                    </tr>
                    </thead>
                     <tbody>        
                      <?php
                    if($cpf){
                        if($dbf){
                            foreach($cpf as $data):

                            foreach($dbf as $value):
                        if($data->d_id==$value->d_id){
                        ?>
                
                        <tr>
                            
                            <td><?= $value->d_name?></td>                           
                            <td><?= $value->gender?></td>
                            <td><?= $value->branch?></td>
                            <td><?= $value->pass_out_yr?></td>
                            <td><?= $value->semester?></td>
                            <td><?= $value->email_id?></td>
                            <td><?= $value->mob_no?></td>
                            <td><?= $value->whatsapp_no?></td>
                            <td><?= $data->job_thru_tnp?></td>
                            <td><?= $data->primary_req_job?></td>
                            <td><?= $data->join_fmly_bsns?></td>
                            <td><?= $data->self_emplymnt?></td>
                            <td><?= $data->higher_study?></td>
                            <td><?= $data->govt_job?></td>
                            <td><?= $data->location_for_job?></td>
                            <td><?= $data->industry_prfrnce?></td>
                                         

                              </tr>    
                        <?php }
               endforeach;}
               endforeach;}
               ?>  
                     
                      
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
