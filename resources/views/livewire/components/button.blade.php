<button 
    wire:click="handleClick"
    class="
    @if($btnType == 'primary') bg-primary text-white
    @elseif($btnType == 'secondary') bg-gray text-tertiary
    @elseif($btnType == 'outline') bg-transparent text-text border border-outline hover:border-primary hover:text-primary font-semibold
    @endif
    py-3 px-9 rounded-[8px] font-semibold w-full
    "
>{{$btnName}}</button>
