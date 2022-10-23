@extends('default.page.app')
@section('title')
    <title>Mountain Cusco Tours - Travel agency Perú - Noticias</title>
@endsection
@section('title_header')
    <h1 class="text-xl mb-6 font-bold font-cinzel text-secondary">Mountain Cusco Tours</h1>
    <h3 class="md:text-5xl text-3xl font-semibold tracking-widest text-gray-50">Noticias</h3>
    <h4 class="md:text-8xl text-5xl font-bold inset-0 text-white text-opacity-10 absolute top-0">Noticias</h4>
@endsection
@section('content')
    <div class="grid md:grid-cols-4 grid-cols-1 lg:mx-10 mx-5 gap-10">
        <div class="md:col-span-3">
            <section class="lg:mb-20 lg:mt-24 md:my-16 my-10 lg:justify-between lg:flex">
                <div class="relative">
                    <h2 class="md:text-5xl text-3xl font-semibold z-30 text-primary relative">Noticias</h2>
                    <h4 class="md:text-8xl text-5xl font-bold inset-0 text-gray-100 text-opacity-90 absolute z-10 md:-top-10 -top-2">MOUNTAIN</h4>
                </div>
                <div class="block pt-6 text-right lg:mr-10">
                    <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                        <a href="/noticias#contacto" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white font-semibold">CONTACTAR</a>
                    </div>
                </div>
            </section>
            <section class="md:px-5 px-2">
                @foreach ($posts as $post)
                    <div class="grid lg:grid-cols-2 grid-cols-1 rounded shadow mb-12 lg:mx-5">
                        <div>
                            <img src="{{$post->imagen_miniatura}}" class="object-center h-full object-cover rounded-bl rounded-tl hover:shadow-xl transform hover:scale-105 transition duration-500">
                        </div>
                        <div>
                            <div class="flex bg-gray-100 text-xs text-gray-700 gap-5 p-5 justify-between">
                                <div class="flex"><i data-feather="calendar" witdh="16px" height="16px"></i>{{date('d/m/Y', strtotime($post->updated_at))}}</div>
                                <div class="flex"><i data-feather="user" witdh="16px" height="16px"></i>{{$post->user->name}}</div>
                                <div class="flex"><i data-feather="tag" witdh="16px" height="16px"></i>{{$post->categoria->nombre}}</div>
                            </div>
                            <div class="p-5 flex flex-col">
                                <a href="/noticias/{{$post->url}}"><h3 class=" text-primary font-semibold text-lg pb-5 cursor-pointer transform hover:-translate-x-2 transition duration-500 ease-in-out">{{$post->titulo}}</h3></a>
                                <div class="text-gray-700 text-sm">{!!Str::limit($post->detalle, 200,$end='...')!!}</div>
                                <div class="mt-8 block flex justify-end">
                                    <a href="/noticias/{{$post->url}}" class="text-sm bg-primary bg-opacity-60 rounded-lg p-2 text-white hover:text-primary hover:opacity-70">Ver detalles</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="mb-10">
                    {{ $posts->links() }}
                    </div>
            </section>
        </div>
        <div class="lg:my-16 md:my-16">
                <div class="md:mt-5 lg:ml-2 md:pt-10">
                    <span class="text-primary font-semibold lg:text-lg text-base">Categorías</span>
                    <div class="mt-5 mb px-4 mb-10">
                    @foreach ($categorias as $categoria)
                        <a href="/noticias/categoria/{{$categoria[0]}}">
                            <div class="flex justify-between text-gray-500 mb-2">
                                <div class="flex hover:text-secondary lg:text-sm text-xs transform hover:-translate-x-2 transition duration-500 ease-in-out"><i data-feather="tag" class="mr-2 " width="16px" height="16px"></i>{{$categoria[0]}}</div>
                                <span class="lg:text-sm text-xs bg-secondary bg-opacity-30 rounded px-2 transform hover:scale-150 transition duration-500">{{$categoria[1]}}</span>
                            </div>
                        </a>
                    @endforeach
                    </div>
                </div>
                <div class="md:mt-5 lg:ml-2 md:pt-10 mb-10">
                    <span class="text-primary font-semibold lg:text-lg text-base mb-2">Ultimas noticias</span>
                    @foreach ($ultimas as $ultima)
                        <a href="/noticias/{{$ultima->url}}">
                            <div class="flex flex-cols-2 px-2 py-5 lg:gap-5 gap-2 items-center">
                                <img src="{{asset($ultima->imagen_miniatura)}}" class="object-cover h-10 w-10 rounded-full transform hover:scale-150 transition duration-500">
                                <div class="lg:text-sm text-xs text-gray-500 hover:text-secondary transform hover:-translate-x-2 transition duration-500 ease-in-out">{{$ultima->titulo}}</div>
                            </div>
                        </a>
                        <hr class="mx-2">
                    @endforeach
                </div>

                <div class="md:mt-5  lg:ml-2">
                    <span class="text-primary font-semibold lg:text-lg text-base mb-2">Tours recomendados</span>
                    @foreach ($paquetes as $paquete)
                        <a href="/en-tours/{{$paquete->url}}">
                            <div class="flex flex-cols-2 px-2 py-5 lg:gap-5 gap-2 items-center">
                                <img src="{{asset($paquete->imagen)}}" class="object-cover h-10 w-10 rounded-full transform hover:scale-150 transition duration-500">
                                <div class="lg:text-sm text-xs text-gray-500 hover:text-secondary transform hover:-translate-x-2 transition duration-500 ease-in-out">{{$paquete->titulo}}</div>
                            </div>
                        </a>
                        <hr class="mx-2">
                    @endforeach
                </div>

            </div>
        </div>
@endsection
