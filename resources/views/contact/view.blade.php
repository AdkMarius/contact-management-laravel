@extends('layout')

@section('header')
    @include('header')
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-6 my-3">
            <h1 class="mb-3">Détails contact</h1>

            @if($contact)
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('contact.list') }}">
                            <i class="material-icons">keyboard_backspace</i>
                        </a>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">{{ $contact->firstName }} {{ $contact->name }}</h2>
                        <div>
                            <p>
                                <i class="far fa-address-book"></i>
                                <span>Numéro de téléphone : {{ $contact->phoneNumber }}</span>
                            </p>
                        </div>
                        @if($contact->email)
                            <div>
                                <p>
                                    <i class='fas fa-mail-bulk'></i>
                                    <span>Email : {{ $contact->email }}</span>
                                </p>
                            </div>
                        @endif
                        @if($contact->birthDay)
                            <div>
                                <p>
                                    <i class="far fa-calendar"></i>
                                    <span>Date de naissance : {{ $contact->birthDay }}</span>
                                </p>
                            </div>
                        @endif
                        <a href="{{ route('contact.update', ['id' => $contact->id]) }}" class="card-link btn btn-warning">Modifier</a>
                        <a href="{{ route('contact.delete', ['id' => $contact->id]) }}" class="card-link btn btn-danger">Supprimer</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
