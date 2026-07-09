<?php echo csrf_field(); ?>

<div class="mb-5">
    <label for="nama" class="block text-sm font-medium text-slate-700 mb-1.5">Nama</label>
    <input type="text" name="nama" id="nama"
           value="<?php echo e(old('nama', $kontak->nama ?? '')); ?>"
           class="w-full rounded-lg border px-4 py-2.5 text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent transition
                  <?php echo e($errors->has('nama') ? 'border-red-400' : 'border-slate-300'); ?>">
    <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-red-600 text-sm mt-1.5"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="mb-5">
    <label for="email" class="block text-sm font-medium text-slate-700 mb-1.5">Email</label>
    <input type="text" name="email" id="email"
           value="<?php echo e(old('email', $kontak->email ?? '')); ?>"
           class="w-full rounded-lg border px-4 py-2.5 text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent transition
                  <?php echo e($errors->has('email') ? 'border-red-400' : 'border-slate-300'); ?>">
    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-red-600 text-sm mt-1.5"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="mb-5">
    <label for="website" class="block text-sm font-medium text-slate-700 mb-1.5">Website</label>
    <input type="text" name="website" id="website"
           value="<?php echo e(old('website', $kontak->website ?? '')); ?>"
           class="w-full rounded-lg border px-4 py-2.5 text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent transition
                  <?php echo e($errors->has('website') ? 'border-red-400' : 'border-slate-300'); ?>">
    <?php $__errorArgs = ['website'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-red-600 text-sm mt-1.5"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="mb-5">
    <label for="telp" class="block text-sm font-medium text-slate-700 mb-1.5">Telp</label>
    <input type="text" name="telp" id="telp"
           value="<?php echo e(old('telp', $kontak->telp ?? '')); ?>"
           class="w-full rounded-lg border px-4 py-2.5 text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent transition
                  <?php echo e($errors->has('telp') ? 'border-red-400' : 'border-slate-300'); ?>">
    <?php $__errorArgs = ['telp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-red-600 text-sm mt-1.5"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="mb-6">
    <label for="pesan" class="block text-sm font-medium text-slate-700 mb-1.5">Pesan</label>
    <textarea name="pesan" id="pesan" rows="4"
              class="w-full rounded-lg border px-4 py-2.5 text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent transition
                     <?php echo e($errors->has('pesan') ? 'border-red-400' : 'border-slate-300'); ?>"><?php echo e(old('pesan', $kontak->pesan ?? '')); ?></textarea>
    <?php $__errorArgs = ['pesan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-red-600 text-sm mt-1.5"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="flex items-center gap-3">
    <button type="submit"
            class="bg-slate-900 hover:bg-slate-800 text-white font-medium rounded-lg px-5 py-2.5 transition">
        Simpan
    </button>
    <a href="<?php echo e(route('kontak.index')); ?>" class="text-slate-500 hover:text-slate-900 text-sm font-medium">
        Batal
    </a>
</div>
<?php /**PATH C:\Users\Aqshal\Downloads\uas-ppb-c030324029-backend\resources\views/kontak/_form.blade.php ENDPATH**/ ?>