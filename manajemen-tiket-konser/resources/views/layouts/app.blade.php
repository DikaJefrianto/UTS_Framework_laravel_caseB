<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Manajemen Tiket Konser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS custom untuk styling -->
    <style>
        /* Global styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            color: #333;
        }

        /* Header styling */
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar {
            background-color: #333;
        }

        .navbar a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            display: inline-block;
        }

        .navbar a:hover {
            background-color: #575757;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin-top: 40px;
        }

        /* Tabel Styling */
        .table {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .table thead {
            background-color: #007bff;
            color: white;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .table th, .table td {
            text-align: center;
            padding: 12px;
        }

        .table td {
            vertical-align: middle;
        }

        .btn {
            margin: 5px;
            font-size: 14px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .pagination {
            justify-content: flex-end;
        }

        /* Footer */
        .footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
            margin-top: 40px;
        }

        /* Card for Add/Edit Pemesanan */
        .card {
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .card-header {
            background-color: #4CAF50;
            color: white;
            font-size: 1.25rem;
            padding: 12px 15px;
        }

        .card-body {
            padding: 20px;
        }

        .form-control {
            border-radius: 4px;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .container {
                margin-top: 20px;
            }

            .header h1 {
                font-size: 24px;
            }

            .btn {
                font-size: 12px;
            }

            .navbar {
                text-align: center;
            }

            .navbar a {
                display: block;
                margin-bottom: 10px;
                padding: 10px;
            }

            .footer {
                padding: 10px;
            }

            .table thead th {
                font-size: 14px;
            }

            .table td {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard</a>
            <div class="navbar-nav">
                <a href="{{ route('pemesanans.index') }}" class="nav-link">Daftar Tiket</a>
                <a href="{{ route('pemesanans.trashed') }}" class="nav-link">Riwayat Penghapusan</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <!-- Konten Halaman -->
        @yield('content')
    </div>

    <!-- Bootstrap JS (untuk fitur interaktif seperti modal dan dropdown) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
