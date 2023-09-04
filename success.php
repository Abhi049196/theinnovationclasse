<!DOCTYPE html>
<html>
<head>
    <title>Registration Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            color: #1e90ff;
        }

        p {
            margin: 10px 0;
        }

        #timer {
            font-size: 24px;
            font-weight: bold;
            color: #ff6347;
        }
    </style>
    <script>
        // Function to redirect to the index.html page
        function redirectToIndex() {
            // Redirect to the index.html page
            window.location.href = 'print.php';
        }

        // Function to update the countdown timer
        function updateTimer() {
            var timerElement = document.getElementById('timer');
            var count = 5; // Countdown duration in seconds

            var timer = setInterval(function() {
                count--;
                timerElement.textContent = count;

                if (count <= 0) {
                    clearInterval(timer);
                    redirectToIndex();
                }
            }, 1000); // Update the timer every second
        }

        // Call the function to update the timer on page load
        window.onload = updateTimer;
    </script>
</head>
<body>
    <h1>Registration Successful!</h1>
    <p>Thank you for registering.</p>
    <p>Don't press any click You will be redirected to the Print  page in <span id="timer">5</span> seconds.</p>
    <!-- Add additional content if desired -->
</body>
</html>
