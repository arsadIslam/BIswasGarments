<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Homepage | Biswas Garments Admin</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet">
    <style>
        body {
            background: #f6f3ef;
            color: #050505;
            font-family: "Instrument Sans", ui-sans-serif, system-ui, sans-serif;
            margin: 0;
        }

        .page {
            margin: 0 auto;
            max-width: 1120px;
            padding: 1.25rem;
        }

        .topbar {
            align-items: center;
            display: flex;
            gap: 1rem;
            justify-content: space-between;
            margin-bottom: 1rem;
        }

        .brand {
            font-weight: 900;
            letter-spacing: -0.04em;
        }

        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 0.6rem;
        }

        a,
        button,
        input,
        textarea {
            font: inherit;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .button,
        .save-button {
            border-radius: 999px;
            font-weight: 900;
            padding: 0.85rem 1.2rem;
        }

        .button {
            background: #ffffff;
            border: 1px solid #e8e2dc;
        }

        .save-button {
            background: #050505;
            border: 0;
            color: #ffffff;
            cursor: pointer;
        }

        .panel {
            background: #ffffff;
            border: 1px solid #e8e2dc;
            border-radius: 1.4rem;
            padding: clamp(1.25rem, 4vw, 2.2rem);
        }

        h1 {
            font-size: clamp(2.4rem, 6vw, 4.4rem);
            letter-spacing: -0.08em;
            line-height: 0.95;
            margin: 0;
            text-transform: uppercase;
        }

        p {
            color: #727272;
            line-height: 1.7;
        }

        .status {
            background: #f1fbf6;
            border: 1px solid #cdebdc;
            border-radius: 1rem;
            color: #1f6d4f;
            font-weight: 800;
            margin: 1rem 0;
            padding: 0.9rem 1rem;
        }

        .form-grid {
            display: grid;
            gap: 1rem;
            grid-template-columns: repeat(2, 1fr);
            margin-top: 1.5rem;
        }

        .field {
            display: grid;
            gap: 0.45rem;
        }

        .field.full {
            grid-column: 1 / -1;
        }

        label {
            font-size: 0.78rem;
            font-weight: 900;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        input,
        textarea {
            background: #f6f3ef;
            border: 1px solid #e8e2dc;
            border-radius: 1rem;
            outline: 0;
            padding: 0.9rem 1rem;
            width: 100%;
        }

        textarea {
            min-height: 7rem;
            resize: vertical;
        }

        .error {
            color: #c44631;
            font-size: 0.84rem;
            font-weight: 800;
        }

        .form-footer {
            display: flex;
            justify-content: flex-end;
            margin-top: 1.25rem;
        }

        @media (max-width: 760px) {
            .topbar {
                align-items: flex-start;
                flex-direction: column;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .field.full {
                grid-column: auto;
            }
        }
    </style>
</head>
<body>
    <main class="page">
        <div class="topbar">
            <div class="brand">Biswas Garments Admin</div>
            <div class="actions">
                <a class="button" href="{{ route('admin.dashboard') }}">Dashboard</a>
                <a class="button" href="{{ route('home') }}" target="_blank">View Store</a>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button class="button" type="submit">Logout</button>
                </form>
            </div>
        </div>

        <section class="panel">
            <h1>Edit Homepage</h1>
            <p>Update the main storefront copy. Changes appear on the homepage immediately after saving.</p>

            @if (session('status'))
                <div class="status">{{ session('status') }}</div>
            @endif

            <form method="POST" action="{{ route('admin.homepage.update') }}">
                @csrf
                @method('PUT')

                <div class="form-grid">
                    @foreach ($fields as $key => $defaultValue)
                        @php
                            $label = str($key)->replace('_', ' ')->title();
                            $isLongField = str_contains($key, 'description') || str_contains($key, 'title');
                        @endphp

                        <div class="field {{ $isLongField ? 'full' : '' }}">
                            <label for="{{ $key }}">{{ $label }}</label>
                            @if ($isLongField)
                                <textarea id="{{ $key }}" name="{{ $key }}">{{ old($key, $homepage[$key] ?? $defaultValue) }}</textarea>
                            @else
                                <input id="{{ $key }}" name="{{ $key }}" type="text" value="{{ old($key, $homepage[$key] ?? $defaultValue) }}">
                            @endif
                            @error($key)
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    @endforeach
                </div>

                <div class="form-footer">
                    <button class="save-button" type="submit">Save Homepage</button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>
