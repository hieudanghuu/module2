<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <table border="1">
<tr>
    <td>ID</td>
    <td>NAME</td>
    <td>PHONE</td>
    <td>EMAIL</td>
    <td>ADDRESS</td>
</tr>
{{-- {{dd($customers)}} --}}
@foreach ($customers as $key => $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->name}}</td>
    <td>{{$item->phone}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->address}}</td>


</tr>
@endforeach
  </table>
</body>
</html>
