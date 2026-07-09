<x-app-layout title="Masuk">
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-slate-50 via-slate-100 to-slate-200 px-4 py-10">
        <div class="w-full max-w-md">

            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-slate-900 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2l8 4v6c0 5-3.5 8.5-8 10-4.5-1.5-8-5-8-10V6l8-4z"/>
                    </svg>
                </div>
                <h1 class="text-2xl font-semibold text-slate-900">Selamat datang kembali</h1>
                <p class="text-slate-500 text-sm mt-1">Masuk untuk melanjutkan ke akun Anda</p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8">

                @if (session('status'))
                    <div class="mb-6 rounded-lg bg-emerald-50 border border-emerald-200 text-emerald-700 text-sm px-4 py-3">
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-6 rounded-lg bg-red-50 border border-red-200 text-red-700 text-sm px-4 py-3">
                        <ul class="list-disc list-inside space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-700 mb-1.5">
                            Email
                        </label>
                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            autocomplete="username"
                            placeholder="nama@email.com"
                            class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent transition"
                        >
                    </div>

                    <div>
                        <div class="flex items-center justify-between mb-1.5">
                            <label for="password" class="block text-sm font-medium text-slate-700">
                                Kata sandi
                            </label>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-sm text-slate-500 hover:text-slate-900 transition">
                                    Lupa kata sandi?
                                </a>
                            @endif
                        </div>
                        <input
                            id="password"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"
                            placeholder="••••••••"
                            class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent transition"
                        >
                    </div>

                    <div class="flex items-center">
                        <input
                            id="remember"
                            type="checkbox"
                            name="remember"
                            class="w-4 h-4 rounded border-slate-300 text-slate-900 focus:ring-slate-900"
                        >
                        <label for="remember" class="ml-2 text-sm text-slate-600">
                            Ingat saya
                        </label>
                    </div>

                    <button
                        type="submit"
                        class="w-full bg-slate-900 hover:bg-slate-800 text-white font-medium rounded-lg px-4 py-2.5 transition"
                    >
                        Masuk
                    </button>
                </form>

                @if (Route::has('register'))
                    <p class="text-center text-sm text-slate-500 mt-6">
                        Belum punya akun?
                        <a href="{{ route('register') }}" class="text-slate-900 font-medium hover:underline">
                            Daftar sekarang
                        </a>
                    </p>
                @endif
            </div>

        </div>
    </div>
</x-app-layout>
