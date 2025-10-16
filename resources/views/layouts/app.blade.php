<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel User Dashboard' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            background-color: #f4f6fb;
            color: #1e1e1e;
            font-family: 'Poppins', sans-serif;
        }

        /* Navbar */
        .navbar {
            background-color: #102a63 !important;
            padding: 1.2rem 0;
            border-bottom: 3px solid #0a192f;
        }
        .navbar-brand {
            color: #ffffff !important;
            font-weight: 600;
            font-size: 1.3rem;
        }
        .nav-link {
            color: #f8f9fa !important;
            margin-right: 18px;
            position: relative;
            font-size: 1rem;
        }
        .nav-link:hover,
        .nav-link.active {
            color: #ffffff !important;
        }
        .nav-link.active::after {
            content: "";
            position: absolute;
            bottom: -6px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #ffffff;
        }

        /* Card & Form */
        .card {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            border: none;
        }

        /* Center the form vertically */
        .center-container {
            min-height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Buttons */
        .btn-primary {
            background-color: #102a63;
            border: none;
            padding: 0.6rem 2rem;
            font-weight: 500;
        }
        .btn-primary:hover {
            background-color: #0d1b3d;
        }

        /* Table */
        table {
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
        }
        thead {
            background-color: #102a63 !important;
            color: white;
        }
        tbody tr:hover {
            background-color: #f0f4ff;
            transition: 0.3s;
        }

        /* Footer */
        footer {
            background-color: #102a63 !important;
            color: #f8f9fa;
            padding: 1.2rem 0;
            font-size: 0.9rem;
            border-top: 3px solid #0a192f;
        }

        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }
        main {
            animation: fadeIn 0.6s ease-in-out;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    @include('components.navbar')

    <main class="flex-grow-1 py-4 container">
        @yield('content')
    </main>

    @include('components.footer')

    <script>
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session("success") }}',
                showConfirmButton: false,
                timer: 2000
            });
        @endif

        @if(session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: '{{ session("error") }}',
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>
</body>
</html>