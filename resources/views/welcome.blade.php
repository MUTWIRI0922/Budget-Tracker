@extends('layouts.app')
@section('title', 'Pennymeter - Budget Tracker')
@section('content')
    <header class="site-header">
        <nav class="navbar navbar-expand-md container px-4 px-lg-0" aria-label="Main navigation">
            <a class="navbar-brand d-flex align-items-center gap-2" href="/">
                <span class="brand-mark" aria-hidden="true">
                    <svg viewBox="0 0 24 24" role="img">
                        <path d="M4 8.5C4 6.57 5.57 5 7.5 5h9A3.5 3.5 0 0 1 20 8.5V18a1 1 0 0 1-1 1H7a3 3 0 0 1-3-3V8.5Zm3.5 0A.5.5 0 0 0 7 9v5.5A1.5 1.5 0 0 0 8.5 16H18V8.5a1.5 1.5 0 0 0-1.5-1.5h-9a.5.5 0 0 0-.5.5h-.5Zm8 3.5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                    </svg>
                </span>
                <span>Pennymeter</span>
            </a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav ms-auto align-items-md-center gap-md-2">
                    <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#how-it-works">How it works</a></li>
                    <li class="nav-item ms-md-3"><a class="btn btn-success px-4" href="/register">Get started</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero-section">
            <div class="container px-4 px-lg-0">
                <div class="row align-items-center gy-5">
                    <div class="col-lg-6 hero-copy">
                        <span class="eyebrow"><span></span> Simple, clear money management</span>
                        <h1>Take control of your <span>money.</span></h1>
                        <p class="lead">Plan ahead, track every expense, and build better financial habits—all in one calm, easy-to-use place.</p>
                        <div class="d-flex flex-wrap gap-3 mt-4">
                            <a href="/register" class="btn btn-success btn-lg hero-button">Start for free</a>
                            <a href="#how-it-works" class="btn btn-outline-success btn-lg hero-button">See how it works</a>
                        </div>
                        <div class="trust-row">
                            <div class="avatar-stack" aria-hidden="true">
                                <span>AM</span><span>JO</span><span>KS</span>
                            </div>
                            <p><strong>Join 12,000+</strong><br>people building healthier budgets</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="dashboard-wrap" aria-label="Budget dashboard preview">
                            <div class="dashboard-card">
                                <div class="dashboard-top">
                                    <div>
                                        <p class="dashboard-label">Total balance</p>
                                        <h2>KShs. 24,680.00</h2>
                                    </div>
                                    <span class="month-pill">November</span>
                                </div>
                                <div class="balance-change"><span>+12.5%</span> from last month</div>

                                <div class="chart" aria-hidden="true">
                                    <div class="chart-line">
                                        <span class="chart-point point-one"></span>
                                        <span class="chart-point point-two"></span>
                                        <span class="chart-point point-three"></span>
                                        <span class="chart-point point-four"></span>
                                        <span class="chart-point point-five"></span>
                                    </div>
                                </div>

                                <div class="budget-row">
                                    <div>
                                        <p class="dashboard-label">Monthly budget</p>
                                        <strong>KShs. 3,250 <small>of KShs. 4,500</small></strong>
                                    </div>
                                    <div class="progress-ring">72%</div>
                                </div>
                            </div>

                            <div class="floating-card expense-card">
                                <span class="floating-icon">
                                    <svg viewBox="0 0 24 24"><path d="M12 2v20M17 5.5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                                </span>
                                <div><small>Expense</small><strong>KShs. 124.50</strong></div>
                            </div>
                            <div class="floating-card saved-card">
                                <span class="floating-icon">
                                    <svg viewBox="0 0 24 24"><path d="M20 12a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-8-4v8m4-4H8"/></svg>
                                </span>
                                <div><small>Saved this month</small><strong>KShs. 860.00</strong></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features-section" id="features">
            <div class="container px-4 px-lg-0">
                <div class="section-heading">
                    <span class="eyebrow"><span></span> Everything you need</span>
                    <h2>Better habits start with clarity</h2>
                </div>
                <div class="row g-4" id="how-it-works">
                    <div class="col-md-4">
                        <article class="feature-card">
                            <span class="feature-icon">
                                <svg viewBox="0 0 24 24"><path d="M4 19V9m5 10V5m6 14v-7m5 7V3"/></svg>
                            </span>
                            <h3>See the full picture</h3>
                            <p>Understand where your money goes with simple charts and clear category summaries.</p>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="feature-card">
                            <span class="feature-icon">
                                <svg viewBox="0 0 24 24"><path d="M12 22a10 10 0 1 0 0-20 10 10 0 0 0 0 20Zm0-14v4l3 2"/></svg>
                            </span>
                            <h3>Plan with confidence</h3>
                            <p>Create flexible budgets that fit real life and keep you moving toward your goals.</p>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="feature-card">
                            <span class="feature-icon">
                                <svg viewBox="0 0 24 24"><path d="M20 7 10 17l-5-5"/></svg>
                            </span>
                            <h3>Stay on track</h3>
                            <p>Spot changes early and make thoughtful decisions before small issues grow.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection