@extends('parent-blades.inhoudnl')
@section('content')
    <h1>This is my form content</h1>
    <form method="POST">
        @csrf
        <input type="text" name="voornaam">
        <input type="submit" value="opslaan"> 
    </form>
@endsection