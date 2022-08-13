<div class="bg-gray-200 rounded-lg border-gray-700 py-4 px-6">
<h3 class="font-bold text-xl mb-4 text-center">Following</h3>
<ul>
    <?php $__empty_1 = true; $__currentLoopData = auth()->user()->follows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <li class="<?php echo e($loop->last ? '' : 'mb-4'); ?>">
        <div>
            <a href="<?php echo e(route('profile', $user)); ?>" class="flex items-center text-sm">
                <img src="<?php echo URL::asset('avatars/'. $user->id .'/'. str_replace('http://chateet.herokuapp.com/', '', $user->avatar)); ?>" class="mr-2" style="background-image: url('/images/test1.jpg'); background-size:cover;width:40px; height:30px;">
                <p class="break-all"><?php echo e($user->name); ?></p>
            </a>
        </div>
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <li>No friends yet</li>
    <?php endif; ?>
</ul>
</div><?php /**PATH C:\Users\HP\Documents\FOFX\laravel\Chateet\resources\views/friends_list.blade.php ENDPATH**/ ?>