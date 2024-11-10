@extends('frontend/layouts/app')

@section('content')
    <section class="min-h-96 flex items-center justify-start w-auto relative">
        <div class="absolute bottom-0 top-0 left-0 right-0 z-10 overflow-hidden">
            <img src="{{ asset('assets/img/foto-kalender.webp') }}" width="100" height="100" alt="foto kalender"
                class="h-full w-full overflow-hidden object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-slate-800 bg-opacity-80">
            </div>
        </div>
        <div class="h-full w-full my-auto mx-auto max-w-screen-2xl z-30 py-2 px-4">
            {{-- breadcrumbs start --}}
            <nav class="flex px-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse m-0">
                    <li class="inline-flex items-center">
                        <a href="#"
                            class="inline-flex items-center text-sm md:text-md font-medium text-slate-200 hover:text-slate-50 hover:underline hover:text-accent">
                            Berita
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <span
                                class="items-center text-sm md:text-md font-medium text-slate-100 hover:text-slate-50">/</span>
                            <a href="#"
                                class="ms-1 text-sm md:text-md font-medium text-slate-50 hover:underline overflow-hidden line-clamp-1 md:ms-2">
                                Agenda
                            </a>
                        </div>
                    </li>
                </ol>
            </nav>
            {{-- breadcrumbs end --}}

            {{-- page title start --}}
            <div class="w-2/3 py-2 px-4">
                <h1
                    class="text-4xl md:text-6xl xl:text-7xl text-slate-50 font-bold mb-4 min-h-20 overflow-hidden line-clamp-3">
                    Agenda
                </h1>
            </div>
            {{-- page title end --}}
        </div>
    </section>

    {{-- detail berita start --}}
    <section class="bg-slate-50 py-12">
        <div class="max-w-screen-2xl mx-auto min-h-screen">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start w-full">
                <div class="col-span-2 w-full px-4 py-0">
                    <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-4 justify-center items-center w-full">
                        <div
                            class="flex justify-start items-center gap-8 w-full px-6 py-4 bg-white border border-slate-200 rounded-md hover:bg-slate-50 hover:shadow-sm duration-700 ease-in-out">
                            <div class="text-slate-800">
                                <i class="fa-solid fa-calendar fa-4x"></i>
                            </div>
                            <div>
                                <div class="flex-col gap-2 items-center">
                                    <h5
                                        class="mb-2 text-lg md:text-2xl font-bold overflow-hidden line-clamp-2 tracking-tight text-slate-800 align-middle min-h-14 md:min-h-16">
                                        Masa Pengenalan Lingkungan Sekolah (MPLS)</h5>
                                    <hr class="w-full">
                                    <p class="mt-2 text-md text-red-500">10 Juli 2024 - 18 Juli 2024</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="flex justify-start items-center gap-8 w-full px-6 py-4 bg-white border border-slate-200 rounded-md hover:bg-slate-50  hover:shadow-sm duration-700 ease-in-out">
                            <div class="text-slate-800">
                                <i class="fa-solid fa-calendar fa-4x"></i>
                            </div>
                            <div>
                                <div class="flex-col gap-2 items-center">
                                    <h5
                                        class="mb-2 text-lg md:text-2xl font-bold overflow-hidden line-clamp-2 tracking-tight text-slate-800 align-middle min-h-14 md:min-h-16">
                                        Libur Kenaikan Kelas</h5>
                                    <hr class="w-full">
                                    <p class="mt-2 text-md text-red-500">27 November 2024</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="flex justify-start items-center gap-8 w-full px-6 py-4 bg-white border border-slate-200 rounded-md hover:bg-slate-50  hover:shadow-sm duration-700 ease-in-out">
                            <div class="text-slate-800">
                                <i class="fa-solid fa-calendar fa-4x"></i>
                            </div>
                            <div>
                                <div class="flex-col gap-2 items-center">
                                    <h5
                                        class="mb-2 text-lg md:text-2xl font-bold overflow-hidden line-clamp-2 tracking-tight text-slate-800 align-middle min-h-14 md:min-h-16">
                                        Libur Umum (Tahun Baru Islam 1444 H)</h5>
                                    <hr class="w-full">
                                    <p class="mt-2 text-md text-red-500">10 Juli 2024 - 18 Juli 2024</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="flex justify-start items-center gap-8 w-full px-6 py-4 bg-white border border-slate-200 rounded-md hover:bg-slate-50  hover:shadow-sm duration-700 ease-in-out">
                            <div class="text-slate-800">
                                <i class="fa-solid fa-calendar fa-4x"></i>
                            </div>
                            <div>
                                <div class="flex-col gap-2 items-center">
                                    <h5
                                        class="mb-2 text-lg md:text-2xl font-bold overflow-hidden line-clamp-2 tracking-tight text-slate-800 align-middle min-h-14 md:min-h-16">
                                        Libur Umum (Tahun Baru Islam 1444 H)</h5>
                                    <hr class="w-full">
                                    <p class="mt-2 text-md text-red-500">10 Juli 2024 - 18 Juli 2024</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex justify-start items-center gap-8 w-full px-6 py-4 bg-white border border-slate-200 rounded-md hover:bg-slate-50  hover:shadow-sm duration-700 ease-in-out">
                            <div class="text-slate-800">
                                <i class="fa-solid fa-calendar fa-4x"></i>
                            </div>
                            <div>
                                <div class="flex-col gap-2 items-center">
                                    <h5
                                        class="mb-2 text-lg md:text-2xl font-bold overflow-hidden line-clamp-2 tracking-tight text-slate-800 align-middle min-h-14 md:min-h-16">
                                        Libur Umum (Tahun Baru Islam 1444 H)</h5>
                                    <hr class="w-full">
                                    <p class="mt-2 text-md text-red-500">10 Juli 2024 - 18 Juli 2024</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex justify-start items-center gap-8 w-full px-6 py-4 bg-white border border-slate-200 rounded-md hover:bg-slate-50  hover:shadow-sm duration-700 ease-in-out">
                            <div class="text-slate-800">
                                <i class="fa-solid fa-calendar fa-4x"></i>
                            </div>
                            <div>
                                <div class="flex-col gap-2 items-center">
                                    <h5
                                        class="mb-2 text-lg md:text-2xl font-bold overflow-hidden line-clamp-2 tracking-tight text-slate-800 align-middle min-h-14 md:min-h-16">
                                        Libur Umum (Tahun Baru Islam 1444 H)</h5>
                                    <hr class="w-full">
                                    <p class="mt-2 text-md text-red-500">10 Juli 2024 - 18 Juli 2024</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex justify-start items-center gap-8 w-full px-6 py-4 bg-white border border-slate-200 rounded-md hover:bg-slate-50  hover:shadow-sm duration-700 ease-in-out">
                            <div class="text-slate-800">
                                <i class="fa-solid fa-calendar fa-4x"></i>
                            </div>
                            <div>
                                <div class="flex-col gap-2 items-center">
                                    <h5
                                        class="mb-2 text-lg md:text-2xl font-bold overflow-hidden line-clamp-2 tracking-tight text-slate-800 align-middle min-h-14 md:min-h-16">
                                        Libur Umum (Tahun Baru Islam 1444 H)</h5>
                                    <hr class="w-full">
                                    <p class="mt-2 text-md text-red-500">10 Juli 2024 - 18 Juli 2024</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex justify-start items-center gap-8 w-full px-6 py-4 bg-white border border-slate-200 rounded-md hover:bg-slate-50  hover:shadow-sm duration-700 ease-in-out">
                            <div class="text-slate-800">
                                <i class="fa-solid fa-calendar fa-4x"></i>
                            </div>
                            <div>
                                <div class="flex-col gap-2 items-center">
                                    <h5
                                        class="mb-2 text-lg md:text-2xl font-bold overflow-hidden line-clamp-2 tracking-tight text-slate-800 align-middle min-h-14 md:min-h-16">
                                        Libur Umum (Tahun Baru Islam 1444 H)</h5>
                                    <hr class="w-full">
                                    <p class="mt-2 text-md text-red-500">10 Juli 2024 - 18 Juli 2024</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex justify-start items-center gap-8 w-full px-6 py-4 bg-white border border-slate-200 rounded-md hover:bg-slate-50  hover:shadow-sm duration-700 ease-in-out">
                            <div class="text-slate-800">
                                <i class="fa-solid fa-calendar fa-4x"></i>
                            </div>
                            <div>
                                <div class="flex-col gap-2 items-center">
                                    <h5
                                        class="mb-2 text-lg md:text-2xl font-bold overflow-hidden line-clamp-2 tracking-tight text-slate-800 align-middle min-h-14 md:min-h-16">
                                        Libur Umum (Tahun Baru Islam 1444 H)</h5>
                                    <hr class="w-full">
                                    <p class="mt-2 text-md text-red-500">10 Juli 2024 - 18 Juli 2024</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex justify-start items-center gap-8 w-full px-6 py-4 bg-white border border-slate-200 rounded-md hover:bg-slate-50  hover:shadow-sm duration-700 ease-in-out">
                            <div class="text-slate-800">
                                <i class="fa-solid fa-calendar fa-4x"></i>
                            </div>
                            <div>
                                <div class="flex-col gap-2 items-center">
                                    <h5
                                        class="mb-2 text-lg md:text-2xl font-bold overflow-hidden line-clamp-2 tracking-tight text-slate-800 align-middle min-h-14 md:min-h-16">
                                        Libur Umum (Tahun Baru Islam 1444 H)</h5>
                                    <hr class="w-full">
                                    <p class="mt-2 text-md text-red-500">10 Juli 2024 - 18 Juli 2024</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex justify-start items-center gap-8 w-full px-6 py-4 bg-white border border-slate-200 rounded-md hover:bg-slate-50  hover:shadow-sm duration-700 ease-in-out">
                            <div class="text-slate-800">
                                <i class="fa-solid fa-calendar fa-4x"></i>
                            </div>
                            <div>
                                <div class="flex-col gap-2 items-center">
                                    <h5
                                        class="mb-2 text-lg md:text-2xl font-bold overflow-hidden line-clamp-2 tracking-tight text-slate-800 align-middle min-h-14 md:min-h-16">
                                        Libur Umum (Tahun Baru Islam 1444 H)</h5>
                                    <hr class="w-full">
                                    <p class="mt-2 text-md text-red-500">10 Juli 2024 - 18 Juli 2024</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex justify-start items-center gap-8 w-full px-6 py-4 bg-white border border-slate-200 rounded-md hover:bg-slate-50  hover:shadow-sm duration-700 ease-in-out">
                            <div class="text-slate-800">
                                <i class="fa-solid fa-calendar fa-4x"></i>
                            </div>
                            <div>
                                <div class="flex-col gap-2 items-center">
                                    <h5
                                        class="mb-2 text-lg md:text-2xl font-bold overflow-hidden line-clamp-2 tracking-tight text-slate-800 align-middle min-h-14 md:min-h-16">
                                        Libur Umum (Tahun Baru Islam 1444 H)</h5>
                                    <hr class="w-full">
                                    <p class="mt-2 text-md text-red-500">10 Juli 2024 - 18 Juli 2024</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex justify-start items-center gap-8 w-full px-6 py-4 bg-white border border-slate-200 rounded-md hover:bg-slate-50  hover:shadow-sm duration-700 ease-in-out">
                            <div class="text-slate-800">
                                <i class="fa-solid fa-calendar fa-4x"></i>
                            </div>
                            <div>
                                <div class="flex-col gap-2 items-center">
                                    <h5
                                        class="mb-2 text-lg md:text-2xl font-bold overflow-hidden line-clamp-2 tracking-tight text-slate-800 align-middle min-h-14 md:min-h-16">
                                        Libur Umum (Tahun Baru Islam 1444 H)</h5>
                                    <hr class="w-full">
                                    <p class="mt-2 text-md text-red-500">10 Juli 2024 - 18 Juli 2024</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex justify-start items-center gap-8 w-full px-6 py-4 bg-white border border-slate-200 rounded-md hover:bg-slate-50  hover:shadow-sm duration-700 ease-in-out">
                            <div class="text-slate-800">
                                <i class="fa-solid fa-calendar fa-4x"></i>
                            </div>
                            <div>
                                <div class="flex-col gap-2 items-center">
                                    <h5
                                        class="mb-2 text-lg md:text-2xl font-bold overflow-hidden line-clamp-2 tracking-tight text-slate-800 align-middle min-h-14 md:min-h-16">
                                        Libur Umum (Tahun Baru Islam 1444 H)</h5>
                                    <hr class="w-full">
                                    <p class="mt-2 text-md text-red-500">10 Juli 2024 - 18 Juli 2024</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex justify-start items-center gap-8 w-full px-6 py-4 bg-white border border-slate-200 rounded-md hover:bg-slate-50  hover:shadow-sm duration-700 ease-in-out">
                            <div class="text-slate-800">
                                <i class="fa-solid fa-calendar fa-4x"></i>
                            </div>
                            <div>
                                <div class="flex-col gap-2 items-center">
                                    <h5
                                        class="mb-2 text-lg md:text-2xl font-bold overflow-hidden line-clamp-2 tracking-tight text-slate-800 align-middle min-h-14 md:min-h-16">
                                        Libur Umum (Tahun Baru Islam 1444 H)</h5>
                                    <hr class="w-full">
                                    <p class="mt-2 text-md text-red-500">10 Juli 2024 - 18 Juli 2024</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex justify-start items-center gap-8 w-full px-6 py-4 bg-white border border-slate-200 rounded-md hover:bg-slate-50  hover:shadow-sm duration-700 ease-in-out">
                            <div class="text-slate-800">
                                <i class="fa-solid fa-calendar fa-4x"></i>
                            </div>
                            <div>
                                <div class="flex-col gap-2 items-center">
                                    <h5
                                        class="mb-2 text-lg md:text-2xl font-bold overflow-hidden line-clamp-2 tracking-tight text-slate-800 align-middle min-h-14 md:min-h-16">
                                        Libur Umum (Tahun Baru Islam 1444 H)</h5>
                                    <hr class="w-full">
                                    <p class="mt-2 text-md text-red-500">10 Juli 2024 - 18 Juli 2024</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex justify-start items-center gap-8 w-full px-6 py-4 bg-white border border-slate-200 rounded-md hover:bg-slate-50  hover:shadow-sm duration-700 ease-in-out">
                            <div class="text-slate-800">
                                <i class="fa-solid fa-calendar fa-4x"></i>
                            </div>
                            <div>
                                <div class="flex-col gap-2 items-center">
                                    <h5
                                        class="mb-2 text-lg md:text-2xl font-bold overflow-hidden line-clamp-2 tracking-tight text-slate-800 align-middle min-h-14 md:min-h-16">
                                        Libur Umum (Tahun Baru Islam 1444 H)</h5>
                                    <hr class="w-full">
                                    <p class="mt-2 text-md text-red-500">10 Juli 2024 - 18 Juli 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-start p-8 m-4 lg:m-0 bg-slate-100 rounded-lg lg:sticky lg:top-16 lg:h-fit lg:z-10">
                    <h3
                        class="mb-6 text-3xl font-semibold text-start tracking-tighter text-slate-800 md:text-5xl lg:text-6xl">
                        Berita Terbaru
                    </h3>
                    <div class="mx-auto flex flex-col gap-3">
                        <a href="#"
                            class="relative w-full h-42 lg:h-60 border-2 bg-slate-100 border-slate-400 rounded-lg group"
                            data-aos="fade" data-aos-delay="600" data-aos-duration="600" data-aos-easing="ease-in-out"
                            data-aos-once="true">
                            <img src="{{ asset('assets/img/carousel-image.webp') }}"
                                class="h-full w-full overflow-hidden object-cover mx-auto rounded-lg" width="100"
                                height="100" alt="#">
                            <div
                                class="absolute top-0 right-0 h-full w-full bg-slate-800 bg-opacity-60 group-hover:bg-opacity-90 duration-300 ease-in-out rounded-lg">
                            </div>
                            <div class="absolute top-0 right-0 h-full w-full px-6 py-6 md:w-full">
                                <div class="h-full flex flex-col justify-end">
                                    <h3
                                        class="text-slate-50 font-semibold min-h-16 md:min-h-20 text-start text-2xl md:text-4xl overflow-hidden line-clamp-2">
                                        Mengasah Bakat Seni Workshop Lukisan dan Seni Kerajinan Lorem ipsum dolor sit.
                                    </h3>
                                    <p
                                        class="mt-2 text-slate-50 font-regular text-start text-md md:text-lg lg:text-xl tracking-tight overflow-hidden line-clamp-1">
                                        10 Juli 2024 oleh Admin
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="#"
                            class="relative w-full h-42 lg:h-60 border-2 bg-slate-100 border-slate-400 rounded-lg group"
                            data-aos="fade" data-aos-delay="600" data-aos-duration="600" data-aos-easing="ease-in-out"
                            data-aos-once="true">
                            <img src="{{ asset('assets/img/carousel-image.webp') }}"
                                class="h-full w-full overflow-hidden object-cover mx-auto rounded-lg" width="100"
                                height="100" alt="#">
                            <div
                                class="absolute top-0 right-0 h-full w-full bg-slate-800 bg-opacity-60 group-hover:bg-opacity-90 duration-300 ease-in-out rounded-lg">
                            </div>
                            <div class="absolute top-0 right-0 h-full w-full px-6 py-6 md:w-full">
                                <div class="h-full flex flex-col justify-end">
                                    <h3
                                        class="text-slate-50 font-semibold min-h-16 md:min-h-20 text-start text-2xl md:text-4xl overflow-hidden line-clamp-2">
                                        Mengasah Bakat Seni Workshop Lukisan dan Seni Kerajinan Lorem ipsum dolor sit.
                                    </h3>
                                    <p
                                        class="mt-2 text-slate-50 font-regular text-start text-md md:text-lg lg:text-xl tracking-tight overflow-hidden line-clamp-1">
                                        10 Juli 2024 oleh Admin
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="#"
                            class="relative w-full h-42 lg:h-60 border-2 bg-slate-100 border-slate-400 rounded-lg group"
                            data-aos="fade" data-aos-delay="600" data-aos-duration="600" data-aos-easing="ease-in-out"
                            data-aos-once="true">
                            <img src="{{ asset('assets/img/carousel-image.webp') }}"
                                class="h-full w-full overflow-hidden object-cover mx-auto rounded-lg" width="100"
                                height="100" alt="#">
                            <div
                                class="absolute top-0 right-0 h-full w-full bg-slate-800 bg-opacity-60 group-hover:bg-opacity-90 duration-300 ease-in-out rounded-lg">
                            </div>
                            <div class="absolute top-0 right-0 h-full w-full px-6 py-6 md:w-full">
                                <div class="h-full flex flex-col justify-end">
                                    <h3
                                        class="text-slate-50 font-semibold min-h-16 md:min-h-20 text-start text-2xl md:text-4xl overflow-hidden line-clamp-2">
                                        Mengasah Bakat Seni Workshop Lukisan dan Seni Kerajinan Lorem ipsum dolor sit.
                                    </h3>
                                    <p
                                        class="mt-2 text-slate-50 font-regular text-start text-md md:text-lg lg:text-xl tracking-tight overflow-hidden line-clamp-1">
                                        10 Juli 2024 oleh Admin
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="#"
                            class="relative w-full h-42 lg:h-60 border-2 bg-slate-100 border-slate-400 rounded-lg group"
                            data-aos="fade" data-aos-delay="600" data-aos-duration="600" data-aos-easing="ease-in-out"
                            data-aos-once="true">
                            <img src="{{ asset('assets/img/carousel-image.webp') }}"
                                class="h-full w-full overflow-hidden object-cover mx-auto rounded-lg" width="100"
                                height="100" alt="#">
                            <div
                                class="absolute top-0 right-0 h-full w-full bg-slate-800 bg-opacity-60 group-hover:bg-opacity-90 duration-300 ease-in-out rounded-lg">
                            </div>
                            <div class="absolute top-0 right-0 h-full w-full px-6 py-6 md:w-full">
                                <div class="h-full flex flex-col justify-end">
                                    <h3
                                        class="text-slate-50 font-semibold min-h-16 md:min-h-20 text-start text-2xl md:text-4xl overflow-hidden line-clamp-2">
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
        </div>
        </div>
    </section>
    {{-- detail berita end --}}
@endsection
