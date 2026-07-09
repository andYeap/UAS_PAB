<?php $__env->startSection('title', 'Edit Kontak'); ?>

<?php $__env->startSection('content'); ?>
    <div class="bg-white rounded-xl border border-slate-200 p-6 max-w-2xl">
        <form method="POST" action="<?php echo e(route('kontak.update', $kontak)); ?>">
            <?php echo method_field('PUT'); ?>
            <?php echo $__env->make('kontak._form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Aqshal\Downloads\uas-ppb-c030324029-backend\resources\views/kontak/edit.blade.php ENDPATH**/ ?>