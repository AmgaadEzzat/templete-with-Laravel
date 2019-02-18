@extends('master')
@section('content')
    <form method="post" action="/add" class="text-dark">
        {{csrf_field()}}
        <label for="memberN">member_name</label>
        <input type="text" id="memberN" name="member_name">
        <button class="btn" type="submit" value="submit">submit</button>
    </form>

@endsection