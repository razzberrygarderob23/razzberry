@extends('layouts.app')

@section('content')
<table>
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->size}}</td>
        <td>{{$item->materials}}</td>
        <td>{{$item->country}}</td>
        <td>{{$item->description}}</td>
        <td>{{$item->color}}</td>
        <td>{{$item->image}}</td>
        <td>{{$item->active}}</td>
    </tr>
</table>
@endsection
