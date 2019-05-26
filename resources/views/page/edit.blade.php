@extends('layout.template')
@section('content')

<h1>Modifica Smartphone</h1>

<div class="edit">
  <form action="{{route('smartphone.update', $smartphone -> id)}}" method="post">
    @csrf
    @method('PUT')
    <div>
      <label for="brand">Brand</label><br>
      <input type="text" name="brand" value="{{$smartphone -> brand}}">
    </div>
    <div>
      <label for="model">Model</label><br>
      <input type="text" name="model" value="{{$smartphone -> model}}">
    </div>
    <div>
      <label for="display">Display</label><br>
      <input type="text" name="display" value="{{$smartphone -> display}}">
    </div>
    <div>
      <label for="mem_ext">Mem Ext</label><br>
      <input type="text" name="mem_ext" value="{{$smartphone -> mem_ext}}">
    </div><br>
    <button type="submit">Save Me</button>
  </form>
</div>


@stop
