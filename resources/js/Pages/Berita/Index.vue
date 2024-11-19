<template>
    <section class="min-h-96 flex items-center justify-start w-auto relative">
        <div class="absolute bottom-0 top-0 left-0 right-0 z-10 overflow-hidden">
            <img :src="fotoSiswa" width="100" height="100" alt="foto siswa sma wd"
                class="h-full w-full overflow-hidden object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-slate-800 bg-opacity-80">
            </div>
        </div>
        <div class="h-full w-full my-auto mx-auto max-w-screen-2xl z-30 py-2 px-4">
            <!-- breadcrumbs start -->
            <nav class="flex px-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse m-0">
                    <li class="inline-flex items-center">
                        <Link href="/"
                            class="inline-flex items-center text-sm md:text-md font-medium text-slate-200 hover:text-slate-50 hover:underline hover:text-accent">
                        Beranda
                        </Link>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <span
                                class="items-center text-sm md:text-md font-medium text-slate-100 hover:text-slate-50">/</span>
                            <a href="#"
                                class="ms-1 text-sm md:text-md font-medium text-slate-50 hover:underline overflow-hidden line-clamp-1 md:ms-2">Berita,
                                Artikel & Informasi</a>
                        </div>
                    </li>
                </ol>
            </nav>
            <!-- breadcrumbs end -->

            <!-- page title start -->
            <div class="w-2/3 py-2 px-4">
                <h1
                    class="text-4xl md:text-6xl xl:text-7xl text-slate-50 font-bold mb-4 min-h-16 overflow-hidden line-clamp-2">
                    Berita, Artikel & Informasi
                </h1>
            </div>
            <!-- page title end -->
        </div>
    </section>

    <!-- berita card list start -->
    <section class="max-w-screen-2xl mx-auto bg-slate-50">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 my-20 px-4">
            <Link href="/berita/detail"
                class="relative w-full h-64 lg:h-72 border-2 bg-slate-100 border-slate-400 rounded-lg group"
                data-aos="fade" data-aos-delay="600" data-aos-duration="600" data-aos-easing="ease-in-out"
                data-aos-once="true">
            <img :src="carouselImage" class="h-full w-full overflow-hidden object-cover mx-auto rounded-lg" width="100"
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
            </Link>

            <Link href="#" class="relative w-full h-64 lg:h-72 border-2 bg-slate-100 border-slate-400 rounded-lg group"
                data-aos="fade" data-aos-delay="600" data-aos-duration="600" data-aos-easing="ease-in-out"
                data-aos-once="true">
            <img :src="carouselImage" class="h-full w-full overflow-hidden object-cover mx-auto rounded-lg" width="100"
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
            </Link>

            <Link href="#" class="relative w-full h-64 lg:h-72 border-2 bg-slate-100 border-slate-400 rounded-lg group"
                data-aos="fade" data-aos-delay="600" data-aos-duration="600" data-aos-easing="ease-in-out"
                data-aos-once="true">
            <img :src="carouselImage" class="h-full w-full overflow-hidden object-cover mx-auto rounded-lg" width="100"
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
            </Link>

            <Link href="#" class="relative w-full h-64 lg:h-72 border-2 bg-slate-100 border-slate-400 rounded-lg group"
                data-aos="fade" data-aos-delay="600" data-aos-duration="600" data-aos-easing="ease-in-out"
                data-aos-once="true">
            <img :src="carouselImage" class="h-full w-full overflow-hidden object-cover mx-auto rounded-lg" width="100"
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
            </Link>

            <Link href="#" class="relative w-full h-64 lg:h-72 border-2 bg-slate-100 border-slate-400 rounded-lg group"
                data-aos="fade" data-aos-delay="600" data-aos-duration="600" data-aos-easing="ease-in-out"
                data-aos-once="true">
            <img :src="carouselImage" class="h-full w-full overflow-hidden object-cover mx-auto rounded-lg" width="100"
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
            </Link>
        </div>
    </section>
    <!-- berita card list end -->
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
    name: "Index",
    data() {
        return {
            carouselImage: window.appData.carouselImage,
            fotoSiswa: window.appData.fotoSiswa,
        }
    },
    components: {
        Link
    }
}
</script>
