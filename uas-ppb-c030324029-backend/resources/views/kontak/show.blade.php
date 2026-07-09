@extends('layouts.dashboard')

@section('title', 'Detail Kontak')

@section('content')
    <div class="bg-white rounded-xl border border-slate-200 p-6 max-w-2xl">
        <dl class="space-y-4">
            <div class="flex">
                <dt class="w-32 text-slate-500 text-sm shrink-0">Nama</dt>
                <dd class="text-slate-900">{{ $kontak->nama }}</dd>
            </div>
            <div class="flex">
                <dt class="w-32 text-slate-500 text-sm shrink-0">Email</dt>
                <dd class="text-slate-900">{{ $kontak->email }}</dd>
            </div>
            <div class="flex">
                <dt class="w-32 text-slate-500 text-sm shrink-0">Website</dt>
                <dd class="text-slate-900">
                    @if ($kontak->website)
                        <a href="{{ $kontak->website }}" target="_blank" class="text-blue-600 hover:underline">{{ $kontak->website }}</a>
                    @else
                        <span class="text-slate-400">-</span>
                    @endif
                </dd>
            </div>
            <div class="flex">
                <dt class="w-32 text-slate-500 text-sm shrink-0">Telp</dt>
                <dd class="text-slate-900">{{ $kontak->telp }}</dd>
            </div>
            <div class="flex">
                <dt class="w-32 text-slate-500 text-sm shrink-0">Pesan</dt>
                <dd class="text-slate-900 whitespace-pre-line">{{ $kontak->pesan }}</dd>
            </div>
        </dl>

        <div class="flex items-center gap-3 mt-6">
            <a href="{{ route('kontak.index') }}"
               class="bg-slate-100 hover:bg-slate-200 text-slate-700 font-medium rounded-lg px-4 py-2 text-sm transition">
                Kembali
            </a>
            <a href="{{ route('kontak.edit', $kontak) }}"
               class="bg-amber-500 hover:bg-amber-600 text-white font-medium rounded-lg px-4 py-2 text-sm transition">
                Edit
            </a>
        </div>
    </div>
@endsection
