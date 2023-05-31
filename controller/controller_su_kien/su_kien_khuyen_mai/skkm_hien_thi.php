<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/skkm.css">
    <link rel="stylesheet" href="./assets/fullcalendar/lib/main.css">
    <script src="./assets/js/sweetalert2.all.min.js"></script>
    <script src="./assets/fullcalendar/lib/main.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            height: 650,
            events: 'skkm_add.php'
        });

        calendar.render();
    });
    </script>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div id="calendar"></div>
        </div>
    </div>
</body>

</html>