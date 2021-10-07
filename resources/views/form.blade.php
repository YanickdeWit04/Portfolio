@extends('parent-blades.inhoudnl')
@section('content')
    <h1>This is my form content</h1>
    <form method="POST">
        @csrf
        <input placeholder="username" type="text" name="username">
        <input placeholder="password" type="password" name=wachtwoord>
        <input type="submit" value="opslaan">
    </form>
@endsection