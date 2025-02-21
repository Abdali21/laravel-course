<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>social network || {{$title ?? ""}}</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body>
    @include('partials.navbar')
    @include("partials.flashbag")
    <main class="m-4">
        {{$slot}}
    </main>
    @include('partials.footer')
    <script src="/dropdown.js"></script>
</body>
</html>