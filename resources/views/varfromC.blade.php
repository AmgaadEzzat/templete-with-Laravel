@extends ('master')
@section('content')
    @foreach($cities as $city)
        <li class="title">{{$city}}</li>
    @endforeach
    @for($c=$i;$c<=5;$c++)
        {{'hello'}}
    @endfor
    @endsection