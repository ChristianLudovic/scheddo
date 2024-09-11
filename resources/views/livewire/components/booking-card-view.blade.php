<div class="bg-white rounded-[8px] p-8 max-w-[751px] w-full mx-auto space-y-[20px]">
    <h2 class="text-[24px] font-semibold">{{ $date }} at {{ $time }}</h2>
    <div class="bg-green-500 text-white px-[9px] py-[5px] rounded-full flex items-center space-x-1 max-w-[100px]">
        <svg class="fa-6-solid-circle-check" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_314_99)">
                <path d="M10 20C12.6522 20 15.1957 18.9464 17.0711 17.0711C18.9464 15.1957 20 12.6522 20 10C20 7.34784 18.9464 4.8043 17.0711 2.92893C15.1957 1.05357 12.6522 0 10 0C7.34784 0 4.8043 1.05357 2.92893 2.92893C1.05357 4.8043 0 7.34784 0 10C0 12.6522 1.05357 15.1957 2.92893 17.0711C4.8043 18.9464 7.34784 20 10 20ZM14.4141 8.16406L9.41406 13.1641C9.04688 13.5312 8.45312 13.5312 8.08984 13.1641L5.58984 10.6641C5.22266 10.2969 5.22266 9.70312 5.58984 9.33984C5.95703 8.97656 6.55078 8.97266 6.91406 9.33984L8.75 11.1758L13.0859 6.83594C13.4531 6.46875 14.0469 6.46875 14.4102 6.83594C14.7734 7.20312 14.7773 7.79687 14.4102 8.16016L14.4141 8.16406Z" fill="white" />
            </g>
            <defs>
                <clipPath id="clip0_314_99">
                    <rect width="20" height="20" fill="white" />
                </clipPath>
            </defs>
        </svg>
        <span class="text-[12px] text-white font-semibold">{{ $status }}</span>
    </div>
    <div class="flex justify-between items-center">
        <div class="flex items-center space-x-[20px] ">
            <img src="{{ Vite::asset('resources/image/vurve.svg') }}" alt="Vurve">
            <div>
                <h3 class="text-base font-bold mb-[5px]">{{ $serviceName }}</h3>
                <p class="text-[14px] mb-[1px]">{{ $address }}</p>
                <p class="text-[14px]">Booking ref. #: {{ $bookingRef }}</p>
            </div>
        </div>

        <div class="flex space-x-[46.75px]">
            <div class="flex flex-col items-center space-y-1">
                <div class="flex items-center justify-center p-[18px] bg-[#F7F8FA] rounded-[12px]">
                    <svg class="fa-6-solid-location-dot" width="18" height="24" viewBox="0 0 18 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_314_84)">
                            <path d="M10.1109 23.4C12.5156 20.3906 18 13.0969 18 9C18 4.03125 13.9688 0 9 0C4.03125 0 0 4.03125 0 9C0 13.0969 5.48438 20.3906 7.88906 23.4C8.46562 24.1172 9.53438 24.1172 10.1109 23.4ZM9 6C9.79565 6 10.5587 6.31607 11.1213 6.87868C11.6839 7.44129 12 8.20435 12 9C12 9.79565 11.6839 10.5587 11.1213 11.1213C10.5587 11.6839 9.79565 12 9 12C8.20435 12 7.44129 11.6839 6.87868 11.1213C6.31607 10.5587 6 9.79565 6 9C6 8.20435 6.31607 7.44129 6.87868 6.87868C7.44129 6.31607 8.20435 6 9 6Z" fill="#11141A" />
                        </g>
                        <defs>
                            <clipPath id="clip0_314_84">
                                <rect width="18" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <span class="text-[14px]">Directions</span>
            </div>
            <div class="flex flex-col items-center space-y-1">
                <div class="flex items-center justify-center p-[18px] bg-[#F7F8FA] rounded-[12px]">
                    <svg class="fa-6-solid-calendar-day" width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_314_86)">
                            <path d="M6 0C6.82969 0 7.5 0.670312 7.5 1.5V3H13.5V1.5C13.5 0.670312 14.1703 0 15 0C15.8297 0 16.5 0.670312 16.5 1.5V3H18.75C19.9922 3 21 4.00781 21 5.25V7.5H0V5.25C0 4.00781 1.00781 3 2.25 3H4.5V1.5C4.5 0.670312 5.17031 0 6 0ZM0 9H21V21.75C21 22.9922 19.9922 24 18.75 24H2.25C1.00781 24 0 22.9922 0 21.75V9ZM3.75 12C3.3375 12 3 12.3375 3 12.75V17.25C3 17.6625 3.3375 18 3.75 18H8.25C8.6625 18 9 17.6625 9 17.25V12.75C9 12.3375 8.6625 12 8.25 12H3.75Z" fill="#11141A" />
                        </g>
                        <defs>
                            <clipPath id="clip0_314_86">
                                <rect width="21" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <span class="text-[14px]">Reschedule</span>
            </div>
            <div class="flex flex-col items-center space-y-1">
                <div class="flex items-center justify-center p-[18px] bg-[#F7F8FA] rounded-[12px]">
                    <svg class="fa-6-solid-circle-xmark" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_314_88)">
                            <path d="M12 24C15.1826 24 18.2348 22.7357 20.4853 20.4853C22.7357 18.2348 24 15.1826 24 12C24 8.8174 22.7357 5.76516 20.4853 3.51472C18.2348 1.26428 15.1826 0 12 0C8.8174 0 5.76516 1.26428 3.51472 3.51472C1.26428 5.76516 0 8.8174 0 12C0 15.1826 1.26428 18.2348 3.51472 20.4853C5.76516 22.7357 8.8174 24 12 24ZM8.20312 8.20312C8.64375 7.7625 9.35625 7.7625 9.79219 8.20312L11.9953 10.4062L14.1984 8.20312C14.6391 7.7625 15.3516 7.7625 15.7875 8.20312C16.2234 8.64375 16.2281 9.35625 15.7875 9.79219L13.5844 11.9953L15.7875 14.1984C16.2281 14.6391 16.2281 15.3516 15.7875 15.7875C15.3469 16.2234 14.6344 16.2281 14.1984 15.7875L11.9953 13.5844L9.79219 15.7875C9.35156 16.2281 8.63906 16.2281 8.20312 15.7875C7.76719 15.3469 7.7625 14.6344 8.20312 14.1984L10.4062 11.9953L8.20312 9.79219C7.7625 9.35156 7.7625 8.63906 8.20312 8.20312Z" fill="#11141A" />
                        </g>
                        <defs>
                            <clipPath id="clip0_314_88">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <span class="text-[14px]">Cancel</span>
            </div>
        </div>
    </div>
   

    <div class="border-t border-gray-200 pt-4">
        <div class="flex justify-between mb-2">
            <span class="text-[16px] font-semibold">{{ $service }}</span>
            <span class="text-[15px]">INR {{ $price }}</span>
        </div>
        <div class="text-[13px]">{{ $duration }}</div>
        <div class="flex justify-between text-sm text-gray-500 mb-2">
            <span class="text-[14px] text-[#7F8FA4]">Taxes</span>
            <span class="text-[14px] text-[#7F8FA4]">INR {{ $taxes }}</span>
        </div>
        <div class="flex justify-between">
            <span class="text-[18px] font-semibold">Total</span>
            <span class="text-[18px]">INR {{ $total }}</span>
        </div>
    </div>

    <div class="mt-6">
        <h4 class="font-semibold mb-2">Cancellation policy</h4>
        <p class="text-[14px] max-w-[440px]">{{ $cancellationPolicy }}</p>
    </div>
</div>