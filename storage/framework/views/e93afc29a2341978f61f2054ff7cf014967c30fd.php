<!doctype html>
<html lang="<?php echo e(config('app.locale')); ?>" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Case Manage</title>

        <meta name="description" content="Case Manage">
        <meta name="author" content="3-RD Co.,Ltd.">
        <meta name="robots" content="noindex, nofollow">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <!-- Icons -->
        <link rel="shortcut icon" href="<?php echo e(asset('media/favicons/favicon.png')); ?>">
        <link rel="icon" sizes="192x192" type="image/png" href="<?php echo e(asset('media/favicons/favicon-192x192.png')); ?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('media/favicons/apple-touch-icon-180x180.png')); ?>">

        <!-- Fonts and Styles -->
        <?php echo $__env->yieldContent('css_before'); ?>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="<?php echo e(mix('/css/codebase.css')); ?>">
         <link rel="stylesheet" id="css-main" href="/js/plugins/sweetalert2/sweetalert2.min.css">
        <link rel="stylesheet" id="css-main" href="<?php echo e(mix('/css/3rd-caseManage-v1.css')); ?>">

        <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="<?php echo e(mix('/css/themes/corporate.css')); ?>"> -->
        <?php echo $__env->yieldContent('css_after'); ?>

        <!-- Scripts -->
        <script>window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?>;</script>
    </head>
    <body>
        <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed side-trans-enabled sidebar-inverse">
            <!-- Side Overlay-->        
            <?php echo $__env->make('layouts.partials._sideoverlay', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <?php echo $__env->make('layouts.partials._sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- END Sidebar -->

            <!-- Header -->         
            <?php echo $__env->make('layouts.partials._topnav', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <?php echo $__env->make('layouts.partials._footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="<?php echo e(mix('js/codebase.app.js')); ?>"></script>

        <!-- Laravel Scaffolding JS -->
        <script src="<?php echo e(mix('js/laravel.app.js')); ?>"></script>

        <?php echo $__env->yieldContent('js_after'); ?>
    </body>
</html>
