<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data kategori</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  
</head>

<body>
  <div class="container py-5" style="margin-top: 50px;">
    
    <div class="container py-1 " style="margin-top:20px ;">
      <div class="col-sm-12 pull-right">
        <div class="pull-right">
          @if ($message = Session::get('berhasil'))
          <div class="alert alert-success" role="alert">
            {{ $message }}
          </div>
          @endif
          <a href="/tambahkat" type="button" class="btn btn-primary">Tambah Data</a>
          <div class="container py-1 " style="margin-top:20px ;">
            @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
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
            <th scope="col">Kategori</th>
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
            <td>{{ $row->nama }}</td>
            <td>
              -- <a href="/tampilkat/{{ $row->id }}" class="btn btn-success">Edit</a>
              |
              <a href="/deletekat/{{ $row->id }}" type="button" class="btn btn-danger">Delete</a> --
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

</body>

</html>