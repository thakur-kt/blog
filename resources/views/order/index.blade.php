<p>order</p>
@foreach($orders as $o)
<!-- @{{dd($loop)}} -->
<p>{{$o->name}}--{{$o->user->name}}</p>
@endforeach
<!-- {{$html}} -->
<!-- {!! $html !!} -->
<script>
    console.log(kt.user)
</script>
<script src="./js/custom.js"></script>