@php
    $routeName = request()->route()->getName();
@endphp

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('index') }}">Contacts Management</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a @class(['nav-link', 'active' => $routeName == 'contact.show']) aria-current="page" href="{{ route('contact.show') }}">Ajouter un contact</a>
                </li>
                <li class="nav-item">
                    <a @class(['nav-link', 'active' => $routeName == 'contact.list']) href="{{ route('contact.list') }}">List des contacts</a>
                </li>
            </ul>
            <form class="d-flex" method="POST" action="{{ route('contact.search') }}">
                @csrf
                <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search" name="searchValue">
                <button class="btn btn-outline-success" type="submit">Rechercher</button>
            </form>
        </div>
    </div>
</nav>
