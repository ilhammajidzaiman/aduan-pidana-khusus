@extends('layouts.landing')

@section('content')
    <div class="w-full h-full border p-2">
        <div class="p-2 flex justify-between">
            <a href="" class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 12l14 0" />
                    <path d="M5 12l6 6" />
                    <path d="M5 12l6 -6" />
                </svg>
                <span class="text-base font-medium">Profile</span>
            </a>
        </div>
    </div>
@endsection
