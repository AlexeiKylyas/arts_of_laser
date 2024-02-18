<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
    </head>
    <body>
        <?php echo $__env->yieldContent('content'); ?>
        <script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>
        <script src="<?php echo e(asset('js/bootstrap.bundle.js')); ?>"></script>
    </body>
</html>
<?php /**PATH /var/www/html/arts_of_laser_site/resources/views/layouts/admin.blade.php ENDPATH**/ ?>