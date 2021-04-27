<div class="border border-gray-300 rounded-lg">
    <div class="flex p-4 <?php echo e($loop->last ? '' : 'border-b border-b-gray-400'); ?> ">
        <div class="mr-2 flex-shrink-0">
            <a href="<?php echo e($chat->user->path()); ?>">
                <img src="<?php echo URL::asset('avatars/'. $chat->user->id .'/'. str_replace('http://127.0.0.1:8000/', '', $chat->user->avatar)); ?>" alt="<?php echo e($chat->user->name); ?>'s avatar" class="rounded-full mr-2" style="width:50px; height:50px;">
            </a>
        </div>

        <div>
            <a href="<?php echo e($chat->user->path()); ?>">
                <h5 class="font-bold"><?php echo e($chat->user->name); ?></h5>
            </a>
            <h6 class="text-sm text-gray-600">Posted <?php echo e($chat->created_at->diffForHumans()); ?></h6>
            <p class="text-sm mb-3"><?php echo e($chat->body); ?></p>

            <!-- zondicon icons here -->
            <?php if(auth()->guard()->check()): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.like-buttons','data' => ['chat' => $chat]]); ?>
<?php $component->withName('like-buttons'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['chat' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($chat)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</div><?php /**PATH C:\Users\HP\Documents\FOFX\laravel\Chateet\resources\views/chat.blade.php ENDPATH**/ ?>