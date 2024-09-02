<button 
    class="
    @if($btnType == 'primary') bg-primary text-white
    @elseif($btnType == 'secondary') bg-gray text-tertiary
    @elseif($btnType == 'outline') bg-transparent text-primary border border-outline
    @endif
    py-3 px-9 rounded-[8px] font-semibold
    "
>{{$btnName}}</button>
