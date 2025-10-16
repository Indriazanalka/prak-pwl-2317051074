<nav class="navbar navbar-expand-lg navbar-light navbar-pink" style="background-color: #6f42c1 !important;">
    <div class="container-fluid">
        <a class="navbar-brand fw-semibold text-white" href="/">Apk Ku</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navbarNav" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="/" class="nav-link {{ request()->is('/') ? 'active text-white fw-semibold' : 'text-light' }}">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/user/create" class="nav-link {{ request()->is('user/create') ? 'active text-white fw-semibold' : 'text-light' }}">Create User</a>
                </li>
                <li class="nav-item">
                    <a href="/user" class="nav-link {{ request()->is('user') ? 'active text-white fw-semibold' : 'text-light' }}">User</a>
                </li>
                <li class="nav-item">
                    <a href="/matakuliah" class="nav-link {{ request()->is('matakuliah*') ? 'active text-white fw-semibold' : 'text-light' }}">Mata Kuliah</a>
                </li>
                <li class="nav-item">
                    <a href="/logout" class="nav-link text-light">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>