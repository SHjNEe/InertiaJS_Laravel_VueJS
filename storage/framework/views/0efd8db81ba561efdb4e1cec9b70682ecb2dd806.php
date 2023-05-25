<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Larazillow</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css" />

    <?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
    <?php if (!isset($__inertiaSsrDispatched)) { $__inertiaSsrDispatched = true; $__inertiaSsrResponse = app(\Inertia\Ssr\Gateway::class)->dispatch($page); }  if ($__inertiaSsrResponse) { echo $__inertiaSsrResponse->head; } ?>
</head>

<body class="bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-300"
    <?php if (!isset($__inertiaSsrDispatched)) { $__inertiaSsrDispatched = true; $__inertiaSsrResponse = app(\Inertia\Ssr\Gateway::class)->dispatch($page); }  if ($__inertiaSsrResponse) { echo $__inertiaSsrResponse->body; } else { ?><div id="app" data-page="<?php echo e(json_encode($page)); ?>"></div><?php } ?>
</body>

</html>
 <?php /**PATH /Users/trungs_macos/Desktop/Workspace/InertiaJS_Laravel_VueJS/resources/views/app.blade.php ENDPATH**/ ?>