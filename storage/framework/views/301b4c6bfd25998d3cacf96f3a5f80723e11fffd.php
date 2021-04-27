<div class="border border-blue-400 rounded-lg px-8 py-6 mb-6">
    <form method="POST" action="/chats">
    <?php echo csrf_field(); ?>
        <textarea name="body" id="" class="w-full h-24 border rounded focus:outline-none focus:shadow-outline" placeholder="What you got to share?" required></textarea>

        <hr class="my-1">

        <footer class="flex justify-between items-center">
            <img src="<?php echo URL::asset('avatars/'. auth()->user()->id .'/'. str_replace('http://127.0.0.1:8000/', '', auth()->user()->avatar)); ?>" alt="<?php echo e(auth()->user()->name); ?>'s avatar" class="rounded-full mr-2" style="width:50px; height:50px; background-image: url('/images/test.jpg'); background-size:cover">

            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.publish-button','data' => []]); ?>
<?php $component->withName('publish-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        </footer>
    </form>

    <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-red-500 mt-2 text-sm"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div><?php /**PATH C:\Users\HP\Documents\FOFX\laravel\Chateet\resources\views/publish_chat_panel.blade.php ENDPATH**/ ?>