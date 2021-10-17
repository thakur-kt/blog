
@extends('admin.parent')
<h4>Child File</h4>


@section('navigation')
@parent
<p>Navigation content from child</p>

@endsection

@section('content')
    The page content from child..............
@endsection