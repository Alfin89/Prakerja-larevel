<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>trrtrturtyrtrrtrt</h2>
    @for ($i = 1; $i <= 10; $i++)
        @if ($i % 2)
            <h2>Dengan meggunakan modulus akan ditampilkan yang genap</h2>
        @endif
    @endfor
</body>

</html>
