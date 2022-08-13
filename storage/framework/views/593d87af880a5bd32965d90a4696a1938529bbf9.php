<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.master','data' => []]); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-4 bg-gray-200 border-gray-400 rounded-lg">
            <div class="col-md-8">
                <div class="font-bold text-lg mb-2 text-center text-gray-700"><?php echo e(__('Verify Your Email Address')); ?>

                </div>

                <?php if(session('resent')): ?>
                <div class="text-green-500 text-xs mt-2 font-bold">
                    <?php echo e(__('A fresh verification link has been sent to your email address.')); ?>

                </div>
                <?php endif; ?>

                <?php echo e(__('Before proceeding, please check your email for a verification link.')); ?>

                <?php echo e(__('If you did not receive the email')); ?>,
                <form class="d-inline" method="POST" action="<?php echo e(route('verification.resend')); ?>">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                        <?php echo e(__('click here to request another')); ?>

                    </button>.
                </form>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Users\HP\Documents\FOFX\laravel\Chateet\resources\views\auth\verify.blade.php ENDPATH**/ ?>