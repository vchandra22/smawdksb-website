<template>
    <footer class="bg-slate-800">
        <div class="mx-auto w-full p-4 py-6 lg:py-8">
            <div class="md:grid md:grid-cols-5 md:gap-8">
                <div class="mb-6 md:col-span-3 md:mb-0">
                    <div class="flex flex-col content-between h-full justify-between">
                        <div>
                            <Link href="#" class="flex items-center">
                            <img :src="logoFoot" class="h-10 md:h-20 xl:h-24 me-3"
                                alt="Logo SMA Wiyata Dharma Kesamben" />
                            </Link>
                            <p class="my-6 text-sm md:text-lg font-regular text-slate-50">Brongkos RT 01 RW 01, Siraman,
                                Kec. Kesamben, Kab. Blitar Prov. Jawa Timur</p>
                        </div>
                        <div class="mb-8">
                            <p class="mb-6 text-xl font-semibold tracking-wide text-slate-50">Sosial Media</p>
                            <ul class="text-slate-50 text-lg font-regular flex gap-2 items-center">
                                <li>
                                    <Link href="#">
                                    <i class="fa-brands fa-whatsapp h-8 md:h-10 me-3 fa-3x"></i>
                                    </Link>
                                </li>
                                <li>
                                    <Link href="#">
                                    <i class="fa-brands fa-facebook h-8 md:h-10 me-3 fa-3x"></i>
                                    </Link>
                                </li>
                                <li>
                                    <Link href="#">
                                    <i class="fa-brands fa-instagram h-8 md:h-10 me-3 fa-3x"></i>
                                    </Link>
                                </li>
                                <li>
                                    <Link href="#">
                                    <i class="fa-brands fa-youtube h-8 md:h-10 me-3 fa-3x"></i>
                                    </Link>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-2">
                    <div class="grid grid-cols-1 gap-12 sm:gap-6 sm:grid-cols-2">
                        <div>
                            <h2 class="mb-6 text-lg font-semibold text-slate-50 uppercase">Profil Sekolah</h2>
                            <ul class="text-slate-50 text-sm md:text-lg font-regular">
                                <li class="mb-4">
                                    <Link href="#" class="hover:underline">Profil Sekolah</Link>
                                </li>
                                <li class="mb-4">
                                    <Link href="#" class="hover:underline">Staf Tenaga Kependidikan</Link>
                                </li>
                                <li class="mb-4">
                                    <Link href="#" class="hover:underline">Staf Pengajar</Link>
                                </li>
                                <li class="mb-4">
                                    <Link href="#" class="hover:underline">Galeri</Link>
                                </li>
                                <li class="mb-4">
                                    <Link href="#" class="hover:underline">Agenda</Link>
                                </li>
                                <li class="mb-4">
                                    <Link href="#" class="hover:underline">Fasilitas</Link>
                                </li>
                                <li class="mb-4">
                                    <Link href="#" class="hover:underline">Kontak</Link>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-lg font-semibold text-slate-50 uppercase">Link Penting</h2>
                            <ul class="text-slate-50 text-sm md:text-lg font-regular">
                                <li class="mb-4">
                                    <Link href="#" class="hover:underline">Dapodikdasmen</Link>
                                </li>
                                <li class="mb-4">
                                    <Link href="#" class="hover:underline">Informasi GTK</Link>
                                </li>
                                <li class="mb-4">
                                    <Link href="#" class="hover:underline">Informasi NISN</Link>
                                </li>
                                <li class="mb-4">
                                    <Link href="#" class="hover:underline">Verval PTK</Link>
                                </li>
                                <li class="mb-4">
                                    <Link href="#" class="hover:underline">Verval PD</Link>
                                </li>
                                <li class="mb-4">
                                    <Link href="#" class="hover:underline">PMP</Link>
                                </li>
                                <li class="mb-4">
                                    <Link href="#" class="hover:underline">PPDB</Link>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sm:flex sm:items-center sm:justify-center bg-black py-2">
            <span class="text-md text-slate-50 text-center sm:text-center ps-3 md:ps-0">© 2024 <a href="#"
                    class="hover:underline">SMA Wiyata Dharma Kesamben</a>.
            </span>
        </div>
    </footer>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
    data() {
        return {
            logoFoot: window.appData.logoFoot,
        };
    },
    components: { Link },
};
</script>
