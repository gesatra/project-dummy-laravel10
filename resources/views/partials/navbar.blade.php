<!-- navbar -->
<div class="container-xxl d-flex justify-content-end bg-primary">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Nastrodamus</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ ($title === 'About') ? 'active' : '' }}" href="/about">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ ($title === 'Posts') ? 'active' : '' }}" href="/blog">blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar -->