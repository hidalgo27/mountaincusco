<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\TPaquete;
use App\Models\TPaqueteDestino;
use Illuminate\Http\Request;
use App\Models\THotel;
use App\Models\TpaqueteItinerario;
use App\Models\TItinerario;
use App\Models\TDestino;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use App\Models\Blog_categoria;
use App\Models\Blog_post;
use Illuminate\Support\Collection;

class HomeController extends Controller
{
    public function index(){
        $paquetes = TPaquete::where('estado', 1)->get();
        $destinos = TDestino::latest()->take(3)->get();
        return view('page.home',compact('paquetes','destinos'));
    }
    public function paquetes(){
        $paquetes=TPaquete::paginate(5);
        return view('page.tours',compact('paquetes'));
    }
    public function paquete($url){
        $paquetes=TPaquete::all();
        $paquete=TPaquete::where('url',$url)->get()->first();
        $itinerario=TpaqueteItinerario::where('idpaqueteS',$paquete->id)->get();
        return view('page.toursDetail',compact('paquete','paquetes','itinerario'));
    }
    public function destino(TDestino $destino){
        $paquetes = TPaqueteDestino::
        with('paquetes.precio_paquetes','destinos', 'paquetes.paquetes_destinos.destinos')
            ->where('iddestinos', $destino->id)
            ->get();
//        $paquetes=TPaquete::paginate(5);
        return view('page.destino',compact('paquetes', 'destino'));
    }
    public function faq(){
        $paquetes = TPaquete::latest()->take(4)->get();
        return view('page.faq',compact('paquetes'));
    }
    public function destinos(){
        $destinos=TDestino::all();
        $paquetes=TPaquete::all();
        return view('page.informacion',compact('destinos','paquetes'));
    }
    public function hoteles(){
        $hoteles = THotel::all();
        $paquetes=TPaquete::all();
        return view('page.hoteles', compact('hoteles','paquetes'));
    }
    public function contacto(){
        $paquetes=TPaquete::all();
        return view('page.contacto',compact('paquetes'));
    }
    public function condiciones(){
        $paquetes=TPaquete::all();
        return view('page.condiciones',compact('paquetes'));
    }
    public function personales(){
        $paquetes=TPaquete::all();
        return view('page.datosPersonales',compact('paquetes'));
    }
    public function noticias(){
        $paquetes=TPaquete::all();
        $posts= Blog_post::with(['user','categoria','imagenes'])->paginate(5);
        $ultimas = Blog_post::latest()
            ->take(3)
            ->with(['user','categoria','imagenes'])
            ->get();
        $categorias=$this->get_categorias_post_count();
        return view('page.noticias',compact('posts','paquetes','ultimas','categorias'));
    }
    public function noticias_categoria($categoria){
        $paquetes=TPaquete::all();
        $consulta = Blog_categoria::where('nombre',$categoria)->first();
        $posts=Blog_post::where('categoria_id',$consulta->id)->with(['user','categoria','imagenes'])
        ->paginate(5);
        $ultimas = Blog_post::latest()
            ->take(3)
            ->with(['user','categoria','imagenes'])
            ->get();
        $categorias=$this->get_categorias_post_count();
        return view('page.noticias',compact('posts','paquetes','ultimas','categorias'));
    }
    public function noticias_detail($url){
        $paquetes=TPaquete::all();
        $post=Blog_post::where('url',$url)
            ->with(['user','categoria','imagenes'])
            ->first();
        $categoria=Blog_post::select('categoria_id')
            ->where('url',$url)
            ->get();
        $posts_relacionados=Blog_post::where('categoria_id',$categoria[0]->categoria_id)
            ->latest()
            ->take(3)
            ->with(['user','categoria','imagenes'])
            ->get();
        return view('page.noticiaDetail',compact('post','paquetes','posts_relacionados'));
    }
    public function get_categorias_post_count(){
        $categorias = Blog_categoria::get();
        $collection = collect();
        foreach ($categorias as $cat) {
            $idCat = $cat->id;
            $consulta = Blog_post::where('categoria_id',$idCat)->count();
            $collection->push([$cat->nombre,$consulta]);
        }
        return $collection;
    }
    public function nosotros(){
        $paquetes=TPaquete::all();
        return view('page.nosotros',compact('paquetes'));
    }
    public function esnna(){
        $paquetes=TPaquete::all();
        return view('page.esnna',compact('paquetes'));
    }
    public function transporte(){
        $paquetes=TPaquete::all();
        return view('page.transporte',compact('paquetes'));
    }
    public function pagos(){
        $paquetes=TPaquete::all();
        return view('page.pagos',compact('paquetes'));
    }
    public function contact_form(Request $request)
    {
        // 🐝 Honeypot (campo invisible)
        if (!empty($request->input('website'))) {
            return redirect()->back()->withErrors(['spam' => 'Intento de spam bloqueado.']);
        }

        // ✅ Validación de campos
        $request->validate([
            'tNombre' => 'required|string|max:100',
            'tEmail' => 'required|email|max:255',
            'tCelular' => 'nullable|string|max:20',
            'tMensaje' => 'required|string|max:1000',
            'g-recaptcha-response' => 'required'
        ]);

        // ✅ Validar reCAPTCHA v3 en el servidor
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('services.recaptcha.secret_key'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        $body = $response->json();

        if (!$body['success'] || $body['score'] < 0.5) {
            return redirect()->back()->withErrors(['captcha' => 'Verificación fallida. Intente nuevamente.']);
        }

        // 📧 Enviar los correos
        try {
            $from = 'info@mountaincuscotours.com';
            $nombre = $request->tNombre;
            $email = $request->tEmail;
            $celular = $request->tCelular;
            $mensaje = $request->tMensaje;

            Mail::send(['html' => 'email.emailClient'], ['nombre' => $nombre],
                function ($m) use ($email, $nombre) {
                    $m->to($email, $nombre)
                        ->subject('MOUNTAIN CUSCO TOURS')
                        ->from('info@mountaincuscotours.com', 'MOUNTAIN CUSCO TOURS');
                });

            Mail::send(['html' => 'email.emailContacto'], [
                'nombre' => $nombre,
                'email' => $email,
                'celular' => $celular,
                'mensaje' => $mensaje,
            ], function ($m) use ($from) {
                $m->to($from, 'MOUNTAIN CUSCO TOURS')
                    ->subject('MOUNTAIN - Formulario de Contacto')
                    ->from('info@mountaincuscotours.com', 'MOUNTAIN CUSCO TOURS');
            });

            return Redirect::to(URL::previous() . "#contacto")->with('status', 'Mensaje enviado con éxito.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Error al enviar el mensaje.']);
        }
    }
    public function contact_form2(Request $request){
        $from = 'info@mountaincuscotours.com';
        $nombre = $request->tNombre;
        $email = $request->tEmail;
        $celular = $request->tCelular;
        $mensaje=$request->tMensaje;
//        $url3=$this->getUrl();
        try {
            Mail::send(['html' => 'email.emailClient'], ['nombre' => $nombre],
                function ($messaje) use ($email, $nombre) { $messaje->to($email, $nombre)
                    ->subject('MOUNTAIN CUSCO TOURS')
                    ->from('info@mountaincuscotours.com', 'MOUNTAIN CUSCO TOURS');
            });
            Mail::send(['html' => 'email.emailContacto'], [
                'nombre' => $nombre,
                'email' => $email,
                'celular' => $celular,
//                'url' =>$url3,
                'mensaje' => $mensaje,],
                function ($messaje) use ($from) { $messaje->to($from, 'MOUNTAIN CUSCO TOURS')
                    ->subject('MOUNTAIN - Formulario de Contacto')
                    ->from('INFO@mountaincuscotours.com', 'MOUNTAIN CUSCO TOURS');
            });
            return Redirect::to(URL::previous() . "#contacto")->with('status', 'Registro satisfactorio.');
        }
        catch (Exception $e){
            return $e;
        }
    }
    public function contact_form_tour(Request $request){
        $from = 'info@mountaincuscotours.com';
        $nombre = $request->tNombre;
        $email = $request->tEmail;
        $celular = $request->tCelular;
        $mensaje=$request->tMensaje;
//        $url3=$this->getUrl();
        try {
            Mail::send(['html' => 'email.emailClient'], ['nombre' => $nombre],
                function ($messaje) use ($email, $nombre) { $messaje->to($email, $nombre)
                    ->subject('MOUNTAIN CUSCO TOURS')
                    ->from('info@mountaincuscotours.com', 'MOUNTAIN CUSCO TOURS');
            });
            Mail::send(['html' => 'email.emailContacto'], [
                'nombre' => $nombre,
                'email' => $email,
                'celular' => $celular,
//                'url' =>$url3,
                'mensaje' => $mensaje,],
                function ($messaje) use ($from) { $messaje->to($from, 'MOUNTAIN CUSCO TOURS')
                    ->subject('MOUNTAIN CUSCO TOURS - Formulario de Contacto TOUR')
                    ->from('info@mountaincuscotours.com', 'MOUNTAIN CUSCO TOURS');
            });
            return Redirect::to(URL::previous() . "#contacto_tour")->with('status2', 'Registro satisfactorio.');
        }
        catch (Exception $e){
            return $e;
        }
    }
//    public function getUrl(){
//        $url=url()->previous();
//        $url2=explode(env('APP_URL'),$url);
//        dd($url2[1]);
//        return $url3=str_replace('-', ' ', $url2[1]);
//    }
}
