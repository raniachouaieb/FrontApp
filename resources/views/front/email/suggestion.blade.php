<!DOCTYPE html>
<html>
<head>
    <title>This Email generated by www.codechief.org</title>
</head>
<body>
<h1>De : {{ $user['name'] }}</h1>
<p> Sujet : {{$user['sujet']}}</p>
<p>Suggestion :{{$user['suggestion']}}</p>
<p>Thank you</p>
<br>
{{ config('app.name') }}
</body>
</html>
