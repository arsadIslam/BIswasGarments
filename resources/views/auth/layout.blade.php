<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Biswas Garments</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet">
    <style>
        :root {
            --black: #050505;
            --ink: #161616;
            --muted: #727272;
            --soft: #f6f3ef;
            --paper: #ffffff;
            --line: #e8e2dc;
            --sale: #c44631;
            --sand: #d8c1ae;
            --gold: #d9a64a;
        }

        * {
            box-sizing: border-box;
        }

        body {
            background:
                radial-gradient(circle at top left, rgba(196, 70, 49, 0.12), transparent 26rem),
                linear-gradient(180deg, var(--paper), var(--soft));
            color: var(--black);
            font-family: "Instrument Sans", ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            margin: 0;
            min-height: 100vh;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button,
        input,
        select,
        textarea {
            font: inherit;
        }

        .icon {
            display: block;
            height: 1.2rem;
            stroke: currentColor;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-width: 2;
            width: 1.2rem;
        }

        .auth-shell {
            display: grid;
            gap: 1.25rem;
            grid-template-columns: minmax(0, 0.92fr) minmax(420px, 1fr);
            min-height: 100vh;
            padding: 1.25rem;
        }

        .brand-panel {
            background:
                linear-gradient(90deg, rgba(0, 0, 0, 0.86), rgba(0, 0, 0, 0.32)),
                linear-gradient(135deg, #d7b39a, #7a3c34);
            border-radius: 1.5rem;
            color: var(--paper);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
            padding: clamp(1.5rem, 4vw, 3rem);
            position: relative;
        }

        .brand-panel::after {
            background: linear-gradient(180deg, #f3ddcd 0%, #191210 100%);
            border-radius: 11rem 11rem 1.5rem 1.5rem;
            bottom: -1rem;
            content: "";
            height: 54%;
            position: absolute;
            right: 10%;
            width: min(34%, 260px);
        }

        .brand {
            align-items: center;
            display: inline-flex;
            font-size: 1.45rem;
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
            letter-spacing: -0.04em;
            width: 2.55rem;
        }

        .panel-copy {
            max-width: 560px;
            position: relative;
            z-index: 1;
        }

        .eyebrow {
            color: var(--gold);
            font-size: 0.8rem;
            font-weight: 900;
            letter-spacing: 0.15em;
            margin: 0 0 1rem;
            text-transform: uppercase;
        }

        .panel-copy h1 {
            font-size: clamp(3rem, 7vw, 6.4rem);
            letter-spacing: -0.095em;
            line-height: 0.9;
            margin: 0;
            text-transform: uppercase;
        }

        .panel-copy p {
            color: rgba(255, 255, 255, 0.76);
            font-size: 1.02rem;
            line-height: 1.75;
            margin: 1.25rem 0 0;
            max-width: 470px;
        }

        .benefit-row {
            display: grid;
            gap: 0.8rem;
            grid-template-columns: repeat(3, 1fr);
            margin-top: 2rem;
            position: relative;
            z-index: 1;
        }

        .benefit {
            border: 1px solid rgba(255, 255, 255, 0.16);
            border-radius: 1rem;
            padding: 1rem;
        }

        .benefit strong {
            display: block;
            margin-bottom: 0.25rem;
        }

        .benefit span {
            color: rgba(255, 255, 255, 0.66);
            font-size: 0.88rem;
            line-height: 1.45;
        }

        .form-panel {
            align-content: center;
            display: grid;
            padding: clamp(1rem, 4vw, 3rem);
        }

        .form-card {
            background: var(--paper);
            border: 1px solid var(--line);
            border-radius: 1.5rem;
            box-shadow: 0 24px 80px rgba(0, 0, 0, 0.08);
            margin: 0 auto;
            max-width: 720px;
            padding: clamp(1.35rem, 4vw, 2.2rem);
            width: 100%;
        }

        .form-header {
            align-items: flex-start;
            display: flex;
            gap: 1rem;
            justify-content: space-between;
            margin-bottom: 1.4rem;
        }

        .form-header h2 {
            font-size: clamp(2rem, 4vw, 3.2rem);
            letter-spacing: -0.08em;
            line-height: 0.95;
            margin: 0;
            text-transform: uppercase;
        }

        .form-header p {
            color: var(--muted);
            line-height: 1.6;
            margin: 0.6rem 0 0;
        }

        .home-link {
            align-items: center;
            background: var(--soft);
            border: 1px solid var(--line);
            border-radius: 999px;
            display: inline-flex;
            flex-shrink: 0;
            gap: 0.45rem;
            font-size: 0.88rem;
            font-weight: 900;
            padding: 0.75rem 1rem;
            text-transform: uppercase;
        }

        .status {
            background: #f1fbf6;
            border: 1px solid #cdebdc;
            border-radius: 1rem;
            color: #1f6d4f;
            font-weight: 700;
            margin-bottom: 1rem;
            padding: 0.9rem 1rem;
        }

        .error-summary {
            background: #fff1ef;
            border: 1px solid #f2c8c0;
            border-radius: 1rem;
            color: #963525;
            margin-bottom: 1rem;
            padding: 0.9rem 1rem;
        }

        .error-summary strong {
            display: block;
            margin-bottom: 0.4rem;
        }

        .error-summary ul {
            margin: 0;
            padding-left: 1.1rem;
        }

        .form-grid {
            display: grid;
            gap: 0.95rem;
            grid-template-columns: repeat(2, 1fr);
        }

        .field {
            display: grid;
            gap: 0.42rem;
        }

        .field.full {
            grid-column: 1 / -1;
        }

        .field label {
            color: var(--ink);
            font-size: 0.82rem;
            font-weight: 900;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .field-error {
            color: var(--sale);
            font-size: 0.84rem;
            font-weight: 700;
        }

        .field-hint {
            color: var(--muted);
            font-size: 0.82rem;
            line-height: 1.45;
        }

        .field-hint.success {
            color: #24785b;
            font-weight: 700;
        }

        .field-hint.error {
            color: var(--sale);
            font-weight: 700;
        }

        .control {
            align-items: center;
            background: var(--soft);
            border: 1px solid var(--line);
            border-radius: 0.95rem;
            display: flex;
            gap: 0.65rem;
            min-height: 3.35rem;
            padding: 0 0.95rem;
        }

        .control input,
        .control select,
        .control textarea {
            background: transparent;
            border: 0;
            color: var(--black);
            font-size: 1rem;
            outline: 0;
            width: 100%;
        }

        .control textarea {
            min-height: 5rem;
            padding: 0.9rem 0;
            resize: vertical;
        }

        .phone-prefix {
            align-items: center;
            border-right: 1px solid var(--line);
            color: var(--black);
            display: inline-flex;
            font-weight: 900;
            min-height: 1.7rem;
            padding-right: 0.7rem;
        }

        .form-options {
            align-items: center;
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            justify-content: space-between;
            margin: 1rem 0;
        }

        .check {
            align-items: flex-start;
            color: var(--muted);
            display: flex;
            gap: 0.55rem;
            line-height: 1.5;
        }

        .check input {
            accent-color: var(--black);
            margin-top: 0.2rem;
        }

        .text-link {
            color: var(--sale);
            font-weight: 900;
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
            padding: 0.9rem 1.35rem;
            width: 100%;
        }

        .switch-copy {
            color: var(--muted);
            margin: 1.1rem 0 0;
            text-align: center;
        }

        .secure-note {
            align-items: center;
            color: var(--muted);
            display: flex;
            font-size: 0.9rem;
            gap: 0.5rem;
            justify-content: center;
            margin-top: 1rem;
        }

        @media (max-width: 1000px) {
            .auth-shell {
                grid-template-columns: 1fr;
            }

            .brand-panel {
                min-height: 520px;
            }
        }

        @media (max-width: 680px) {
            body {
                background:
                    linear-gradient(180deg, var(--black) 0 11rem, var(--soft) 11rem 100%);
            }

            .auth-shell {
                gap: 0;
                padding: 0;
            }

            .brand-panel {
                background:
                    radial-gradient(circle at 82% 20%, rgba(217, 166, 74, 0.26), transparent 8rem),
                    linear-gradient(135deg, #080808, #44211d 70%, #7a3c34);
                border-radius: 0;
                min-height: 210px;
                overflow: visible;
                padding: 1rem 1rem 5rem;
            }

            .brand-panel::after {
                border-radius: 5rem 5rem 0.8rem 0.8rem;
                bottom: 1.2rem;
                height: 105px;
                opacity: 0.55;
                right: 1.1rem;
                width: 78px;
            }

            .brand {
                font-size: 1.15rem;
            }

            .brand-mark {
                height: 2.25rem;
                width: 2.25rem;
            }

            .panel-copy {
                padding-top: 1.8rem;
            }

            .eyebrow {
                font-size: 0.72rem;
                margin-bottom: 0.65rem;
            }

            .panel-copy h1 {
                font-size: clamp(2.15rem, 11vw, 3.05rem);
                letter-spacing: -0.075em;
                line-height: 0.92;
                max-width: 310px;
            }

            .panel-copy p {
                color: rgba(255, 255, 255, 0.7);
                font-size: 0.9rem;
                line-height: 1.45;
                margin-top: 0.7rem;
                max-width: 260px;
            }

            .benefit-row,
            .form-grid {
                grid-template-columns: 1fr;
            }

            .benefit-row {
                display: none;
            }

            .form-panel {
                align-content: start;
                padding: 0 0.85rem 1rem;
            }

            .form-card {
                border: 0;
                border-radius: 1.35rem;
                box-shadow: 0 18px 50px rgba(0, 0, 0, 0.12);
                margin-top: -4.1rem;
                padding: 1rem;
                position: relative;
                z-index: 2;
            }

            .form-header {
                flex-direction: column-reverse;
                gap: 0.75rem;
                margin-bottom: 1rem;
            }

            .form-header h2 {
                font-size: 2rem;
                letter-spacing: -0.065em;
            }

            .form-header p {
                line-height: 1.45;
                font-size: 0.94rem;
            }

            .home-link {
                align-self: flex-start;
                background: var(--black);
                border-color: var(--black);
                color: var(--paper);
                font-size: 0.78rem;
                min-height: 2.55rem;
                padding: 0.65rem 0.85rem;
            }

            .control {
                background: #faf8f5;
                border-radius: 1rem;
                min-height: 3.15rem;
                padding: 0 0.85rem;
            }

            .control .icon {
                color: var(--muted);
                height: 1.05rem;
                width: 1.05rem;
            }

            .field label {
                font-size: 0.76rem;
                letter-spacing: 0.06em;
            }

            .form-options {
                align-items: flex-start;
                flex-direction: column;
                margin: 0.9rem 0;
            }

            .check {
                background: var(--soft);
                border-radius: 0.9rem;
                font-size: 0.9rem;
                padding: 0.8rem;
                width: 100%;
            }

            .submit-button {
                min-height: 3.3rem;
                position: static;
            }

            .secure-note {
                align-items: flex-start;
                font-size: 0.84rem;
                justify-content: flex-start;
                text-align: left;
            }
        }

        @media (max-width: 420px) {
            .brand-panel {
                min-height: 196px;
                padding-bottom: 4.5rem;
            }

            .panel-copy p {
                display: none;
            }

            .form-card {
                margin-top: -3.6rem;
                padding: 0.9rem;
            }

            .form-grid {
                gap: 0.8rem;
            }
        }
    </style>
</head>
<body>
    <main class="auth-shell">
        <section class="brand-panel" aria-label="Biswas Garments fashion ecommerce">
            <a class="brand" href="{{ route('home') }}">
                <span class="brand-mark">BG</span>
                Biswas Garments
            </a>

            <div class="panel-copy">
                <p class="eyebrow">@yield('eyebrow')</p>
                <h1>@yield('hero_title')</h1>
                <p>@yield('hero_copy')</p>

                <div class="benefit-row">
                    <div class="benefit">
                        <strong>Fast checkout</strong>
                        <span>Save details for quick future orders.</span>
                    </div>
                    <div class="benefit">
                        <strong>Order tracking</strong>
                        <span>Keep every purchase in one account.</span>
                    </div>
                    <div class="benefit">
                        <strong>Member offers</strong>
                        <span>Unlock referral and seasonal deals.</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="form-panel">
            <div class="form-card">
                <div class="form-header">
                    <div>
                        <h2>@yield('form_title')</h2>
                        <p>@yield('form_subtitle')</p>
                    </div>
                    <a class="home-link" href="{{ route('home') }}">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                        Store
                    </a>
                </div>

                @if (session('status'))
                    <div class="status">{{ session('status') }}</div>
                @endif

                @if ($errors->any())
                    <div class="error-summary">
                        <strong>Please fix the highlighted details.</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
            </div>
        </section>
    </main>
    @yield('scripts')
</body>
</html>
