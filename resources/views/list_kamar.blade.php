<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Kamar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">Daftar Kamar Hotel</h2>
        <table class="table table-striped table-hover bg-white shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Tipe Kamar</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Deluxe Room</td>
                    <td><span class="badge bg-success">Tersedia</span></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Suite Room</td>
                    <td><span class="badge bg-danger">Terisi</span></td>
                </tr>
            </tbody>
        </table>
        <a href="/dashboard" class="btn btn-secondary">Kembali ke Dashboard</a>
    </div>
</body>
</html>