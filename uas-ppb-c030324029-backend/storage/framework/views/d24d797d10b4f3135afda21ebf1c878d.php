<?php $__env->startSection('title', 'Daftar Kontak'); ?>

<?php $__env->startSection('content'); ?>

    <div class="flex justify-end mb-4">
        <a href="<?php echo e(route('kontak.create')); ?>"
           class="inline-flex items-center gap-1.5 bg-slate-900 hover:bg-slate-800 text-white text-sm font-medium px-4 py-2 rounded-lg transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
            </svg>
            Tambah Kontak
        </a>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="text-left text-slate-500 border-b border-slate-200 bg-slate-50">
                        <th class="px-5 py-3 font-medium w-12">#</th>
                        <th class="px-5 py-3 font-medium">Nama</th>
                        <th class="px-5 py-3 font-medium">Email</th>
                        <th class="px-5 py-3 font-medium">Website</th>
                        <th class="px-5 py-3 font-medium">Telp</th>
                        <th class="px-5 py-3 font-medium w-48">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $kontaks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kontak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="border-b border-slate-100 last:border-0 hover:bg-slate-50">
                            <td class="px-5 py-3 text-slate-500">
                                <?php echo e($loop->iteration + ($kontaks->currentPage() - 1) * $kontaks->perPage()); ?>

                            </td>
                            <td class="px-5 py-3 font-medium"><?php echo e($kontak->nama); ?></td>
                            <td class="px-5 py-3 text-slate-600"><?php echo e($kontak->email); ?></td>
                            <td class="px-5 py-3">
                                <?php if($kontak->website): ?>
                                    <a href="<?php echo e($kontak->website); ?>" target="_blank" class="text-blue-600 hover:underline">
                                        <?php echo e($kontak->website); ?>

                                    </a>
                                <?php else: ?>
                                    <span class="text-slate-400">-</span>
                                <?php endif; ?>
                            </td>
                            <td class="px-5 py-3 text-slate-600"><?php echo e($kontak->telp); ?></td>
                            <td class="px-5 py-3">
                                <div class="flex items-center gap-3 text-sm">
                                    <a href="<?php echo e(route('kontak.show', $kontak)); ?>" class="text-slate-500 hover:text-slate-900">Lihat</a>
                                    <a href="<?php echo e(route('kontak.edit', $kontak)); ?>" class="text-amber-600 hover:text-amber-700">Edit</a>
                                    <form action="<?php echo e(route('kontak.destroy', $kontak)); ?>" method="POST"
                                          onsubmit="return confirm('Yakin hapus data ini?')">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="text-red-600 hover:text-red-700">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="px-5 py-8 text-center text-slate-400">Belum ada data kontak</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-4">
        <?php echo e($kontaks->links()); ?>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Aqshal\Downloads\uas-ppb-c030324029-backend\resources\views/kontak/index.blade.php ENDPATH**/ ?>