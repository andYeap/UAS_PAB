<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Contoh Validasi Form dengan PHP')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f6f9; }
        .card-header { background-color: #fff; font-weight: 600; }
        .is-invalid ~ .invalid-feedback { display: block; }
    </style>
</head>
<body>
    <div class="container py-4" style="max-width: 700px;">
        <div class="card shadow-sm">
            <div class="card-header">
                @yield('title', 'Contoh Validasi Form dengan PHP')
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
