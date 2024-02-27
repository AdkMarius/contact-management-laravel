@extends('layout')

@section('title', 'Liste de vos contacts')

@section('description', 'Afficher la liste de contacts')

@section('header')
    @include('header')
@endsection

@section('content')
    <div class="my-4 row justify-content-center">
        <div class="col-8">

            <h1 class="mb-3">Liste des contacts</h1>

            <table class="table table-striped">
                <tr>
                    <th>Nom</th>
                    <th>Prénom(s)</th>
                    <th>Numéro de téléphone</th>
                    <th>Afficher</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                @if($contacts)
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->firstName }}</td>
                            <td>{{ $contact->phoneNumber }}</td>
                            <td>
                                <a href="{{ route('contact.view', ['id' => $contact->id]) }}" class="btn btn-success">Afficher</a>
                            </td>
                            <td>
                                <a href="{{ route('contact.update', ['id' => $contact->id]) }}" class="btn btn-warning">Modifier</a>
                            </td>
                            <td>
                                <a href="{{ route('contact.delete', ['id' => $contact->id]) }}" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </table>
        </div>
    </div>
@endsection
