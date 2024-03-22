<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data User</title>
</head>
<body>
  <table border="1">
    <tr>
      <th>junlah pengguna</th>
    </tr>
    <tr>
      <td>
        {{$data}}
      </td>
    </tr>
  </table>
  {{-- <tr>
    <th>ID</th>
    <th>username</th>
    <th>Nama</th>
    <th>ID Level Pengguna</th>
  </tr> --}}
  {{-- @foreach ($data as $d )
  <tr>
    <td>{{$data->user_id}}</td>
    <td>{{$data->username}}</td>
    <td>{{$data->nama}}</td>
    <td>{{$data->level_id}}</td>
  </tr>
  @endforeach --}}
</body>
</html>