@extends('layouts.post')
@section('content')
    <form action="/create" method="post">
        @csrf
        <input type="text" placeholder="enter some text here">
        <textarea name="body" id="" cols="30" rows="10"></textarea>
        <input type="submit" name='submit'>
    </form>
@endsection
