<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Caculator</h1><br>

<form action="operation" method="post">
    @csrf
<div>
    <input type="text" name="num1"><br><br>
    <input type="text" name="num2"><br><br>
    <input type="submit" value="cong" name="opera">
    <input type="submit" value="tru"  name="opera">
    <input type="submit" value="nhan" name="opera">
    <input type="submit" value="chia" name="opera">
</div>
@if(isset($result))
{{$result}}

@endisset
</form>
</body>
</html>
