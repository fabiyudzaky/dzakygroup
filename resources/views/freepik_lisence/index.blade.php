<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk Halaman Index Freepik Lisence</title>
    
    <!-- Bootstrap 5 CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1>Form Freepik Lisence</h1>
            <div class="text-right mb-2">
                <a href="{{URL::route('freepik_lisence.create')}}" class="btn btn-success">Tambah Data</a>
            </div>
            <table class="table table-swcondary table-bordered table-striped">
                <thead>
                    <th>Nama</th>
                    <th>Gambar</th>
                    <th>Pdf</th>
                    <th>Attribute</th>
                </thead>
                <tbody>
                    @foreach($freepik_lisence as $key => $value)
                        <tr>
                            <td>{{$value->nama_freepik_lisence}}</td>
                            <td>{{$value->gambar_freepik_lisence}}</td>
                            <td>{{$value->pdf_freepik_lisence}}</td>
                            <td>{{$value->attribute_freepik_lisence}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- JQuery 3.5.1 -->
    <script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- Bootstrap 5 JavaScript Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
</body>
</html>