@extends('frontend/layouts/app')

@section('content')
    <section>
        <div class="min-h-screen">
            {{--carousel start--}}
            <div id="default-carousel" class="relative w-full z-10" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative overflow-hidden min-h-screen">
                    <!-- Item 1 -->
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <div>
                            <img src="{{ asset('assets/img/carousel-image.webp')  }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover h-full" alt="...">
                            <div
                                class="absolute top-0 left-0 w-full h-full bg-slate-800 bg-opacity-80">
                            </div>
                            <div class="absolute w-full max-w-screen-2xl mx-auto left-0 right-0 bottom-0 top-1/4 my-auto">
                                <div class="h-full p-4 w-full md:w-1/2">
                                    <div class="flex-col items-center h-full text-start">
                                        <p class="text-xl xl:text-3xl text-slate-50 font-bold mb-4 min-h-4">Selamat Datang,</p>
                                        <h1 class="text-4xl xl:text-7xl text-slate-50 font-bold mb-4 min-h-20 overflow-hidden line-clamp-2">SMA Wiyata Dharma Kesamben</h1>
                                        <p class="text-slate-50 italic text-xs md:text-sm xl:text-lg">
                                            “Bersama Menciptakan Generasi Cerdas dan Berkarakter. Kami Mendukung Setiap Langkah Menuju Masa Depan Gemilang.”
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <div>
                            <img src="{{ asset('assets/img/carousel-image.webp')  }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover h-full" alt="...">
                            <div
                                class="absolute top-0 left-0 w-full h-full bg-slate-800 bg-opacity-80">
                            </div>
                            <div class="absolute w-full max-w-screen-2xl mx-auto left-0 right-0 bottom-0 top-1/4 my-auto">
                                <div class="h-full p-4 w-full md:w-1/2">
                                    <div class="flex-col items-center h-full text-start">
                                        <p class="text-xl xl:text-3xl text-slate-50 font-bold mb-4 min-h-4">Selamat Datang,</p>
                                        <h1 class="text-4xl xl:text-7xl text-slate-50 font-bold mb-4 min-h-20 overflow-hidden line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolores magnam voluptas?</h1>
                                        <p class="text-slate-50 italic text-xs md:text-sm xl:text-lg">
                                            “Bersama Menciptakan Generasi Cerdas dan Berkarakter. Kami Mendukung Setiap Langkah Menuju Masa Depan Gemilang.”
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <div>
                            <img src="{{ asset('assets/img/carousel-image.webp')  }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover h-full" alt="...">
                            <div
                                class="absolute top-0 left-0 w-full h-full bg-slate-800 bg-opacity-80">
                            </div>
                            <div class="absolute w-full max-w-screen-2xl mx-auto left-0 right-0 bottom-0 top-1/4 my-auto">
                                <div class="h-full p-4 w-full md:w-1/2">
                                    <div class="flex-col items-center h-full text-start">
                                        <p class="text-xl xl:text-3xl text-slate-50 font-bold mb-4 min-h-4">Selamat Datang,</p>
                                        <h1 class="text-4xl xl:text-7xl text-slate-50 font-bold mb-4 min-h-20 overflow-hidden line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
                                        <p class="text-slate-50 italic text-xs md:text-sm xl:text-lg">
                                            “Bersama Menciptakan Generasi Cerdas dan Berkarakter. Kami Mendukung Setiap Langkah Menuju Masa Depan Gemilang.”
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <div>
                            <img src="{{ asset('assets/img/carousel-image.webp')  }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover h-full" alt="...">
                            <div
                                class="absolute top-0 left-0 w-full h-full bg-slate-800 bg-opacity-80">
                            </div>
                            <div class="absolute w-full max-w-screen-2xl mx-auto left-0 right-0 bottom-0 top-1/4 my-auto">
                                <div class="h-full p-4 w-full md:w-1/2">
                                    <div class="flex-col items-center h-full text-start">
                                        <p class="text-xl xl:text-3xl text-slate-50 font-bold mb-4 min-h-4">Selamat Datang,</p>
                                        <h1 class="text-4xl xl:text-7xl text-slate-50 font-bold mb-4 min-h-20 overflow-hidden line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, praesentium?</h1>
                                        <p class="text-slate-50 italic text-xs md:text-sm xl:text-lg">
                                            “Bersama Menciptakan Generasi Cerdas dan Berkarakter. Kami Mendukung Setiap Langkah Menuju Masa Depan Gemilang.”
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <div>
                            <img src="{{ asset('assets/img/carousel-image.webp')  }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover h-full" alt="...">
                            <div
                                class="absolute top-0 left-0 w-full h-full bg-slate-800 bg-opacity-80">
                            </div>
                            <div class="absolute w-full max-w-screen-2xl mx-auto left-0 right-0 bottom-0 top-1/4 my-auto">
                                <div class="h-full p-4 w-full md:w-1/2">
                                    <div class="flex-col items-center h-full text-start">
                                        <p class="text-xl xl:text-3xl text-slate-50 font-bold mb-4 min-h-4">Selamat Datang,</p>
                                        <h1 class="text-4xl xl:text-7xl text-slate-50 font-bold mb-4 min-h-20 overflow-hidden line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero!</h1>
                                        <p class="text-slate-50 italic text-xs md:text-sm xl:text-lg">
                                            “Bersama Menciptakan Generasi Cerdas dan Berkarakter. Kami Mendukung Setiap Langkah Menuju Masa Depan Gemilang.”
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider controls -->
                <div class="absolute bottom-1.5 top-2/3 mt-6 gap-4 start-0 md:-left-5 xl:ms-48 z-30 flex items-center justify-center h-20 px-4 focus:outline-none">
                    <button type="button" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 hover:bg-white/50">
                            <svg class="w-2 h-2 md:w-4 md:h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 hover:bg-white/50">
                            <svg class="w-2 h-2 md:w-4 md:h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
            {{--carousel end--}}

            {{--sambutan kepala sekolah start--}}
            <div class="max-w-screen-2xl mx-auto py-20 px-4 ">
                <div class="grid grid-cols-1 justify-center md:grid-cols-5 gap-4 p-4 md:p-8 bg-slate-100 rounded-md">
                    <div class="w-full">
                        <div class="h-full flex items-center border border-slate-400 rounded-md">
                            <img class="object-cover h-full overflow-hidden w-full rounded-md" src="{{ asset("assets/img/carousel-image.webp")  }}" alt="#">
                        </div>
                    </div>
                    <div class="col-span-2 w-full">
                        <div class="flex flex-col gap-4 p-4">
                            <h3 class="text-4xl text-slate-800 font-semibold">Sambutan Kepala Sekolah</h3>
                            <p class="text-md text-justify overflow-hidden font-light tracking-tight line-clamp-6 text-slate-400 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut cum debitis doloremque eveniet explicabo illo modi provident repellendus? Aut blanditiis deleniti error odit officia reprehenderit. Accusantium aliquam animi at atque consequatur delectus dignissimos distinctio doloribus ducimus eius esse expedita fugit inventore itaque labore laborum libero modi, molestias omnis pariatur perferendis porro quia quidem ratione sequi soluta ut. A ad, adipisci aspernatur assumenda beatae culpa cumque cupiditate delectus dicta dolor dolorem doloribus ducimus earum eius facilis labore maxime modi, nesciunt, nihil nulla officia omnis quasi recusandae suscipit veniam vero voluptate voluptates. Odio, quod?</p>
                            <a href="#" class="inline-flex items-start px-0 py-2 text-md font-normal text-center md:text-start text-red-600 hover:underline hover:text-red-500">
                                Selengkapnya...
                            </a>
                        </div>
                    </div>
                    <div class="col-span-2 w-full h-full">
                        <div class="flex flex-col items-center gap-8 md:gap-10">
                            <h3 class="text-4xl text-red-600 text-center font-semibold">Statistik Data Sekolah</h3>
                            <div class="flex flex-col md:flex-row gap-4 items-center w-full justify-center">
                                <div class="w-full h-full text-center">
                                    <h5 class="text-7xl md:text-7xl xl:text-8xl font-bold text-red-600">32</h5>
                                    <h5 class="text-xl lg:text-2xl mt-4 md:mt-8 font-semibold text-red-600 min-h-20">Guru & Staff</h5>
                                </div>
                                    <div class="w-full h-full text-center">
                                        <h5 class="text-7xl md:text-7xl xl:text-8xl font-bold text-red-600">248</h5>
                                        <h5 class="text-xl lg:text-2xl mt-4 md:mt-8 font-semibold text-red-600 min-h-20">Peserta Didik</h5>
                                    </div>
                                    <div class="w-full h-full text-center">
                                        <h5 class="text-7xl md:text-7xl xl:text-8xl font-bold text-red-600">12</h5>
                                        <h5 class="text-xl lg:text-2xl mt-4 md:mt-8 font-semibold text-red-600 min-h-20">Rombel</h5>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--sambutan kepala sekolah end--}}

        {{--agenda kegiatan start--}}
        <div class="py-20 bg-slate-100 px-4">
            <div class="max-w-screen-2xl mx-auto">
                <div class="flex items-center justify-between gap-4">
                    <div>
                        <h2 class="text-red-600 text-4xl md:text-6xl font-extrabold text-start">Agenda Kegiatan</h2>
                        <p class="mt-4 text-md font-normal tracking-wide text-slate-800">Agenda kegiatan dan aktivitas sesuai dengan kalender pendidikan</p>
                    </div>
                    <a href="#" class="inline-flex items-center justify-start p-4 md:px-8 md:py-2 text-sm font-normal text-center text-slate-50 bg-slate-800 rounded-md hover:bg-slate-700">
                        <span class="hidden md:block">
                            Selengkapnya
                        </span>
                        <svg class="w-3.5 h-3.5 md:ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
                <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-4 justify-center items-center w-full">
                    <div class="flex justify-start items-center gap-8 w-full px-6 py-4 bg-white border border-slate-200 rounded-md hover:bg-slate-50">
                        <div class="text-slate-800">
                            <i class="fa-solid fa-calendar fa-4x"></i>
                        </div>
                        <div>
                            <div class="flex-col gap-2 items-center">
                                <h5 class="mb-2 text-lg md:text-2xl font-bold overflow-hidden line-clamp-2 tracking-tight text-slate-800 align-middle min-h-14 md:min-h-16">Masa Pengenalan Lingkungan Sekolah (MPLS)</h5>
                                <hr class="w-full">
                                <p class="mt-2 text-md text-red-500">10 Juli 2024 - 18 Juli 2024</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-start items-center gap-8 w-full px-6 py-4 bg-white border border-slate-200 rounded-md hover:bg-slate-50">
                        <div class="text-slate-800">
                            <i class="fa-solid fa-calendar fa-4x"></i>
                        </div>
                        <div>
                            <div class="flex-col gap-2 items-center">
                                <h5 class="mb-2 text-lg md:text-2xl font-bold overflow-hidden line-clamp-2 tracking-tight text-slate-800 align-middle min-h-14 md:min-h-16">Libur Kenaikan Kelas</h5>
                                <hr class="w-full">
                                <p class="mt-2 text-md text-red-500">27 November 2024</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-start items-center gap-8 w-full px-6 py-4 bg-white border border-slate-200 rounded-md hover:bg-slate-50">
                        <div class="text-slate-800">
                            <i class="fa-solid fa-calendar fa-4x"></i>
                        </div>
                        <div>
                            <div class="flex-col gap-2 items-center">
                                <h5 class="mb-2 text-lg md:text-2xl font-bold overflow-hidden line-clamp-2 tracking-tight text-slate-800 align-middle min-h-14 md:min-h-16">Libur Umum (Tahun Baru Islam 1444 H)</h5>
                                <hr class="w-full">
                                <p class="mt-2 text-md text-red-500">10 Juli 2024 - 18 Juli 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--agenda kegiatan end--}}

        {{--berita artikel informasi start--}}
        <div class="bg-slate-50 py-20 px-4">
            <div class="max-w-screen-2xl mx-auto">
                <div>
                    <h2 class="text-red-600 text-4xl md:text-6xl font-extrabold text-center">Berita, Artikel & Informasi</h2>
                    <p class="mt-4 text-md font-normal text-center tracking-wide text-slate-800">Simak laporan langsung dari berbagai kegiatan sekolah.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
                    <a href="#" class="relative w-full h-64 lg:h-72 border-2 bg-slate-100 border-slate-400 rounded-lg group" data-aos="fade"
                         data-aos-delay="600" data-aos-duration="600" data-aos-easing="ease-in-out" data-aos-once="true">
                        <img src="{{ asset("assets/img/carousel-image.webp") }}"
                             class="h-full w-full overflow-hidden object-cover mx-auto rounded-lg" width="100"
                             height="100" alt="#">
                        <div
                            class="absolute top-0 right-0 h-full w-full bg-slate-800 bg-opacity-60 group-hover:bg-opacity-90 ease-in-out">
                        </div>
                        <div class="absolute top-0 right-0 h-full w-full px-6 py-6 md:w-full">
                            <div class="h-full flex flex-col justify-end">
                                <h3
                                    class="text-slate-50 font-semibold min-h-20 text-start text-2xl md:text-4xl overflow-hidden line-clamp-2">
                                    Mengasah Bakat Seni Workshop Lukisan dan Seni Kerajinan Lorem ipsum dolor sit.
                                </h3>
                                <p
                                    class="mt-2 text-slate-50 font-regular text-start text-md md:text-lg lg:text-xl tracking-tight overflow-hidden line-clamp-1">
                                    10 Juli 2024 oleh Admin
                                </p>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="relative w-full h-64 lg:h-72 border-2 bg-slate-100 border-slate-400 rounded-lg group" data-aos="fade"
                       data-aos-delay="600" data-aos-duration="600" data-aos-easing="ease-in-out" data-aos-once="true">
                        <img src="{{ asset("assets/img/carousel-image.webp") }}"
                             class="h-full w-full overflow-hidden object-cover mx-auto rounded-lg" width="100"
                             height="100" alt="#">
                        <div
                            class="absolute top-0 right-0 h-full w-full bg-slate-800 bg-opacity-60 group-hover:bg-opacity-90 ease-in-out">
                        </div>
                        <div class="absolute top-0 right-0 h-full w-full px-6 py-6 md:w-full">
                            <div class="h-full flex flex-col justify-end">
                                <h3
                                    class="text-slate-50 font-semibold min-h-20 text-start text-2xl md:text-4xl overflow-hidden line-clamp-2">
                                    Mengasah Bakat Seni Workshop Lukisan dan Seni Kerajinan Lorem ipsum dolor sit.
                                </h3>
                                <p
                                    class="mt-2 text-slate-50 font-regular text-start text-md md:text-lg lg:text-xl tracking-tight overflow-hidden line-clamp-1">
                                    10 Juli 2024 oleh Admin
                                </p>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="relative w-full h-64 lg:h-72 border-2 bg-slate-100 border-slate-400 rounded-lg group" data-aos="fade"
                       data-aos-delay="600" data-aos-duration="600" data-aos-easing="ease-in-out" data-aos-once="true">
                        <img src="{{ asset("assets/img/carousel-image.webp") }}"
                             class="h-full w-full overflow-hidden object-cover mx-auto rounded-lg" width="100"
                             height="100" alt="#">
                        <div
                            class="absolute top-0 right-0 h-full w-full bg-slate-800 bg-opacity-60 group-hover:bg-opacity-90 ease-in-out">
                        </div>
                        <div class="absolute top-0 right-0 h-full w-full px-6 py-6 md:w-full">
                            <div class="h-full flex flex-col justify-end">
                                <h3
                                    class="text-slate-50 font-semibold min-h-20 text-start text-2xl md:text-4xl overflow-hidden line-clamp-2">
                                    Mengasah Bakat Seni Workshop Lukisan dan Seni Kerajinan Lorem ipsum dolor sit.
                                </h3>
                                <p
                                    class="mt-2 text-slate-50 font-regular text-start text-md md:text-lg lg:text-xl tracking-tight overflow-hidden line-clamp-1">
                                    10 Juli 2024 oleh Admin
                                </p>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="relative w-full h-64 lg:h-72 border-2 bg-slate-100 border-slate-400 rounded-lg group" data-aos="fade"
                       data-aos-delay="600" data-aos-duration="600" data-aos-easing="ease-in-out" data-aos-once="true">
                        <img src="{{ asset("assets/img/carousel-image.webp") }}"
                             class="h-full w-full overflow-hidden object-cover mx-auto rounded-lg" width="100"
                             height="100" alt="#">
                        <div
                            class="absolute top-0 right-0 h-full w-full bg-slate-800 bg-opacity-60 group-hover:bg-opacity-90 ease-in-out">
                        </div>
                        <div class="absolute top-0 right-0 h-full w-full px-6 py-6 md:w-full">
                            <div class="h-full flex flex-col justify-end">
                                <h3
                                    class="text-slate-50 font-semibold min-h-20 text-start text-2xl md:text-4xl overflow-hidden line-clamp-2">
                                    Mengasah Bakat Seni Workshop Lukisan dan Seni Kerajinan Lorem ipsum dolor sit.
                                </h3>
                                <p
                                    class="mt-2 text-slate-50 font-regular text-start text-md md:text-lg lg:text-xl tracking-tight overflow-hidden line-clamp-1">
                                    10 Juli 2024 oleh Admin
                                </p>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="relative w-full h-64 lg:h-72 border-2 bg-slate-100 border-slate-400 rounded-lg group" data-aos="fade"
                       data-aos-delay="600" data-aos-duration="600" data-aos-easing="ease-in-out" data-aos-once="true">
                        <img src="{{ asset("assets/img/carousel-image.webp") }}"
                             class="h-full w-full overflow-hidden object-cover mx-auto rounded-lg" width="100"
                             height="100" alt="#">
                        <div
                            class="absolute top-0 right-0 h-full w-full bg-slate-800 bg-opacity-60 group-hover:bg-opacity-90 ease-in-out">
                        </div>
                        <div class="absolute top-0 right-0 h-full w-full px-6 py-6 md:w-full">
                            <div class="h-full flex flex-col justify-end">
                                <h3
                                    class="text-slate-50 font-semibold min-h-20 text-start text-2xl md:text-4xl overflow-hidden line-clamp-2">
                                    Mengasah Bakat Seni Workshop Lukisan dan Seni Kerajinan Lorem ipsum dolor sit.
                                </h3>
                                <p
                                    class="mt-2 text-slate-50 font-regular text-start text-md md:text-lg lg:text-xl tracking-tight overflow-hidden line-clamp-1">
                                    10 Juli 2024 oleh Admin
                                </p>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
        {{--berita artikel informasi end--}}

    </section>
@endsection
