<!DOCTYPE html>
<html>

<head>
    <title>Hello World!</title>
</head>

<body>
    <h1>Hello World!</h1>
    <p>
        @if (filled($name))
            {{ $name }}さんこんにちは、現在の時刻は {{ $now->format('Y/m/d H:m:i') }} です。
        @else
            こんにちは、現在の時刻は {{ $now->format('Y/m/d H:m:i') }} です。
        @endif
    </p>
</body>

</html>