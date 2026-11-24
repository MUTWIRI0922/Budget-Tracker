@extends('layouts.app')
@section('title', 'Log in - Pennymeter')
@section('content')
    <main class="auth-page row p-3">
        <section class="auth-panel col-12 " aria-label="Log in">
            <a class="auth-brand" href="/">
                <span class="brand-mark" aria-hidden="true">
                    <svg viewBox="0 0 24 24" role="img">
                        <path d="M4 8.5C4 6.57 5.57 5 7.5 5h9A3.5 3.5 0 0 1 20 8.5V18a1 1 0 0 1-1 1H7a3 3 0 0 1-3-3V8.5Zm3.5 0A.5.5 0 0 0 7 9v5.5A1.5 1.5 0 0 0 8.5 16H18V8.5a1.5 1.5 0 0 0-1.5-1.5h-9a.5.5 0 0 0-.5.5h-.5Zm8 3.5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                    </svg>
                </span>
                <span>Pennymeter</span>
            </a>

            <div class="auth-card">
                <div class="auth-heading">
                    <span class="auth-kicker">Welcome back</span>
                    <h1>Log in to your account</h1>
                    <p>Pick up where you left off and keep your budget moving.</p>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger auth-alert" role="alert">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login.attempt') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label" for="email">Email address</label>
                        <input id="email" name="email" type="email" class="form-control auth-input @error('email') is-invalid @enderror"
                               value="{{ old('email') }}" placeholder="you@example.com" autocomplete="email" required autofocus>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <label class="form-label" for="password">Password</label>
                            <a class="auth-link small" href="#">Forgot password?</a>
                        </div>
                        <input id="password" name="password" type="password" class="form-control auth-input @error('password') is-invalid @enderror"
                               placeholder="Enter your password" autocomplete="current-password" required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="remember" name="remember" value="1">
                        <label class="form-check-label" for="remember">Keep me logged in</label>
                    </div>

                    <button type="submit" class="btn btn-success auth-submit">Log in</button>
                </form>

                <p class="auth-switch">New to Pennymeter? <a class="auth-link" href="{{ route('register') }}">Create an account</a></p>
            </div>
        </section>

        <aside class="auth-aside col-12 " aria-label="Pennymeter benefits">
            <div class="auth-aside-inner">
                <span class="aside-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24"><path d="M4 19V9m5 10V5m6 14v-7m5 7V3"/></svg>
                </span>
                <h2>Your money, clearly organized.</h2>
                <p>Track spending, set goals, and understand exactly where every shilling goes.</p>
                <div class="aside-stats">
                    <div><strong>12k+</strong><span>active users</span></div>
                    <div><strong>72%</strong><span>average monthly plan</span></div>
                </div>
            </div>
        </aside>
    </main>
@endsection