@extends('layout')

@section('title', 'Ajouter un contact')

@section('description', 'Ajouter des contacts à votre liste')

@section('header')
    @include('header')
@endsection

@section('content')
    @include('contact.form')
@endsection
