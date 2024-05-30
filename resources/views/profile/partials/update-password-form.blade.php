<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Mettre à jour votre mot de passe
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ secure_url('/') }}">
                        @csrf
                        @method('patch')

                        <!-- Mot de passe actuel -->
                        <div class="form-group">
                            <label for="current_password">Mot de passe actuel</label>
                            <input type="password" class="form-control" id="current_password" name="current_password" required autocomplete="current-password">
                            @error('current_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Nouveau mot de passe -->
                        <div class="form-group">
                            <label for="new_password">Nouveau mot de passe</label>
                            <input type="password" class="form-control" id="new_password" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Confirmer le mot de passe -->
                        <div class="form-group">
                            <label for="confirm_password">Confirmez votre mot de passe</label>
                            <input type="password" class="form-control" id="confirm_password" name="password_confirmation" required autocomplete="new-password">
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Bouton Enregistrer -->
                        <button type="submit" class="btn btn-primary">Enregistrer</button>

                        <!-- Affichage d'une notification après la mise à jour -->
                        @if (session('status') == 'password-updated')
                            <div class="alert alert-success mt-2">
                                {{ __('Votre mot de passe a été mis à jour.') }}
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
