@extends('layouts.app')
@section('title', 'Create account - Pennymeter')
@section('content')
    <main class="auth-page">
        <section class="auth-panel" aria-label="Create account">
            <a class="auth-brand" href="/">
                <span class="brand-mark" aria-hidden="true">
                    <svg viewBox="0 0 24 24" role="img">
                        <path d="M4 8.5C4 6.57 5.57 5 7.5 5h9A3.5 3.5 0 0 1 20 8.5V18a1 1 0 0 1-1 1H7a3 3 0 0 1-3-3V8.5Zm3.5 0A.5.5 0 0 0 7 9v5.5A1.5 1.5 0 0 0 8.5 16H18V8.5a1.5 1.5 0 0 0-1.5-1.5h-9a.5.5 0 0 0-.5.5h-.5Zm8 3.5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                    </svg>
                </span>
                <span>Pennymeter</span>
            </a>

            <div class="auth-card register-card">
                <div class="auth-heading">
                    <span class="auth-kicker">Start for free</span>
                    <h1>Create your account</h1>
                    <p>Build a clearer, calmer plan for your money.</p>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger auth-alert" role="alert">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form method="POST" action="{{ route('register.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label" for="name">Full name</label>
                        <input id="name" name="name" type="text" class="form-control auth-input @error('name') is-invalid @enderror"
                               value="{{ old('name') }}" placeholder="Alex Mutwiri" autocomplete="name" required autofocus>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="email">Email address</label>
                        <input id="email" name="email" type="email" class="form-control auth-input @error('email') is-invalid @enderror"
                               value="{{ old('email') }}" placeholder="you@example.com" autocomplete="email" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-sm-6">
                            <label class="form-label" for="password">Password</label>
                            <input id="password" name="password" type="password" class="form-control auth-input @error('password') is-invalid @enderror"
                                   placeholder="At least 8 characters" autocomplete="new-password" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="password_confirmation">Confirm password</label>
                            <input id="password_confirmation" name="password_confirmation" type="password" class="form-control auth-input"
                                   placeholder="Repeat password" autocomplete="new-password" required>
                        </div>
                    </div>

                    <div class="form-check mb-4">
                        <input class="form-check-input @error('terms') is-invalid @enderror" type="checkbox" id="terms" name="terms" value="1" required>
                        <label class="form-check-label" for="terms">I agree to the Terms and Privacy Policy</label>
                        @error('terms')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success auth-submit">Create account</button>
                </form>

                <p class="auth-switch">Already have an account? <a class="auth-link" href="{{ route('login') }}">Log in</a></p>
            </div>
        </section>

        <aside class="auth-aside" aria-label="Pennymeter benefits">
            <div class="auth-aside-inner">
                <span class="aside-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24"><path d="M20 7 10 17l-5-5"/></svg>
                </span>
                <h2>Small steps. Better habits.</h2>
                <p>Create realistic budgets, watch your progress, and make confident decisions with your money.</p>
                <div class="aside-quote">
                    <span class="quote-mark">“</span>
                    <p>Pennymeter made my monthly budget feel simple instead of stressful.</p>
                    <strong>Alex M.</strong>
                </div>
            </div>
        </aside>
    </main>
@endsection