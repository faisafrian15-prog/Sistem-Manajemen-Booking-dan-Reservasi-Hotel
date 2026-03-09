<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Booking Hotel 96</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center mt-5">
        <h1>Selamat Datang di Dashboard Hotel</h1>
        <hr>
        <h3>Halaman Praktikum - NIM: 96</h3>
        
        <div class="mt-4">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama Hotel</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hotel96 as $h)
                    <tr>
                        <td>{{ $h->id }}</td>
                        <td>{{ $h->nama_hotel }}</td>
                        <td>{{ $h->alamat }}</td>
                        <td>{{ $h->no_telp }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>