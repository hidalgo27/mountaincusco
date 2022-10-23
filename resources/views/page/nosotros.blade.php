@extends('default.page.app')
@section('title')
    <title>Nosotros - Mountain Cusco Tours</title>
@endsection
@section('title_header')
    <h1 class="text-xl mb-6 font-bold font-cinzel text-secondary">Mountain Cusco Tours</h1>
    <h3 class="md:text-5xl text-3xl font-semibold tracking-widest text-gray-50">Bienvenidos</h3>
    <h4 class="md:text-8xl text-5xl font-bold inset-0 text-white text-opacity-10 absolute top-0">Bienvenidos</h4>
@endsection
@section('content')

    <div class="grid md:grid-cols-4 grid-cols-1 lg:mx-10 mx-5 gap-10">
        <div class="md:col-span-3">
            <section class="lg:mb-20 lg:mt-24 md:my-16 my-10 lg:justify-between lg:flex">
                <div class="relative">
                    <h2 class="md:text-5xl text-3xl font-semibold z-30 text-primary relative">Bienvenidos</h2>
                    <h4 class="md:text-8xl text-5xl font-bold inset-0 text-gray-100 text-opacity-90 absolute z-10 md:-top-10 -top-2">MOUNTAIN</h4>
                </div>
                <div class="block pt-6 text-right lg:mr-10">
                    <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                        <a href="/nosotros#contacto" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white font-semibold">CONTACTAR</a>
                    </div>
                </div>
            </section>
            <section class="px-5">
                <div class="relative">
                    <div class="text-gray-500">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis delectus dolores eius iusto! Asperiores, cum dicta eos inventore itaque modi nemo nulla omnis quas quia tenetur vel voluptatem? Beatae, reprehenderit.</p>
                    </div>
                    <div class="text-gray-500 py-5">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi aperiam cupiditate dignissimos, error eum inventore ipsam laborum non officia pariatur quaerat veritatis voluptatem! Ab adipisci dolorem necessitatibus numquam quasi.</p>
                    </div>
                    <div class="text-gray-500">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, alias amet animi dolorum ducimus eos fuga nam optio quibusdam temporibus. A beatae culpa explicabo nihil, quidem sit tenetur unde! Deleniti?</p>
                    </div>
                    <img src="{{asset('images/iconos/calidad.png')}}" class="opacity-10 absolute top-10 right-10 h-64 w-64">
                </div>
                <div class="pt-12 pb-16">
                    <span class="text-primary font-semibold text-xl">Acerca del Mountain Cusco Tours <span class="text-gray-700">(Zenayda)</span></span>
                    <div class="grid lg:grid-cols-3 grid-cols-1 pt-5 gap-5 ">
                        <div class="flex justify-center"><img src="http://gotoperu-mx.s3-us-west-1.amazonaws.com/destinations/slider/1574272727139montana7colores_1574272726.jpg" class="h-full object-cover rounded-lg shadow-lg"></div>
                        <div class="lg:col-span-2 text-gray-500 pt-5 border-r border-b border-secondary border-opacity-30 px-5">
                            <p class="pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consequuntur cum delectus et ex facere minima modi non reiciendis, ullam? Consequuntur labore magni quaerat quibusdam quidem! At illum nihil unde?</p>
                            <p class="pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi aperiam consequatur deleniti eius exercitationem, facilis modi molestiae nemo optio possimus quod sed similique, soluta, tempora totam vel vitae voluptatem.</p>
                            <p class="pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae dignissimos distinctio doloremque, itaque iusto maiores necessitatibus neque, perspiciatis, quaerat recusandae temporibus totam unde velit? Animi excepturi maiores placeat reprehenderit tenetur!</p>
                            <p class="pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem ex fugit iusto magni maxime optio possimus. Aut autem dicta excepturi, illo inventore ipsam laboriosam magnam nemo neque quibusdam, repellendus, reprehenderit.</p>
                        </div>
                    </div>
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
