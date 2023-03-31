<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Hewan Sakit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <style type="text/css">
        .kotak-form {
            width: 900px;
            background: whitesmoke;
            margin: -18px auto;
            padding: 150px 5px;
        }

        .bg-utama {
            background-color: dimgray;
            background-size: cover;
            background-position: center;
        }
    </style>

</head>

<body>
<div class="bg-utama">
    <div class="kotak-form">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h1 class="text-center">Tambah Hewan Sakit</h1>
                <form action="/insertsakit" method="post" enctype="multipart/form-data" class="mt-3 mt-lg-4">
                    @csrf
                    <div class="form-group">
                        <div class="container py-1">
                            <label for="nama_s">Nama Hewan Sakit <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nama_s" id="nama_s" required>
                        </div>
                        <div class="form-group">
                        <div class="container py-1">
                            <label for="usia_s">Usia <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="usia_s" id="usia_s" required>
                        </div>
                        <div class="form-group">
                        <div class="container py-1">
                            <label for="nyakit">Penyakit Hewan <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nyakit" id="nyakit" required>
                        </div>
                            <button class="btn btn-secondary">Simpan</button>

                            <a href="/sakit" class="btn btn-dark">Kembali</a>
                </form>

            </div>

        </div>

    </div>
    </div>
 </div>
</body>

</html>