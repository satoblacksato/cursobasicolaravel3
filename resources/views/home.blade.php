bienvenido
{{ Auth::user() }}
<a href="{{ route('logout') }}">SALIR</a>
<br/>

@include('menu')