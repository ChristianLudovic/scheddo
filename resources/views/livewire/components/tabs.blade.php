<div x-data="{ activeTab: @entangle('activeTab') }">
    <div class="flex justify-between max-w-[751px] w-full rounded-[16px] overflow-x-auto px-[15px] py-[17px] w-fit bg-white">
        @foreach ($tabs as $tab)
            <button
                wire:click="setActiveTab('{{ $tab }}')"
                @click="activeTab = '{{ $tab }}'"
                class="px-4 py-2 rounded-full transition-colors duration-200 ease-in-out"
                :class="{ 'bg-primary text-white': activeTab === '{{ $tab }}', 'bg-gray-200 text-gray-700 hover:bg-gray-300': activeTab !== '{{ $tab }}' }"
            >
                {{ $tab }}
            </button>
        @endforeach
    </div>
</div>
