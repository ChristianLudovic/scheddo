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

@section('title', 'select-time')

@section('content')
    <div class="max-w-[1071px] mx-auto pt-3 pb-[20px] space-y-[20px]">
        <div class="">
            <p class="text-[14px]">Step 2 of 3</p>
            <h1 class="font-semibold text-[29px]">Select time</h1>
        </div>
        <div class="flex justify-between items-start">
            <div class="max-w-[751px] w-full bg-white py-4 rounded-[10px] ">
                <div class="flex justify-between items-center px-7 mb-[14px]">
                    <h2 class="text-xl font-semibold">July</h2>
                    <svg class="frame" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.063 3.20001C10.1263 3.1366 10.2016 3.0863 10.2843 3.05198C10.3671 3.01766 10.4559 3 10.5455 3C10.6351 3 10.7239 3.01766 10.8067 3.05198C10.8894 3.0863 10.9647 3.1366 11.028 3.20001L15.8 7.97201C15.9019 8.07489 15.969 8.20706 15.992 8.35001V8.35401L16 8.45401C15.9994 8.63503 15.9275 8.80853 15.8 8.93701L15.85 8.88201C15.8398 8.89472 15.8291 8.90706 15.818 8.91901L15.8 8.93701L11.028 13.709C10.9002 13.837 10.7267 13.9089 10.5459 13.909C10.365 13.9091 10.1915 13.8373 10.0635 13.7095C9.93553 13.5817 9.86359 13.4082 9.8635 13.2274C9.8634 13.0465 9.93517 12.873 10.063 12.745L13.671 9.13601H1.681C1.51785 9.13593 1.36014 9.07737 1.23648 8.97095C1.11282 8.86454 1.0314 8.71732 1.007 8.55601L1 8.45401C1 8.07701 1.305 7.77201 1.682 7.77201L13.671 7.77101L10.063 4.16301C9.94861 4.04868 9.87856 3.89742 9.86537 3.73623C9.85219 3.57504 9.89671 3.41441 9.991 3.28301L10.063 3.20001Z" fill="#11141A" />
                    </svg>
                </div>
                
                <div class="flex items-center justify-between mb-4 px-7 overflow-x-auto">
                    @php
                        $startDate = strtotime('2024-03-16'); // Assuming the start date is March 16, 2024
                        $endDate = strtotime('2024-03-24');
                        $currentDate = $startDate;
                        $isFirst = true;
                    @endphp
                    
                    @while ($currentDate <= $endDate)
                        <div class="text-center w-[64px] h-[64px] flex-shrink-0 flex flex-col items-center justify-center mx-1 {{ $isFirst ? 'bg-orange-400 text-white rounded-lg' : 'border border-[#BBC5D5] rounded-lg' }}">
                            <div class="text-[14px]">{{ date('D', $currentDate) }}</div>
                            <div class="text-[15px] font-semibold">{{ date('d', $currentDate) }}</div>
                        </div>
                        @php
                            $currentDate = strtotime('+1 day', $currentDate);
                            $isFirst = false;
                        @endphp
                    @endwhile
                </div>
                
                <div class="space-y-2">
                    @foreach (['9:00pm', '4:45pm', '5:00pm', '5:15pm', '5:30pm', '5:45pm', '6:00pm', '8:00pm'] as $time)
                        <div class="flex justify-between items-center py-6 px-7 border-b border-[#d3d3d3] @if($loop->last) border-none @endif">
                            <span class="text-gray-700">{{ $time }}</span>
                            <svg class="frame" width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.737 7.99995L5.73902 12.686C5.59841 12.8225 5.51373 13.0066 5.50153 13.2022C5.48933 13.3978 5.55047 13.591 5.67302 13.744C5.7306 13.8174 5.80293 13.8779 5.88534 13.9217C5.96775 13.9655 6.05842 13.9915 6.1515 13.9981C6.24458 14.0047 6.33801 13.9917 6.42577 13.96C6.51353 13.9283 6.59367 13.8785 6.66102 13.814L12.261 8.56395C12.3365 8.49069 12.3965 8.40302 12.4375 8.30614C12.4785 8.20926 12.4996 8.10514 12.4996 7.99995C12.4996 7.89477 12.4785 7.79065 12.4375 7.69377C12.3965 7.59689 12.3365 7.50922 12.261 7.43595L6.66102 2.18595C6.59367 2.12137 6.51353 2.07162 6.42577 2.0399C6.33801 2.00818 6.24458 1.9952 6.1515 2.00179C6.05842 2.00839 5.96775 2.03441 5.88534 2.07819C5.80293 2.12196 5.7306 2.18252 5.67302 2.25595C5.55047 2.40893 5.48933 2.60208 5.50153 2.79771C5.51373 2.99334 5.59841 3.1774 5.73902 3.31395L10.737 7.99995Z" fill="#11141A" />
                            </svg>
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
                <div class="px-3 py-6 flex justify-between">
                    <p class="text-[15px] font-semibold">Total</p>
                    <p class="text-[15px] font-semibold">30USD</p>
                </div>
            </div>
        </div>
        
    </div>
@endsection

