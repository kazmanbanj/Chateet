<div class="border border-gray-300 rounded-lg">
    <?php $__empty_1 = true; $__currentLoopData = $chats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <?php echo $__env->make('chat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p class="p-4">No chats yet</p>
    <?php endif; ?>

    <?php echo e($chats->links()); ?>

</div><?php /**PATH C:\Users\HP\Documents\FOFX\laravel\Chateet\resources\views/timeline.blade.php ENDPATH**/ ?>