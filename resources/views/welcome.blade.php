<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMK MULTIKARYA</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
        </style>
    </head>


    <body class="antialiased">
    <section class="bg-center bg-no-repeat bg-[url('{{asset('Gambar/Banner1.jpg')}}')] bg-gray-700 bg-blend-multiply">
      <div class="">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="#" class="">
                    <img class="h-8 w-auto" src="{{asset('Gambar/Multikarya.png')}}" alt="">
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    </button>
                </div>
                <div class=" lg:flex lg:gap-x-12">
                  <a href="#" class="text-sm font-bold leading-6 text-white hover:text-blue-500">Profile</a>
                  <a href="#" class="text-sm font-bold leading-6 text-white hover:text-blue-500">Pembelajaran</a>
                  <a href="#" class="text-sm font-bold leading-6 text-white hover:text-blue-500">Kontak Kami</a>
                  <a href="#" class="text-sm font-bold leading-6 text-white hover:text-blue-500">Tentang Kami</a>
                </div>
                @if (Route::has('login'))
                  <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    @auth
                        <a href="{{ url('/home') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Home</a>
                      @else
                        <a href="{{ route('login') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Log in</a>
                      @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700  ">Register</a>
                      @endif
                    @endauth
                  </div>
                @endif
            </nav>
        </header>

  <div class="relative isolate px-6 pt-14 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>

    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
        <div class="hidden sm:mb-8 sm:flex sm:justify-center"></div>
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">SMK MULTIKARYA</h1>
                <p class="mt-6 text-lg leading-8 text-gray-600">Sekolah Menengah Kejururuan Swasta yang ada di Medan </p>
            </div>
        <div class="hidden sm:mb-44 sm:flex sm:justify-center"></div>
    </div>

        </div>
    </div>

    </section>

    <!-- Jurusan -->
    <div class="" >
        <div class="text-center">
            <h3 class="text-4xl font-bold tracking-tight text-black sm:text-6xl">Jurusan</h3>
            <p class="mt-6 text-lg leading-8 text-gray-600">Sekolah Menengah Kejururuan Swasta yang ada di Medan </p>
        </div>
    </div>

