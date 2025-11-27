<x-layoutAuth>
<link rel="stylesheet" href="{{ asset('assets/login.css') }}">

<div class="auth-container">
    <div class="auth-box">

        <h2 class="auth-title">Hello User !</h2>
        <p class="auth-subtitle">Enter below details to create an account</p>

        @if ($errors->any())
            <div class="alert error-alert">
                <ul>
                    @foreach ($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register.post') }}" method="POST">
            @csrf

            <div class="input-group">
                <label>Full Name</label>
                <input type="text" name="name" placeholder="Enter your full name" required>
            </div>

            <div class="input-group">
                <label>Mail</label>
                <input type="email" name="email" placeholder="Enter your mail" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter password" required>
            </div>

            <div class="input-group">
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" placeholder="Confirm your password" required>
            </div>

            <button type="submit" class="btn-submit">Sign Up</button>
        </form>

        <div class="divider">
            <span>Or</span>
        </div>

        <div class="social-login">
            <a href="#"><img src="/icons/google.png" alt="google"></a>
            <a href="#"><img src="/icons/facebook.png" alt="facebook"></a>
            <a href="#"><img src="/icons/twitter.png" alt="twitter"></a>
        </div>

        <p class="bottom-text">
            Already have an account?
            <a href="{{ route('login') }}" class="login-link">Login Here</a>
        </p>
    </div>
</div>

</x-layoutAuth>
