<div class="navbar-custom" id="navbar">
    <nav>
        <div class="lg:container flex flex-wrap items-center">
            <!-- Main Logo -->
            <a href="{{ route('home') }}" class="flex lg:ml-0 ml-8">
                        <span class="self-center text-xl font-poppins font-bold tracking-widest whitespace-nowrap uppercase text-white">
                            NortePages
                        </span>
            </a>

            <div class="flex items-center lg:order-2 rtl:mr-auto ltr:ml-auto lg:mr-0 mr-8">
                <!-- Navbar Button -->
                <a href="{{ route('budget') }}" class="btn bg-blue-500 text-white rounded-full translate-y-0">
                    Fazer orçamento
                </a>
                <!-- Navbar Collapse Manu Button -->
                <button data-collapse="menu-collapse" type="button" class="inline-flex items-center ml-3 text-sm text-white lg:hidden" aria-controls="menu-collapse" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <i class="mdi mdi-menu text-2xl"></i>
                </button>
            </div>

            <!-- Navbar Manu -->
            <div class="justify-between items-center w-full lg:w-auto lg:flex hidden lg:order-1 ltr:lg:ml-14 rtl:lg:mr-14 rtl:mr-0 ltr:ml-0" id="menu-collapse">
                <ul class="navbar-nav lg:h-auto h-[200px] lg:ml-0 ml-8" id="navbar-navlist">
                    <li>
                        <a data-scroll href="{{ route('home') }}" class="nav-item">Página Inicial</a>
                    </li>
                    <li>
                        <a data-scroll href="{{ route('contact') }}" class="nav-item">Contato</a>
                    </li>
                    <li>
                        <a data-scroll href="{{ route('faq') }}" class="nav-item">Perguntas frequentes</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</div>

<section class="lg:pb-40 lg:pt-56 py-32" id="home">
    <div class="overflow-hidden">
        <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('assets/images/contato.avif') }}"
             alt="build your website image">
        <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-purple-900 to-purple-800 opacity-90"></div>
    </div>
    <div class="container">
        <div class="flex justify-center">
            <div class="lg:w-2/3 text-center relative">
                <div class="space-y-4 mb-10">
                    <!-- Home Page Title -->
                    <h2 class="text-white md:text-[32px] lg:text-[46px] leading-[64px] capitalize">
                        Sobre nós
                    </h2>
                    <p class="text-gray-300/80">Conheça um pouco sobre nós.</p>
                </div>
            </div>
        </div>
    </div>
</section>
