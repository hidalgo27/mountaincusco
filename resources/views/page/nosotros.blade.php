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
                        Somos una prestigiosa empresa de operadores turísticos en Cusco, Perú; que se especializa en tours a Machu Picchu y Camino Inca. Mountain Cusco Tours se enorgullece de ser un operador turístico de base local a un precio razonable y dedicado a mostrar al Perú de manera responsable. Somos un grupo de profesionales que decidimos comenzar esta empresa como una forma de retribuir a nuestra comunidad. Nos diferenciamos de otros operadores turísticos al pagarles a nuestros guías, porteadores, empleados y personal genealógico un salario digno y mejorar las vidas de las muchas comunidades Qechua que visitamos al donarles una parte de nuestras ganancias. La mayoría de los operadores no asisten a los quechuas nativos cuando visitan sus comunidades, sin embargo, el pueblo quechua y su cultura son un gran atractivo para los turistas y viajeros, y hacen contribuciones considerables al comercio turístico en el Perú. Para abordar este problema, Mountain Cusco Tours  ofrece un turismo social y ambientalmente responsable. Extendemos una invitación a todos aquellos que han planeado o están planeando su viaje al área de Cuzco en Perú para que nos acompañen en este esfuerzo para mejorar la vida de tantos. Al unirse a nosotros para una excursión o caminata, también se está uniendo a nuestro esfuerzo para nivelar el campo de juego y crear un Perú más justo a través de los medios de viaje.
                    </div>

                    <img src="{{asset('images/iconos/calidad.png')}}" class="opacity-10 absolute top-10 right-10 h-64 w-64">
                </div>
                <div class="pt-12 pb-16">
                    <span class="text-primary font-semibold text-xl">Acerca de Mountain Cusco Tours <span class="text-gray-700">(Zenayda)</span></span>
                    <div class="grid lg:grid-cols-3 grid-cols-1 pt-5 gap-5 ">
                        <div class="flex justify-center"><img src="http://gotoperu-mx.s3-us-west-1.amazonaws.com/destinations/slider/1574272727139montana7colores_1574272726.jpg" class="h-full object-cover rounded-lg shadow-lg"></div>
                        <div class="lg:col-span-2 text-gray-500 pt-5 border-r border-b border-secondary border-opacity-30 px-5">
                            <h3 class="text-primary font-semibold text-xl">MISIÓN</h3>
                            <p class="pb-5">Mountain Cusco Tours  tiene el deber de aliviar la pobreza en nuestra comunidad apoyando proyectos que promuevan el desarrollo sostenible. Nos gustaría que nuestros proyectos sirvan de ejemplo para que practiquen otros operadores turísticos. Por este motivo, dedicamos nuestros esfuerzos hacia el desarrollo sostenible en diversas formas, como la educación y la agricultura.</p>
                            <h3 class="text-primary font-semibold text-xl">MISIÓN</h3>
                            <p class="pb-5">Nuestro camino nos lleva a las comunidades nativas más desfavorecidas de la zona del Cusco. Si bien existe una pobreza extrema en estas áreas, también encontrará iniciativa, creatividad e ingenio que son intrínsecos a las personas de estas comunidades. Nuestro objetivo es ayudar a las personas a demostrar su potencial completo: no rendirse a la adversidad, fortalecer la determinación de ayudarse a sí mismos y no permitirse sufrir pasivamente las circunstancias.</p>
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
