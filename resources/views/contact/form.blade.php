<div class="row justify-content-center">
    <div class="my-3 col-5">
        <h1 class="mb-3">
            @if($contact->id)
                Modifier un contact !
            @else
                Ajouter un contact !
            @endif
        </h1>

        <form method="POST">
            @csrf
            @method($contact->id ? 'PATCH' : 'POST')
            <div class="mb-3">
                <label for="firstName" class="form-label">Prénom(s)</label>
                <input type="text" class="form-control" id="firstName" name="firstName" value="{{ old('firstName', $contact->firstName) }}">
                @error('firstName')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $contact->name) }}">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $contact->email) }}">
                @error('email')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label for="phoneNumber" class="form-label">Numéro de téléphone</label>
                <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" value="{{ old('phoneNumber', $contact->phoneNumber) }}">
                @error('phoneNumber')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label for="birthDay" class="form-label">Date de naissance</label>
                <input type="date" class="form-control" id="birthDay" name="birthDay" value="{{ old('birthDay', $contact->birthDay) }}">
                @error('birthDay')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success col-12">
                    @if($contact->id)
                        Modifier
                    @else
                        Ajouter
                    @endif
                </button>
            </div>
        </form>
    </div>
</div>
