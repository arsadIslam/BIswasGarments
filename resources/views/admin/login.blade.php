<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login | Biswas Garments</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet">
    <style>
        :root {
            --black: #050505;
            --muted: #727272;
            --soft: #f6f3ef;
            --paper: #ffffff;
            --line: #e8e2dc;
            --sale: #c44631;
            --gold: #d9a64a;
        }

        * {
            box-sizing: border-box;
        }

        body {
            align-items: center;
            background:
                radial-gradient(circle at top left, rgba(217, 166, 74, 0.18), transparent 24rem),
                linear-gradient(135deg, #050505 0 42%, var(--soft) 42% 100%);
            color: var(--black);
            display: grid;
            font-family: "Instrument Sans", ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            margin: 0;
            min-height: 100vh;
            padding: 1rem;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button,
        input {
            font: inherit;
        }

        .icon {
            display: block;
            height: 1.15rem;
            stroke: currentColor;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-width: 2;
            width: 1.15rem;
        }

        .admin-shell {
            display: grid;
            gap: 1rem;
            grid-template-columns: 0.9fr 1fr;
            margin: 0 auto;
            max-width: 1080px;
            width: 100%;
        }

        .brand-panel,
        .login-card {
            border-radius: 1.5rem;
            min-height: 600px;
        }

        .brand-panel {
            background:
                linear-gradient(90deg, rgba(0, 0, 0, 0.82), rgba(0, 0, 0, 0.32)),
                linear-gradient(135deg, #d7b39a, #7a3c34);
            color: var(--paper);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
            padding: 2rem;
            position: relative;
        }

        .brand-panel::after {
            background: linear-gradient(180deg, #f3ddcd 0%, #191210 100%);
            border-radius: 10rem 10rem 1.3rem 1.3rem;
            bottom: -1rem;
            content: "";
            height: 52%;
            position: absolute;
            right: 12%;
            width: 180px;
        }

        .brand {
            align-items: center;
            display: inline-flex;
            font-size: 1.35rem;
            font-weight: 900;
            gap: 0.7rem;
            letter-spacing: -0.055em;
            position: relative;
            z-index: 1;
        }

        .brand-mark {
            align-items: center;
            background: var(--paper);
            border-radius: 50%;
            color: var(--black);
            display: inline-flex;
            font-size: 0.85rem;
            height: 2.55rem;
            justify-content: center;
            width: 2.55rem;
        }

        .panel-copy {
            max-width: 440px;
            position: relative;
            z-index: 1;
        }

        .eyebrow {
            color: var(--gold);
            font-size: 0.78rem;
            font-weight: 900;
            letter-spacing: 0.15em;
            text-transform: uppercase;
        }

        h1,
        h2 {
            letter-spacing: -0.08em;
            line-height: 0.95;
            margin: 0;
            text-transform: uppercase;
        }

        h1 {
            font-size: clamp(3rem, 7vw, 5.6rem);
        }

        .panel-copy p {
            color: rgba(255, 255, 255, 0.74);
            line-height: 1.7;
        }

        .login-card {
            background: var(--paper);
            border: 1px solid var(--line);
            box-shadow: 0 28px 90px rgba(0, 0, 0, 0.14);
            display: grid;
            align-content: center;
            padding: clamp(1.35rem, 5vw, 3rem);
        }

        h2 {
            font-size: clamp(2.3rem, 5vw, 4rem);
        }

        .subtitle {
            color: var(--muted);
            line-height: 1.65;
            margin: 0.75rem 0 1.6rem;
        }

        .status,
        .error-summary {
            border-radius: 1rem;
            font-weight: 700;
            margin-bottom: 1rem;
            padding: 0.9rem 1rem;
        }

        .status {
            background: #f1fbf6;
            border: 1px solid #cdebdc;
            color: #1f6d4f;
        }

        .error-summary {
            background: #fff1ef;
            border: 1px solid #f2c8c0;
            color: #963525;
        }

        .field {
            display: grid;
            gap: 0.45rem;
            margin-bottom: 1rem;
        }

        .field label {
            font-size: 0.8rem;
            font-weight: 900;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .control {
            align-items: center;
            background: var(--soft);
            border: 1px solid var(--line);
            border-radius: 1rem;
            display: flex;
            gap: 0.65rem;
            min-height: 3.35rem;
            padding: 0 0.95rem;
        }

        .control input {
            background: transparent;
            border: 0;
            font-size: 1rem;
            outline: 0;
            width: 100%;
        }

        .field-error {
            color: var(--sale);
            font-size: 0.84rem;
            font-weight: 700;
        }

        .options {
            align-items: center;
            color: var(--muted);
            display: flex;
            justify-content: space-between;
            margin: 0.5rem 0 1.2rem;
        }

        .options label {
            align-items: center;
            display: flex;
            gap: 0.5rem;
        }

        .submit-button {
            align-items: center;
            background: var(--black);
            border: 0;
            border-radius: 999px;
            color: var(--paper);
            cursor: pointer;
            display: inline-flex;
            font-weight: 900;
            gap: 0.5rem;
            justify-content: center;
            min-height: 3.4rem;
            width: 100%;
        }

        .store-link {
            color: var(--muted);
            display: block;
            font-weight: 800;
            margin-top: 1rem;
            text-align: center;
        }

        @media (max-width: 820px) {
            body {
                background: linear-gradient(180deg, var(--black) 0 12rem, var(--soft) 12rem 100%);
                padding: 0;
            }

            .admin-shell {
                grid-template-columns: 1fr;
            }

            .brand-panel {
                border-radius: 0;
                min-height: 230px;
                padding: 1rem 1rem 4.4rem;
            }

            .brand-panel::after {
                height: 100px;
                opacity: 0.55;
                right: 1rem;
                width: 78px;
            }

            h1 {
                font-size: 2.6rem;
            }

            .panel-copy p {
                display: none;
            }

            .login-card {
                border: 0;
                border-radius: 1.35rem;
                margin: -4rem 0.85rem 1rem;
                min-height: auto;
                padding: 1rem;
                position: relative;
                z-index: 2;
            }

            h2 {
                font-size: 2.2rem;
            }
        }
    </style>
</head>
<body>
    <main class="admin-shell">
        <section class="brand-panel" aria-label="Biswas Garments admin">
            <a class="brand" href="{{ route('home') }}">
                <span class="brand-mark">BG</span>
                Biswas Garments
            </a>

            <div class="panel-copy">
                <p class="eyebrow">Admin access</p>
                <h1>Manage the store.</h1>
                <p>Secure login for Biswas Garments administrators to manage ecommerce operations.</p>
            </div>
        </section>

        <section class="login-card">
            <div>
                <p class="eyebrow">Control panel</p>
                <h2>Admin Login</h2>
                <p class="subtitle">Use your admin username and password to continue.</p>

                @if (session('status'))
                    <div class="status">{{ session('status') }}</div>
                @endif

                @if ($errors->any())
                    <div class="error-summary">Please check your admin credentials.</div>
                @endif

                <form method="POST" action="{{ route('admin.login.submit') }}">
                    @csrf

                    <div class="field">
                        <label for="username">Username</label>
                        <div class="control">
                            <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M20 21a8 8 0 0 0-16 0"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            <input id="username" name="username" type="text" value="{{ old('username') }}" placeholder="admin" required autofocus>
                        </div>
                        @error('username')
                            <span class="field-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="password">Password</label>
                        <div class="control">
                            <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <rect x="4" y="11" width="16" height="10" rx="2"></rect>
                                <path d="M8 11V7a4 4 0 0 1 8 0v4"></path>
                            </svg>
                            <input id="password" name="password" type="password" placeholder="Enter password" required>
                        </div>
                        @error('password')
                            <span class="field-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="options">
                        <label>
                            <input type="checkbox" name="remember" value="1">
                            Remember me
                        </label>
                    </div>

                    <button class="submit-button" type="submit">
                        Login as Admin
                        <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M5 12h14"></path>
                            <path d="m13 6 6 6-6 6"></path>
                        </svg>
                    </button>
                </form>

                <a class="store-link" href="{{ route('home') }}">Back to storefront</a>
            </div>
        </section>
    </main>
</body>
</html>
