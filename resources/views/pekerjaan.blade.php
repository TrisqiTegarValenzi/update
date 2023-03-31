<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Pekerjaan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Data Pekerjaan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Kebun Binatang Trisqi</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="btn btn-outline-danger me-md-2" class="logout" type="submit"><a href="/login">logout</a></button>
        </div>
        <li class="nav-item">
          <a class="nav-link" href="/pekerjaan">Data Pekerjaan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pegawai">Data Pegawai</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/hewan">Data Hewan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/lahir">Data Hewan Melahirkan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/mati">Data Hewan Meninggal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/sakit">Data Hewan Sakit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/wahana">Data Wahana</a>
        </li>

        </ul>

      </div>
    </div>
    </div>
  </nav>
</head>

<body d="bg-edit" style="
                    background-image: url('fotohewan/log.png');
                    background-size: cover;">
  <div class="container py-5" style="margin-top: 50px;">
    <h1 class="text-center">Data Pekerjaan</h1>
    <div class="container py-1 " style="margin-top:20px ;">
      <div class="col-sm-12 pull-right">
        <div class="pull-right">
          @if ($message = Session::get('berhasil'))
          <div class="alert alert-dark" role="alert">
            {{ $message }}
          </div>
          @endif
          <a href="/tambahpekerjaan" type="button" class="btn btn-dark">Tambah Data</a>
          <div class="container py-1 " style="margin-top:20px ;">
            @if ($message = Session::get('success'))
            <div class="alert alert-dark" role="alert">
              {{ $message }}
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
    <div class="container py-1" style="margin-top: 10px;">
      <table class="table table-striped table-hover">
        <thead class="table-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Pekerjaan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php
          $no = 1;
          @endphp
          @foreach ($data as $row)
          <tr>
            <th scope="row">{{ $no++ }}</th>
            <td>{{ $row->kerja }}</td>
            <td>
              -- <a href="/tampilpekerjaan/{{ $row->id }}" class="btn btn-secondary">Edit</a>
              |
              <a href="/deletepekerjaan/{{ $row->id }}" type="button" class="btn btn-dark">Delete</a> --
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

</body>

</html>