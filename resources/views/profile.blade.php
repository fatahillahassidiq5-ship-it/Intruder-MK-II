@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="w-full max-w-2xl">
        <div class="p-6 lg:p-12 bg-white dark:bg-[#161615] border border-gray-200 dark:border-[#2e2e2e] rounded-lg shadow-sm">
            <h1 class="text-2xl font-bold mb-4">Profile</h1>
            
            <div class="space-y-2 mb-6">
                <p><span class="font-semibold">Nama:</span> Andi Muhammad Fatahillah Assidiq</p>
                <p><span class="font-semibold">Umur:</span> 17</p>
            </div>

            <!-- Image Container -->
            <div class="overflow-hidden rounded-lg">
                <img 
                    src="{{ asset('images/meine-face.jpg') }}" 
                    alt="Hero Image" 
                    class="w-full h-auto max-w-xs rounded-lg object-cover"
                >
            </div>
        </div>
    </div>
@endsection