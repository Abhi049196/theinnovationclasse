<!DOCTYPE html>
<html>
<head>
    <title>Success</title>
    <style>
        body {
  font-family: Arial, sans-serif;
  background-color: #f3f3f3;
  margin: 0;
  padding: 0;
}

.container {
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  color: #333;
}

.success-message {
  text-align: center;
  margin-top: 30px;
  padding: 20px;
  background-color: #dff0d8;
  border: 1px solid #d0e9c6;
  color: #3c763d;
  border-radius: 5px;
}

    </style>

<script>
        // Function to redirect to the index.html page
        function redirectToIndex() {
            // Redirect to the index.html page
            window.location.href = 'index.html';
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
    <div class="container">
        <h1>Success!</h1>
        <div class="success-message">
            <p>Your query was successfully submitted. We will contact back as soon as possible. Thank you!</p>
            <p>Don't press any click You will be redirected to the Home  page in <span id="timer">5</span> seconds.</p>
        </div>
    </div>
</body>
</html>
