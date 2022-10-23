@extends('default.page.app')
@section('title')
    <title>Información - Mountain Cusco Tours</title>
@endsection
@section('title_header')
    <h1 class="text-xl mb-6 font-bold font-cinzel text-secondary">Mountain Cusco Tours</h1>
    <h3 class="md:text-5xl text-3xl font-semibold tracking-widest text-gray-50">Información Util</h3>
    <h4 class="md:text-8xl text-5xl font-bold inset-0 text-white text-opacity-10 absolute top-0">Información Util</h4>
@endsection
@section('content')

    <div class="grid md:grid-cols-4 grid-cols-1 lg:mx-10 mx-5 gap-10">
        <div class="md:col-span-3 p-5">
            <section class="lg:mb-20 lg:mt-24 md:my-16 my-10 lg:justify-between lg:flex">
                <div class="relative">
                    <h2 class="md:text-5xl text-3xl font-semibold z-30 text-primary relative">Información Util</h2>
                    <h4 class="md:text-8xl text-5xl font-bold inset-0 text-gray-100 text-opacity-90 absolute z-10 md:-top-10 -top-2">MOUNTAIN</h4>
                </div>
                <div class="block pt-6 text-right lg:mr-10">
                    <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                        <a href="/informacion-de-viaje#contacto" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white font-semibold">CONTACTAR</a>
                    </div>
                </div>
            </section>
            <section class="md:px-5 px-2">
                <div class="text-gray-500">
                    <p class=" mb-3"><span class="text-secondary font-semibold">Extensión.-</span> Con 1.285.215 km2, el Perú es tercer país de mayor extensión en América del Sur, después de Brasil y Argentina, situándose así entre los 20 países más extensos del planeta. Posee, además, 200 millas marinas y derechos territoriales sobre una superficie de 60 millones de hectáreas en la Antártida.</p>
                    <p class="mb-3"><span class="text-secondary font-semibold">Población.-</span> 27.000.000 de habitantes. – Urbana: 72,3% – Rural: 27,7% El Perú es un país de todas …</p>
                </div>
                <hr class="my-10">
                @foreach ($destinos as $destino)
                    <div id="{{$destino->nombre}}" class="mb-10">
                        <h3 class="text-primary text-2xl font-semibold hover:text-secondary hover:font-light mb-2">{{$destino->nombre}}</h3>
                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-5 items-center">
                            <div>
                                <img src="{{asset($destino->imagen)}}" class="object-cover rounded-lg hover:shadow-xl transform hover:scale-105 transition duration-500">
                            </div>
                            <div class="flex flex-col text-gray-700 p-5 border-r border-b border-secondary border-opacity-30">
                                <div class="mt-3 text-gray-500">
                                    {!!$destino->resumen!!}
                                </div>
                                <div class="mt-3 text-gray-500">
                                    {!!$destino->geografia!!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
