<!doctype html>
<html lang="fr">
<head>
    <title>My Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="allContainer flex h-screen w-screen justify-center items-center text-6xl ">
    <div class="dateAndTimeContainer flex flex-col content-around">
        <div class="timezone">
            <p>Timezones : <span class="font-medium" id="timezone"></span></p>
        </div>
        <div class="date">
            <p>Date : <span class="font-medium" id="date"></span></p>
        </div>
        <div class="time">
            <p>Time : <span class="font-medium" id="time"></span></p>
        </div>
    </div>
</div>
</body>
</html>
