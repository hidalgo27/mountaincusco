@extends('default.page.app')
@section('title')
    <title>{{$paquete->titulo}} - Mountain Cusco Tours - Travel agency Perú</title>
@endsection
@section('title_header')
    <h1 class="text-xl mb-6 font-bold font-cinzel text-secondary">Mountain Cusco Tours</h1>
    <h3 class="md:text-5xl text-3xl font-semibold tracking-widest text-gray-50">{{$paquete->titulo}}</h3>
    <h4 class="md:text-8xl text-5xl font-bold inset-0 text-white text-opacity-10 absolute top-0">{{$paquete->titulo}}</h4>
@endsection
@section('content')

      <div class="grid md:grid-cols-6 grid-cols-1 md:gap-16 p-10 text-gray-700">
         <div class="md:col-span-4 lg:ml-8 mt-10">
            <hr>
            <div class="grid lg:grid-cols-4 md:grid-cols-2 my-4 text-sm gap-2 flex justify-center">
               <div class="flex items-center gap-5">
                  <i data-feather="clock" class=" text-primary"></i>
                  <div class="grid grid-rows-2">
                     <span class="text-primary font-bold">Duración</span>
                     <span class="text-gray-400">{{$paquete->duracion}} Días</span>
                  </div>
               </div>
               <div class="flex items-center gap-5">
                  <i data-feather="map-pin" class=" text-primary"></i>
                  <div class="grid grid-rows-2">
                     <span class="text-primary font-bold">Ubicación</span>
                     <span class="text-gray-400">Cusco,Perú</span>
                  </div>
               </div>
               <div class="flex items-center gap-5">
                  <i data-feather="activity" class=" text-primary"></i>
                  <div class="flex flex-col">
                     <span class="text-primary font-bold">Categorìa</span>
                     <div class="flex flex-col">
                        @if($paquete->paquetes_categoria->count()==0)
                        <span class="text-gray-400">General</span>
                        @endif
                        @foreach($paquete->paquetes_categoria as $categoria)
                        <span class="text-gray-400">{{$categoria->categoria->nombre}}</span>
                        @endforeach
                     </div>
                  </div>
               </div>
               <div class="flex items-center gap-5">
                     <i data-feather="dollar-sign" class=" text-primary"></i>
                     <div class="grid grid-rows-2">
                        <span class="text-primary font-bold">Precio</span>
                        <span class="text-gray-400">
{{--                            from {{$paquete->precio_paquetes->where('estrellas', 2)->first()->precio_s}} usd--}}
                            Cotizar
                        </span>
                     </div>
                  </div>
            </div>
            <hr>
            @if ($paquete->descripcion !=null)
            <div class="my-12 mt-16">
               <div class="flex gap-5">
                  <i data-feather="file-text" class=" text-amber-300"></i>
                  <h3 class="pb-7 text-primary text-lg font-semibold">Descripción</h3>
               </div>
               <div class="text-justify text-gray-500">{!!$paquete->descripcion!!}</div>
            </div>
            @endif
            <div class="my-12">
               <div class="flex gap-5">
                  <i data-feather="send" class=" text-amber-300"></i>
                  <h3 class="pb-7 text-primary text-lg font-semibold">Itinerario</h3>
               </div>
               <div class="shadow text-gray-500">
                  @foreach ($itinerario as $item)
                     <div class="tab overflow-hidden border-t">
                        <input class="absolute opacity-0 " id="tab-multi-{{$loop->index}}" type="checkbox" name="tabs">
                        <label class="block p-5 cursor-pointer" for="tab-multi-{{$loop->index}}">Día {{$loop->index+1}}: {{$item->itinerarios->titulo}}</label>
                        <div class="tab-content overflow-hidden border-l-2 bg-gray-100 ">
                           <div class="text-gray-500 px-5 pt-5">{!!$item->itinerarios->descripcion!!}</div>
                           <div class="carousel relative shadow rounded p-5">
                              <div class="carousel-inner relative overflow-hidden w-full">
                              @foreach($item->itinerarios->itinerario_imagen as $imagen)
                              <input class="carousel-open" type="radio" id="carousel-{{$imagen->nombre}}" name="carousel{{$item->itinerarios->titulo}}" aria-hidden="true" hidden="" checked="checked">
                                 <div class="carousel-item absolute opacity-0">
                                    <img src="{{asset($imagen->nombre)}}" class="object-cover">
                                 </div>
                              @endforeach
                              <ol class="carousel-indicators">
                                 @foreach($item->itinerarios->itinerario_imagen as $imagen)
                                 <li class="inline-block mr-3">
                                    <label for="carousel-{{$imagen->nombre}}" class="carousel-bullet cursor-pointer block text-secondary text-7xl hover:text-primary">•</label>
                                 </li>
                                 @endforeach
                              </ol>
                              </div>
                           </div>
                        </div>
                     </div>
                  @endforeach
               </div>
            </div>
            <div class="my-12">
               <div class="grid md:grid-cols-2 grid-cols-1 gap-10">
                  @if ($paquete->incluye !=null)
                  <div>
                     <div class="flex gap-5">
                        <i data-feather="user-check" class=" text-amber-300"></i>
                        <h3 class="pb-7 text-lg text-primary font-semibold">Incluye</h3>
                     </div>
                     <ul class="list-inside list-disc ml-5 text-gray-500">
                        {!!$paquete->incluye!!}
                     </ul>
                  </div>
                  @endif
                  @if ($paquete->noincluye !=null)
                     <div>
                        <div class="flex gap-5">
                           <i data-feather="user-x" class=" text-amber-300"></i>
                           <h3 class="pb-7 text-lg text-primary font-semibold">No incluye</h3>
                        </div>
                        <ul class="list-inside list-disc ml-5 text-gray-500">
                           {!!$paquete->noincluye!!}
                        </ul>
                     </div>
                  @endif
               </div>
               @if ($paquete->opcional !=null)
               <div>
                  <div class="flex gap-5 my-6">
                     <i data-feather="user" class=" text-amber-300"></i>
                     <h3 class="text-lg text-primary font-semibold">Que llevar</h3>
                  </div>
                  <ul class="list-inside list-disc ml-5 text-gray-500">
                     {!!$paquete->opcional!!}
                  </ul>
               </div>
               @endif
            </div>
            <div class="my-12">
               <div class="flex gap-5">
                  <i data-feather="map-pin" class=" text-amber-300"></i>
                  <h3 class="pb-7 text-lg text-primary font-semibold">Ubicación geográfica</h3>
               </div>
               <div class="flex justify-center">
                  <iframe class="shadow rounded w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7766.948289097877!2d-72.26987952796162!3d-13.258283769771339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dea6dde30c85f%3A0x6b45959fbd0c6f6a!2sOllantaytambo!5e0!3m2!1ses-419!2spe!4v1624983835113!5m2!1ses-419!2spe" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
               </div>
            </div>
            <div class="mt-12">
               <div class="flex gap-5">
                  <i data-feather="image" class=" text-amber-300"></i>
                  <h3 class="pb-7 text-lg text-primary font-semibold">Galería</h3>
               </div>
               <div class="carousel relative shadow rounded">
                  <div class="carousel-inner relative overflow-hidden w-full">
                     @foreach($paquete->imagen_paquetes as $imagen)
                     <input class="carousel-open" type="radio" id="carousel-{{$loop->index}}" name="carousel" aria-hidden="true" hidden="" checked="checked">
                     <div class="carousel-item absolute opacity-0">
                        <img src="{{asset($imagen->nombre)}}" class=" object-cover w-full">
                     </div>
                     @endforeach
                     <ol class="carousel-indicators">
                     @foreach($paquete->imagen_paquetes as $imagen)
                        <li class="inline-block mr-3">
                           <label for="carousel-{{$loop->index}}" class="carousel-bullet cursor-pointer block text-secondary text-7xl hover:text-primary">•</label>
                        </li>
                     @endforeach
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <div id="contacto_tour" class="md:col-span-2 lg:mr-8 mt-10">
            @if (session('status2'))
               <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                  <strong class="font-bold">Gracias por contactar con nosotros</strong><br>
                  <span class="block sm:inline">Su mensaje fue enviado satisfactoriamente.</span>
               </div>
            @endif
            <div class="shadow-lg mt-10 lg:mt-0">
               <div class="bg-secondary text-center rounded-t">
                  <div class="p-5"><span class=" text-2xl font-bold text-white">Contactar</span></div>
               </div>
               <div class="text-sm px-5 py-5 rounded-b">
               <form method="POST" action="{{route('contact_form')}}" id="demo-form">
                     @csrf
                   <div style="display:none;">
                       <input type="text" name="website" tabindex="-1" autocomplete="off">
                   </div>
                  <div class="p-2">
                     <input type="text" name="tNombre" placeholder="Nombres" required class="w-full p-2 focus:outline-none border border-gray-400 rounded hover:shadow">
                  </div>
                  <div class="p-2">
                     <input type="email"name="tEmail" placeholder="Correo electrónico" required class="w-full p-2 focus:outline-none border border-gray-400 rounded hover:shadow">
                  </div>
                  <div class="p-2">
                     <input type="text" name="tCelular" placeholder="Número de celular" required class="w-full p-2 focus:outline-none border border-gray-400 rounded hover:shadow">
                  </div>
                  <div class="p-2">
                     <textarea type="text" name="tMensaje" placeholder="Mensaje" required class="w-full p-2 focus:outline-none border border-gray-400 rounded hover:shadow"></textarea>
                  </div>
                  <div class="p-2">
                      <button
                          class="bg-secondary g-recaptcha hover:bg-opacity-70 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                          type="submit"
                          data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"
                          data-callback='onSubmit'
                          data-action='submit'>
                          Enviar
                      </button>
                  </div>
                </div>
            </form>
            </div>
            <div class="my-12">
               <span class="text-primary font-semibold">Tours recomendados</span>
               @foreach ($paquetes as $paque)
                <a href="/en-tours/{{$paque->url}}">
                    <div class="flex flex-cols-2 lg:px-5 px-2 py-5 lg:gap-5 gap-2 items-center">
                        <img src="{{asset($paque->imagen)}}" class="object-cover h-16 w-16 rounded-full transform hover:scale-125 transition duration-500">
                        @if($paquete->titulo!=$paque->titulo)
                           <div class="lg:text-sm text-xs text-gray-500 hover:text-secondary transform hover:-translate-x-2 transition duration-500 ease-in-out">{{$paque->titulo}}</div>
                        @endif
                        @if($paquete->titulo==$paque->titulo)
                           <div class="lg:text-sm text-xs text-secondary font-semibold hover:text-secondary">{{$paque->titulo}}</div>
                        @endif
                     </div>
                </a>
                <hr class="mx-2">
            @endforeach
            </div>
         </div>
      </div>
@endsection
          <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
@stack('scripts')
          <script>
              document.getElementById("demo-form").addEventListener("submit", function (event) {
                  event.preventDefault(); // evita el envío directo

                  grecaptcha.ready(function () {
                      grecaptcha.execute("{{ env('RECAPTCHA_SITE_KEY') }}", { action: "submit" }).then(function (token) {
                          // crea input hidden con el token
                          var input = document.createElement("input");
                          input.type = "hidden";
                          input.name = "g-recaptcha-response";
                          input.value = token;
                          document.getElementById("demo-form").appendChild(input);

                          // ahora sí envía el formulario
                          document.getElementById("demo-form").submit();
                      });
                  });
              });
          </script>
