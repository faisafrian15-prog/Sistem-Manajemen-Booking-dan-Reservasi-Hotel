<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - NIM 96</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm mx-auto" style="max-width: 600px;">
            <div class="card-header bg-primary text-white text-center">
                <h2 class="mb-0">Hubungi Kami</h2>
            </div>
            <div class="card-body">
                <p class="text-muted">Silakan hubungi admin sistem booking hotel:</p>
                
                <ul class="list-group list-group-flush mb-4">
                    <li class="list-group-item">
                        <strong>Nama Admin:</strong> {{ $data['nama'] }}
                    </li>
                    <li class="list-group-item">
                        <strong>Email:</strong> {{ $data['email'] }}
                    </li>
                </ul>

                <hr>
                <div class="text-center">
                    <p class="text-secondary small">Dikreasikan oleh NIM 96 - Politeknik Negeri Batam</p>
                    <a href="/" class="btn btn-outline-primary mt-2">Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>