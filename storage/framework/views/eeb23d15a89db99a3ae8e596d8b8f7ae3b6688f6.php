<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.app','data' => []]); ?>
<?php $component->withName('app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <header class="mb-6">
        <div class="">
            <img src="avatars/3/<?php echo e($user->avatar); ?> " alt="" class="rounded-lg border-none h-full mb-2 bg-gray-400 mr-auto ml-auto" style="height:300px; width: 300px;">
        </div>

        <div class="justify-between items-center mb-3 p-5 pt-0">
            <div class="mb-3">
                <h2 class="font-bold text-2xl mb-0 text-center break-all"><?php echo e($user->username); ?>'s profile</h2>
                <h4 class="text-sm break-all">Name - <?php echo e($user->name); ?></h4><hr>
                <p class="text-sm">Time Joined - <?php echo e($user->created_at->diffForHumans()); ?></p><hr>
                <!-- <p class="text-sm"><?php echo e($user->birthday ? 'Birthday - ' . $user->birthday : ''); ?></p> -->
                <p class="text-sm"><?php echo e($user->gender ? 'Gender - ' . $user->gender : ''); ?></p><hr>
                <p class="text-sm break-all"><?php echo e($user->quote ? 'My Favourite Quote - ' . $user->quote : ''); ?></p>
            </div>

            <div class="flex">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit', $user)): ?>
                    <button><a href="<?php echo e($user->path('edit')); ?>" class="text-xs py-2 px-2 text-black bg-green-400 rounded-full mr-2">Edit Profile</a></button>
                <?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.follow-button','data' => ['user' => $user]]); ?>
<?php $component->withName('follow-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user)]); ?> <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            </div>
        </div>
    </header>

    <hr class="mb-3">
    <?php echo $__env->make('timeline', [
        'chats' => $chats
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\Users\HP\Documents\FOFX\laravel\Chateet\resources\views/profiles/show.blade.php ENDPATH**/ ?>