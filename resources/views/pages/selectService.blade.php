@php
$services = [
    'Haircut' => [
        ['name' => 'Haircut - Premier Stylist', 'price' => 'USD 40', 'duration' => '1h'],
        ['name' => 'Haircut - Top Stylist', 'price' => 'USD 50', 'duration' => '1h'],
        ['name' => 'Salon Director Cut', 'price' => 'USD 56', 'duration' => '1h'],
        ['name' => 'Vurve Director Cut', 'price' => 'USD 28', 'duration' => '1h'],
        ['name' => 'Hair Trim', 'price' => 'USD 20', 'duration' => '1h'],
        ['name' => 'Kids Cut (Below 5 years)', 'price' => 'USD 75', 'duration' => '1h'],
    ],
    'Styling' => [
        ['name' => 'Haircut - Premier Stylist', 'price' => 'USD 900', 'duration' => '1h']
    ],
    'Hair Colour' => [
        // Ajoutez ici les services de coloration
    ],
    // Ajoutez les autres catégories de services ici
];
@endphp


@extends('app')

@section('title', 'select-service')

@section('content')
    <div class="max-w-[1071px] mx-auto pt-3 pb-[20px] space-y-[20px]">
        <div class="">
            <p class="text-[14px]">Step 1 of 3</p>
            <h1 class="font-semibold text-[29px]">Select services</h1>
        </div>
        <div class="flex justify-between items-start">
            <div class="flex flex-col space-y-3 max-w-[751px] w-full">
                @livewire('components.tabs')
                
                <div 
                    x-data="{ 
                        activeTab: 'Haircut', 
                        selectedService: 'Haircut - Premier Stylist',
                        selectService(serviceName) {
                            this.selectedService = (this.selectedService === serviceName) ? null : serviceName;
                        }
                    }"
                    class="max-w-[751px] w-full "
                >
                    @foreach ($services as $category => $categoryServices)
                        <div x-show="activeTab === '{{ $category }}'" id="{{ $category }}" class="mb-8">
                            <h2 class="text-[22px] font-semibold mb-4">{{ $category }}</h2>
                            <div class="bg-white rounded-[16px]">
                                @foreach ($categoryServices as $index => $service)
                                    <div class="p-6
                                        @if(!$loop->last)
                                            border-b border-solid border-[#D3D3D3]
                                        @endif">
                                        <div class="flex items-center space-x-4">
                                            <div 
                                                @click="selectService('{{ $service['name'] }}')"
                                                class="w-9 h-9 rounded-full border-2 border-[#BBC5D5] flex items-center justify-center cursor-pointer transition-colors duration-200"
                                                :class="{ 'bg-yellow-400 border-yellow-400': selectedService === '{{ $service['name'] }}' }"
                                            >
                                                <svg x-show="selectedService === '{{ $service['name'] }}'" class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <div class="flex items-center space-x-[30px]">
                                                    <h3 class="font-semibold">{{ $service['name'] }}</h3>
                                                    <span class="text-text">{{ $service['price'] }}</span>
                                                </div>
                                                
                                                <p class="text-[13px] text-[#354052]">{{ $service['duration'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="bg-white max-w-[300px] w-full rounded-[8px]">
                <div class="p-3 flex items-center space-x-3 border-b border-solid border-[#D3D3D3]">
                    <img src="{{Vite::asset('resources/image/vurve.svg')}}" alt="">
                    <div class="flex flex-col">
                        <h2 class="font-bold text-[16px] ">Vurve - Bangalore</h2>
                        <p class="text-[15px] text-text">MG Road, Bangalore</p>          
                    </div>
                </div>
                <div class="px-3 py-6 border-b border-solid border-[#d3d3d3] flex justify-between">
                    <!-- the selected service will be displayed here -->    
                    <div class="flex flex-col">
                        <h3 class="text-[15px]">Haircut - Premier Stylist</h3>
                        <p class="text-[15px">1h</p>
                    </div>
                    <p class="text-[15px]">30 USD</p>
                </div>
                <div class="px-3 py-6 border-b border-solid border-[#d3d3d3] flex justify-between">
                    <p class="text-[15px] font-semibold">Total</p>
                    <p class="text-[15px] font-semibold">30USD</p>
                </div>
                <div class="py-3 px-8 flex">
                    @livewire('components.button', ['btnName' => 'Continue', 'type' => 'primary', 'route' => 'select-time'])
                </div>
            </div>
        </div>
        
    </div>
@endsection

