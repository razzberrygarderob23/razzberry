@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">  
            <div class="mb-4">
                <img src="{{asset('uploads/' . $item->image)}}">
            </div>
        </div>
        <div class='col-md-8'>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4">
                        <h1>{{$item->name}}</h1>
                    </div> 
                    <div>
                        <p> Цвет: {{$item->color}}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <p>
                        <h2>{{$item->price}} ₽</h2>
                    </p>
                </div>
            </div>
            <div>
                <p> Материал: {{$item->materials}}</p>
            </div>
            <div>
                <p> Размер: {{$item->size}}</p>
            </div>
            <div>
                <p> Страна производителя: {{$item->country}}</p>
            </div>
        </div>
        <div>
            <p class="mb-3"> Описание </p>
            <p>{{$item->description}}</p>
        </div>
    </div>
</div>
@endsection
