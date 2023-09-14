<nav class="navbar navbar-expand-lg navbar-light shadow-sm d-flex">
        <div class="container-fluid d-flex justify-content-between">
            <a class="navbar-brand flex-grow-1" href="{{ route('main.index') }}">
                <img src="{{ asset('images/logo_heart-1.png') }}" alt="One-Health Logo" class="mr-2" style="width: 70px">
                <span class="text-orange">Doctors</span><span class="text-orange"> Gonovski</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupport"
                aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto d-flex me-auto">
                    <li class="nav-item {{ Route::currentRouteName() == 'main.index' ? 'active' : '' }} me-3">
                        <a class="nav-link" href="{{ route('main.index') }}">Начало</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'about.index' ? 'active' : '' }} me-3">
                        <a class="nav-link" href="{{ route('about.index') }}">За нас</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'doctors.index' ? 'active' : '' }} me-3">
                        <a class="nav-link" href="{{ route('doctors.index') }}">Доктори</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'blog.index' ? 'active' : '' }} me-3">
                        <a class="nav-link" href="{{ route('blog.index') }}">Блог</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'contact.index' ? 'active' : '' }} me-3">
                        <a class="nav-link" href="{{ route('contact.index') }}">Контакти</a>
                    </li>
                </ul>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container-fluid -->
    </nav>
</div>
