@extends('default.page.app')
@section('title')
    <title>Código ESNNA - Mountain Cusco Tours</title>
@endsection
@section('title_header')
    <h1 class="text-xl mb-6 font-bold font-cinzel text-secondary">Servicio</h1>
    <h3 class="md:text-5xl text-3xl font-semibold tracking-widest text-gray-50">Transporte</h3>
    <h4 class="md:text-8xl text-5xl font-bold inset-0 text-white text-opacity-10 absolute top-0">Transporte</h4>
@endsection
@section('content')

    <div class="grid md:grid-cols-4 grid-cols-1 lg:mx-10 mx-5 gap-10">
        <div class="md:col-span-3">
            <section class="lg:mb-20 lg:mt-24 md:my-16 my-10 lg:justify-between lg:flex">
                <div class="relative">
                    <h2 class="md:text-5xl text-3xl font-semibold z-30 text-primary relative">Transporte</h2>
                    <h4 class="md:text-8xl text-5xl font-bold inset-0 text-gray-100 text-opacity-90 absolute z-10 md:-top-10 -top-2">Servicio</h4>
                </div>

            </section>
            <section class="px-5">
                <div class="relative">
                    <p>Contamos con unidades vehiculares de distintos modelos y capacidad para ofrecer el servicio de transporte, son unidades modernas y confortables.</p>
                    <img src="{{asset('images/iconos/calidad.png')}}" class="opacity-10 absolute top-10 right-10 h-64 w-64">
                </div>
                <div class="pt-12 pb-16">
                    {{--                    <span class="text-primary font-semibold text-xl">Acerca de Mountain Cusco Tours <span class="text-gray-700">(Zenayda)</span></span>--}}
                    <div class="grid grid-cols-1 lg:grid-cols-2 pt-5 gap-5 ">
                        <div class="flex justify-center"><img src="{{asset('images/transport/transport-3.jpg')}}" class="h-full object-cover rounded-lg shadow-lg"></div>
                        <div class="flex justify-center"><img src="{{asset('images/transport/transport-4.jpg')}}" class="h-full object-cover rounded-lg shadow-lg"></div>
{{--                        <div class="flex justify-center"><img src="{{asset('images/transport/transport-5.jpg')}}" class="h-full object-cover rounded-lg shadow-lg"></div>--}}
                    </div>
                    <div class="grid lg:grid-cols-3 grid-cols-1 pt-5 gap-5 ">
                        <div class="flex justify-center"><img src="{{asset('images/transport/transport-1.jpg')}}" class="h-full object-cover rounded-lg shadow-lg"></div>
                        <div class="flex justify-center"><img src="{{asset('images/transport/transport-2.jpg')}}" class="h-full object-cover rounded-lg shadow-lg"></div>
                        <div class="flex justify-center"><img src="{{asset('images/transport/transport-3.jpg')}}" class="h-full object-cover rounded-lg shadow-lg"></div>
                    </div>
                    <div class="grid  pt-5 gap-5 ">
                        <div class="flex justify-center"><img src="{{asset('images/transport/transport-7.jpg')}}" class="h-full w-full object-cover rounded-lg shadow-lg"></div>
                    </div>
{{--                    <div class="grid  pt-5 gap-5 ">--}}
{{--                        <div class="flex justify-center"><img src="{{asset('images/transport/transport5.jpg')}}" class="h-full w-full object-cover rounded-lg shadow-lg"></div>--}}
{{--                    </div>--}}
                </div>
            </section>
        </div>
        <div class="lg:my-16 md:my-16 my-5">
            <div class="md:mt-5 lg:ml-2">
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
