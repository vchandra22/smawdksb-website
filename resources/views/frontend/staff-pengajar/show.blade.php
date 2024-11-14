@extends('frontend/layouts/app')

@section('content')
    <section class="min-h-96 flex items-center justify-start w-auto relative">
        <div class="absolute bottom-0 top-0 left-0 right-0 z-10 overflow-hidden">
            <img src="{{ asset('assets/img/foto-pembicara-disekolah.webp') }}" width="100" height="100"
                alt="foto pembicara staff sekolah" class="h-full w-full overflow-hidden object-cover">
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
                                Fauzi Prayogo S.Pd.
                            </a>
                        </div>
                    </li>
                </ol>
            </nav>
            {{-- breadcrumbs end --}}

            {{-- page title start --}}
            <div class="w-2/3 py-2 px-4">
                <h1
                    class="text-4xl md:text-6xl xl:text-7xl text-slate-50 font-bold mb-4 min-h-16 overflow-hidden line-clamp-3">
                    Fauzi Prayogo S.Pd.
                </h1>
                <p
                    class="mt-2 text-slate-50 font-regular text-start text-md md:text-lg lg:text-xl tracking-tight overflow-hidden line-clamp-1">
                    TIK
                </p>
            </div>
            {{-- page title end --}}
        </div>
    </section>

    {{-- detail berita start --}}
    <section class="bg-slate-50 py-12">
        <div class="max-w-screen-2xl mx-auto min-h-screen">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 items-start justify-between w-full">
                <div class="col-span-1 w-full px-2 py-0">
                    <div class="min-h-screen px-8">
                        <div
                           class="relative w-full h-96 lg:h-[34rem] border-2 border-slate-400 rounded-lg group">
                            <img src="{{ asset('assets/img/carousel-image.webp') }}"
                                 class="h-full w-full overflow-hidden object-cover mx-auto rounded-lg" width="100" height="100"
                                 alt="#">
                            <div
                                class="absolute top-0 right-0 h-full w-full bg-slate-800 bg-opacity-60 group-hover:bg-opacity-90 duration-300 ease-in-out rounded-lg">
                            </div>
                            <div class="absolute top-0 right-0 h-full w-full p-6 md:w-full">
                                <div class="h-full flex flex-col justify-end">
                                    <h3
                                        class="text-slate-50 font-semibold min-h-16 md:min-h-20 text-start text-2xl md:text-4xl overflow-hidden line-clamp-2">
                                        Dewi Retnowati S.Pd.
                                    </h3>
                                    <p
                                        class="mt-0 md:mt-2 text-slate-50 font-regular text-start text-md md:text-lg lg:text-xl tracking-tight overflow-hidden line-clamp-1">
                                        Matematika
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 w-full px-4 py-0 px-8">
                    <div class="px-4 lg:px-0 min-h-screen">
                        <h5 class="text-2xl md:text-4xl xl:text-7xl text-slate-800 font-bold">
                            Dewi Retnowati S.Pd.
                        </h5>
                        <p
                            class="my-4 text-slate-800 font-regular text-start text-lg md:text-xl lg:text-2xl tracking-tight overflow-hidden line-clamp-1">
                            Matematika
                        </p>
                        <article class="prose prose-sm md:prose-lg lg:col-span-2 lg:m-0 pt-4 max-w-none lg:pb-20">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Massa id neque aliquam vestibulum morbi blandit cursus risus. Egestas
                            maecenas pharetra convallis posuere morbi leo. Et malesuada fames ac turpis egestas sed. Purus non
                            enim praesent elementum facilisis leo. Id diam maecenas ultricies mi eget mauris pharetra et.
                            Tristique sollicitudin nibh sit amet commodo nulla facilisi nullam vehicula. Sed libero enim sed
                            faucibus turpis. Orci sagittis eu volutpat odio facilisis mauris sit amet massa. A arcu cursus vitae
                            congue mauris. Est velit egestas dui id ornare arcu odio ut. Et tortor at risus viverra adipiscing
                            at in.
                            Donec massa sapien faucibus et molestie ac feugiat sed. Platea dictumst quisque sagittis purus.
                            Turpis massa tincidunt dui ut ornare lectus sit. Sagittis nisl rhoncus mattis rhoncus urna neque.
                            Feugiat in ante metus dictum at. Ullamcorper morbi tincidunt ornare massa eget egestas purus viverra
                            accumsan. Vitae aliquet nec ullamcorper sit amet risus nullam eget. Nulla pharetra diam sit amet
                            nisl suscipit adipiscing. Quam elementum pulvinar etiam non quam lacus suspendisse. Suscipit
                            adipiscing bibendum est ultricies integer quis. Pretium viverra suspendisse potenti nullam ac
                            tortor. Tempor orci dapibus ultrices in iaculis nunc. Vitae semper quis lectus nulla at volutpat
                            diam ut. Est ullamcorper eget nulla facilisi. Auctor eu augue ut lectus arcu bibendum at varius vel.
                            Egestas sed tempus urna et. Lorem ipsum dolor sit amet consectetur adipiscing elit.

                            Eu scelerisque felis imperdiet proin fermentum leo. Natoque penatibus et magnis dis parturient
                            montes nascetur ridiculus. Ac orci phasellus egestas tellus rutrum. Dolor purus non enim praesent
                            elementum facilisis leo vel fringilla. Vitae congue mauris rhoncus aenean vel elit. Vel quam
                            elementum pulvinar etiam non. Ut sem viverra aliquet eget sit amet tellus cras. Sed risus ultricies
                            tristique nulla. Varius sit amet mattis vulputate. Curabitur vitae nunc sed velit dignissim sodales
                            ut eu.
                        </article>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    {{-- detail berita end --}}
@endsection
