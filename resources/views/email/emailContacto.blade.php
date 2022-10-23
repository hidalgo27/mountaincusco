@extends('default.email.email')
@section('content')
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family: 'Segoe UI';">
        <tr>
            <td>
                Mensaje de {{$nombre}}
            </td>
        </tr>
        <tr>
            <td>
                <p><strong>Formulario de: {{$url}}</strong></p>
                <p><strong>Email: {{$email}}</strong></p>
                <p><strong>Celular: {{$celular}}</strong></p>
                <p><strong>Mensaje: {{$mensaje}}</strong></p>
            </td>
        </tr>
    </table>
@stop