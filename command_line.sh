#for create project card with version laravel 8.0
composer create-project laravel/laravel card


@extends('name') 
# sama denganinclude di php

@yield('name')
# Menyelipkan codingan

@section('name')
@endsection
# manggil yield


@stack
#memasukan bagian dari laman child

@push('')
@endpush
# isi code laman child untuk di push ke parent

{{ config('app.name')}}
#mengambil var dari .env harus di reload servicesnya

