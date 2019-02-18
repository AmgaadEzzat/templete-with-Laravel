@extends('master')
@section('content')
   <h1 class="title">All Members</h1>
    @foreach($members as $member)
        <li class="display-4">{{$member->member_name}}
            &nbsp&nbsp; <a href="/members/{{$member->id}}/delete">delete</a> &nbsp&nbsp;
            <a href="/members/{{$member->id}}/edit">edit</a>
        </li>
    @endforeach

   {!! Form::open(['method'=>'post']) !!}
   {{Form::text('member_name','',['class'=>'form-control','placeholder'=>'your name'])}}
   {{Form::textarea('member_content','',['class'=>'form-control',])}}
   {{Form::password('member_password','',['class'=>'awesome'])}}
   {{Form::submit('submit')}}
   {!! Form::close() !!}
@endsection
