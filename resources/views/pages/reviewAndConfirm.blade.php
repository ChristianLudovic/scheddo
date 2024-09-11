@extends('base')

@section('title', 'Review & Confirm')

@section('content')
    <div class="max-w-[1071px] mx-auto pt-3 pb-[20px] space-y-[20px]">
        <div class="">
            <p class="text-[14px]">Step 3 of 3</p>
            <h1 class="font-semibold text-[29px]">Review and Confirm</h1>
        </div>
        <div class="flex justify-between items-start">
            <div class="flex flex-col space-y-3 max-w-[751px] w-full bg-white pt-[20px] pb-8 items-center rounded-[8px]">
                <div class="max-w-[690px] w-full flex flex-col space-y-3">
                    <div class="">
                        <h3 class="text-[15px] font-semibold">Cancellation policy</h3>
                        <p class="max-w-[440px] text-[14px]">Cancel for free anytime in advance, otherwise you will be charged 
                        <strong>100%</strong> of the service price for not showing up.</p>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-[15px] font-semibold">Add booking notes</h3>
                            <p class="max-w-[440px] text-[14px]">Include comments or requests about your booking</p>
                        </div>
                        <textarea name="" id="" class="w-full resize-none min-h-[118px] border border-solid border-[#D5D7DA] rounded-[8px]"></textarea>
                    </div>
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
                <!-- the selected day and time will be displayed here -->
                <div class="py-8 px-3 flex flex-col border-b border-solid border-[#d3d3d3]">
                    <p class="font-bold text-[14px]">Sun 16 July 2023 at 5:00pm</p>
                    <p class="text-[13px]">1h duration, ends at 6:00pm</p>
                </div>
                <div class="px-3 py-6 border-b border-solid border-[#d3d3d3] flex justify-between">
                    <!-- the selected service will be displayed here -->    
                    <div class="flex flex-col">
                        <h3 class="text-[15px]">Haircut - Premier Stylist</h3>
                        <p class="text-[15px">1h</p>
                    </div>
                    <p class="text-[15px]">30 USD</p>
                </div>
                <div class="px-3 py-6  flex justify-between border-b border-solid border-[#d3d3d3] ">
                    <p class="text-[15px] font-semibold">Total</p>
                    <p class="text-[15px] font-semibold">30USD</p>
                </div>
                <div class="py-3 px-8 flex">
                    @livewire('components.button', ['btnName' => 'Book now', 'type' => 'primary', 'route' => 'appointments'])
                </div>
            </div>
        </div>
        
    </div>
@endsection

