@extends('layout.template')
@section('content')

<h1>Inserisci Smartphone</h1>

<div class="edit">
  <form action="{{route('smartphone.store')}}" method="post">
    @csrf
    <div>
      <label for="brand">Brand</label><br>
      <input type="text" name="brand" placeholder="Inserisci Brand">
    </div>
    <div>
      <label for="model">Model</label><br>
      <input type="text" name="model" placeholder="Inserisci Modello">
    </div>
    <div>
      <label for="display">Display</label><br>
      <input type="text" name="display" placeholder="Inserisci Display">
    </div>
    <div>
      <label for="mem_ext">Mem Ext</label><br>
      <input type="text" name="mem_ext" placeholder="Inserisci Memoria Esterna">
    </div><br>
    <button type="submit">Save Me</button>
  </form>
</div>


@stop
