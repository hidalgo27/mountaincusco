@extends('default.page.app')
@section('title')
    <title>Mountain Cusco Tours - Travel agency Perú</title>
@endsection
@section('title_header')
    <h1 class="text-xl mb-6 font-bold font-cinzel text-secondary">Mountain Cusco Tours</h1>
    <h3 class="md:text-5xl text-3xl font-semibold tracking-widest text-gray-50">Paquetes & Tour</h3>
    <h4 class="md:text-8xl text-5xl font-bold inset-0 text-white text-opacity-10 absolute top-0">Paquetes & Tour</h4>
@endsection
@section('content')

<div class="lg:mx-20 md:mx-10 mx-5">
   <section class="lg:mb-20 lg:mt-24 md:my-16 my-10 lg:justify-between lg:flex">
      <div class="relative">
            <h2 class="md:text-5xl text-3xl font-semibold z-30 text-primary relative">Paquetes & Tour</h2>
            <h4 class="md:text-8xl text-5xl font-bold inset-0 text-gray-100 text-opacity-90 absolute z-10 md:-top-10 -top-2">MOUNTAIN</h4>
      </div>
      <div class="block pt-6 text-right lg:mr-10">
            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
               <a href="/en-tours#contacto" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white font-semibold">CONTACTAR</a>
            </div>
      </div>
   </section>
   <section class="md:px-5 px-2">
      @foreach ($paquetes as $paquete)
         <div class="mb-16">
            <a href="/en-tours/{{$paquete->url}}" class="lg:hidden"><h3 class="text-2xl font-semibold text-primary pb-3 hover:text-secondary hover:font-light">{{$paquete->titulo}}</h3></a>
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-8 items-center">
               <div class="relative">
                  <a href="{{route('paquete', $paquete)}}"><img src="{{asset($paquete->imagen)}}" class="object-cover shadow-lg rounded transform hover:scale-105 transition duration-500"></a>
                  <div class=" absolute p-2 bottom-0 left-0 bg-primary bg-opacity-60 text-green-500 border-t border-r border-secondary">
                     <div class="cursor-pointer transform hover:scale-125 transition duration-500 font-black">{{$paquete->duracion}} días</div>
                  </div>
               </div>
               <div class="pr-5 py-2 border-r border-b border-secondary border-opacity-30 pb-5">
                  <a href="{{route('paquete', $paquete)}}" class="hidden lg:block"><h3 class="text-2xl font-semibold text-primary pb-3 hover:text-secondary hover:font-light">{{$paquete->titulo}}</h3></a>
                   <div class="my-3 text-secondary italic font-semibold text-sm">
                       @foreach($paquete->paquetes_destinos as $paquete_destino)
                           {{$paquete_destino->destinos->nombre}}
                           @if ($loop->iteration < count($paquete->paquetes_destinos)) , @else . @endif
                       @endforeach
                   </div>
                  <div class="text-sm text-justify text-gray-600">{!!$paquete->descripcion!!}</div>
                   <div class="text-green-500 my-4 font-bold">
                       <span class="text-xs align-top">Desde</span>
                       {{$paquete->precio_paquetes->where('estrellas', 2)->first()->precio_d}}
                       <span class="text-xs">usd</span>
                   </div>
                  <div class="mt-3"><a href="{{route('paquete', $paquete)}}" class="text-sm bg-secondary bg-opacity-80 rounded p-2 text-white hover:text-primary hover:opacity-70">Ver detalles</a></div>
               </div>
            </div>
         </div>
      @endforeach
      <div class="mb-10">
         {{ $paquetes->links() }}
      </div>
   </section>
</div>
@endsection
