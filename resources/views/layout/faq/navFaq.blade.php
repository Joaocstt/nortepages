<div class="navbar-custom" id="navbar">
    <nav>
        <div class="lg:container flex flex-wrap items-center">
            <!-- Main Logo -->
            <a href="{{ route('home') }}" class="flex lg:ml-0 ml-5">
                        <span class="self-center text-sm font-poppins font-bold tracking-widest whitespace-nowrap uppercase text-white">
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
                <ul class="navbar-nav lg:h-auto h-[290px] lg:overflow-visible overflow-y-scroll lg:ml-0 ml-8" id="navbar-navlist">
                    <li>
                        <a data-scroll href="{{ route('home') }}" class="nav-item">Página Inicial</a>
                    </li>
                    <li>
                        <a data-scroll href="{{ route('home') }}" class="nav-item">Sobre nós</a>
                    </li>
                    <li>
                        <a data-scroll href="{{ route('contact') }}" class="nav-item">Contato</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</div>
