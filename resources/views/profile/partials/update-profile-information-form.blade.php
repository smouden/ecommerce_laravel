<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Informations about your profile
                </div>
                <div class="card-body">
                    <form method="post" action="{{ secure_url('/profile') }}">
                        @csrf
                        @method('patch')

                        <!-- Name -->
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Entrez votre nom"
                                value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Entrez votre email" value="{{ old('email', $user->email) }}" required
                                autocomplete="username">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Bouton Enregistrer -->
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
