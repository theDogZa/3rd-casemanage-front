<?php $__env->startSection('content'); ?>
<div class="bg-body-dark bg-pattern" style="background-image: url('assets/media/various/bg-pattern-inverse.png');">
    <div class="row mx-0 justify-content-center">
        <div class="hero-static col-lg-6 col-xl-4">
            <div class="content content-full overflow-hidden">
                <div class="py-30 text-center">
                    <a class="link-effect font-w700" href="index.php">
                        <!-- <i class="si si-fire"></i> -->
                        <span class="font-size-xl text-primary-dark">Case</span><span class="font-size-xl">Manage</span>
                    </a>
                    <!-- <h1 class="h4 font-w700 mt-30 mb-10">Welcome to Your Dashboard</h1>
                    <h2 class="h5 font-w400 text-muted mb-0">It’s a great day today!</h2> -->
                </div>
               
                <form class="js-validation-bootstrap" action="/login" method="post">
                    <div class="block block-themed block-rounded block-shadow">
                        <div class="block-header bg-gd-dusk">
                            <h3 class="block-title">Please Sign In</h3>
                            <!-- <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div> -->
                        </div>
                        <div class="block-content">
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="login-username">Username <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Enter a username..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="login-password">Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="val-password" name="val-password" placeholder="Choose a safe one..">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-sm-6 d-sm-flex align-items-center push">
                                    <div class="custom-control custom-checkbox mr-auto ml-0 mb-0">
                                        <!-- <input type="checkbox" class="custom-control-input" id="login-remember-me" name="login-remember-me">
                                        <label class="custom-control-label" for="login-remember-me">Remember Me</label> -->
                                    </div>
                                </div>
                                <div class="col-sm-6 text-sm-right push">
                                    <button type="submit" class="btn btn-alt-primary">
                                        <i class="si si-login mr-10"></i> Sign In
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="block-content bg-body-light">
                            <div class="form-group text-center">
                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="op_auth_signup3.php">
                                    <i class="fa fa-plus mr-5"></i> Create Account
                                </a>
                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="op_auth_reminder3.php">
                                    <i class="fa fa-warning mr-5"></i> Forgot Password
                                </a>
                            </div>
                        </div> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

 <?php $__env->stopSection(); ?>
 <?php $__env->startSection('js_after'); ?>

<script src="js/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="js/plugins/jquery-validation/additional-methods.js"></script>
<script src="js/plugins/jquery-validation/be_forms_validation.min.js"></script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>