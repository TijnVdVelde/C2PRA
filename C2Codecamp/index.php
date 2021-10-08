<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>
<body>    
    <?php include_once('header.php'); ?>

    <main>
        <div class="wrapper">
            <h1 class="title-page">Home</h1>


            <div class="info-index-page">
                <div class="contact-info">
                    <h2>Contact gegevens</h2>
                    <p>John Doe</p>
                    <p>06-123456</p>
                    <a class="mail-link" href="mailto:john.doe@hotmail.com">john.doe@hotmail.com</a>
                </div>


                <div class="datum-tijd">
                    <h2>Datum & Tijd</h2> 
                    
                    <div id="time"> </div>

                    <!-- https://stackoverflow.com/questions/5091888/how-to-update-time-regularly -->
                    <script language="javascript">
                        function updateClock() {
                            var now = new Date(), 
                                months = ['januari', 'february', 'maart', 'april', 'mei', 'juni', 'juli', 'autgustus', 'september', 'oktober', 'november', 'december'];
                                time = now.getHours() + ':' + now.getMinutes(),

                                date = [now.getDate(), 
                                        months[now.getMonth()],
                                        now.getFullYear()].join(' ');

                            document.getElementById('time').innerHTML = [date, time].join(' / ');

                            setTimeout(updateClock, 1000);
                        }
                        updateClock();
                    </script>
                </div>
            </div>
        </div>
    </main>
</body>
</html>