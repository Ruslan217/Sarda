<header class="header">
    <div class="container d-flex align-items-center justify-content-between">
        <p class="d-flex align-items-center gap-2 mb-0" style="cursor: pointer" wire:click="home">
            <img src="{{ asset('assets/images/icons/arrow-right-icon1.png') }}" width="50" alt="">

            <span class="text-white">HOME</span>
        </p>
        <div class="header__btn">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar" aria-label="Toggle navigation">

                <svg preserveAspectRatio="none" data-bbox="44 64 112 72" viewBox="44 64 112 72"
                     height="24" width="37" xmlns="http://www.w3.org/2000/svg" data-type="shape"
                     role="presentation" aria-hidden="true" aria-label="">
                    <g>
                        <path d="M156 64v6H44v-6h112z"></path>
                        <path d="M156 97v6H44v-6h112z"></path>
                        <path d="M156 130v6H44v-6h112z"></path>
                    </g>
                </svg>

            </button>
            <div
                class="offcanvas offcanvas-end border-0"
                tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel"
                data-bs-scroll="true"
                data-bs-backdrop="false"
            >
                <div class="offcanvas-header position-absolute end-0">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav fs-13">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" wire:click.prevent="home">
                                HOME
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" wire:click.prevent="news">
                                NEWS
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" wire:click.prevent="portfolio">
                                OUR PORTFOLIO
                            </a>
                        </li>

{{--                        @foreach (menu('Menu', '_json')->toArray() as $item)--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" aria-current="page" href="{{ $item['url'] }}">--}}
{{--                                    {{ $item['title'] }}--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        @endforeach--}}

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" wire:click.prevent="leadership">
                                MEET OUR  LEADERSHIP
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" wire:click.prevent="about">
                                ABOUT US
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" wire:click.prevent="contact">
                                CONTACT US
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</header>
