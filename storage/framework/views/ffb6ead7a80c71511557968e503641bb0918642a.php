<?php $__env->startSection('content'); ?>
    <!-- Page Content -->
    <div class="content">
        <h2 class="content-heading">Blank <small>Get Started</small></h2>
        <p>Create your own awesome project!</p>
    </div>
    <!-- END Page Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>