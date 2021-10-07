@extends('parent-blades.inhoudnl')
@section('content')
    <h1>My Rows</h1>
    
@for($i = 0 ; $i <= $rows ; $i++ )

    <div> {{$i}}</div>

@endfor
@endsection