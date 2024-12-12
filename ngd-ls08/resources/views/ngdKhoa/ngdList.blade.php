<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NGD-Danh sach khoa</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="contain border my-3">
        <h1>Danh sach khoa</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ma khoa</th>
                    <th>ten khoa</th>
                    <th>chuc nang</th>
                </tr>
            </thead>
            <tbody>
                @php
                  $stt=0;  
                @endphp
                @foreach ($ngdkhoas as $item)
                @php
                    $stt++;
                @endphp
                    <tr>
                        <td>{{$stt}}</td>
                        <td>{{$item->ngdmak}}</td>
                        <td>{{$item->ngdtenk}}</td>
                        <td>
                            <a href="/khoas/detail/{{$item->ngdmak}}"class="btn btn-success">
                                Chi tiet</a>
                                
                            <a href="/khoas/edit/{{$item->ngdmak}}"class="btn btn-primary">
                                Sua</a>
                            edit / delete
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>