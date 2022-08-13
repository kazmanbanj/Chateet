<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.app','data' => []]); ?>
<?php $component->withName('app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php if(auth()->user()->is_admin): ?>
    <?php $__empty_1 = true; $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="alert alert-success" role="alert">
            [<?php echo e($notification->created_at); ?>] User <?php echo e($notification->data['name']); ?> (<?php echo e($notification->data['email']); ?>) has just registered.
            
            <a class="d-flex p-3 border-bottom" href="<?php echo e(route('ReadNotification', ['id' => $notification->id])); ?>"  data-id="<?php echo e($notification->id); ?>" >mark as read</a>
        </div>

        <?php if($loop->last): ?>
            <a href="" id="mark-all">
                Mark all as read
            </a>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        There are no new notifications
    <?php endif; ?>
<?php endif; ?>

<?php if(auth()->user()->is_admin): ?>
    <script>
    function sendMarkRequest(id = null) {
        return $.ajax("<?php echo e(route('markNotification')); ?>", {
            method: 'POST',
            data: {
                _token,
                id
            }
        });
    }
    $(function() {
        $('.mark-as-read').click(function() {
            let request = sendMarkRequest($(this).data('id'));
            request.done(() => {
                $(this).parents('div.alert').remove();
            });
        });
        $('#mark-all').click(function() {
            let request = sendMarkRequest();
            request.done(() => {
                $('div.alert').remove();
            })
        });
    });
    </script>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Users\HP\Documents\FOFX\laravel\Chateet\resources\views/notifications.blade.php ENDPATH**/ ?>