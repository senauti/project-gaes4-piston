@extends('layouts.plantillabase2')

@section('contenido')

<h2>Editar Mecanicos</h2>

<form method="POST" action="{{url('/mecanicos/'.$mecanico->id)}}"  enctype="multipart/form-data">

@csrf
{{method_field('PATCH')}}

@include('mecanico.form',['modo'=>'Editar'])

</form>

@endsection