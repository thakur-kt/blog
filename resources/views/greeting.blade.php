<!DOCTYPE html>
<html>
<!-- https://laravel.com/docs/8.x/blade#introduction -->
<body>
    <h2>{{$globalKey}}</h2>
    <h1>{{$name}}</h1>
@php
$array=[['id'=>1,'name'=>'abc'],['id'=>2,'name'=>'xyz']];
$html='<script>alert("okk")</script>';
$a=4;
$b=5;
@endphp
<h1>{{$a*$b}}</h1>
<!-- {{$html}} -->

<!-- {!! $html !!} -->

<!-- JavaScript frameworks also use "curly" braces to indicate a given expression should be displayed in the browser, -->
<!-- Hello, @{{ name }}. -->


<!-- @@json($array)</br> -->
<!-- JSON_PRETTY_PRINT -->
<!-- @json($array) -->

<!-- @verbatim
    <div class="container">
        Hello, {{ name }}.
        @json($array)
        {{ name }}.
        {{ name }}.
        

    </div>
@endverbatim -->


<!-- 
@if (count($array) === 1)
    I have one record!
@elseif (count($array) > 1)
    I have multiple records!
@else
    I don't have any records!
@endif -->

<!-- 
@unless (Auth::check())
    You are not signed in.
@endunless -->

<!-- @isset($array)
    // $records is defined and is not null...
@endisset

@empty($array)
    // $records is "empty"...
@endempty -->

<!-- @auth
    // The user is authenticated...
@endauth

@guest
    // The user is not authenticated...
@endguest -->

<!-- @include('admin.nav',['key'=>'data']) -->
<!-- @hasSection('admin.child')
    <div class="pull-right">
        @include('admin.child')
        mnmnmcdn
    </div>

    <div class="clearfix"></div>
@endif -->

@php
    $isActive = true;
    $hasError = true;
@endphp

<span @class([
    'p-4',
    'font-bold' => $isActive,
    'text-gray-500' => ! $isActive,
    'bg-red' => $hasError,
])>conditional</span>

<span class="p-4 text-gray-500 bg-red">conditional classes</span>

<x-btn></x-btn>
<x-success></x-success>
<!-- @each('admin.nav', $array, 'job') -->
@include('admin.header');

{{$amount}}

    <script>
    var app = <?php echo json_encode($array); ?>;//traditional way to print json
    // var app = @json($array);
    // console.log(app)
</script>
</body>
</html>