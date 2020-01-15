<?php include("header.php")?>

<section class="content profile-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Student Profile
                <small class="text-muted">Welcome </small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-white btn-icon btn-round float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Student</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card member-card bg-dark">
                    <div class="header">
                        <h4 class="m-t-10 col-white"><?php echo $rws['Name']; ?></h4>
                    </div>
                    <div class="member-img">
                        <a href="javascript:void(0);">
                        
						<?php echo "<img src='image/".$rws['Picture']."' class='rounded-circle' alt='profile-image'"; ?>
                        </a>
                    </div>
                    <div class="body">
                        <!--div class="col-12">
                            <ul class="social-links list-unstyled">
                                <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>                            
                        </div-->
                        <hr>
                        <strong class="text-muted">Achievement</strong>
                        <p class="col-white"><?php echo $rws['Achievement']?></p>
                        <strong class="text-muted">Email</strong>
                        <p class="col-white"><?php echo $rws['Email']; ?></p>
                        <strong class="text-muted">DOB</strong>
                        <p class="col-white"><?php echo $rws['DOB'];?></p>
                        <hr>
                        <strong class="text-muted">Password</strong>
                        <address class="col-white"><?php echo $rws['Password']; ?></address>
                    </div>
                </div>
              
			  </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
                
                <div class="card">
                    <div class="body">
                        <p>
						It is a long established fact that a reader will be distracted by the readable content of a 
						page when looking at its layout. 
						
						</p>
                        <p>
						<video width="300" height="200" controls="controls" autoplay="autoplay">
	<source src="test_upload/<?php echo $all_video['video']; ?>" type="video/mp4">
	</video>
						</p>
                    </div>
                </div>                               
              
			  </div>
        </div>
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Bootstrap JS and jQuery v3.2.1 -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->  

<script src="assets/bundles/morrisscripts.bundle.js"></script> <!-- Morris Plugin Js --> 
<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="assets/js/pages/student-profile.js"></script>
</body>

<!-- Mirrored from thememakker.com/templates/oreo/university/html/students-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jan 2020 18:34:23 GMT -->
</html>