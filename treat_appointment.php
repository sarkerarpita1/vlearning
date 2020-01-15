<?php include("header.php")?>

<!-- Main Content -->
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-5 col-sm-12">
                <h2>Appointments
                <small>Welcome </small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-7 col-sm-12">                
                <button class="btn btn-white btn-icon btn-round float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                    <li class="breadcrumb-item"><a href="departments.html">Appointments</a></li>
                    <li class="breadcrumb-item active">Treat</li>
                </ul>                
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">                
                <div class="card">
                    <div class="header">
                        <h2><strong>Appointments</strong> Info <small>Description text here...</small></h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Department Name ">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Head of Department">
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="No. of Students ">
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">                            
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea rows="4" class="form-control no-resize" placeholder="Brief"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-raised btn-round btn-primary">Submit</button>
                                <button type="submit" class="btn btn-raised btn-round btn-default">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
              
			  </div>            
        </div>
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<!-- Jquery DataTable Plugin Js --> 
<script src="assets/bundles/datatablescripts.bundle.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/tables/jquery-datatable.js"></script>
</body>

</html>