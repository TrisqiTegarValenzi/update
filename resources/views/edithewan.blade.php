<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Hewan</title>
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
                <h1 class="text-center">Edit Hewan</h1>
                <form action="/updatehewan/{{ $data->id }}" method="post" enctype="multipart/form-data" class="mt-3 mt-lg-4">
                    @csrf   
                    <div class="form-group">
                        <div class="container py-1">
                            <label for="nama_h">Nama Hewan <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nama_h" id="nama_h" value="{{ $data->nama_h }}" required>
                        </div>
                        <div class="form-group">
                            <div class="container py-1">
                                <label for="jenis_h">Jenis Kelamin <span class="text-danger">*</span></label>
                            </div>
                            <div>
                                <td>
                                    <input type="radio" name="jenis" id="jenis" value="jantan" <?php echo ($data['jenis'] == 'jantan') ? 'checked' : '' ?>> Jantan <br>
                                    <input type="radio" name="jenis" id="jenis" value="betina" <?php echo ($data['jenis'] == 'betina') ? 'checked' : '' ?>> Betina
                                </td>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="container py-1">
                                <label for="usia_h">Usia <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="usia_h" id="usia_h" value="{{ $data->usia_h}}" required>
                            </div>
                            <div class="form-group">
                                <div class="container py-1">

                                    <label for="jenis_h">Jenis</label>
                                

                                <select name="jenis_h" id="jenis_h" class="form-select">
                                    <option value="Mamalia" <?php echo ($data['jenis_h'] == 'Mamalia') ? 'selected="selected"' : '' ?>>Mamalia</option>
                                    <option value="Ikan" <?php echo ($data['jenis_h'] == 'Ikan') ? 'selected="selected"' : '' ?>>Ikan</option>
                                    <option value="Amfibi" <?php echo ($data['jenis_h'] == 'Amfibi') ? 'selected="selected"' : '' ?>>Amfibi</option>
                                    <option value="Reptil" <?php echo ($data['jenis_h'] == 'Reptil') ? 'selected="selected"' : '' ?>>Reptil</option>
                                    <option value="Burung" <?php echo ($data['jenis_h'] == 'Burung') ? 'selected="selected"' : '' ?>>Burung</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="container py-1">
                                    <label for="pawang">Pawang Hewan <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="pawang" id="pawang" value="{{ $data->pawang }}" required>
                                </div>
                                <div class="form-group">
                                    <div class="container py-1">
                                        <label for="gambar">Gambar <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control" name="gambar" id="gambar" value="{{ $data->gambar }}">
                                        <img src="{{asset('fotohewan/'. $data->gambar) }}" style="width: 150px;" alt="...">
                                    </div>
                                    <button class="btn btn-secondary">Simpan</button>

                                    <a href="/hewan" class="btn btn-dark">Kembali</a>
                </form>

            </div>

        </div>

    </div>
    </div>
</div>

</body>

</html>