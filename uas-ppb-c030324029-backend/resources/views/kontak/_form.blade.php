@csrf

<div class="mb-5">
    <label for="nama" class="block text-sm font-medium text-slate-700 mb-1.5">Nama</label>
    <input type="text" name="nama" id="nama"
           value="{{ old('nama', $kontak->nama ?? '') }}"
           class="w-full rounded-lg border px-4 py-2.5 text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent transition
                  {{ $errors->has('nama') ? 'border-red-400' : 'border-slate-300' }}">
    @error('nama')
        <p class="text-red-600 text-sm mt-1.5">{{ $message }}</p>
    @enderror
</div>

<div class="mb-5">
    <label for="email" class="block text-sm font-medium text-slate-700 mb-1.5">Email</label>
    <input type="text" name="email" id="email"
           value="{{ old('email', $kontak->email ?? '') }}"
           class="w-full rounded-lg border px-4 py-2.5 text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent transition
                  {{ $errors->has('email') ? 'border-red-400' : 'border-slate-300' }}">
    @error('email')
        <p class="text-red-600 text-sm mt-1.5">{{ $message }}</p>
    @enderror
</div>

<div class="mb-5">
    <label for="website" class="block text-sm font-medium text-slate-700 mb-1.5">Website</label>
    <input type="text" name="website" id="website"
           value="{{ old('website', $kontak->website ?? '') }}"
           class="w-full rounded-lg border px-4 py-2.5 text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent transition
                  {{ $errors->has('website') ? 'border-red-400' : 'border-slate-300' }}">
    @error('website')
        <p class="text-red-600 text-sm mt-1.5">{{ $message }}</p>
    @enderror
</div>

<div class="mb-5">
    <label for="telp" class="block text-sm font-medium text-slate-700 mb-1.5">Telp</label>
    <input type="text" name="telp" id="telp"
           value="{{ old('telp', $kontak->telp ?? '') }}"
           class="w-full rounded-lg border px-4 py-2.5 text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent transition
                  {{ $errors->has('telp') ? 'border-red-400' : 'border-slate-300' }}">
    @error('telp')
        <p class="text-red-600 text-sm mt-1.5">{{ $message }}</p>
    @enderror
</div>

<div class="mb-6">
    <label for="pesan" class="block text-sm font-medium text-slate-700 mb-1.5">Pesan</label>
    <textarea name="pesan" id="pesan" rows="4"
              class="w-full rounded-lg border px-4 py-2.5 text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent transition
                     {{ $errors->has('pesan') ? 'border-red-400' : 'border-slate-300' }}">{{ old('pesan', $kontak->pesan ?? '') }}</textarea>
    @error('pesan')
        <p class="text-red-600 text-sm mt-1.5">{{ $message }}</p>
    @enderror
</div>

<div class="flex items-center gap-3">
    <button type="submit"
            class="bg-slate-900 hover:bg-slate-800 text-white font-medium rounded-lg px-5 py-2.5 transition">
        Simpan
    </button>
    <a href="{{ route('kontak.index') }}" class="text-slate-500 hover:text-slate-900 text-sm font-medium">
        Batal
    </a>
</div>
