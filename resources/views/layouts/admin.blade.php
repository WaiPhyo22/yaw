<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yaw Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="/user/list">Yaw Admin</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/admin/towns/list">Towns</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/villages/list">Villages</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/histories/list">Histories</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/festivals/list">Festivals</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/traditions/list">Traditions</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/suggestions/list">Suggestions</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>