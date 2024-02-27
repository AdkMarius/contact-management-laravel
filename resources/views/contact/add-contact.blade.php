@extends('layout')

@section('header')
    @include('header')
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="my-3 col-5">
            <h1 class="mb-3">Ajouter un contact !</h1>

            <form method="POST">
                @csrf
                <div class="mb-3">
                    <label for="firstName" class="form-label">Prénom(s)</label>
                    <input type="text" class="form-control" id="firstName" name="firstName">
                    @error('firstName')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="name" name="name">
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phoneNumber" class="form-label">Numéro de téléphone</label>
                    <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber">
                    @error('phoneNumber')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="birthDay" class="form-label">Date de naissance</label>
                    <input type="date" class="form-control" id="birthDay" name="birthDay">
                    @error('birthDay')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success col-12">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
@endsection
