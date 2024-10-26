<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Karwan Noor Trading Co. | Register</title>

    <!-- Custom fonts for this template-->
    <link href="backend/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="backend/admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <!-- <form class="user" method="post" action=""> -->
                            <?php echo form_open('Signup',['name'=>'userregistration','autocomplete'=>'off']);?>
                                <div class="form-group row">
                                    <!--success message -->
                                    <?php if($this->session->flashdata('success')){?>
                                        <p style="color:green"><?php  echo $this->session->flashdata('success');?></p>	
                                    <?php } ?>
                                    <!--error message -->
                                    <?php if($this->session->flashdata('error')){?>
                                        <p style="color:red"><?php  echo $this->session->flashdata('error');?></p>	
                                    <?php } ?>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <?php echo form_input(['name'=>'firstname','class'=>'form-control form-control-user','value'=>set_value('firstname'),'placeholder'=>'First Name']);?>
                                        <?php echo form_error('firstname',"<div style='color:red'>","</div>");?>
                                    </div>
                                    <div class="col-sm-6">
                                        <?php echo form_input(['name'=>'lastname','class'=>'form-control form-control-user','value'=>set_value('lastname'),'placeholder'=>'Last Name']);?>
                                        <?php echo form_error('lastname',"<div style='color:red'>","</div>");?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <?php echo form_password(['name'=>'emailid','class'=>'form-control form-control-user','value'=>set_value('emailid'),'placeholder'=>'Email']);?>
                                    <?php echo form_error('emailid',"<div style='color:red'>","</div>");?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <?php echo form_password(['name'=>'password','class'=>'form-control form-control-user','value'=>set_value('password'),'placeholder'=>'Password']);?>
                                        <?php echo form_error('password',"<div style='color:red'>","</div>");?>
                                    </div>
                                    <div class="col-sm-6">
                                        <?php echo form_input(['name'=>'confirmpassword','class'=>'form-control form-control-user','value'=>set_value('confirmpassword'),'placeholder'=>'Confirm Password']);?>
                                        <?php echo form_error('confirmpassword',"<div style='color:red'>","</div>");?>
                                    </div>
                                </div>
                                <?php echo form_submit(['name'=>'insert','value'=>'Submit','class'=>'btn btn-primary btn-user btn-block']);?>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <?php echo form_close();?>
                            <hr>
                            <!-- <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="backend/admin/vendor/jquery/jquery.min.js"></script>
    <script src="backend/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="backend/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="backend/admin/js/sb-admin-2.min.js"></script>

</body>

</html>