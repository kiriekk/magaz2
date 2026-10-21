    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <link rel="stylesheet" href="{{ asset('assets/front/css/main.css') }}">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="index.html">Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Главная <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Гитары</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Гитарное оборудование</a>
                </li>
                <li class="nav-item">
                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart-modal">
                    Корзина <span class="badge badge-light">3</span>
                    </button> -->

                <li class="nav-item">
                    <button onclick="getCart('{{ route('cart.show') }}')" type="button" class="btn btn-primary">
                        Корзина <span class="badge badge-light mini-cart-qty">{{ session('cart_qty') ?? 0 }}</span>
                    </button>
                </li>

                </li>
            </ul>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/front/js/main.js') }}"></script>
    <script>
        document.getElementById('cartBtn').addEventListener('click', function() {
            let url = this.getAttribute('data-url');
            getCart(url); // вызываем вашу функцию
        });
    </script>
