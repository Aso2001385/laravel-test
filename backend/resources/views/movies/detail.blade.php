<html>
  <head>
    <title>HelloWorld</title>
  </head>
  <body>
    <table border="4">
      <tr>
        <th>id</th>
        <th>タイトル</th>
        <th>画像リンク</th>
        <th>編集</th>
      </tr>
      @foreach ($movies as $movie)
        <tr>
          <td>{{ $movie->id }}</td>  
          <td>{{ $movie->title }}</td>  
          <td><a href="{{ $movie->image_url }}"> 画像リンク{{ $movie->id }} </td>  
          <td><a href="detail.blade.php?id={{ $movie->id }}"> 詳細 </td>
        </tr>
      @endforeach
    </table>
  </body>
</html>