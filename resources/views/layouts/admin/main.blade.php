<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Gestão Escolar')</title>
    <style>
        :root {
            --navy: #17243a;
            --navy2: #223653;
            --accent: #199b78;
            --bg: #f4f6f9;
            --ink: #243247;
            --muted: #68778c;
            --line: #e4e9f0;
            --white: #fff
        }

        * {
            box-sizing: border-box
        }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--ink);
            font: 15px/1.5 Arial, sans-serif
        }

        a {
            color: inherit;
            text-decoration: none
        }

        .shell {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 250px 1fr;
            grid-template-rows: 64px 1fr 54px;
            grid-template-areas: 'side head''side main''side foot'
        }

        .topbar {
            grid-area: head;
            background: var(--white);
            border-bottom: 1px solid var(--line);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 26px
        }

        .sidebar {
            grid-area: side;
            background: var(--navy);
            color: #eef3fa;
            padding: 20px 14px
        }

        .brand {
            font-size: 18px;
            font-weight: 700;
            padding: 8px 12px 24px
        }

        .nav-label {
            color: #98a8bd;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: .08em;
            padding: 10px 12px 5px
        }

        .nav-link {
            display: block;
            padding: 9px 12px;
            border-radius: 7px;
            color: #dce5f1;
            margin: 2px 0
        }

        .nav-link:hover,
        .nav-link.active {
            background: var(--navy2);
            color: #fff
        }

        .main {
            grid-area: main;
            padding: 28px;
            min-width: 0
        }

        .footer {
            grid-area: foot;
            padding: 15px 26px;
            color: var(--muted);
            font-size: 13px
        }

        .page-heading {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 22px
        }

        .page-heading h1 {
            font-size: 25px;
            margin: 0 0 4px
        }

        .muted {
            color: var(--muted)
        }

        .card {
            background: var(--white);
            border: 1px solid var(--line);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 18px
        }

        .card h2 {
            font-size: 17px;
            margin: 0 0 14px
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(190px, 1fr));
            gap: 16px
        }

        .stat {
            font-size: 26px;
            font-weight: 700;
            margin-top: 8px
        }

        .btn {
            display: inline-block;
            border: 0;
            border-radius: 7px;
            background: var(--accent);
            color: #fff;
            padding: 9px 14px;
            cursor: pointer
        }

        .btn-light {
            background: #eaf5f1;
            color: #14775d
        }

        .table-wrap {
            overflow-x: auto
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background: #fff
        }

        th,
        td {
            text-align: left;
            padding: 11px 12px;
            border-bottom: 1px solid var(--line)
        }

        th {
            font-size: 13px;
            color: var(--muted);
            font-weight: 600
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 15px
        }

        .field label {
            display: block;
            font-weight: 600;
            margin-bottom: 5px
        }

        .field input,
        .field select,
        .field textarea {
            width: 100%;
            border: 1px solid #ccd5e0;
            border-radius: 6px;
            padding: 10px;
            font: inherit;
            background: #fff
        }

        .chart-placeholder {
            height: 210px;
            border: 1px dashed #b7c4d3;
            border-radius: 8px;
            display: grid;
            place-items: center;
            color: var(--muted);
            background: linear-gradient(135deg, #f7fafc, #eef4f7)
        }

        @media(max-width:760px) {
            .shell {
                grid-template-columns: 1fr;
                grid-template-rows: auto auto 1fr auto;
                grid-template-areas: 'head''side''main''foot'
            }

            .sidebar {
                padding: 10px
            }

            .brand {
                padding: 8px
            }

            .main {
                padding: 18px
            }

            .topbar {
                padding: 0 16px
            }
        }
    </style>
    @stack('styles')
</head>

<body>
    <div class="shell">
        @include('layouts._include.dashboard.sidebar')
        @include('layouts._include.dashboard.header')
        <main class="main">
            @yield('content')
        </main>
        @include('layouts._include.dashboard.footer')
    </div>
    @stack('scripts')
</body>

</html>