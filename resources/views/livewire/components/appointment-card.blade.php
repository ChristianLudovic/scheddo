<div class="bg-white rounded-lg p-3 pr-[38px] max-w-[300px] w-full flex items-center space-x-3
    @if($cardType == 'upcoming') border-r-[3px] border-solid border-[#FFA101]
    @endif">
    <img src="{{Vite::asset('resources/image/vurve.svg')}}" alt="">
    <div>
        <p class="text-[12px]">{{ $date }} at {{ $time }}</p>
        <h2 class="text-[16px] font-bold">Vurve - Bangalore</h2>
        <p class="text-[14px]">{{ $serviceType }}</p>
    </div>
</div>