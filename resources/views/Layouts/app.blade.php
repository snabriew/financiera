<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinanzasArgy - @yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .sidebar {
            height: 100vh;
            background-color: #f8f9fa;
        }
        .sidebar .nav-link {
            color: #333;
        }
        .sidebar .nav-link:hover {
            background-color: #e9ecef;
        }
        .card-custom {
            background-color: #e2e8f0;
            border: none;
        }
        .btn-custom {
            background-color: #e2e8f0;
            border: none;
            color: #333;
        }
        .logout-btn {
            position: relative;
        }
        .logout-btn::after {
            content: "\F62A";
            font-family: "bootstrap-icons";
            position: absolute;
            top: 50%;
            right: -15px;
            transform: translateY(-50%);
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="position-sticky pt-3">
                    <h3 class="px-3 mb-3">FinanzasArgy</h3>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#prestamosSubmenu">
                                <i class="bi bi-cash me-2"></i>
                                Préstamos
                                <i class="bi bi-chevron-down float-end"></i>
                            </a>
                            <ul class="collapse nav flex-column ms-3" id="prestamosSubmenu">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Nuevo préstamo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Gestionar préstamos</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#clientesSubmenu">
                                <i class="bi bi-people me-2"></i>
                                Clientes
                                <i class="bi bi-chevron-down float-end"></i>
                            </a>
                            <ul class="collapse nav flex-column ms-3" id="clientesSubmenu">
                                <li class="nav-item">
                                    <a class="nav-link" href="/crear">Nuevo cliente</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Gestionar clientes</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#reportesSubmenu">
                                <i class="bi bi-file-earmark-text me-2"></i>
                                Reportes
                                <i class="bi bi-chevron-down float-end"></i>
                            </a>
                            <ul class="collapse nav flex-column ms-3" id="reportesSubmenu">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Generar reporte</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Ver reportes</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                    <h1 class="h2">@yield('header', 'Dashboard')</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <form action="" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-outline-secondary logout-btn">
                                    <i class="bi bi-person"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
