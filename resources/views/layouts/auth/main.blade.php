<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Acesso · Gestão Escolar')</title>
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            background: #f2f5f8;
            font: 15px/1.5 Arial, sans-serif;
            color: #243247;
            display: grid;
            place-items: center
        }

        .auth-wrap {
            width: min(440px, calc(100% - 32px))
        }

        .auth-brand {
            text-align: center;
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 18px
        }

        .auth-card {
            background: #fff;
            padding: 28px;
            border: 1px solid #e1e7ee;
            border-radius: 12px;
            box-shadow: 0 12px 35px #1a2a4012
        }

        .auth-card h1 {
            font-size: 22px;
            margin: 0 0 6px
        }

        .auth-card label {
            display: block;
            font-weight: 600;
            margin: 15px 0 5px
        }

        .auth-card input {
            width: 100%;
            padding: 11px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font: inherit
        }

        .auth-card button {
            width: 100%;
            margin-top: 18px;
            border: 0;
            border-radius: 6px;
            background: #199b78;
            color: #fff;
            padding: 11px;
            font: inherit;
            cursor: pointer
        }

        .auth-card a {
            color: #16785d
        }

        .auth-note {
            color: #68778c;
            font-size: 13px
        }
    </style>@stack('styles')
</head>

<body>
    <div class="auth-wrap">
        <div class="auth-brand">SGE · Gestão Escolar</div>
        <main class="auth-card">@yield('content')</main>
    </div>@stack('scripts')
</body>

</html>