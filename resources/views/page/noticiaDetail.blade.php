@extends('default.page.app')
@section('title')
    <title>Mountain Cusco Tours - Noticias</title>
@endsection
@section('title_header')
    <h1 class="text-xl mb-6 font-bold font-cinzel text-secondary">Mountain Cusco Tours</h1>
    <h3 class="md:text-5xl text-3xl font-semibold tracking-widest text-gray-50">{{$post->titulo}}</h3>
    <h4 class="md:text-8xl text-5xl font-bold inset-0 text-white text-opacity-10 absolute top-0">{{$post->titulo}}</h4>
@endsection
@section('content')
<div class="grid md:grid-cols-4 grid-cols-1 lg:mx-10 mx-5 gap-10">
    <div class="md:col-span-3">
        <section class="md:px-5 px-2 lg:mb-20 lg:mt-24 md:my-16 my-10">
            <div class="shadow rounded-lg flex flex-col md:flex-row bg-gray-100 lg:text-sm text-xs text-gray-700 md:gap-12 gap-5 py-5 justify-center lg:justify-between lg:px-5 mb-12">
                <div class="grid grid-rows-2 gap-2 text-center">
                    <div class="flex justify-center"><i data-feather="calendar" witdh="16px" height="16px" class="text-primary text-opacity-50"></i><span class="text-primary text-opacity-50">Fecha de Publicación</span></div>
                    <div>{{date('d/m/Y', strtotime($post->updated_at))}}</div>
                </div>
                <hr class="md:hidden">
                <div class="grid grid-rows-2 gap-2 text-center">
                    <div class="flex justify-center"><i data-feather="user" witdh="16px" height="16px" class="text-primary text-opacity-50"></i><span class="text-primary text-opacity-50">Publicado por</span></div>
                    <div>{{$post->user->name}}</div>
                </div>
                <hr class="md:hidden">
                <div class="grid grid-rows-2 gap-2 text-center">
                    <div class="flex justify-center"><i data-feather="tag" witdh="16px" height="16px" class="text-primary text-opacity-50"></i><span class="text-primary text-opacity-50">Categoría</span></div>
                    <div>{{$post->categoria->nombre}}</div>
                </div>
            </div>
            <div class="text-gray-700 leading-10">
                {!!$post->detalle!!}
            </div>
            <div class="carousel relative shadow rounded">
                <div class="carousel-inner relative overflow-hidden w-full">
                    @foreach($post->imagenes as $imagen)
                    <input class="carousel-open" type="radio" id="carousel-{{$loop->index}}" name="carousel" aria-hidden="true" hidden="" checked="checked">
                    <div class="carousel-item absolute opacity-0">
                        <img src="{{asset($imagen->nombre)}}" class="object-cover w-full object-center">
                    </div>
                    @endforeach
                    <ol class="carousel-indicators">
                    @foreach($post->imagenes as $imagen)
                        <li class="inline-block mr-3">
                            <label for="carousel-{{$loop->index}}" class="carousel-bullet cursor-pointer block text-secondary text-7xl hover:text-primary">•</label>
                        </li>
                    @endforeach
                    </ol>
                </div>
                </div>
        </section>
    </div>
    <div class="lg:my-16 md:my-16 my-5">
            <div class="md:mt-5 lg:ml-2 md:pt-10 mb-10">
                <span class="text-primary font-semibold lg:text-lg text-base mb-2">Noticias Relacionadas</span>
                @foreach ($posts_relacionados as $post2)
                    <a href="/noticias/{{$post->url}}">
                        <div class="flex flex-cols-2 px-2 py-5 lg:gap-5 gap-2 items-center">
                            <img src="{{asset($post2->imagen_miniatura)}}" class="object-cover h-10 w-10 rounded-full transform hover:scale-150 transition duration-500">
                            @if($post2->titulo!=$post->titulo)
                                <div class="lg:text-sm text-xs text-gray-500 hover:text-secondary transform hover:-translate-x-2 transition duration-500 ease-in-out">{{$post->titulo}}</div>
                            @endif
                            @if($post2->titulo==$post->titulo)
                                <div class="lg:text-sm text-xs text-secondary font-semibold hover:text-secondary">{{$post->titulo}}</div>
                            @endif
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
