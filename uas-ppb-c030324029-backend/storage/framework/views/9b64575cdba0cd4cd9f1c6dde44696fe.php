<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Dashboard'); ?> &middot; <?php echo e(config('app.name')); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="antialiased bg-slate-100 text-slate-900">
    <div class="min-h-screen flex">

        <!-- Sidebar -->
        <aside class="w-64 bg-slate-900 text-slate-200 flex flex-col shrink-0">
            <div class="px-6 py-5 border-b border-slate-800">
                <p class="text-white font-semibold leading-tight"><?php echo e(config('app.name')); ?></p>
                <p class="text-xs text-slate-400 mt-0.5">Panel Admin</p>
            </div>

            <nav class="flex-1 px-3 py-4 space-y-1">
                <a href="<?php echo e(route('dashboard')); ?>"
                   class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm font-medium transition
                          <?php echo e(request()->routeIs('dashboard') ? 'bg-slate-800 text-white' : 'text-slate-300 hover:bg-slate-800 hover:text-white'); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="7" height="9" rx="1"/><rect x="14" y="3" width="7" height="5" rx="1"/>
                        <rect x="14" y="12" width="7" height="9" rx="1"/><rect x="3" y="16" width="7" height="5" rx="1"/>
                    </svg>
                    Dashboard
                </a>

                <a href="<?php echo e(route('kontak.index')); ?>"
                   class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm font-medium transition
                          <?php echo e(request()->routeIs('kontak.*') ? 'bg-slate-800 text-white' : 'text-slate-300 hover:bg-slate-800 hover:text-white'); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16v4H4z"/><path d="M4 12h16v8H4z"/>
                    </svg>
                    Data Kontak
                </a>
            </nav>

            <div class="px-3 py-4 border-t border-slate-800">
                <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>
                    <button type="submit"
                            class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-sm font-medium text-slate-300 hover:bg-slate-800 hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                            <polyline points="16 17 21 12 16 7"/>
                            <line x1="21" y1="12" x2="9" y2="12"/>
                        </svg>
                        Keluar
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main content -->
        <div class="flex-1 flex flex-col min-w-0">
            <header class="bg-white border-b border-slate-200 px-6 py-4 flex items-center justify-between">
                <h1 class="text-lg font-semibold"><?php echo $__env->yieldContent('title', 'Dashboard'); ?></h1>
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-slate-900 text-white flex items-center justify-center text-sm font-medium">
                        <?php echo e(strtoupper(substr(auth()->user()->name ?? 'U', 0, 1))); ?>

                    </div>
                    <div class="text-sm">
                        <p class="font-medium leading-tight"><?php echo e(auth()->user()->name ?? 'Pengguna'); ?></p>
                        <p class="text-slate-400 text-xs"><?php echo e(auth()->user()->email ?? ''); ?></p>
                    </div>
                </div>
            </header>

            <main class="flex-1 p-6">
                <?php if(session('status')): ?>
                    <div class="mb-6 rounded-lg bg-emerald-50 border border-emerald-200 text-emerald-700 text-sm px-4 py-3">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>

                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\Aqshal\Downloads\uas-ppb-c030324029-backend\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>