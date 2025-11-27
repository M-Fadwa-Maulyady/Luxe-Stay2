<x-layoutAuth>
<link rel="stylesheet" href="{{ asset('assets/login.css') }}">


<div class="login-wrapper">
    <div class="login-card">

        <h2 class="title">Welcome Back</h2>
        <p class="subtitle">Sign in to continue to the system</p>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('login.post') }}" method="POST" class="form-login">
            @csrf

            <label>Email</label>
            <input type="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required>

            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password" required>

            <div class="remember-forgot">
                <label><input type="checkbox" name="remember"> Remember me</label>
                <a href="#" class="forgot-link">Forgot Password?</a>
            </div>

            <button type="submit" class="btn-login">Sign In</button>
        </form>

        <div class="divider">Or</div>

        <div class="social-buttons">
            <a href="#" class="google-btn"><img class="icon" src="/icons/google.png"> Sign in with Google</a>
            <a href="#" class="facebook-btn"><img class="icon" src="/icons/facebook.png"> Sign in with Facebook</a>
            <a href="#" class="twitter-btn"><img class="icon" src="/icons/twitter.png"> Sign in with Twitter</a>
        </div>

        <p class="bottom-text">
            Don't have an account?
            <a href="{{ route('register') }}" class="signup-link">Sign Up</a>
        </p>

    </div>
</div>
</x-layoutAuth>
