<html>
  <head>
    <title>DataStation</title>
  </head>
  <body>
      @foreach ($datas as $data)
      <h2><a href="/TableStation/detail?table={{ $data['table'] }}">{{ $data['table'] }} [{{ $data['cnt'] }}]</a></h2>
        <table border="4">
            <tr>
                @foreach ($data['coulmn'] as $coulmn)
                    <th>{{ $coulmn }}</th>
                @endforeach
            </tr>
            
            @foreach ($data['items'] as $items)
            <tr>
                @foreach ($data['coulmn'] as $coulmn)
                    <td>{{ $items->$coulmn }}</td>
                @endforeach
            </tr>
            @endforeach
        </table>
      @endforeach
  </body>
</html>