<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
</head>
<body>
<div class="container mt-5">
    <div class="d-flex justify-content-between mb-2">
        <p><strong>Orders List</strong></p>
        <a class="btn btn-primary" href="{{ url('getpdf?export=pdf') }}">Export to PDF</a>
    </div>

    <table class="table table-bordered mb-5">
        <thead>
        <tr>
            <th scope="col">Border Color</th>
            <th scope="col">Door color</th>
            <th scope="col">Handle color</th>
            <th scope="col">Width</th>
            <th scope="col">Heigth</th>
            <th scope="col">Side</th>
            <th scope="col">Acsesuars</th>
            <th scope="col">Total Price</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $row)
            <tr>
                <td>{{ $row->border_color }}</td>
                <td>{{ $row->door_color }}</td>
                <td>{{ $row->handle_color }}</td>
                <td>{{ $row->width }}</td>
                <td>{{ $row->height }}</td>
                <td>{{ $row->side }}</td>
                <td>{{ $row->acsessuares }}</td>
                <td>{{ $row->total_price }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @foreach($data as $row)
        <div class="row content">
            {!!$row->visualization!!}
            <br>
        </div>
    @endforeach

</div>
</body>
</html>
