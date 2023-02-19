<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>

<body class="container">
  <a href="{{route('member.create')}}" class="btn btn-outline-primary">登録</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">名前</th>
        <th scope="col">電話</th>
        <th scope="col">メール</th>
        <th scope="col"></th>

      </tr>
    </thead>
    <tbody>
      @foreach($members as $member)
      <tr>
        <th scope="row">{{$member->id}}</th>
        <td>{{$member->name}}</td>
        <td>{{$member->telephone}}</td>
        <td>{{$member->email}}</td>
        <td><a href="{{route('member.show',['id'=>$member->id])}}">編集</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>

</html>