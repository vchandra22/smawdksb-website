@extends('frontend/layouts/app')

@section('content')
    <section class="min-h-96 flex items-center justify-start w-auto relative">
        <div class="absolute bottom-0 top-0 left-0 right-0 z-10 overflow-hidden">
            <img src="{{ asset('assets/img/foto-hormat-bendera.webp') }}" width="100" height="100" alt="foto siswa sma wd"
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
                            Beranda
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <span
                                class="items-center text-sm md:text-md font-medium text-slate-100 hover:text-slate-50">/</span>
                            <a href="#"
                               class="ms-1 text-sm md:text-md font-medium text-slate-50 hover:underline overflow-hidden line-clamp-1 md:ms-2">
                                Kontak
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
                    Hubungi Kami
                </h1>
            </div>
            {{-- page title end --}}
        </div>
    </section>

    {{--    kontak sekolah start--}}
    <section>
        <div class="max-w-screen-2xl mx-auto min-h-screen">
            <div class="py-32 px-4">
                <h2 class="text-2xl md:text-4xl xl:text-7xl text-slate-800 font-bold">
                    Kontak Sekolah
                </h2>
                <div class="bg-slate-100 rounded-lg">
                    <div class="py-8 m-4 md:m-12">
                        <div class="flex items-center justify-start gap-4">
                            <i class="fa-solid fa-location-dot text-red-600 fa-2x"></i>
                            <p class="text-slate-800 font-regular text-lg md:text-xl">
                                Brongkos RT 01 RW 01, Siraman, Kec. Kesamben, Kab. Blitar Prov. Jawa Timur
                            </p>
                        </div>
                        <div class="flex items-center justify-start gap-4 mt-8">
                            <i class="fa-solid fa-phone text-red-600 fa-2x"></i>
                            <p class="text-slate-800 font-regular text-lg md:text-xl">
                                081254789902
                            </p>
                        </div>
                        <div class="flex items-center justify-start gap-4 mt-8">
                            <i class="fab fa-whatsapp text-red-600 fa-2x"></i>
                            <p class="text-slate-800 font-regular text-lg md:text-xl">
                                081254789902
                            </p>
                        </div>
                        <div class="flex items-center justify-start gap-4 mt-8">
                            <i class="fa-solid fa-envelope text-red-600 fa-2x"></i>
                            <p class="text-slate-800 break-all font-regular text-lg md:text-xl">
                                admin@smawdksb.sch.id
                            </p>
                        </div>
                    </div>
                </div>

                <h2 class="text-2xl md:text-4xl xl:text-7xl text-slate-800 font-bold">
                    Sosial Media
                </h2>
                <div class="bg-slate-100 rounded-lg">
                    <div class="py-8 m-4 md:m-12">
                        <div class="flex items-center justify-start gap-4">
                            <i class="fab fa-facebook text-red-600 fa-2x"></i>
                            <p class="text-slate-800 font-regular text-lg md:text-xl">
                                Brongkos RT 01 RW 01, Siraman, Kec. Kesamben, Kab. Blitar Prov. Jawa Timur
                            </p>
                        </div>
                        <div class="flex items-center justify-start gap-4 mt-8">
                            <i class="fab fa-instagram text-red-600 fa-2x"></i>
                            <p class="text-slate-800 font-regular text-lg md:text-xl">
                                081254789902
                            </p>
                        </div>
                        <div class="flex items-center justify-start gap-4 mt-8">
                            <i class="fab fa-youtube text-red-600 fa-2x"></i>
                            <p class="text-slate-800 font-regular text-lg md:text-xl">
                                081254789902
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--    kontak sekolah end--}}
@endsection
