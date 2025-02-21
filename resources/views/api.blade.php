<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>BlaBlaBla</h1>
<ol>
    @foreach($data as $item)
        <li>{{ $item['title'] }}</li>
        <div>
            <p> {{ $item['body'] }}</p>
        </div>
    @endforeach
</ol>
</body>
</html>
