<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Halaman Tabel Mahasiswa</h1>
 <table class="table table-sm table-dark table-hover table-striped">
 <thead>
        <tr>
            <th>NPM</th>
            <th>Nama Mahasiswa</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 0; $i < $jumlah; $i++)
        <tr>
            <td>{{ $npm [$i] }}</td>
            <td>{{ $nama_mahasiswa [$i] }}</td>
            <td>{{ $jk [$i] }}</td>
            <td>9 April 2003</td>
            <td>{{ $alamat [$i] }}</td>
        </tr>
        @endfor
       
        <!-- {<tr>
            <td>2109020036</td>
            <td>Surya</td>
            <td>Laki-Laki</td>
            <td>9 April 2003</td>
            <td>Kisaran</td>
        </tr>
        <tr>
            <td>2109020036</td>
            <td>Darma</td>
            <td>Laki-Laki</td>
            <td>9 April 2003</td>
            <td>Kisaran</td>
        </tr> -->
    </tbody>
 </table>
    

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

