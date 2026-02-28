<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    
    <center><h1>Namaste Duniya</h1></center>
    <a href="/home">Home page</a>
    <p id="age"></p>


    <script>
        $age=prompt("Enter your age");
        document.getElementById("age").innerHTML='Your age is: ' + $age;
        console.log($age);
    </script>
</body>
</html>