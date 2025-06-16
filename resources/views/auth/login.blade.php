<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group">
        <label for="email">Email</label>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="email" name="email" class="form-control" placeholder="Masukkan email" required autofocus>
        </div>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
        </div>
    </div>

    <div class="remember-forgot">
        <div class="remember-me">
            <input type="checkbox" name="remember">
            <label for="remember">Ingat saya</label>
        </div>
        <a href="{{ route('password.request') }}">Lupa password?</a>
    </div>

    <button type="submit" class="btn btn-primary">
        <i class="fas fa-sign-in-alt"></i>
        Masuk
    </button>
</form>
