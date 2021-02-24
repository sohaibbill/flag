@extends('layouts.app')

@section('content')
<div class=" absolute top-0 left-0 h-14 w-screen   bg-white dark-bg-secondary text-gray-900 shadow-md  dark-text-white mb-16">
    <div class="max-w-screen-lg xl:max-w-screen-lg container px-16 mx-auto flex flex-row justify-between items-center h-full   ">
        <h1 class="font-bold">Where in the world?</h1>
        <section class="flex flex-row space-x-1  items-center cursor-pointer">
            <button @click="dark = !dark"><svg class="fill-current text-gray-900     inline-block h-6 w-6" x-show="dark" viewBox="0 0 24 24" role="presentation" aria-hidden="true">
                    <g strokelinejoin="full" strokelinecap="full" strokewidth="2" fill="none" stroke="currentColor">
                        <circle cx="12" cy="12" r="5"></circle>
                        <path d="M12 1v2"></path>
                        <path d="M12 21v2"></path>
                        <path d="M4.22 4.22l1.42 1.42"></path>
                        <path d="M18.36 18.36l1.42 1.42"></path>
                        <path d="M1 12h2"></path>
                        <path d="M21 12h2"></path>
                        <path d="M4.22 19.78l1.42-1.42"></path>
                        <path d="M18.36 5.64l1.42-1.42"></path>
                    </g>
                </svg>
                <svg class="fill-current text-gray-900 inline-block h-5 w-5" x-bind:class="{ 'hidden': dark }" viewBox="0 0 24 24" role="presentation" aria-hidden="true">
                    <path fill="currentColor" d="M21.4,13.7C20.6,13.9,19.8,14,19,14c-5,0-9-4-9-9c0-0.8,0.1-1.6,0.3-2.4c0.1-0.3,0-0.7-0.3-1 c-0.3-0.3-0.6-0.4-1-0.3C4.3,2.7,1,7.1,1,12c0,6.1,4.9,11,11,11c4.9,0,9.3-3.3,10.6-8.1c0.1-0.3,0-0.7-0.3-1 C22.1,13.7,21.7,13.6,21.4,13.7z"></path>
                </svg>
            </button>
        </section>
    </div>
</div>

<div class="max-w-screen-lg xl:max-w-screen-lg  container px-16 mx-auto mt-24 text-white">
    <livewire:countries />
</div>
@endsection