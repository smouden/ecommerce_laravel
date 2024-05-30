<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Update your password
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ secure_url('/profile') }}">
                        @csrf
                        @method('put')

                        <!-- Mot de passe actuel -->
                        <div class="form-group">
                            <label for="current_password">Current Password</label>
                            <input type="password" class="form-control" id="current_password" name="current_password" required autocomplete="current-password">
                            @error('current_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Nouveau mot de passe -->
                        <div class="form-group">
                            <label for="new_password">New Password</label>
                            <input type="password" class="form-control" id="new_password" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Confirmer le mot de passe -->
                        <div class="form-group">
                            <label for="confirm_password">Confirm your password</label>
                            <input type="password" class="form-control" id="confirm_password" name="password_confirmation" required autocomplete="new-password">
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Bouton Enregistrer -->
                        <button type="submit" class="btn btn-primary">Save</button>

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
