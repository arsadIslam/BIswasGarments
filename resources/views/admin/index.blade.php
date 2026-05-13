<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard | Biswas Garments</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet">
    <style>
        body {
            background: #f6f3ef;
            color: #050505;
            font-family: "Instrument Sans", ui-sans-serif, system-ui, sans-serif;
            margin: 0;
        }

        .dashboard {
            margin: 0 auto;
            max-width: 1080px;
            padding: 1.25rem;
        }

        .panel {
            background: #ffffff;
            border: 1px solid #e8e2dc;
            border-radius: 1.4rem;
            padding: clamp(1.25rem, 4vw, 2.5rem);
        }

        h1 {
            font-size: clamp(2.4rem, 6vw, 4.5rem);
            letter-spacing: -0.08em;
            line-height: 0.95;
            margin: 0;
            text-transform: uppercase;
        }

        p {
            color: #727272;
            line-height: 1.7;
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

        button,
        a {
            font: inherit;
        }

        .logout {
            background: #050505;
            border: 0;
            border-radius: 999px;
            color: #ffffff;
            cursor: pointer;
            font-weight: 900;
            padding: 0.85rem 1.2rem;
        }

        .cards {
            display: grid;
            gap: 1rem;
            grid-template-columns: repeat(3, 1fr);
            margin-top: 1.5rem;
        }

        .card {
            background: #f6f3ef;
            border-radius: 1rem;
            padding: 1rem;
        }

        .card strong {
            display: block;
            font-size: 1.6rem;
        }

        .action-link {
            background: #050505;
            border-radius: 999px;
            color: #ffffff;
            display: inline-flex;
            font-weight: 900;
            margin-top: 1.25rem;
            padding: 0.85rem 1.2rem;
            text-decoration: none;
        }

        @media (max-width: 720px) {
            .topbar {
                align-items: flex-start;
                flex-direction: column;
            }

            .cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <main class="dashboard">
        <div class="topbar">
            <div class="brand">Biswas Garments Admin</div>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button class="logout" type="submit">Logout</button>
            </form>
        </div>

        <section class="panel">
            <h1>Admin Dashboard</h1>
            <p>Welcome, {{ auth('admin')->user()->username }}. This dashboard is ready for product, order, and customer management modules.</p>

            <a class="action-link" href="{{ route('admin.homepage.edit') }}">Edit Homepage</a>

            <div class="cards">
                <div class="card">
                    <strong>0</strong>
                    Products
                </div>
                <div class="card">
                    <strong>0</strong>
                    Orders
                </div>
                <div class="card">
                    <strong>0</strong>
                    Customers
                </div>
            </div>
        </section>
    </main>
</body>
</html>
