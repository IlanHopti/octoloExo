<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Octolo Exo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>
<body>

<div class="allContainer flex h-screen w-screen justify-center items-center text-6xl bg-sky-900 text-white">
    <div class="dateAndTimeContainer flex flex-col content-around">
        <div class="timezone">
            <p>Timezone : <span class="font-medium" id="timezone"></span></p>
        </div>
        <div class="date">
            <p>Date : <span class="font-medium" id="date"></span></p>
        </div>
        <div class="time">
            <p>Time : <span class="font-medium" id="time"></span></p>
        </div>
    </div>
</div>

<script>

    function updateJson() {
        $.ajax({
            url: 'back.php',
        });
    }

    function displayDate() {
        $.ajax({
            url: 'data.json',
            dataType: 'json',
            success: function (data) {
                var date = data.data.date;
                var time = data.data.time;
                var timezone = data.data.timezone;
                $('#date').html(date);
                $('#time').html(time);
                $('#timezone').html(timezone);
            }
        });
    }

    $(document).ready(function () {
        updateJson();
        displayDate();
        setInterval(function () {
            updateJson();
            displayDate();
        }, 100);
    });

</script>
</body>
</html>
