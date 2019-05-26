@extends('layout.template')

@section('content')

<table>
  @foreach($smartphones as $smartphone)
  <tr>
    <td>{{ $smartphone -> id}}</td>
    <td>{{ $smartphone -> brand}} </td>
    <td>{{ $smartphone -> model}}</td>
    <td>{{ $smartphone -> display}}</td>
    <td>{{ $smartphone -> mem_ext}}</td>
    <td><a href="{{route('smartphone.edit', $smartphone -> id)}}"><i class="fas fa-edit"></i></a> </td>
    <td>
      <form action="{{route('smartphone.destroy', $smartphone -> id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit"><i class="fas fa-trash-alt"></i></button>
      </form>
    </td>
  </tr>
  @endforeach
</table>

<a href="{{route('smartphone.create')}}">CREA NUOVO SMARTPHONE</a>
@stop
