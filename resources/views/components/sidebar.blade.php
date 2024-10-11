<!-- resources/views/components/sidebar.blade.php -->
<div class="w-48 bg-slate-900 text-white h-screen">
    <div class="p-6">
        <ul>
            <li class="mb-4">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="flex items-center p-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7m-2 2v8a2 2 0 01-2 2H7a2 2 0 01-2-2v-8m4 4h4" />
                    </svg>
                    Dashboard
                </x-nav-link>
            </li>
            <li class="mb-4">
                <a href="{{ ('karyawan.index') }}" class="flex items-center p-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Karyawan
                </a>
            </li>
            <li class="mb-4">
                <a href="{{ ('kehadiran.index') }}" class="flex items-center p-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m3-3h5m-5 0a9 9 0 11-9-9" />
                    </svg>
                    Kehadiran
                </a>
            </li>
            <li>
                <a href="{{ ('gaji.index') }}" class="flex items-center p-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.38 0-2.627-.56-3.535-1.465A5.001 5.001 0 0112 2a5.001 5.001 0 013.535 4.535A5.001 5.001 0 0112 8zm0 2a7 7 0 100 14 7 7 0 000-14zm0 3v4m0 0h4m-4 0H8" />
                    </svg>
                    Gaji
                </a>
            </li>
        </ul>
    </div>
</div>
