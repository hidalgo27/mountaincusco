@extends('default.page.app')
@section('title')
    <title>FAQ - Mountain Cusco Tours - Travel agency Perú</title>
@endsection
@section('content')
@section('title_header')
    <h1 class="text-xl mb-6 font-bold font-cinzel text-secondary">Mountain Cusco Tours</h1>
    <h3 class="md:text-5xl text-3xl font-semibold tracking-widest text-gray-50">Consejos de Viajes</h3>
    <h4 class="md:text-8xl text-5xl font-bold inset-0 text-white text-opacity-10 absolute top-0">Consejos de Viajes</h4>
@endsection
   <div class="grid md:grid-cols-5 grid-cols-1 lg:gap-10 gap-5 lg:mx-20 mx-10">
        <div class="md:col-span-4">
            <section class="lg:mb-20 lg:mt-24 md:my-16 my-10 lg:justify-between lg:flex">
                <div class="relative">
                    <h2 class="md:text-5xl text-3xl font-semibold z-30 text-primary relative">Consejos de Viajes</h2>
                    <h4 class="md:text-8xl text-5xl font-bold inset-0 text-gray-100 text-opacity-90 absolute z-10 md:-top-10 -top-2">MOUNTAIN</h4>
                </div>
                <div class="block pt-6 text-right lg:mr-10">
                    <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                        <a href="/f-a-q#contacto" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white font-semibold">CONTACTAR</a>
                    </div>
                </div>
            </section>
            <section id="consejos" class="mt-20 md:px-10 px-2">
                <div class="grid md:grid-cols-5 grid-cols-1 md:gap-5 gap-2 items-center shadow rounded my-8 border border-amber-200">
                    <div class="p-2 flex justify-center">
                        <img src="{{asset('images/iconos/airplane.png')}}">
                    </div>
                    <div class="col-span-4">
                        <p class="p-5 text-gray-500">Perú es un país grande, por lo que muchos viajeros toman vuelos internos si tienen tiempo limitado. Hay cuatro grandes empresas que operan vuelos LanPerú (co-propiedad de LanChile), Taca Star Peru, aerolínea peruana. También hay un puñado de pequeñas aerolíneas con vuelos a destinos remotos en avioneta. Hay un impuesto de 18% en los vuelos nacionales y servicios.</p>
                    </div>
                </div>
                <div class="grid md:grid-cols-5 grid-cols-1 md:gap-5 gap2 items-center shadow rounded border border-amber-200">
                    <div class="p-2 flex justify-center">
                        <img src="{{asset('images/iconos/bus.png')}}">
                    </div>
                    <div class="col-span-4">
                        <p class="p-5 text-gray-500">Los autobuses públicos son el modo habitual de transporte a largas distancias. Son baratos, frecuentes y relativamente cómoda, al menos en las principales rutas. Al viajar entre ciudades, tener su pasaporte con usted, ya que tendrá que ser demostrado en los controles policiales. Robos a mano armada en los autobuses nocturnos no son desconocidos en el Perú, por lo que viajar en un autobús de día (o volar) si usted tiene la opción. Camiones menudo sirven como autobuses en zonas remotas. Los autobuses locales son lentos, barato y lleno de gente; cuando se quiere bajar simplemente gritar. Las tarifas de taxi deben ser regateado sobre; no hay taxis medidos. Ponerse de acuerdo sobre la tarifa de antemano.</p>
                    </div>
                </div>
            </section>
            <section class="my-10 md:px-5">
                <div class="mb-10">
                    <div id="informacion" class="flex text-primary items-center gap-3 pb-5">
                        <i data-feather="arrow-right"></i><h3 class="md:text-2xl text-lg font-semibold">Información General</h3>
                    </div>
                    <div class="shadow mx-5">
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0 " id="tab-multi-1" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-1">Cuando ir</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5 text-gray-500">Temporada alta de turismo en el Perú es de junio a agosto, que es la estación seca en las tierras altas, y este es el mejor momento para ir si estás interesado en el senderismo. Los viajeros hacen visitar el altiplano durante todo el año, aunque los meses más húmedos, enero a abril, hacen senderismo fangoso. Muchas de las principales fiestas se producen en los meses más lluviosos y continúan sin disminuir, a pesar de las fuertes lluvias. Básicamente, no hay turismo en las tierras altas durante todo el año.
                                <br>En la costa, los peruanos visitan las playas durante los meses soleados desde finales de diciembre hasta marzo, aunque pocas playas son particularmente atractivos. El resto del año, la costa se viste de niebla. En las selvas tropicales del este, llueve, naturalmente, mucho. Los meses más lluviosos son de diciembre a abril, aunque los viajeros visitan durante todo el año, ya que rara vez llueve durante más de unas pocas horas y todavía hay un montón de sol para disfrutar.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0" id="tab-multi-2" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-2">Que traer</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100 ">
                                <p class="p-5 text-gray-500">Debido a que el Perú es un país de tal diversidad, lo que aportan depende de sus planes de viaje. Llevar ropa de abrigo para las montañas, ropa ligera para la selva y una combinación de los desiertos costeros, que son cálidos durante el día y fresco por la noche. Los artículos que son difíciles de obtener en el país incluyen: suministros médicos personales, un cinturón de dinero, bloqueador solar, buenos libros en su idioma nativo y cualquier equipo eléctrico que utilice.
                                <br>Otras sugerencias incluyen: algo pequeño y típico de su país de origen (para su familia huésped). Diccionario; Libro de gramática española en su propio idioma (no hay libros de gramática española o Diccionarios disponibles en Cusco); correos electrónicos; una guía, nuevos libros de Inglés (no hay buenas librerías de todo). Si usted planea hacer el Camino Inca u otro viaje de campamento sugerimos traer un jumper caliente / suéter; impermeable; caminar zapatos / botas de montaña; saco de dormir (para Camino Inca, aunque éstas se pueden alquilar también); tabletas de purificación de agua (se pueden comprar en Cusco); cuchillo de bolsillo; antorcha / linterna y equipo porque hay una escasez de suministros de trekking en el país. Para las tabletas de la selva excursiones malaria, mosquitero y un impermeable (todos pueden ser comprados en Cusco).</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0" id="tab-multi-3" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-3">Dinero en Perú</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5 text-gray-500">La moneda de Perú es el Nuevo Sol. Hay 100 centavos a cada sol. En el momento de la escritura US $ 1,00 es equivalente a S / .2.68. Hay un número de cajeros automáticos que aceptan tarjetas de crédito y hay numerosas “Casas de Cambio” en cheques de viajero pueden ser cambiados o US Cash se pueden cambiar. También hay cajero automático que exceptúa Eurocard, que son el Banco Latino y el Banco del Sur. Es útil para llegar con dólares americanos. Cuando cambie dinero, tenga cuidado de que no se distrae con cualquier cosa para hacerte perder la cuenta de lo que te han dado.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0" id="tab-multi-4" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-4">Gastos en Perú</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5 text-gray-500">La siguiente lista te da una idea de lo que es posible que desee planificar durante su estancia en Cusco. EEUU Taxis $ 3.00; transporte local US $ 1.20; un menú fijo / menú en el restaurante US $ 4.00; una cerveza en un club nocturno US $ 3.00; un café en una cafetería de moda / bar $ 1.50; una pizza en un restaurante agradable US $ 5.00; llamada telefónica internacional $ 0.50 por minuto; servicio de lavandería US $ 2.00 por kilo; larga distancia de transporte local de US $ 13.00 por cerca de 15 horas; servicio de correo electrónico US $ 0.50 / hr.
                                <br>Si usted está planeando un viaje en el Perú después del Curso de español, hay que considerar un US $ 15-20 por un presupuesto minúsculo incluyendo alojamiento de bajo presupuesto, todas las comidas y gastos de viaje. Sin embargo, hay un par de excursiones caros es posible que desee tomar (por ejemplo Machu Picchu, rafting, etc.).</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0" id="tab-multi-5" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-5">Clima en el Perú</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5 text-gray-500">La temporada de lluvias en Cusco se produce desde diciembre hasta abril Los estudiantes todavía pueden caminar por el Camino del Inca, sin embargo, puede ser húmedo a veces. Durante la estación seca, las temperaturas son calurosos durante el día y muy frío por la noche. Se recomienda que los estudiantes traen un abrigo de lluvia y un buen abrigo para las noches y dentro de edificios, ya que no disponen de calefacción. Durante la estación seca se pone caliente durante el día en el sol, pero siempre es frío durante las noches, en el interior de los edificios y en la sombra. En mayo, junio y julio la temperatura realmente cae y se pone bastante frío. Sin embargo, es (casi) siempre soleado durante el día.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0 " id="tab-multi-6"type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-6">Comunicaciones</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5 text-gray-500">Por lo general, va a ser ningún problema para ponerse en contacto con el hogar, ya sea por teléfono, correo, fax o internet. Las llamadas de larga distancia son alrededor de US $ 3.00 por minuto, pero hay posibilidades más baratas con Net2Phone etc. Hay un montón de cafés cibernéticos en Cusco, el precio de una hora de internet es de aproximadamente US $ 1,00</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0 " id="tab-multi-7" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-7">Visas</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5 text-gray-500">La visa no es necesaria para la mayoría de los países occidentales (pero por favor, consulte con la Embajada del Perú en su país de origen). La visa de turista obtendrá a su llegada al aeropuerto de Lima, le permitirá 90 días en Perú. Se le permite un máximo de tres extensiones de 30 días para los de hasta 180 días (6 meses) en Perú. Cada extensión le costará alrededor de US $ 25.00. Es posible que desee considerar sólo cruzar la frontera (Bolivia o Chile), si usted necesita más tiempo en el Perú. Esto te tomará unos dos días y se le garantiza otros 90 días.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0 " id="tab-multi-8" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-8">De viaje</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5 text-gray-500">En general, es bastante seguro y relativamente fácil de recorrer por su cuenta en el Perú. Hay autobuses, aviones, taxis, etc. de todo el país, así como hoteles de todas las categorías. Hay todo tipo de viajeros y turistas alrededor y será fácil de conocer a otras personas y tener un gran viaje lleno de aventura, cultura y nuevos amigos.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0 " id="tab-multi-9" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-9">Lavandería</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5 text-gray-500">Hay varios servicios de lavandería en la ciudad que cobran alrededor de US $ 3.00 por kilo para lavar y doblar, su ropa normalmente en 24 horas.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0 " id="tab-multi-10"  type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-10">Taxis</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5 text-gray-500">Son innumerables. Pueden ser marcados por gritar taxi o agitando. A su llegada al aeropuerto de Lima una gorra oficial podría cobrarle US $ 20.00 o incluso US $ 25.00. Desde cualquier punto de la ciudad al aeropuerto es más barato, alrededor de US $ 8,00 (un taxi del oficial). Dentro de la ciudad (Lima), la tasa varía de US $ 3.00 hasta US $ 8,00. Fuera de Lima, las tarifas son más baratas. En el Cusco, por ejemplo, los taxis cobran S /. 3.00 durante la / día y S. 3.50 después de las 22:00 pm dentro de la ciudad. Un viaje en taxi desde o hasta el aeropuerto es más caro. Recomendamos taxis única oficiales especialmente durante las noches. El costo es el mismo y que puede ser reconocido porque tienen un número de teléfono en el techo.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0 " id="tab-multi-11"  type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-11">Baños</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5 text-gray-500">Aseos peruanos raramente tienen papel higiénico, incluso en los restaurantes. Lo mejor es tomar su propia MINIROLL alrededor con usted. Dont poner papel en el inodoro, ya que lo bloqueará. Los recipientes se proporcionan, incluso en las casas, y éstas se vacían con regularidad.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0 " id="tab-multi-12" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-12">Compras</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5 text-gray-500">Los productos comprados en tiendas y restaurantes tienen precios fijos y no pueden ser negociado. Sin embargo, los productos en la calle o en el mercado son bargainable. Peruanos han aprendido que los turistas tienen más dinero que ellos mismos lo será a veces poner sus precios cuando te ven venir. Si usted piensa que está siendo estafado después de empezar a caminar. Si usted don `t llaman de vuelta con un precio más bajo, entonces usted probablemente ha alcanzado un precio tan bajo como van a ir.
                                <br>La mejor calidad y el valor se encuentra en los productos hechos a mano. Esto se aplica particularmente a oro, plata y cobre de obras, así como ricos productos textiles del Perú. Estos incluyen prendas de alpaca y tapices tejidos. Productos de alpaca son bien vale la pena la compra, siempre y cuando usted está dispuesto a mano lavarlos con gran cuidado. Los vendedores a menudo le dicen a sus productos están hechos de beb alpaca. Esto no quiere decir alpacas bebé, sino que se refiere a la lana tomado de la garganta del animal, donde se encuentra en su más fino y más suave. La mayoría de los puentes de lana de alpaca se venden como son en realidad por lo general una mezcla más resistente de lana de llama y las fibras sintéticas. Muchos turistas también tienen reproducciones de casas de cerámica precolombina, con calabazas siendo el favorito.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0 " id="tab-multi-13" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-13">Horas de oficina</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5 text-gray-500">La mayoría de las tiendas están abiertas 10 a.m.-21:00 pm con un descanso largo almuerzo entre las 13:00 pm y las 16:00 pm. Los bancos están abiertos sólo por la mañana 09 a.m.-13:00 y de 4:30 a 18:00 de la tarde.</p>
                            </div>
                        </div>
                    </div>
                    <div id="salud" class="flex text-primary items-center gap-3 py-5">
                        <i data-feather="arrow-right"></i><h3 class="md:text-2xl text-lg font-semibold">Salud y seguridad</h3>
                    </div>
                    <div class="shadow mx-5">
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0 " id="tab-multi-one" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-one">Cuidado de la Salud</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5">Se recomienda que antes de la llegada, los estudiantes realizan un minucioso examen médico, la compra de seguro de salud y consulte a su médico acerca de las inyecciones necesarias. No hay malaria en el área de Cusco!</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0" id="tab-multi-two" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-two">Quemadura del sol</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100 ">
                                <p class="p-5">No se olvide que el sol es mucho más fuerte en latitudes tropicales. Es fácil de conseguir quemado por el sol, incluso cuando está nublado. Tome precauciones adicionales para evitar ser quemado por el sol: use un sombrero y usar protector solar. Trate de no demasiado pasar demasiado tiempo en el sol directo, especialmente 11:00-14:00. Tenga especial cuidado cuando se va de excursión en barco como el viento y el reflejo del sol en el agua aumenta el riesgo de quemaduras solares. Bebidas mucha agua.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0" id="tab-multi-three" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-three">Problemas estomacales</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5">Los síntomas son náuseas, vómitos y diarrea. La mejor precaución contra esto es evitar las verduras crudas, ensaladas y agua del grifo. Coma sólo fruta que requiere pelado. Si viven con una familia de acogida toda la comida y las bebidas se han preparado adecuadamente, por lo que disfrutar. A pesar de las precauciones, muchos visitantes se ven afectados por un malestar estomacal. Si se ve afectado descansar mucho y beber mucho líquido. Soluciones de rehidratación oral (SRO) están disponibles en farmacias y pueden ayudarle a reemplazar los líquidos perdidos. Si está afectada por más de tres días, y / o si tiene fiebre, usted debe visitar a un médico.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0" id="tab-multi-four" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-four">Vertigo</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5">Algunas personas experimentan alguna incomodidad a esta altitud. Recomendamos al menos un día de descanso antes del comienzo de las clases. Los síntomas son dolores de cabeza, mareos, malestar estomacal y cansancio. Estos síntomas se pueden manejar mediante la reducción del consumo de alcohol; beber muchos líquidos; comer comidas ligeras y mucho descanso.</p>
                            </div>
                        </div>
                        <div class="tab overflow-hidden border-t">
                            <input class="absolute opacity-0" id="tab-multi-five" type="radio" name="tabs2">
                            <label class="block p-4 cursor-pointer" for="tab-multi-five">Cuestiones de Seguridad</label>
                            <div class="tab-content overflow-hidden border-l-2 bg-gray-100">
                                <p class="p-5">Cusco es una ciudad relativamente segura, pero como el centro urbano ha crecido, también lo ha hecho la pequeña delincuencia. Por desgracia, los carteristas y ladrones se han vuelto más y más común en Lima y Cusco y uno debe tomar precauciones, como no tomar un taxi solo por la noche, ni de andar por la calle solo después de las 22:00. Objetos como dinero y pasaportes no deben dejarse abierta en su habitación.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="restaurantes" class="md:mt-24 mt-16 lg:justify-between lg:flex">
                <div class="relative">
                    <h2 class="md:text-5xl text-3xl font-semibold z-30 text-primary relative">Restaurantes de Cusco</h2>
                    <h4 class="md:text-8xl text-5xl font-bold inset-0 text-gray-100 text-opacity-90 absolute z-10 md:-top-10 -top-2">TOURS</h4>
                </div>
            </section>
            <section class="md:my-16 my-8">
                <div class="grid lg:grid-cols-2 grid-cols-1 gap-10 px-5">
                    <div class="bg-primary bg-opacity-10 shadow-lg rounded p-6 transform hover:scale-105 transition duration-500">
                        <span class="text-primary font-semibold text-lg">Inka Grill</span>
                        <div class="border border-solid border-secondary border-opacity-30"></div>
                        <div class="flex text-xs items-center gap-2 text-gray-500 mt-4 mb-1">
                            <i data-feather="map-pin" class="w-3 text-secondary"></i>Portal de Panes 115, Plaza de Armas, Cusco
                        </div>
                        <div class="flex text-xs items-center gap-4 text-gray-500">
                            <div class="flex gap-2 items-center"><i data-feather="phone" class="w-3 text-secondary"></i>(084) 262992</div>
                            <div class="flex gap-2 items-center"><i data-feather="dollar-sign" class="w-3 text-secondary"></i>$10</div>
                        </div>
                        <p class="text-sm mt-4 text-gray-700">Esto es, según muchos, la mejor comida de la ciudad con un poco de una excelente cocina “novoandina” en la oferta. Esto significa que utilizan ingredientes nativos y recetas andinas revivió junto a técnicas de cocina más modernos e innovadores para crear excelentes e interesantes opciones para comer. También tienen una amplia selección de platos vegetarianos, pasta casera abundante, delicioso café y pasteles para llevar suntuosos para darse un festín. Buen servicio está a la mano con un personal atento.</p>
                    </div>
                    <div class="bg-primary bg-opacity-10 shadow-lg rounded p-6 transform hover:scale-105 transition duration-500">
                        <span class="text-primary font-semibold text-lg">Tunupa</span>
                        <div class="border border-solid border-secondary border-opacity-30"></div>
                        <div class="flex text-xs items-center gap-2 text-gray-500 mt-4 mb-1">
                            <i data-feather="map-pin" class="w-3 text-secondary"></i>Portal Confiturias 233, 2do piso, Plaza de Armas, Cusco
                        </div>
                        <div class="flex text-xs items-center gap-4 text-gray-500">
                            <div class="flex gap-2 items-center"><i data-feather="phone" class="w-3 text-secondary"></i>(084) 252963</div>
                            <div class="flex gap-2 items-center"><i data-feather="dollar-sign" class="w-3 text-secondary"></i>$10</div>
                        </div>
                        <p class="text-sm mt-4 text-gray-700">Esta es otra ofrenda en la Plaza de Armas, con una gran variedad de alimentos. Las opciones incluyen una fabulosa cena buffet con carne, mariscos, verduras y comida tradicional peruana. Por lo general atiende a grupos significado por lo general hay un ambiente animado y jovial. Hay un espectáculo de la noche todos los días con los músicos andinos de colores y bailarines o, alternativamente, hay asientos y mesas con una excelente vista de la Plaza de Armas de Cuzco.</p>
                    </div>
                    <div class="bg-primary bg-opacity-10 shadow-lg rounded p-6 transform hover:scale-105 transition duration-500">
                        <span class="text-primary font-semibold text-lg">Inkanto</span>
                        <div class="border border-solid border-secondary border-opacity-30"></div>
                        <div class="flex text-xs items-center gap-2 text-gray-500 mt-4 mb-1">
                            <i data-feather="map-pin" class="w-3 text-secondary"></i>Portal de Carnes 254, Plaza de Armas, Cusco
                        </div>
                        <div class="flex text-xs items-center gap-4 text-gray-500">
                            <div class="flex gap-2 items-center"><i data-feather="phone" class="w-3 text-secondary"></i>(084) 222642</div>
                            <div class="flex gap-2 items-center"><i data-feather="dollar-sign" class="w-3 text-secondary"></i>$11</div>
                        </div>
                        <p class="text-sm mt-4 text-gray-700">Decoración Pristine recibe a los huéspedes a Inkanto con manteles blancos y muebles de buena calidad. La comida no me decepcionó – esto es principalmente la cocina italiana con una fantástica pizza, pasta y risotto suficiente para hacer la boca agua sin siquiera considerar los panecillos recién horneados con aceite de oliva y vinagre balsámico que vienen como un aperitivo. Una gran opción para aquellos que buscan un poco de buena comida italiana en la plaza.</p>
                    </div>
                    <div class="bg-primary bg-opacity-10 shadow-lg rounded p-6 transform hover:scale-105 transition duration-500">
                        <span class="text-primary font-semibold text-lg">Cicciolina</span>
                        <div class="border border-solid border-secondary border-opacity-30"></div>
                        <div class="flex text-xs items-center gap-2 text-gray-500 mt-4 mb-1">
                            <i data-feather="map-pin" class="w-3 text-secondary"></i>Triunfo 393, Cuzco
                        </div>
                        <div class="flex text-xs items-center gap-4 text-gray-500">
                            <div class="flex gap-2 items-center"><i data-feather="phone" class="w-3 text-secondary"></i>(084) 239510</div>
                            <div class="flex gap-2 items-center"><i data-feather="dollar-sign" class="w-3 text-secondary"></i>$11</div>
                        </div>
                        <p class="text-sm mt-4 text-gray-700">Esta es otra oferta mediterránea con comida italiana de nuevo teniendo lugar central, pero de ninguna manera es la opción exclusiva. Aperitivos sabrosos son los mariscos marinados en leche de coco con especias asiáticas. Los platos principales incluyen pastas italianas – particularmente buen plato es el Cordero Ragu que tiene una salsa excepcional. Especias marroquíes también cuentan e incluso el número peruana extraño – Causa de Cuy es un delicioso plato de patatas en puré con cal fresca y – usted lo adivinó – Guinea Pig, un manjar Andina que se ha comido por siglos.</p>
                    </div>
                    <div class="bg-primary bg-opacity-10 shadow-lg rounded p-6 transform hover:scale-105 transition duration-500">
                        <span class="text-primary font-semibold text-lg">Granja de Heidi</span>
                        <div class="border border-solid border-secondary border-opacity-30"></div>
                        <div class="flex text-xs items-center gap-2 text-gray-500 mt-4 mb-1">
                            <i data-feather="map-pin" class="w-3 text-secondary"></i>Cuesta San Blas 525, 2do piso, San Blas, Cusco
                        </div>
                        <div class="flex text-xs items-center gap-4 text-gray-500">
                            <div class="flex gap-2 items-center"><i data-feather="phone" class="w-3 text-secondary"></i>(084) 238383</div>
                            <div class="flex gap-2 items-center"><i data-feather="dollar-sign" class="w-3 text-secondary"></i>$4 - $5</div>
                        </div>
                        <p class="text-sm mt-4 text-gray-700">Un restaurante recién salida de la finca con los mejores ingredientes locales de calidad, Granja de Heidi es un gran restaurante de valor en el distrito de San Blas de Cuzco. Maravillosamente comida casera saludable es la orden del día con una amplia gama de platos de inspiración local infundidos con el estilo de la agradable alemán chef y propietario. Las opciones vegetarianas también están disponibles, con el rocoto relleno (relleno de pimienta de chiles rojos) un golpe definitivo para aquellos que pueden manejar sus especias. Los postres son simplemente exquisito – probar el chocolate fudge de chocolate que le dejará asombrado de cómo en realidad se puede hacer chocolate para degustar tan bueno.</p>
                    </div>
                    <div class="bg-primary bg-opacity-10 shadow-lg rounded p-6 transform hover:scale-105 transition duration-500">
                        <span class="text-primary font-semibold text-lg">Chez Maggy</span>
                        <div class="border border-solid border-secondary border-opacity-30"></div>
                        <div class="flex text-xs items-center gap-2 text-gray-500 mt-4 mb-1">
                            <i data-feather="map-pin" class="w-3 text-secondary"></i>Procuradores 344, 365, 374, Cusco
                        </div>
                        <div class="flex text-xs items-center gap-4 text-gray-500">
                            <div class="flex gap-2 items-center"><i data-feather="phone" class="w-3 text-secondary"></i>(084) 234861</div>
                            <div class="flex gap-2 items-center"><i data-feather="dollar-sign" class="w-3 text-secondary"></i>$5</div>
                        </div>
                        <p class="text-sm mt-4 text-gray-700">Maggy Siempre tiene un gran ambiente entre los mochileros y ofrece una gran comida de valor con la comida peruana, mexicana e italiana todo en el menú. Los favoritos particulares son la pizza y los platos de ravioles, una excelente toma en el original italiano con sus propias influencias y sabores andinos distintos. Hay tres lugares en la calle Procuradores aunque el último de la izquierda tiene probablemente el personaje más auténtico y rústico.</p>
                    </div>
                </div>
            </section>
        </div>
        <div class="h-screen sticky top-0 hidden md:block">
            <div class="h-screen flex">
                <div class="my-10">
                    <div class="mb-5">
                        <span class="text-primary font-semibold">Contenido</span>
                        <ul class="text-sm mt-3 ml-2 text-gray-500">
                            <li class="pb-2 hover:text-secondary transform hover:scale-105 transition duration-500"><a href="/f-a-q#consejos">Consejos de viajes</a></li>
                            <li>
                                <ul class="ml-4">
                                    <li class="pb-2 hover:text-secondary transform hover:scale-105 transition duration-500"><a href="/f-a-q#informacion">Información general</a></li>
                                    <li class="pb-2 hover:text-secondary transform hover:scale-105 transition duration-500"><a href="/f-a-q#salud">Salud y seguridad</a></li>
                                </ul>
                            </li>
                            <li class="pb-2 hover:text-secondary transform hover:scale-105 transition duration-500"><a href="/f-a-q#restaurantes">Restaurantes de Cusco</a></li>
                        </ul>
                    </div>
                    <hr>
                    <div class="mt-5">
                        <span class="text-primary font-semibold">Tours recomendados</span>
                        @foreach ($paquetes as $paquete)
                            <a href="/en-tours/{{$paquete->url}}">
                                <div class="flex flex-cols-2 px-2 py-5 lg:gap-5 gap-2 items-center">
                                    <img src="{{asset($paquete->imagen)}}" class="object-cover h-10 w-10 rounded-full transform hover:scale-150 transition duration-500">
                                    <div class="lg:text-sm text-xs text-gray-500 hover:text-secondary transform hover:-translate-x-2 transition duration-500 ease-in-out">{{$paquete->titulo}}</div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
   </div>

@endsection
