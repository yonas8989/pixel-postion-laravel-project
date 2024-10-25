<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pixel-project</title>
    @vite(["resources/js/app.js"])
</head>
<body>
    <div>
        <nav>
            <div>
                <a href="">
                    <img src="{{Vite::asset("resources/images/logo.jpg")}}" alt="">
                </a>
            </div>
            <div> </div>
            <div>profile</div>
        </nav>
    </div>
    <main>
        {{ $slot }}
    </main>
</body>
</html>
