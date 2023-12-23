@extends('layouts.app')

@section('content')
<table>
    @foreach($items as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>
            <a href="{{ route('products.show', $item->id) }}">{{ $item->name }}</a>
        </td>
        <td>{{$item->price}}</td>
        <td>{{$item->size}}</td>
        <td>{{$item->materials}}</td>
        <td>{{$item->country}}</td>
        <td>{{$item->description}}</td>
        <td>{{$item->color}}</td>
        <td>{{$item->image}}</td>
        <td>{{$item->active}}</td>
    </tr>
    @endforeach
</table>
@endsection

