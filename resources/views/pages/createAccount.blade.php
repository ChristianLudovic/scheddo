@extends('app')

@section('title', 'Create account')

@section('content')
    <div class="max-w-[1071px] mx-auto pt-3 pb-[20px] space-y-[20px] mb-[50px]">
        <div class="">
            <p class="text-[14px]">Step 3 of 3</p>
            <h1 class="font-semibold text-[29px]">Create Account</h1>
        </div>
        <div class="flex justify-between items-start ">
            <div class="flex flex-col space-y-3 max-w-[751px] w-full bg-white pt-[20px] pb-8 items-center rounded-[8px]">
                <div class="max-w-[452.5px] w-full flex flex-col items-center space-y-3">
                    @livewire('components.button', ['btnName' => 'Sign up with email', 'btnType' => 'primary'])
                    @livewire('components.button', ['btnName' => 'Continue with Google', 'btnType' => 'outline'])
                    @livewire('components.button', ['btnName' => 'Continue with Facebook', 'btnType' => 'outline'])
                    <p class="text-[14px] text-tertiary">Already have an account ?</p>
                    <button class="text-[14px] font-bold text-primary">Log in Now</button>
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
                <div class="px-3 py-6  flex justify-between">
                    <p class="text-[15px] font-semibold">Total</p>
                    <p class="text-[15px] font-semibold">30USD</p>
                </div>
                
            </div>
        </div>
        
    </div>
@endsection

