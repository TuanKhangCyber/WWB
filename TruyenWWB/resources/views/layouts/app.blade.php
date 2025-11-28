{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'TruyenWWB' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">

    {{-- CSS chung --}}
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        {{-- CSS riêng cho product / truyện --}}
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    @stack('styles')
</head>

<body>
<div class="page-overlay"></div>

{{-- HEADER --}}
@include('components.navbar')

<main class="main-content">
    @yield('content')
</main>

{{-- FOOTER --}}
@include('components.footer')

</body>
</html>
