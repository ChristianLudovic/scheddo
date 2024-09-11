@extends('base')

@section('title', 'My Appointments')

@section('content')
    <div class="max-w-[1071px] mx-auto pt-[38px] pb-[20px] space-y-[20px]">
        <h2 class="font-semibold text-[24px]">Upcoming appointments</h2>
        <div class="flex justify-between items-start">
            <div class="flex flex-col space-y-[30px]">
                <!-- upcoming appointments -->
                <div>
                    @livewire('components.appointment-card', [
                        'date' => 'Sun 16 July 2023',
                        'time' => '5:00pm',
                        'cardType' => 'upcoming',
                        'serviceType' => 'Haircut - Premier Stylist'
                    ])
                </div>
                <!-- past appointments -->  
                <div class="space-y-3">
                    <h2 class="font-semibold text-[24px]">Past appointments</h2>
                    <div>
                        @livewire('components.appointment-card', [
                            'date' => 'Sun 16 July 2023',
                            'time' => '5:00pm',
                            'serviceType' => 'Haircut - Premier Stylist'
                        ])
                    </div>
                    
                </div>
            </div>
            
            @livewire('components.booking-card-view', ['bookingDetails' => [
                'date' => 'Sun 16 July 2023',
                'time' => '5:00pm',
                'status' => 'Confirmed',
                'serviceName' => 'Vurve - Bangalore',
                'location' => 'Bangalore',
                'address' => 'MG Road, Bangalore',
                'bookingRef' => '65742695',
                'service' => 'Haircut - Premier Stylist',
                'duration' => '1h',
                'price' => 900,
                'taxes' => 0,
                'total' => 900,
                'cancellationPolicy' => 'Cancel for free anytime in advance, otherwise you will be charged 100% of the service price for not showing up.'
            ]])
        </div>
        
    </div>
@endsection

