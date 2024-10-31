<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.mahasiswa', $score=90)}}">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.dosen', $anyname='Reiner')}}">Dosen</a>
                    </li><li class="nav-item">
                        <a class="nav-link" href="{{route('admin.karyawan')}}"">Karyawan</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</body>
</html>