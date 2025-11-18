<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>Laravel MultiLang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">
    <h1>{{ __('messages.welcome') }}</h1>
    <a href="/login">{{ __('messages.login') }}</a>

    <div class="dropdown mt-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
            🌐 {{ strtoupper(app()->getLocale()) }}
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ url('lang/id') }}">🇮🇩 Bahasa Indonesia</a></li>
            <li><a class="dropdown-item" href="{{ url('lang/en') }}">🇬🇧 English</a></li>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
