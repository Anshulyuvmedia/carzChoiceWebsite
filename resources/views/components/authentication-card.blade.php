<div class="relative min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100" style="background-image: url('{{ asset('assets/frontend-assets/images/6.jpg') }}'); background-size: cover; background-position: center;">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black opacity-50"></div>

    <div class="relative z-10">
        {{ $logo }}
    </div>

    <div class="relative z-10 w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
