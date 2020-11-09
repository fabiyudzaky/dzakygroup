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
        <div class="text-left">
            <h1>Form Input Freepik Lisence</h1>
            
            <!-- Jika Salah -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{URL::route('freepik_lisence.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_freepik_lisence">Nama Freepik Lisence</label>
                    <input type="text" class="form-control" name="nama_freepik_lisence">
                </div>
                <div class="form-group">
                    <label for="gambar_freepik_lisence">Gambar Freepik Lisence</label>
                    <div class="form-file">
                        <input type="file" class="form-file-input" name="gambar_freepik_lisence" id="gambar_freepik_lisence">
                        <label class="form-file-label" for="gambar_freepik_lisence">
                            <span class="form-file-text">Choose file...</span>
                            <span class="form-file-button">Browse</span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pdf_freepik_lisence">Pdf Freepik Lisence</label>
                    <div class="form-file">
                        <input type="file" class="form-file-input" name="pdf_freepik_lisence" id="pdf_freepik_lisence">
                        <label class="form-file-label" for="pdf_freepik_lisence">
                            <span class="form-file-text">Choose file...</span>
                            <span class="form-file-button">Browse</span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="attribute_freepik_lisence">Attribute Freepik Lisence</label>
                    <input type="text" class="form-control" name="attribute_freepik_lisence">
                </div>
                <button type="submit" class="btn btn-success">Simpan Data</button>
            </form>
        </div>
    </div>

    <!-- JQuery 3.5.1 -->
    <script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- Bootstrap 5 JavaScript Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
</body>
</html>