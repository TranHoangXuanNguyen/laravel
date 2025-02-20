<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        @csrf
        <label for="num1">1st number:</label>
        <input type="number" id="num1" name="num1" required>
        <br><br>
        <label for="num2">2nd number:</label>
        <input type="number" id="num2" name="num2" required>
        <br><br>
        <button type="submit">Sum</button>
    </form>
    @if(isset($sum))
    <p id="result">Result: {{ $sum }}</p>
    @endif
    <a href="{{route('welcome')}}">home</a>
</body>

</html>