@extends('parent-blades.inhoudnl')
@section('content')
<form method="POST">
    @csrf
    <input type="number" name="nummer">
    <input type="submit" value="start">
</form>
<a class="ez" href="https://www.tafeldiploma.nl/">start</a>
@endsection
