<?php

namespace App\Livewire\Components;

use Livewire\Component;

class BookingCardView extends Component
{

    public $date;
    public $time;
    public $status;
    public $serviceName;
    public $location;
    public $address;
    public $bookingRef;
    public $service;
    public $duration;
    public $price;
    public $taxes;
    public $total;
    public $cancellationPolicy;

    public function mount($bookingDetails)
    {
        $this->date = $bookingDetails['date'];
        $this->time = $bookingDetails['time'];
        $this->status = $bookingDetails['status'];
        $this->serviceName = $bookingDetails['serviceName'];
        $this->location = $bookingDetails['location'];
        $this->address = $bookingDetails['address'];
        $this->bookingRef = $bookingDetails['bookingRef'];
        $this->service = $bookingDetails['service'];
        $this->duration = $bookingDetails['duration'];
        $this->price = $bookingDetails['price'];
        $this->taxes = $bookingDetails['taxes'];
        $this->total = $bookingDetails['total'];
        $this->cancellationPolicy = $bookingDetails['cancellationPolicy'];
    }

    public function getDirections()
    {
        // Logic to get directions
    }

    public function reschedule()
    {
        // Logic to reschedule
    }

    public function cancel()
    {
        // Logic to cancel booking
    }

    public function render()
    {
        return view('livewire.components.booking-card-view');
    }
}
