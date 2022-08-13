<?php if(current_user()->isNot($user)): ?>
    <form method="POST" action="/profiles/<?php echo e($user->username); ?>/follow" class="lg:mt-3 md:mt-3 xl:mt-3 sm:mt-3">
        <?php echo csrf_field(); ?>
        <button type="submit" class="bg-green-500 text-xs py-2 px-2 text-white rounded-full shadow">
            <?php echo e(auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me'); ?>

        </button>
    </form>
<?php endif; ?><?php /**PATH C:\Users\HP\Documents\FOFX\laravel\Chateet\resources\views/components/follow-button.blade.php ENDPATH**/ ?>