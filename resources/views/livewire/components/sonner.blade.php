<div
    x-data="{ 
        showNotification: @entangle('showNotification'),
    }"
    x-init="
        $watch('showNotification', value => {
            if (value) {
                setTimeout(() => showNotification = false, 5000);
            }
        });
    "
>
    <div
        x-show="showNotification"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-x-full"
        x-transition:enter-end="opacity-100 transform translate-x-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform translate-x-0"
        x-transition:leave-end="opacity-0 transform translate-x-full"
        x-init="$watch('showNotification', value => { if(value) setTimeout(() => showNotification = false, 5000) })"
        class="fixed bottom-4 right-4  bg-yellow-100 border-yellow-400 text-yellow-700 p-4 rounded-lg shadow-lg"
    >
        <div class="flex items-center">
            <svg class="h-6 w-6 text-yellow-600 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
            <span>La connexion n'est disponible que via Google pour le moment.</span>
        </div>
    </div>
