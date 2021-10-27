@extends('parent-blades.inhoudnl')
@section('content')
<form action="/zettaal" method="POST">
@csrf
<input name="english" type="submit" value="english">
<input name="Nederlands" type="submit" value="Nederlands">
</form>
@endsection
