{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

@extends('layouts.frame')
@section('content')
    <div class="card">
        <div class="card-header">
            Dashboard
        </div>
        <nav class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="/">home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Item 2</a>
            </li>
        </nav>
        <div class="card-body">
            <h5 class="card-title">Dashboard</h5>
            <p class="card-text">Content</p>
        </div>
    </div>
@endsection