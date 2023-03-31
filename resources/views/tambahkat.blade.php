<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    

</head>

<body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                
                <form action="/insertkat" method="post" enctype="multipart/form-data" class="mt-3 mt-lg-4">
                    @csrf
                    <div class="form-group">
                        <div class="container py-1">
                            <label for="nama">Kategori <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nama" id="nama"  required>
                        </div>
                            <button class="btn btn-success">Simpan</button>

                            <a href="/kategori" class="btn btn-primary">Kembali</a>
                </form>

            </div>

        </div>

    </div>
    


</body>

</html>