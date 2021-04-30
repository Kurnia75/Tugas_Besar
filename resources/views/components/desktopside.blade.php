<a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">Storage Barang</a>
<ul class="mt-6">
    <li class="relative px-6 py-3">
        <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg {{request()->segment(1) == null ? 'bg-purple-600' : ''}}" aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{request()->segment(1) == null ? 'text-gray-800 dark:text-gray-100' : ''}}" href="{{ route('dashboard') }}">
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
            </svg>
            <span class="ml-4">{{ __('Dashboard') }}</span>
        </a>
    </li>
</ul>
<ul>
    {{-- User --}}
    @if (Auth::user()->roles()->first()->name == "admin" || Auth::user()->roles()->first()->name == "kasir")
    <li class="relative px-6 py-3">
        <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg {{request()->segment(1) == 'kasir' ? 'bg-purple-600' : ''}}" aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{request()->segment(1) == 'kasir' ? 'text-gray-800 dark:text-gray-100' : ''}}" href="{{ route('kasir.index') }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"/>
            </svg>
            <span class="ml-4">{{ __('User') }}</span>
        </a>
    </li>
    @endif

    {{-- Pengelolaan Barang --}}
    @if (Auth::user()->roles()->first()->name == "admin" || Auth::user()->roles()->first()->name == "pegawai")
    <li class="relative px-6 py-3">
        <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg {{request()->segment(1) == 'barang' || request()->segment(1) == 'kategori' || request()->segment(1) == 'merek' ? 'bg-purple-600' : ''}}" aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{request()->segment(1) == 'keuangan' ? 'text-gray-800 dark:text-gray-100' : ''}}" href="{{ route('barang.index') }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            <span class="ml-4">{{ __('Pengelolaan Barang') }}</span>
        </a>
    </li>
    @endif

    {{-- Kategori Barang--}}
    @if (Auth::user()->roles()->first()->name == "admin")
    <li class="relative px-6 py-3">
        <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg {{request()->segment(1) == 'keuangan' ? 'bg-purple-600' : ''}}" aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{request()->segment(1) == 'keuangan' ? 'text-gray-800 dark:text-gray-100' : ''}}" href="{{ route('kategori.index') }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/> </svg>
            <span class="ml-4">{{ __('Kategori Barang') }}</span>
        </a>
    </li>


    {{-- Merek Barang --}}
    <li class="relative px-6 py-3">
        <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg {{request()->segment(1) == 'pegawai' || request()->segment(1) == 'jabatan' ? 'bg-purple-600' : ''}}" aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{request()->segment(1) == 'keuangan' ? 'text-gray-800 dark:text-gray-100' : ''}}" href="{{ route('merek.index') }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>',
        'paper-clip' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"/>',
        'pencil-alt' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>',
        'pencil' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>',
        'phone-incoming' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 3l-6 6m0 0V4m0 5h5M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z"/>',
        'phone-outgoing' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 3h5m0 0v5m0-5l-6 6M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z"/>',
        'phone' => '<path fill="#4A5568" d="M9.228 3.684L8.279 4l.949-.316zm1.498 4.493l-.949.316.949-.316zm-.502 1.21l.447.895-.447-.894zm-2.257 1.13l-.447-.895a1 1 0 00-.465 1.306l.912-.412zm5.516 5.516l-.41.912a1 1 0 001.305-.465l-.895-.447zm1.13-2.257l-.895-.447.894.447zm1.21-.502l-.316.949.316-.949zm4.493 1.498l.317-.949-.317.95zM5 2a3 3 0 00-3 3h2a1 1 0 011-1V2zm3.28 0H5v2h3.28V2zm1.897 1.368A2 2 0 008.279 2v2l1.898-.632zm1.497 4.493l-1.497-4.493L8.279 4l1.498 4.493 1.897-.632zm-1.002 2.421a2 2 0 001.002-2.421l-1.897.632.895 1.79zm-2.258 1.129l2.258-1.129-.895-1.789-2.257 1.13.894 1.788zm5.48 3.71a10.042 10.042 0 01-5.015-5.016l-1.824.822a12.042 12.042 0 006.018 6.018l.822-1.824zm-.176-1.793l-1.129 2.258 1.789.894 1.129-2.257-1.79-.895zm2.421-1.002a2 2 0 00-2.421 1.002l1.789.895.632-1.897zm4.494 1.497l-4.494-1.497-.632 1.897L20 15.72l.633-1.898zM22 15.721a2 2 0 00-1.367-1.898L20 15.721h2zM22 19v-3.28h-2V19h2zm-3 3a3 3 0 003-3h-2a1 1 0 01-1 1v2zm-1 0h1v-2h-1v2zM2 6c0 8.837 7.163 16 16 16v-2C10.268 20 4 13.732 4 6H2zm0-1v1h2V5H2z"/>
            </svg>
            <span class="ml-4">{{ __('Merek Barang') }}</span>
        </a>
    </li>

    {{-- Laporan --}}
    <li class="relative px-6 py-3">
        <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg {{request()->segment(2) == 'absensi' || request()->segment(2) == 'barang' || request()->segment(2) == 'keuangan' || request()->segment(2) == 'penggajian' || request()->segment(2) == 'transaksi' ? 'bg-purple-600' : ''}}" aria-hidden="true"></span>
        <button class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 " @click="toggleLaporanMenu" aria-haspopup="true">
            <span class="inline-flex items-center">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <span class="ml-4">{{ __('Laporan') }}</span>
            </span>
            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <template x-if="isLaporanMenuOpen">
            <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300" x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0" class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu" >
                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{request()->segment(2) == 'barang' ? 'text-gray-800 dark:text-gray-100' : ''}}">
                    <a class="w-full" href="{{ route('laporan.barang') }}">{{ __('Laporan Barang Masuk') }}</a>
                </li>
                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{request()->segment(2) == 'transaksi' ? 'text-gray-800 dark:text-gray-100' : ''}}">
                    <a class="w-full" href="{{ route('laporan.transaksi') }}">{{ __('Laporan Barang Keluar') }}</a>
                </li>
            </ul>
        </template>
    </li>
    @endif
</ul>
