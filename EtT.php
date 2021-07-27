<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student database</title>

    <link href="<?=base_url()?>Adminassets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>Adminassets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?=base_url()?>Adminassets/css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="<?=base_url()?>Adminassets/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>Adminassets/css/style.css" rel="stylesheet">


</head>

<body>

    <div id="wrapper">
        
       

            
            <h2> ET&T</h2>
          

           

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                   
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                         <th>Action</th>
                        <th>Student Name</th>
                        <th>Gender</th>
                        <th>Roll No</th>
                        <th>Enroll No</th>
                        <th>Semester</th>
                        <th>Branch</th>
                        <th>Pass Out Year</th>
                        <th>Email Id</th>
                        <th>Mobile No</th>
                        <th>whatsapp No</th>
                        <th>Class X</th>
                        <th>ClassXII</th>
                        <th>Diploma</th>
                        <th>1st Sem</th>
                        <th>2nd Sem</th>
                        <th>3rd Sem</th>
                        <th>4th Sem</th>
                        <th>5th Sem</th>
                        <th>6th Sem</th>
                        <th>7th Sem</th>
                        <th>8th Sem</th>
                        <th>Overall %age</th>
                        <th>Live Backlogs</th>
                        <th>Detain</th>
                    </tr>
                    </thead>
                    <tbody>        
                       <?php
                             if($branch){
                                foreach($branch as $value):?>

                             
                    
                        <tr>
                            <td class="center">
                                <a href="<?= base_url('StdDbEdit')?>/<?=$value->d_id?>"  class="btn btn-success"style="margin-top:10px" >
                                <i class="fa fa-edit">&nbsp;&nbsp;&nbsp;<span  style="font-family:tahoma">Edit</span></i></a>
                            <a href="<?= base_url('StdDbDelete')?>/<?=$value->d_id?>"  class="btn btn-danger"style="margin-top:10px" >
                                <i class="fa fa-trash-o">&nbsp;&nbsp;&nbsp;<span  style="font-family:tahoma">Delete</span></i></a>
                        
                            <a href="<?= base_url('StdDbResume')?>/<?=$value->d_id?>"  class="btn btn-primary"style="margin-top:10px" >
                                <i class="fa fa-eye">&nbsp;&nbsp;&nbsp;<span  style="font-family:tahoma">Resume</span></i></a>
                            </td>
                            <td><?= $value->d_name?></td>
                            <td><?= $value->gender?></td>
                            <td><?= $value->roll_no?></td>
                            <td><?= $value->enroll_no?></td>
                            <td><?= $value->semester?></td>
                            <td><?= $value->branch?></td>
                            <td><?= $value->pass_out_yr?></td>
                            <td><?= $value->email_id?></td>
                            <td><?= $value->mob_no?></td>
                            <td><?= $value->whatsapp_no?></td>
                            <td><?= $value->X_per?>%</td>
                            <td><?= $value->XII_per?>%</td>
                            <td><?= $value->diploma_per?></td>
                            <td><?= $value->I_sem_per?></td>
                            <td><?= $value->II_sem_per?></td>
                            <td><?= $value->III_sem_per?></td>
                             <td><?= $value->IV_sem_per?></td>
                             <td><?= $value->V_sem_per?></td>
                             <td><?= $value->VI_sem_per?></td>
                             <td><?= $value->VII_sem_per?></td>
                             <td><?= $value->VIII_sem_per?></td>
                             <td><?= $value->overall_per?></td>
                             <td><?= $value->live_backlogs?></td>
                             <td><?= $value->detains?></td>
                            
      
                                 
                                
                          </tr>    
                       <?php endforeach; } ?> 
                      
                    </tbody>    
                </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>
       
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
