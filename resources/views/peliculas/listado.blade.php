@include('includes.header')


<h3>{{$titel}}</h3>

<h3>{{$listado[1]}}<h3>

<p>{{date('Y')}}</p>


{{-- condicionales --}}

@if($titel)
     <h2>El titulo existe y es este : {{$titel}}<h2>
@else
    El titulo no existe 
@endif

{{-- bucles--}}


@for($i=1; $i <=20 ; $i++)
    el numero es :{{$i}} <br/>
@endfor

@foreach($listado as $pelicula)
<p>{{$pelicula}}</p>
@endforeach

@include('includes.footer')