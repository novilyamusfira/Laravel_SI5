<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="/img/UIN SU.png" style="width: 50px">
    </a>
    <a class="navbar-brand" href="/">UIN Sumatera Utara</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/mahasiswa">Mahasiswa</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="/profile">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">Tentang</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container" style="margin-left: 30px">
    <h1>Halaman Tambah Mahasiswa</h1>

    <div class="row">
        <div class="col-sm-12">
            <h3>Form Tambah Mahasiswa</h3>

            @if ($errors->any())
            <div class="pt-3">
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $item)
                      <li>{{ $item }}</li>
                  @endforeach
                </ul>
              </div>
            </div>
            @endif


            <form action="/mahasiswa" method="POST">
              @csrf
                <div class="row g-3">
                    <div class="col-sm-4">
                        <label>NPM</label>
                        <input type="number" name="npm" class="form-control" placeholder="Input NPM" value="{{ Session::get('npm') }}">
                    </div>

                    <div class="col-sm-4">
                        <label>Nama Mahasiswa</label>
                        <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Input Nama" value="{{Session::get('nama_mahasiswa') }}">
                    </div>

                    <div class="col-sm-4">
                        <label>Jenis Kelamin</label>
                        <select name="jk" class="form-select">
                            <option value="">-- Pilih --</option>
                            <option value="L">L</option>
                            <option value="P">P</option>
                        </select>
                    </div>
                </div>

                <div class="row g-3 mt-1">
                    <div class="col-sm-4">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" value="{{ Session::get('tgl_lahir') }}">
                    </div>

                    <div class="col-sm-5">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Input Alamat" value="{{ Session::get('alamat') }}">
                    </div>

                    <div class="col-sm-3 d-flex align-items-end">
                        <div class="w-100 d-flex gap-2">
                            <button class="btn btn-primary w-50" type="submit">Simpan</button>
                            <a href="/mahasiswa" class="btn btn-secondary w-50">Kembali</a>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script>
let no=1;
$("#simpan").click(function (event) {

    event.preventDefault();

    const nim = $ ("#nim").val();
    const nama = $ ("#nama").val();

    if (nim === "" || nama === "") {
        alert ("form tidak boleh kosong");
        return;

    }
    $("table tbody").append
    (`<tr>
        <td>${no}</td>
        <td>${nim}</td>
        <td>${nama}</td>
        </tr>`);

        no++;
        $("#alert-success").removeClass("d-none");

        setTimeout(() => { $("#alert-success").addClass("d-none"); }, 2000);

        $("#nim").val("");
        $("#nama").val("");

})
</script>

</html>