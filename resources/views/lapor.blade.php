<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
</head>
<body>
<div class="container">
    <a href="/"><input type="button" value="kembali" class="btn btn-primary" name=""></a>
    <h1>Data Corona</h1>
    <table class="table">
    <thead class="thead-dark">
        <tr>
            <th>provinsi</th>
            <th>positif</th>
            <th>sembuh</th>
            <th>meninggal</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $d)
        <tr>
            <td>{{ $d['attributes']['Provinsi'] }}</td>
            <td>{{ $d['attributes']['Kasus_Posi'] }}</td>
            <td>{{ $d['attributes']['Kasus_Semb'] }}</td>
            <td>{{ $d['attributes']['Kasus_Meni'] }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>