<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{BASE}}">Miniframework</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
            <a class="nav-link active" href="{{BASE}}">Home
                <span class="visually-hidden">(current)</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{BASE}}cep/">Categoria</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{BASE}}quem-somos/">Quem Somos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{BASE}}contato/">Contato</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
            </li>
        </ul>
        <form class="d-flex">
            <input class="form-control me-sm-2" type="text" placeholder="Search">
            <button class="btn btn-info my-2 my-sm-0" type="submit">Buscar</button>
        </form>
        </div>
    </div>
    </nav>
</header>