<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <style type="text/css">
        .kotak-form {
            width: 900px;
            background: whitesmoke;
            margin: -18px auto;
            padding: 100px 5px;
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
                <h1 class="text-center">Tambah Pegawai</h1>
                <form action="/insertpegawai" method="post" enctype="multipart/form-data" class="mt-3 mt-lg-4">
                    @csrf
                    <div class="form-group">
                        <div class="container py-1">
                            <label for="nama_p">Nama <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nama_p" id="nama_p" required>
                        </div>
                        <div class="form-group">
                            <div class="container py-1">
                                <label for="notelp">No.Handphone <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="notelp" id="notelp" required>
                            </div>
                            <div class="form-group">
                                <div class="container py-1">
                                    <label for="jenis">Jenis Kelamin <span class="text-danger">*</span></label>
                                </div>
                                <div>
                                    <td>
                                        <input type="radio" name="jenis" id="jenis" value="Laki-Laki"> Laki-Laki <br>
                                        <input type="radio" name="jenis" id="jenis" value="Perempuan"> Perempuan
                                    </td>
                                </div>
                            </div>
                                <div class="form-group">
                                    <div class="container py-1">
                                    <label for="id_pekerjaan" class="form-label">Pekerjaan</label>
                                    <select name="id_pekerjaan" id="id_pekerjaan" class="form-select">
                                        <option selected>---Pekerjaan---</option>

                                        @foreach ($kerja as $data)
                                            <option value="{{ $data->id }}">{{ $data->kerja}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                </div>
                                <button class="btn btn-secondary">Simpan</button>

                                <a href="/pegawai" class="btn btn-dark">Kembali</a>
                </form>

            </div>

        </div>

    </div>
    </div>
    </div>
    
</body>

</html>