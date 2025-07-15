<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>
    @vite("resources/css/app.css")
</head>
<body class="text-center px-8 py-12">
    <h1>welcome to Ninja network</h1>
    <p>Click the button below to see list of ninjas</p>

    <a href = "/ninjas" class ="btn mt-4 inline-block">
        Find ninjas
    </a>
</body>
</html>