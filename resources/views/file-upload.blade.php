<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/dist/css/bootstrap.min.css')}}">
    <title>Fle upload</title>
</head>

<body>
    <div class="container mt-3">
        <h2>File Upload</h2>
        <hr>
        <form action="{{url('/file-upload')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="berkas">Gambar Profile</label>
                <input type="file" name="berkas" id="berkas" class="form-control-file">
                @error('berkas')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary my-2">Upload</button>
        </form>
    </div>
</body>

</html>