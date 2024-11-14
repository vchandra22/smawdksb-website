@extends('frontend/layouts/app')

@section('content')
    <section class="min-h-96 flex items-center justify-start w-auto relative mb-8">
        <div class="absolute bottom-0 top-0 left-0 right-0 z-10 overflow-hidden">
            <img src="{{ asset('assets/img/lapangan-sekolah.webp') }}" width="100" height="100" alt="foto siswa sma wd"
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
                                Identitas Sekolah
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
                    Identitas Sekolah
                </h1>
            </div>
            {{-- page title end --}}
        </div>
    </section>

    {{--    identitas sekolah start --}}
    <section>
        <div class="max-w-screen-2xl mx-auto min-h-screen bg-slate-50 mb-12">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start justify-between w-full">
                <div class="col-span-2 w-full px-4 py-0">
                    <div class="relative overflow-x-auto shadow-none sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 >
                            <tbody>
                            <tr class="odd:bg-white even:bg-gray-50">
                                <th scope="row" class="px-6 py-4 font-medium text-slate-800 whitespace-nowrap dark:text-white">
                                    Nama Sekolah
                                </th>
                                <td class="px-6 py-4">
                                    SMA Wiyata Dharma Kesamben
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-slate-100">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    NPSN
                                </th>
                                <td class="px-6 py-4">
                                    123456789
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-gray-50">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Status
                                </th>
                                <td class="px-6 py-4">
                                    Swasta
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-slate-100">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Bentuk Pendidikan
                                </th>
                                <td class="px-6 py-4">
                                    SMA
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-gray-50">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Status Kepemilikan
                                </th>
                                <td class="px-6 py-4">
                                    Yayasan
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-slate-100">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    SK Pendirian Sekolah
                                </th>
                                <td class="px-6 py-4">
                                    1234/0/1990
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-gray-50">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Tanggal SK Pendirian
                                </th>
                                <td class="px-6 py-4">
                                    1984-07-01
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-slate-100">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    SK Izin Operasional
                                </th>
                                <td class="px-6 py-4">
                                    1234/0/1990
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-gray-50">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Tanggal SK Izin Operasional
                                </th>
                                <td class="px-6 py-4">
                                    1984-07-01
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <h2 class="py-12 text-xl md:text-2xl xl:text-5xl text-slate-800 font-bold">
                            Alamat Sekolah
                        </h2>

                        <div class="relative overflow-x-auto shadow-none sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right text-slate-800">
                                <tbody>
                                <tr class="odd:bg-white even:bg-gray-50">
                                    <th scope="row" class="px-6 py-4 font-medium text-slate-800 whitespace-nowrap dark:text-white">
                                        Alamat
                                    </th>
                                    <td class="px-6 py-4">
                                        Brongkos RT 01 RW 01, Siraman, Kec. Kesamben, Kab. Blitar
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-slate-100">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Dusun
                                    </th>
                                    <td class="px-6 py-4">
                                        Brongkos
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-50">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Desa/Kelurahan
                                    </th>
                                    <td class="px-6 py-4">
                                        Siraman
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-slate-100">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Kecamatan
                                    </th>
                                    <td class="px-6 py-4">
                                        Kesamben
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-50">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Kabupaten
                                    </th>
                                    <td class="px-6 py-4">
                                        Kab. Blitar
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-slate-100">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Provinsi
                                    </th>
                                    <td class="px-6 py-4">
                                        Jawa Timur
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-gray-50">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Kode Pos
                                    </th>
                                    <td class="px-6 py-4">
                                        66108
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <div class="text-start p-8 m-4 lg:m-0 bg-slate-100 w-full rounded-lg lg:sticky lg:top-16 lg:h-fit lg:z-10">
                    <h3
                        class="mb-6 text-3xl font-semibold text-start tracking-tighter text-slate-800 md:text-5xl lg:text-6xl">
                        Berita Terbaru
                    </h3>
                    <div class="mx-auto justify-center items-center flex flex-col gap-3">
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
    </section>
    {{--    identitas sekolah end --}}
@endsection
