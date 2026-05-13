<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biswas Garments | Fashion Ecommerce</title>
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

        html {
            scroll-behavior: smooth;
        }

        body {
            background: var(--paper);
            color: var(--black);
            font-family: "Instrument Sans", ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            margin: 0;
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
            height: 1.2rem;
            stroke: currentColor;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-width: 2;
            width: 1.2rem;
        }

        .container {
            margin: 0 auto;
            max-width: 1280px;
            padding: 0 1.25rem;
        }

        .top-strip {
            background: var(--black);
            color: var(--paper);
            font-size: 0.78rem;
            font-weight: 800;
            letter-spacing: 0.1em;
            padding: 0.68rem 1rem;
            text-align: center;
            text-transform: uppercase;
        }

        .top-strip span {
            color: var(--gold);
        }

        .navbar {
            align-items: center;
            border-bottom: 1px solid var(--line);
            display: grid;
            gap: 1.25rem;
            grid-template-columns: auto 1fr auto;
            min-height: 78px;
        }

        .brand {
            align-items: center;
            display: flex;
            font-size: 1.5rem;
            font-weight: 900;
            gap: 0.7rem;
            letter-spacing: -0.055em;
            white-space: nowrap;
        }

        .brand-mark {
            align-items: center;
            background: var(--black);
            border-radius: 50%;
            color: var(--paper);
            display: inline-flex;
            font-size: 0.85rem;
            height: 2.55rem;
            justify-content: center;
            letter-spacing: -0.04em;
            width: 2.55rem;
        }

        .navlinks {
            display: flex;
            gap: 1.65rem;
            justify-content: center;
        }

        .navlinks a {
            color: var(--ink);
            font-size: 0.9rem;
            font-weight: 800;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .navlinks a.sale-link {
            color: var(--sale);
        }

        .nav-actions {
            align-items: center;
            display: flex;
            gap: 0.55rem;
            justify-content: flex-end;
        }

        .search {
            align-items: center;
            background: var(--soft);
            border: 1px solid var(--line);
            border-radius: 999px;
            display: flex;
            gap: 0.55rem;
            padding: 0.65rem 0.9rem;
            width: 245px;
        }

        .search input {
            background: transparent;
            border: 0;
            outline: 0;
            width: 100%;
        }

        .search input::placeholder {
            color: var(--muted);
        }

        .icon-button {
            align-items: center;
            background: var(--paper);
            border: 1px solid var(--line);
            border-radius: 50%;
            display: inline-flex;
            height: 2.75rem;
            justify-content: center;
            position: relative;
            width: 2.75rem;
        }

        .cart-count {
            align-items: center;
            background: var(--black);
            border-radius: 50%;
            color: var(--paper);
            display: flex;
            font-size: 0.68rem;
            font-weight: 900;
            height: 1.15rem;
            justify-content: center;
            position: absolute;
            right: -0.25rem;
            top: -0.25rem;
            width: 1.15rem;
        }

        .mobile-shortcuts {
            border-bottom: 1px solid var(--line);
            display: none;
            grid-template-columns: repeat(5, 1fr);
        }

        .mobile-shortcuts a {
            align-items: center;
            color: var(--muted);
            display: flex;
            flex-direction: column;
            font-size: 0.72rem;
            font-weight: 800;
            gap: 0.3rem;
            padding: 0.75rem 0.25rem;
            text-transform: uppercase;
        }

        .hero {
            display: grid;
            gap: 1rem;
            grid-template-columns: 1.15fr 0.85fr;
            padding: 1.25rem 0 3rem;
        }

        .hero-main {
            background:
                linear-gradient(90deg, rgba(0, 0, 0, 0.78), rgba(0, 0, 0, 0.22)),
                linear-gradient(135deg, #d7b39a, #7a3c34);
            border-radius: 1.4rem;
            color: var(--paper);
            min-height: 620px;
            overflow: hidden;
            padding: clamp(2rem, 5vw, 4.5rem);
            position: relative;
        }

        .hero-main::after {
            background:
                linear-gradient(180deg, #f3ddcd 0%, #191210 100%);
            border-radius: 11rem 11rem 1.5rem 1.5rem;
            bottom: 0;
            content: "";
            height: 72%;
            position: absolute;
            right: 8%;
            width: min(34%, 280px);
        }

        .hero-copy {
            max-width: 650px;
            position: relative;
            z-index: 1;
        }

        .eyebrow {
            align-items: center;
            display: inline-flex;
            font-size: 0.8rem;
            font-weight: 900;
            gap: 0.45rem;
            letter-spacing: 0.15em;
            margin: 0 0 1rem;
            text-transform: uppercase;
        }

        h1 {
            font-size: clamp(3.4rem, 8vw, 7.8rem);
            letter-spacing: -0.095em;
            line-height: 0.86;
            margin: 0;
            max-width: 780px;
            text-transform: uppercase;
        }

        .hero-copy > p {
            color: rgba(255, 255, 255, 0.78);
            font-size: 1.06rem;
            line-height: 1.75;
            margin: 1.35rem 0 2rem;
            max-width: 520px;
        }

        .button-row {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
        }

        .button {
            align-items: center;
            background: var(--black);
            border: 1px solid var(--black);
            border-radius: 999px;
            color: var(--paper);
            display: inline-flex;
            font-weight: 900;
            gap: 0.45rem;
            justify-content: center;
            padding: 0.92rem 1.35rem;
        }

        .button.light {
            background: var(--paper);
            border-color: var(--paper);
            color: var(--black);
        }

        .button.ghost {
            background: transparent;
            border-color: rgba(255, 255, 255, 0.35);
            color: var(--paper);
        }

        .hero-side {
            display: grid;
            gap: 1rem;
            grid-template-rows: 1fr 1fr;
        }

        .side-card {
            background: var(--soft);
            border-radius: 1.4rem;
            min-height: 300px;
            overflow: hidden;
            padding: 1.5rem;
            position: relative;
        }

        .side-card.dark {
            background: var(--black);
            color: var(--paper);
        }

        .side-card h2 {
            font-size: clamp(2rem, 4vw, 3.1rem);
            letter-spacing: -0.07em;
            line-height: 0.94;
            margin: 0.55rem 0;
            max-width: 320px;
            text-transform: uppercase;
        }

        .side-card p {
            color: var(--muted);
            line-height: 1.55;
            margin: 0;
            max-width: 270px;
            position: relative;
            z-index: 1;
        }

        .side-card.dark p {
            color: rgba(255, 255, 255, 0.65);
        }

        .side-card::after {
            background: linear-gradient(180deg, #f4dfcf, #8b4238);
            border-radius: 8rem 8rem 1.2rem 1.2rem;
            bottom: -1rem;
            content: "";
            height: 170px;
            position: absolute;
            right: 1.4rem;
            width: 126px;
        }

        .section {
            padding: 3.5rem 0;
        }

        .section-head {
            align-items: end;
            display: flex;
            gap: 1rem;
            justify-content: space-between;
            margin-bottom: 1.3rem;
        }

        h2 {
            font-size: clamp(2.3rem, 5vw, 4.5rem);
            letter-spacing: -0.085em;
            line-height: 0.95;
            margin: 0;
            text-transform: uppercase;
        }

        .section-head p {
            color: var(--muted);
            line-height: 1.65;
            margin: 0;
            max-width: 440px;
        }

        .category-rail {
            display: grid;
            gap: 0.85rem;
            grid-template-columns: repeat(6, 1fr);
        }

        .category-pill {
            align-items: center;
            background: var(--soft);
            border: 1px solid var(--line);
            border-radius: 999px;
            display: flex;
            font-size: 0.88rem;
            font-weight: 900;
            gap: 0.5rem;
            justify-content: center;
            min-height: 3.35rem;
            text-transform: uppercase;
        }

        .lookbook-grid {
            display: grid;
            gap: 1rem;
            grid-template-columns: repeat(4, 1fr);
        }

        .look-card {
            background: var(--soft);
            border-radius: 1.35rem;
            min-height: 360px;
            overflow: hidden;
            padding: 1rem;
            position: relative;
        }

        .look-card.tall {
            grid-row: span 2;
            min-height: 736px;
        }

        .look-card.wide {
            grid-column: span 2;
        }

        .look-card::after {
            background: linear-gradient(180deg, #f5ddcf, #45302b);
            border-radius: 9rem 9rem 1.2rem 1.2rem;
            bottom: 0;
            content: "";
            height: 62%;
            left: 50%;
            position: absolute;
            transform: translateX(-50%);
            width: 42%;
        }

        .look-card h3,
        .look-card span {
            position: relative;
            z-index: 1;
        }

        .look-card h3 {
            font-size: 1.5rem;
            letter-spacing: -0.04em;
            margin: 0.4rem 0 0;
            text-transform: uppercase;
        }

        .look-card span {
            color: var(--muted);
            font-weight: 800;
        }

        .toolbar {
            align-items: center;
            display: flex;
            flex-wrap: wrap;
            gap: 0.7rem;
            justify-content: space-between;
            margin-bottom: 1.25rem;
        }

        .filters {
            display: flex;
            flex-wrap: wrap;
            gap: 0.6rem;
        }

        .chip {
            background: var(--paper);
            border: 1px solid var(--line);
            border-radius: 999px;
            color: var(--muted);
            font-size: 0.84rem;
            font-weight: 900;
            padding: 0.7rem 1rem;
            text-transform: uppercase;
        }

        .chip.active {
            background: var(--black);
            border-color: var(--black);
            color: var(--paper);
        }

        .sort-button {
            align-items: center;
            background: var(--soft);
            border: 1px solid var(--line);
            border-radius: 999px;
            display: flex;
            font-weight: 900;
            gap: 0.45rem;
            padding: 0.7rem 1rem;
            text-transform: uppercase;
        }

        .product-grid {
            display: grid;
            gap: 1rem;
            grid-template-columns: repeat(4, 1fr);
        }

        .product-card {
            border: 1px solid var(--line);
            border-radius: 1.2rem;
            overflow: hidden;
            transition: box-shadow 180ms ease, transform 180ms ease;
        }

        .product-card:hover {
            box-shadow: 0 22px 60px rgba(0, 0, 0, 0.12);
            transform: translateY(-4px);
        }

        .product-media {
            align-items: center;
            background: linear-gradient(160deg, #f5e1d4, #c67b6c);
            display: flex;
            height: 360px;
            justify-content: center;
            position: relative;
        }

        .product-media::after {
            background: linear-gradient(180deg, #fff7f0, #37211e);
            border-radius: 7rem 7rem 1.1rem 1.1rem;
            content: "";
            height: 210px;
            width: 140px;
        }

        .badge {
            background: var(--paper);
            border-radius: 999px;
            font-size: 0.72rem;
            font-weight: 900;
            left: 0.8rem;
            letter-spacing: 0.08em;
            padding: 0.42rem 0.65rem;
            position: absolute;
            text-transform: uppercase;
            top: 0.8rem;
            z-index: 1;
        }

        .wishlist {
            background: rgba(255, 255, 255, 0.92);
            border: 0;
            border-radius: 50%;
            color: var(--black);
            display: grid;
            height: 2.5rem;
            place-items: center;
            position: absolute;
            right: 0.8rem;
            top: 0.8rem;
            width: 2.5rem;
            z-index: 1;
        }

        .product-info {
            background: var(--paper);
            padding: 1rem;
        }

        .rating {
            align-items: center;
            color: var(--gold);
            display: flex;
            font-size: 0.86rem;
            font-weight: 900;
            gap: 0.3rem;
            margin-bottom: 0.55rem;
        }

        .product-info h3 {
            font-size: 1rem;
            letter-spacing: -0.02em;
            margin: 0 0 0.45rem;
        }

        .meta {
            align-items: center;
            color: var(--muted);
            display: flex;
            font-size: 0.9rem;
            justify-content: space-between;
        }

        .price {
            color: var(--black);
            font-size: 1.08rem;
            font-weight: 900;
        }

        .product-actions {
            display: grid;
            gap: 0.55rem;
            grid-template-columns: 1fr auto;
            margin-top: 0.9rem;
        }

        .add-cart {
            background: var(--black);
            border: 0;
            border-radius: 0.8rem;
            color: var(--paper);
            cursor: pointer;
            font-weight: 900;
            padding: 0.82rem;
        }

        .quick-view {
            align-items: center;
            background: var(--soft);
            border: 1px solid var(--line);
            border-radius: 0.8rem;
            display: flex;
            justify-content: center;
            width: 3rem;
        }

        .benefits {
            display: grid;
            gap: 1rem;
            grid-template-columns: repeat(4, 1fr);
            padding: 1rem 0 3.25rem;
        }

        .benefit {
            align-items: flex-start;
            background: var(--soft);
            border: 1px solid var(--line);
            border-radius: 1.1rem;
            display: flex;
            gap: 0.8rem;
            padding: 1rem;
        }

        .benefit strong {
            display: block;
            margin-bottom: 0.2rem;
        }

        .benefit span {
            color: var(--muted);
            font-size: 0.9rem;
            line-height: 1.45;
        }

        .sale-band {
            background:
                linear-gradient(90deg, rgba(5, 5, 5, 0.94), rgba(5, 5, 5, 0.62)),
                linear-gradient(135deg, #c78370, #281716);
            border-radius: 1.4rem;
            color: var(--paper);
            display: grid;
            gap: 1.5rem;
            grid-template-columns: 1fr auto;
            margin: 1rem 0 3.5rem;
            padding: clamp(1.5rem, 4vw, 3rem);
        }

        .sale-band p {
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.7;
            margin: 0.75rem 0 0;
            max-width: 620px;
        }

        .newsletter {
            align-items: center;
            background: var(--soft);
            border: 1px solid var(--line);
            border-radius: 1.4rem;
            display: grid;
            gap: 1.2rem;
            grid-template-columns: 1fr 430px;
            margin-bottom: 3.5rem;
            padding: 2rem;
        }

        .newsletter h2 {
            font-size: clamp(2rem, 4vw, 3.4rem);
        }

        .newsletter p {
            color: var(--muted);
            line-height: 1.65;
            margin: 0.55rem 0 0;
        }

        .newsletter-form {
            align-items: center;
            background: var(--paper);
            border: 1px solid var(--line);
            border-radius: 999px;
            display: flex;
            gap: 0.5rem;
            padding: 0.45rem;
        }

        .newsletter-form input {
            border: 0;
            flex: 1;
            outline: 0;
            padding: 0 0.8rem;
        }

        .site-footer {
            background: var(--black);
            border-radius: 1.4rem 1.4rem 0 0;
            color: var(--paper);
            margin-top: 1rem;
            overflow: hidden;
        }

        .footer-main {
            display: grid;
            gap: 2rem;
            grid-template-columns: 1.35fr repeat(3, 1fr);
            padding: 3rem 2rem;
        }

        .footer-brand {
            align-items: center;
            display: flex;
            font-size: 1.45rem;
            font-weight: 900;
            gap: 0.75rem;
            letter-spacing: -0.05em;
            margin-bottom: 1rem;
        }

        .footer-brand .brand-mark {
            background: var(--paper);
            color: var(--black);
        }

        .footer-about {
            color: rgba(255, 255, 255, 0.68);
            line-height: 1.7;
            margin: 0 0 1.25rem;
        }

        .social-links {
            display: flex;
            gap: 0.65rem;
        }

        .social-links a {
            align-items: center;
            border: 1px solid rgba(255, 255, 255, 0.16);
            border-radius: 999px;
            display: inline-flex;
            justify-content: center;
        }

        .social-links a {
            height: 2.6rem;
            width: 2.6rem;
        }

        .footer-column h3 {
            font-size: 0.82rem;
            letter-spacing: 0.12em;
            margin: 0 0 1rem;
            text-transform: uppercase;
        }

        .footer-column ul {
            display: grid;
            gap: 0.72rem;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .footer-column a,
        .footer-column li,
        .contact-item {
            color: rgba(255, 255, 255, 0.66);
            font-size: 0.94rem;
            line-height: 1.5;
        }

        .contact-list {
            display: grid;
            gap: 0.9rem;
        }

        .contact-item {
            align-items: flex-start;
            display: flex;
            gap: 0.65rem;
        }

        .footer-bottom {
            align-items: center;
            border-top: 1px solid rgba(255, 255, 255, 0.12);
            color: rgba(255, 255, 255, 0.62);
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
            justify-content: space-between;
            padding: 1.2rem 2rem;
        }

        .developer-credit {
            color: var(--paper);
            font-weight: 800;
        }

        @media (max-width: 1100px) {
            .navbar,
            .hero,
            .newsletter {
                grid-template-columns: 1fr;
            }

            .navlinks {
                justify-content: flex-start;
                overflow-x: auto;
                padding-bottom: 0.25rem;
            }

            .nav-actions {
                justify-content: space-between;
            }

            .search {
                flex: 1;
                width: auto;
            }

            .hero-main {
                min-height: 540px;
            }

            .category-rail,
            .product-grid,
            .benefits,
            .footer-main {
                grid-template-columns: repeat(2, 1fr);
            }

            .lookbook-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .look-card.tall {
                grid-row: auto;
                min-height: 360px;
            }
        }

        @media (max-width: 680px) {
            .container {
                padding: 0 0.9rem;
            }

            .navbar {
                gap: 0.85rem;
                min-height: auto;
                padding: 0.95rem 0;
            }

            .brand {
                font-size: 1.2rem;
            }

            .brand-mark {
                height: 2.25rem;
                width: 2.25rem;
            }

            .navlinks {
                display: none;
            }

            .mobile-shortcuts {
                display: grid;
            }

            .nav-actions {
                align-items: stretch;
                flex-direction: column;
            }

            .nav-actions .icon-button {
                display: none;
            }

            .hero {
                padding-top: 0.9rem;
            }

            .hero-main {
                border-radius: 1rem;
                min-height: 500px;
                padding: 1.35rem;
            }

            .hero-main::after {
                height: 46%;
                right: 1.5rem;
                width: 155px;
            }

            .hero-side,
            .section-head,
            .sale-band {
                grid-template-columns: 1fr;
            }

            .section-head {
                align-items: start;
                flex-direction: column;
            }

            .category-rail,
            .lookbook-grid,
            .product-grid,
            .benefits,
            .footer-main {
                grid-template-columns: 1fr;
            }

            .footer-main,
            .footer-bottom {
                padding-left: 1.25rem;
                padding-right: 1.25rem;
            }

            .look-card.wide {
                grid-column: auto;
            }

            .newsletter {
                grid-template-columns: 1fr;
                padding: 1.25rem;
            }

            .newsletter-form {
                align-items: stretch;
                border-radius: 1rem;
                flex-direction: column;
            }

            .newsletter-form input {
                min-height: 3rem;
            }
        }
    </style>
</head>
<body>
    <div class="top-strip">
        <span>New drop live</span> Extra 10% off on prepaid fashion orders
    </div>

    <div class="container">
        <header class="navbar">
            <a class="brand" href="/">
                <span class="brand-mark">BG</span>
                Biswas Garments
            </a>

            <nav class="navlinks" aria-label="Main navigation">
                <a href="#new">New</a>
                <a href="#collections">Explore</a>
                <a href="#products">Women</a>
                <a href="#products">Men</a>
                <a href="#products">Kids</a>
                <a class="sale-link" href="#sale">Sale</a>
            </nav>

            <div class="nav-actions">
                <label class="search" aria-label="Search products">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <circle cx="11" cy="11" r="7"></circle>
                        <path d="m20 20-3.5-3.5"></path>
                    </svg>
                    <input type="search" placeholder="Search shirts, sarees">
                </label>
                <a class="icon-button" href="#wishlist" aria-label="Wishlist">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M19.5 12.6 12 20l-7.5-7.4a5 5 0 0 1 7.1-7.1l.4.4.4-.4a5 5 0 0 1 7.1 7.1Z"></path>
                    </svg>
                </a>
                <a class="icon-button" href="{{ route('login') }}" aria-label="Profile login">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M20 21a8 8 0 0 0-16 0"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </a>
                <a class="icon-button" href="#cart" aria-label="Shopping cart">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M6 8h12l-1 13H7L6 8Z"></path>
                        <path d="M9 8a3 3 0 0 1 6 0"></path>
                    </svg>
                    <span class="cart-count">2</span>
                </a>
            </div>
        </header>
    </div>

    <nav class="mobile-shortcuts" aria-label="Mobile shortcuts">
        <a href="/">
            <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="m3 11 9-8 9 8"></path>
                <path d="M5 10v11h14V10"></path>
            </svg>
            Home
        </a>
        <a href="#collections">
            <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M3 3h7v7H3z"></path>
                <path d="M14 3h7v7h-7z"></path>
                <path d="M14 14h7v7h-7z"></path>
                <path d="M3 14h7v7H3z"></path>
            </svg>
            Explore
        </a>
        <a href="#new">
            <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="m12 2 2.5 6.5L21 11l-6.5 2.5L12 20l-2.5-6.5L3 11l6.5-2.5L12 2Z"></path>
            </svg>
            New
        </a>
        <a href="#cart">
            <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M6 8h12l-1 13H7L6 8Z"></path>
                <path d="M9 8a3 3 0 0 1 6 0"></path>
            </svg>
            Cart
        </a>
        <a href="{{ route('login') }}">
            <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M20 21a8 8 0 0 0-16 0"></path>
                <circle cx="12" cy="7" r="4"></circle>
            </svg>
            Profile
        </a>
    </nav>

    <div class="container">
        <main>
            <section class="hero" id="new">
                <div class="hero-main">
                    <div class="hero-copy">
                        <p class="eyebrow">
                            <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="m12 2 2.5 6.5L21 11l-6.5 2.5L12 20l-2.5-6.5L3 11l6.5-2.5L12 2Z"></path>
                            </svg>
                            Fresh fashion edit
                        </p>
                        <h1>New styles for every wardrobe.</h1>
                        <p>
                            A sharper ecommerce homepage for Biswas Garments with clean product discovery,
                            fast shopping actions, and a premium fashion-store layout.
                        </p>
                        <div class="button-row">
                            <a class="button light" href="#products">
                                Shop New Arrivals
                                <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M5 12h14"></path>
                                    <path d="m13 6 6 6-6 6"></path>
                                </svg>
                            </a>
                            <a class="button ghost" href="#collections">Explore Collections</a>
                        </div>
                    </div>
                </div>

                <aside class="hero-side">
                    <a class="side-card dark" href="#sale">
                        <p class="eyebrow">Limited sale</p>
                        <h2>Flat 40% off festive picks</h2>
                        <p>Sarees, kurtis, shirts, denim, and kids sets for the season.</p>
                    </a>
                    <a class="side-card" href="#products">
                        <p class="eyebrow">Trending now</p>
                        <h2>Minimal shirts and summer dresses</h2>
                        <p>Curated bestseller cards ready for your product catalog.</p>
                    </a>
                </aside>
            </section>

            <section class="section" id="collections">
                <div class="section-head">
                    <h2>Explore categories</h2>
                    <p>Quick category links inspired by modern fashion stores, built for fast browsing.</p>
                </div>

                <div class="category-rail">
                    <a class="category-pill" href="#products">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M6 3h12l2 5-4 2v11H8V10L4 8l2-5Z"></path>
                        </svg>
                        Shirts
                    </a>
                    <a class="category-pill" href="#products">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M7 3h10l2 18H5L7 3Z"></path>
                            <path d="M9 8h6"></path>
                        </svg>
                        Dresses
                    </a>
                    <a class="category-pill" href="#products">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M8 3h8l2 18h-5l-1-9-1 9H6L8 3Z"></path>
                        </svg>
                        Denim
                    </a>
                    <a class="category-pill" href="#products">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M5 21V5l7-3 7 3v16"></path>
                            <path d="M9 21V10h6v11"></path>
                        </svg>
                        Ethnic
                    </a>
                    <a class="category-pill" href="#products">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M12 3c4 0 7 2 7 5v13H5V8c0-3 3-5 7-5Z"></path>
                            <path d="M9 8h6"></path>
                        </svg>
                        Kids
                    </a>
                    <a class="category-pill" href="#products">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M6 8h12l2 13H4L6 8Z"></path>
                            <path d="M9 8a3 3 0 0 1 6 0"></path>
                        </svg>
                        Bags
                    </a>
                </div>
            </section>

            <section class="section">
                <div class="section-head">
                    <h2>Season lookbook</h2>
                    <p>Large visual tiles help the homepage feel more like a real fashion ecommerce storefront.</p>
                </div>

                <div class="lookbook-grid">
                    <a class="look-card tall" href="#products">
                        <span>01 / New Drop</span>
                        <h3>Relaxed men's fits</h3>
                    </a>
                    <a class="look-card wide" href="#products">
                        <span>02 / Women's Edit</span>
                        <h3>Printed summer styles</h3>
                    </a>
                    <a class="look-card" href="#products">
                        <span>03 / Kids</span>
                        <h3>Colorful daily wear</h3>
                    </a>
                    <a class="look-card" href="#products">
                        <span>04 / Festive</span>
                        <h3>Ethnic collection</h3>
                    </a>
                    <a class="look-card wide" href="#products">
                        <span>05 / Essentials</span>
                        <h3>Wardrobe basics</h3>
                    </a>
                </div>
            </section>

            <section class="section" id="products">
                <div class="section-head">
                    <h2>Trending products</h2>
                    <p>Precise ecommerce cards with wishlist, rating, price, quick view, and add-to-cart actions.</p>
                </div>

                <div class="toolbar">
                    <div class="filters" aria-label="Product filters">
                        <a class="chip active" href="#products">All</a>
                        <a class="chip" href="#products">New</a>
                        <a class="chip" href="#products">Men</a>
                        <a class="chip" href="#products">Women</a>
                        <a class="chip" href="#products">Sale</a>
                    </div>
                    <a class="sort-button" href="#products">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M4 6h16"></path>
                            <path d="M7 12h10"></path>
                            <path d="M10 18h4"></path>
                        </svg>
                        Sort
                    </a>
                </div>

                <div class="product-grid">
                    <article class="product-card">
                        <div class="product-media">
                            <span class="badge">New</span>
                            <button class="wishlist" type="button" aria-label="Add Classic Cotton Shirt to wishlist">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M19.5 12.6 12 20l-7.5-7.4a5 5 0 0 1 7.1-7.1l.4.4.4-.4a5 5 0 0 1 7.1 7.1Z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="product-info">
                            <div class="rating">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="m12 3 2.8 5.7 6.2.9-4.5 4.4 1.1 6.2L12 17.3l-5.6 2.9 1.1-6.2L3 9.6l6.2-.9L12 3Z"></path>
                                </svg>
                                4.9
                            </div>
                            <h3>Classic Cotton Shirt</h3>
                            <div class="meta">
                                <span>Men's wear</span>
                                <strong class="price">Rs. 1,299</strong>
                            </div>
                            <div class="product-actions">
                                <button class="add-cart" type="button">Add to Cart</button>
                                <a class="quick-view" href="#products" aria-label="Quick view Classic Cotton Shirt">
                                    <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12Z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>

                    <article class="product-card">
                        <div class="product-media">
                            <span class="badge">-20%</span>
                            <button class="wishlist" type="button" aria-label="Add Printed Summer Dress to wishlist">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M19.5 12.6 12 20l-7.5-7.4a5 5 0 0 1 7.1-7.1l.4.4.4-.4a5 5 0 0 1 7.1 7.1Z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="product-info">
                            <div class="rating">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="m12 3 2.8 5.7 6.2.9-4.5 4.4 1.1 6.2L12 17.3l-5.6 2.9 1.1-6.2L3 9.6l6.2-.9L12 3Z"></path>
                                </svg>
                                4.8
                            </div>
                            <h3>Printed Summer Dress</h3>
                            <div class="meta">
                                <span>Women's wear</span>
                                <strong class="price">Rs. 1,899</strong>
                            </div>
                            <div class="product-actions">
                                <button class="add-cart" type="button">Add to Cart</button>
                                <a class="quick-view" href="#products" aria-label="Quick view Printed Summer Dress">
                                    <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12Z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>

                    <article class="product-card">
                        <div class="product-media">
                            <span class="badge">Hot</span>
                            <button class="wishlist" type="button" aria-label="Add Kids Casual Set to wishlist">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M19.5 12.6 12 20l-7.5-7.4a5 5 0 0 1 7.1-7.1l.4.4.4-.4a5 5 0 0 1 7.1 7.1Z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="product-info">
                            <div class="rating">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="m12 3 2.8 5.7 6.2.9-4.5 4.4 1.1 6.2L12 17.3l-5.6 2.9 1.1-6.2L3 9.6l6.2-.9L12 3Z"></path>
                                </svg>
                                4.7
                            </div>
                            <h3>Kids Casual Set</h3>
                            <div class="meta">
                                <span>Kids wear</span>
                                <strong class="price">Rs. 999</strong>
                            </div>
                            <div class="product-actions">
                                <button class="add-cart" type="button">Add to Cart</button>
                                <a class="quick-view" href="#products" aria-label="Quick view Kids Casual Set">
                                    <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12Z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>

                    <article class="product-card">
                        <div class="product-media">
                            <span class="badge">Festive</span>
                            <button class="wishlist" type="button" aria-label="Add Elegant Silk Saree to wishlist">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M19.5 12.6 12 20l-7.5-7.4a5 5 0 0 1 7.1-7.1l.4.4.4-.4a5 5 0 0 1 7.1 7.1Z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="product-info">
                            <div class="rating">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="m12 3 2.8 5.7 6.2.9-4.5 4.4 1.1 6.2L12 17.3l-5.6 2.9 1.1-6.2L3 9.6l6.2-.9L12 3Z"></path>
                                </svg>
                                5.0
                            </div>
                            <h3>Elegant Silk Saree</h3>
                            <div class="meta">
                                <span>Women's wear</span>
                                <strong class="price">Rs. 3,499</strong>
                            </div>
                            <div class="product-actions">
                                <button class="add-cart" type="button">Add to Cart</button>
                                <a class="quick-view" href="#products" aria-label="Quick view Elegant Silk Saree">
                                    <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12Z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <section class="benefits" aria-label="Shopping benefits">
                <div class="benefit">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M3 7h11v10H3z"></path>
                        <path d="M14 10h4l3 3v4h-7"></path>
                        <circle cx="7" cy="19" r="2"></circle>
                        <circle cx="17" cy="19" r="2"></circle>
                    </svg>
                    <div>
                        <strong>Fast delivery</strong>
                        <span>Dispatch-ready ecommerce flow.</span>
                    </div>
                </div>
                <div class="benefit">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M3 12a9 9 0 0 1 15.4-6.4L21 8"></path>
                        <path d="M21 3v5h-5"></path>
                        <path d="M21 12a9 9 0 0 1-15.4 6.4L3 16"></path>
                        <path d="M3 21v-5h5"></path>
                    </svg>
                    <div>
                        <strong>Easy returns</strong>
                        <span>Useful for size exchanges.</span>
                    </div>
                </div>
                <div class="benefit">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"></path>
                        <path d="m9 12 2 2 4-4"></path>
                    </svg>
                    <div>
                        <strong>Secure checkout</strong>
                        <span>Ready for payment gateway setup.</span>
                    </div>
                </div>
                <div class="benefit">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M20 7h-9"></path>
                        <path d="M14 17H5"></path>
                        <circle cx="17" cy="17" r="3"></circle>
                        <circle cx="7" cy="7" r="3"></circle>
                    </svg>
                    <div>
                        <strong>Smart filters</strong>
                        <span>Designed for future product filtering.</span>
                    </div>
                </div>
            </section>

            <section class="sale-band" id="sale">
                <div>
                    <p class="eyebrow">Sale preview</p>
                    <h2>Build campaigns for new drops, offers, and festive edits.</h2>
                    <p>
                        This section can later connect to real sale collections from your Laravel product database.
                    </p>
                </div>
                <a class="button light" href="#products">Shop Sale</a>
            </section>

            <section class="newsletter">
                <div>
                    <h2>Never miss a drop.</h2>
                    <p>Capture customer emails for product launches, restock alerts, and seasonal ecommerce campaigns.</p>
                </div>
                <form class="newsletter-form">
                    <input type="email" placeholder="Enter email address" aria-label="Email address">
                    <button class="button" type="submit">Subscribe</button>
                </form>
            </section>
        </main>

        <footer class="site-footer">
            <div class="footer-main">
                <div class="footer-column">
                    <a class="footer-brand" href="/">
                        <span class="brand-mark">BG</span>
                        Biswas Garments
                    </a>
                    <p class="footer-about">
                        A modern fashion ecommerce destination for everyday wear, festive styles,
                        family clothing, and curated wardrobe essentials.
                    </p>
                    <div class="social-links" aria-label="Social links">
                        <a href="#" aria-label="Instagram">
                            <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <rect x="3" y="3" width="18" height="18" rx="5"></rect>
                                <circle cx="12" cy="12" r="4"></circle>
                                <path d="M17.5 6.5h.01"></path>
                            </svg>
                        </a>
                        <a href="#" aria-label="Facebook">
                            <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg>
                        </a>
                        <a href="#" aria-label="YouTube">
                            <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M2.5 12s0-4.5.6-6.1A3 3 0 0 1 5.2 3.8C6.8 3.4 12 3.4 12 3.4s5.2 0 6.8.4a3 3 0 0 1 2.1 2.1c.6 1.6.6 6.1.6 6.1s0 4.5-.6 6.1a3 3 0 0 1-2.1 2.1c-1.6.4-6.8.4-6.8.4s-5.2 0-6.8-.4a3 3 0 0 1-2.1-2.1C2.5 16.5 2.5 12 2.5 12Z"></path>
                                <path d="m10 15 5-3-5-3v6Z"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="footer-column">
                    <h3>Shop</h3>
                    <ul>
                        <li><a href="#new">New Arrivals</a></li>
                        <li><a href="#products">Men's Wear</a></li>
                        <li><a href="#products">Women's Wear</a></li>
                        <li><a href="#products">Kids Collection</a></li>
                        <li><a href="#sale">Sale Offers</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Customer Care</h3>
                    <ul>
                        <li><a href="#">Track Order</a></li>
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Return & Exchange</a></li>
                        <li><a href="#">Size Guide</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Contact</h3>
                    <div class="contact-list">
                        <div class="contact-item">
                            <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 1 1 16 0Z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            Biswas Garments Store, Main Market Road
                        </div>
                        <div class="contact-item">
                            <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 2 .7 2.9a2 2 0 0 1-.4 2.1L8.1 10a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.9.6 2.9.7a2 2 0 0 1 1.6 1.9Z"></path>
                            </svg>
                            +91 98765 43210
                        </div>
                        <div class="contact-item">
                            <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M4 4h16v16H4z"></path>
                                <path d="m22 6-10 7L2 6"></path>
                            </svg>
                            support@biswasgarments.com
                        </div>
                    </div>
                </div>

            </div>

            <div class="footer-bottom">
                <span>&copy; {{ date('Y') }} Biswas Garments. All rights reserved.</span>
                <span>Developed by <span class="developer-credit">Quantynix Solutions</span></span>
            </div>
        </footer>
    </div>
</body>
</html>
