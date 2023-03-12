<!-- Start Navbar Area -->
<div class="navbar-area">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="{{ route('index') }}" class="logo">
            <img src="assets/images/logos/logo-1.png" alt="Logo">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="assets/images/logos/logo-1.png" alt="Logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item active">
                            <a href="{{ route('index') }}">Главная</a>
                        </li>
                        <li class="nav-item active">
                            <a href="{{ route('catalog') }}">Каталог</a>
                        </li>
                        <li class="nav-item active">
                            <a href="{{ route('delivery') }}">Заказ и доставка</a>
                        </li>
                    </ul>

                    <div class="nav-right-side">
                        <ul class="nav-right-list">
                            <li><a href="#"><i class='bx bx-repost'></i></a></li>
                            <li><a href="#"><i class='bx bx-heart'></i></a></li>
                            <li class="cart-span">
                                <a href="#"><i class='bx bx-cart'></i></a>
                                <span>1</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="side-nav-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="circle-inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            
            <div class="container">
                <div class="side-nav-inner">
                    <div class="side-nav justify-content-center align-items-center">
                        <div class="side-nav-item">
                            <ul class="nav-right-list">
                                <li><a href="#"><i class='bx bx-repost'></i></a></li>
                                <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                <li class="cart-span">
                                    <a href="#"><i class='bx bx-cart'></i></a>
                                    <span>1</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Navbar Area -->