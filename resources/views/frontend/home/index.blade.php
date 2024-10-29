@extends('frontend/layouts/app')

@section('content')
    <section>
        <div class="min-h-screen">
            {{--carousel start--}}
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
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
                    <div class="absolute bottom-1.5 top-2/3 mt-6 gap-4 start-0 ms-2 xl:ms-28 z-30 flex items-center justify-center h-20 px-4 focus:outline-none">
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
            <div class="max-w-screen-2xl mx-auto p-4 min-h-screen bg-red-200">

            </div>
        </div>
    </section>
@endsection
