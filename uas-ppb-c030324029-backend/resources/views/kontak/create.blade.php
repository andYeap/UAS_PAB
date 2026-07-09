@extends('layouts.dashboard')

@section('title', 'Tambah Kontak')

@section('content')
    <div class="bg-white rounded-xl border border-slate-200 p-6 max-w-2xl">
        <form method="POST" action="{{ route('kontak.store') }}">
            @include('kontak._form')
        </form>
    </div>
@endsection
