<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    @include('partials.navbar')
    <main class="m-4">
        {{$slot}}
    </main>
    @include('partials.footer')
</body>
</html>