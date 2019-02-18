@extends('templete.masterProject')
@section('content')
    <form method="post" action="Upost" class="text-dark mt-5" >
        {{csrf_field()}}
        <label for="PT">post_title</label>
        <input type="text" id="PT" name="title" value="{{$id->title}}"><br><br>
        <label for="WN">Writer_name</label>
        <input type="text" id="WN" name="writer_name" value="{{$id->writer_name}}"><br><br>
        <button class="btn" type="submit" value="submit">update</button>
    </form>
    @endsection