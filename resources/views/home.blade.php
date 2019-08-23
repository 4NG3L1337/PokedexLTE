@extends('layouts.panel')
@section('title','Panel')
@section('routename','Dashboard')

@section('content')
<h1>Bienvenido {{Auth::user()->name}}</h1>
@endsection
