<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/bootstrap.css') }}">
    <title>Covid 19 ichsan</title>
</head>
<body>
    <script type="text/javascript" src="{{ asset('assets/js/popper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <div class="container">
        <table class="table table-bordered table-striped">
        <tr class="bg-primary">
            <td colspan="4" align="center"><h1>DATA SURVEY COVID-19</h1><a href="/"><input type="button" class="btn btn-info" value="kembali"></a></td>
        </tr>
        <tr class="bg-warning">
            <th>no</th>
            <th>nama</th>
            <th>resiko</th>
            <th>data</th>
        </tr>
        @forelse($data as $d)
        <tr>
            <td>{{ $d->id }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->resiko }}</td>
            <td>{{ $d->data }}</td>
            @empty
            <center><td colspan="4" align="center"><h1>TIDAK ADA DATA</h1></td></center>
        </tr>
        @endforelse
        </table>
    </div>
</body>
</html>