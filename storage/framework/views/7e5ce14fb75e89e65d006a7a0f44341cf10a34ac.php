<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chateet</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
</head>
<body>
    <div id="app">
        <section class="px-8 py-4 mb-4 flex">
            <header class="container mx-auto">
                <h1 class="flex">
                    <a href="<?php echo e(route('home')); ?>">
                        <img src="/images/test.ico" alt="Chateet">
                    </a> 
                    Chateet
                </h1>
            </header>
        </section>
        <div class="links">

            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(url('/chats')); ?>" class="text-sm text-gray-700 underline">Home</a>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 underline">Login</a>
                <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 underline">Register</a>
            <?php endif; ?>
        </div>
    </div>



</body>
</html>
<?php /**PATH C:\Users\HP\Documents\FOFX\laravel\Chateet\resources\views\components\welcome.blade.php ENDPATH**/ ?>