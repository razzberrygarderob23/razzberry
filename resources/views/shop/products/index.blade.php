@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="product">
    @foreach($items as $item)
        <div class="col-md-4 col-lg-4 col-4 col-sm-6">
            <div>
                <img src="{{asset('uploads/' . $item->image)}}">
            </div>
            <div>
                <a href="{{ route('products.show', $item->id) }}">{{ $item->name }}</a>
            </div>
            <div>{{$item->price}}</div>
        </div>
    @endforeach
</div>
</div>
@endsection

