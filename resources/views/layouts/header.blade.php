<div class="bg-dark">
    <header class="container blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                @auth
                <a class="p-2 text-white text-decoration-none active" href="/dashboard">Dashboard</a>
                @endauth
                <a class="p-2 text-white text-decoration-none active" href="/">Home</a>
                <a class="p-2 text-white text-decoration-none" href="/profile">Profil</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
            @auth
                <a class="btn btn-danger" href="/logout">Logout</a>
            @else
                <a class="blog-header-logo text-white text-decoration-none fs-3" href="/login">ASPIRASI MASYARAKAT</a>
            @endauth
            </div>
        </div>
    </header>
</div>
