<!-- <h2><?php echo e(date('Y-m-d H:i:s')); ?></h2> -->
<ul>
    <li><a href="<?php echo e(route('home')); ?>" class="font-bold text-lg mb-4 block">Home</a></li>
    <li><a href="/explore" class="font-bold text-lg mb-4 block">Explore</a></li>

    <!-- <li><a href="#" class="font-bold text-lg mb-4 block">Notifications</a></li>
    <li><a href="#" class="font-bold text-lg mb-4 block">Messages</a></li>
    <li><a href="#" class="font-bold text-lg mb-4 block">Bookmarks</a></li>
    <li><a href="#" class="font-bold text-lg mb-4 block">Lists</a></li> -->

    <li><a href="<?php echo e(route('profile', auth()->user())); ?>" class="font-bold text-lg mb-4 block">Profile</a></li>
    <li><a href="<?php echo e(route('notifications')); ?>" class="font-bold text-lg mb-4 block">Notifications</a></li>

    <!-- <li><a href="#" class="font-bold text-lg mb-4 block">Settings</a></li> -->
    
    <li>
        <form action="/logout" method="post">
        <?php echo csrf_field(); ?>
        <button class="font-bold text-lg mb-4 block">Logout</button>
        </form>
    </li>
</ul>
<?php /**PATH C:\Users\HP\Documents\FOFX\laravel\Chateet\resources\views\sidebar_links.blade.php ENDPATH**/ ?>