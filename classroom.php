<?php include("header.php")?>

<!-- Main Content -->
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>My Classes
                <small>Welcome</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-white btn-icon btn-round float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Class</a></li>
                </ul>                
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Manage</strong> Class</h2>
                        <ul class="header-dropdown">                            
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <ul class="nav nav-tabs padding-0">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#classlist">Class list</a></li>
                           
                        </ul>                        
                    </div>
                </div>
                <div class="tab-content">                   
                    <div class="tab-pane active" id="classlist">
                        <div class="card">
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Class Name</th>
                                                <th>Teacher</th>
                                                <th>Numeric Name</th>
                                                <th>Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>BCA Sem1</td>
                                              
                                                <td>Juan Freeman</td>
                                                <td>112</td>
                                                <td>
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-edit m-r-15"></i></a>
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-delete"></i></a>
                                                </td>
                                            </tr>
                                            
                                           
                                            <tr>
                                                <td>22</td>
                                                <td>BBA Sem1</td>
                                                
                                                <td>John</td>
                                                <td>1</td>
                                                <td>
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-edit m-r-15"></i></a>
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-delete"></i></a>
                                                </td>
                                            </tr>
                                            
                                            
                                            <tr>
                                                <td>10</td>
                                                <td>BCA Sem1</td>
                                               
                                                <td>Juan Freeman</td>
                                                <td>18</td>
                                                <td>
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-edit m-r-15"></i></a>
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-delete"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>BCA Sem2</td>
                                               
                                                <td>Juan Freeman</td>
                                                <td>19</td>
                                                <td>
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-edit m-r-15"></i></a>
                                                    <a href="javascript:void(0);"><i class="zmdi zmdi-delete"></i></a>
                                                </td>
                                            </tr>
                                            
                                                                                     
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="addclass">
                        <div class="card">
                            <div class="body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Class Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Student Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Teacher Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Numeric Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="btn btn-primary btn-lg btn-round btn-simple">Add Class</button>
                                    </div>
                                </div>
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