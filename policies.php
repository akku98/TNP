<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Placement policy</title>

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
                    <h2>Placement Policy</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?= base_url('Dashboard')?>">Home</a>
                        </li>
                       
                    </ol>
                </div>
                <div class="col-lg-2">
                  
                </div>
            </div>
            


           

        <div class="wrapper wrapper-content animated fadeInRight" id="loaddata">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                   
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                         
                        <th>Policies</th>
                        
                        <th>Action</th>
                        
                    </tr>
                    </thead>
                    <tbody>        
                       <?php
                            if($policy){
                              foreach($policy as $value):?>

                             
                    
                        <tr>
                           
                            <td><?= $value->policy?></td>
                             <td class="center">
                                <!-- <a href="<?= base_url('StdDbEdit')?>/<?=$value->d_id?>"  class="btn btn-success"style="margin-top:10px" >
                                <i class="fa fa-edit">&nbsp;&nbsp;&nbsp;<span  style="font-family:tahoma">Edit</span></i></a> -->
                            
                        
                            <a href="<?= base_url('policyupdate')?>/<?=$value->id?>"  class="btn btn-primary"style="margin-top:10px" >
                                <i class="fa fa-eye">&nbsp;&nbsp;&nbsp;<span  style="font-family:tahoma">Update</span></i></a>
                            </td>
                            
      
                                 
                                
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
    

        
    </script>


</body>

</html>
