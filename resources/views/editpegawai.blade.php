<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Pegawai</title>
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
                        <h1 class="text-center">Edit Pegawai</h1>
                        <form action="/updatepegawai/{{ $data->id }}" method="post" enctype="multipart/form-data" class="mt-3 mt-lg-4">
                            @csrf
                            <div class="form-group">
                                <div class="container py-1">
                                    <label for="nama_p">Nama <span class="text-danger">*</span></label>
                                </div>
                                <input type="text" class="form-control" name="nama_p" id="nama_p" value="{{ $data->nama_p }}" required>
                            </div>
                            <div class="form-group">
                                <div class="container py-1">
                                    <label for="notelp">No.Handphone <span class="text-danger">*</span></label>
                                </div>
                                <input type="number" class="form-control" name="notelp" id="notelp" value="{{ $data->notelp }}" required>
                            </div>
                            <div class="form-group">
                                <div class="container py-1">
                                    <label for="jenis">Jenis Kelamin <span class="text-danger">*</span></label>
                                </div>
                                <div>
                                    <td>
                                        <input type="radio" name="jenis" id="jenis" value="Laki-Laki" <?php echo ($data['jenis'] == 'Laki-Laki') ? 'checked' : '' ?>> Laki-Laki <br>
                                        <input type="radio" name="jenis" id="jenis" value="Perempuan" <?php echo ($data['jenis'] == 'Perempuan') ? 'checked' : '' ?>> Perempuan
                                    </td>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="container py-1">
                                    <label for="id_pekerjaan" class="form-label">Pekerjaan</label>
                                </div>
                                <select name="id_pekerjaan" id="id_pekerjaan" class="form-select">
                                    @foreach($ker as $kerja)
                                        <!-- <option selected>---Pekerjaan---</option> -->
                                    <option value="{{ $kerja->id }}" <?php if ($data->id_pekerjaan == $kerja->id) {
                                    echo 'selected';
                                    } ?>> {{ $kerja->kerja }} </option>
                                    @endforeach

                                    <!-- <option value="{{ $data->id }}" {{ ($data->pekerjaan === $data->id) ? 'selected' : ''}}> {{ $data->pekerjaan->kerja }}</option> -->
                                </select>

                                <button class="btn btn-secondary">Simpan</button>

                                <a href="/pegawai" class="btn btn-dark">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

    </div>
    </div>
</body>

</html>