<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }

        input {
            padding: 8px;
            margin: 5px;
        }
    </style>
</head>
<body>

    <h1>Simple Calculator</h1>

    <label for="num1">Enter number 1:</label>
    <input type="number" id="num1">

    <br>

    <label for="num2">Enter number 2:</label>
    <input type="number" id="num2">

    <br>

    <button onClick="calculate()">Calculate</button>

    <br>

    <h2>Result:</h2>
    <div id="result"></div>

    <script>
        function calculate() {
            var num1 = parseFloat(document.getElementById('num1').value);
            var num2 = parseFloat(document.getElementById('num2').value);

            if (!isNaN(num1) && !isNaN(num2)) {
                var result = num1 + num2; // You can change this operation

                document.getElementById('result').innerText = 'Result: ' + result;
            } else {
                document.getElementById('result').innerText = 'Please enter valid numbers';
            }
        }
    </script>

</body>
</html
