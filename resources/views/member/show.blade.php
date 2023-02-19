<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>

<body class="container">
  <form method="POST" action="{{route('member.edit',['id'=>$member->id])}}">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">名前</label>
      <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp" value="{{$member->name}}">
    </div>
    <div class="mb-3">
      <label for="telephone" class="form-label">電話</label>
      <input name="telephone" type="text" class="form-control" id="telephone" value="{{$member->telephone}}">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">メール</label>
      <input name="email" type="email" class="form-control" id="email" value="{{$member->email}}">
    </div>
    <button type="submit" class="btn btn-primary">編集</button>
  </form>
  <!-- ↓削除機能 -->
  <a href="{{route('member.destroy',['id'=>$member->id])}}" class="btn btn-primary mt-3">削除</a>
  {{dd($member->id)}}
</body>

</html>