<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.master','data' => []]); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <section class="px-8" style="margin-top:30px">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-between">
                <?php if(auth()->check()): ?>
                <!-- Left side bar -->
                <div>
                    <div class="lg:w-32 sticky top-0">
                        <header class="container mx-auto py-3">
                            <?php echo $__env->make('sidebar_links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </header>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Center/Main content -->
                <div class="lg:flex-1 lg:mx-10" style="max-width:700px">
                    <?php echo e($slot); ?>

                </div>

                <?php if(auth()->check()): ?>
                <!-- Right sidebar -->
                <div class="lg:w-1/6 pt-2">

                    <div class="sticky top-0">
                        <?php echo $__env->make('friends_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </main>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Users\HP\Documents\FOFX\laravel\Chateet\resources\views/components/app.blade.php ENDPATH**/ ?>