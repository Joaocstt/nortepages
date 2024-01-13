
<section class="lg:pb-40 lg:pt-56 py-32" id="home">
    <div class="overflow-hidden">
        <img class="absolute inset-0 h-full w-full object-cover" src="assets/images/photo-1516321318423-f06f85e504b3.avif"
             alt="build your website image">
        <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-purple-900 to-purple-800 opacity-90"></div>
    </div>
    <div class="container">
        <div class="flex justify-center">
            <div class="lg:w-2/3 text-center relative">
                <div class="space-y-4 mb-10">
                    <!-- Home Page Title -->
                    <h2 class="text-white md:text-[32px] lg:text-[46px] leading-[64px] capitalize">
                        Solicite seu Orçamento Online
                    </h2>
                    <p class="text-gray-300/80">
                        Descubra a facilidade de obter um orçamento para a construção do seu site. Nossa equipe dedicada está pronta para guiá-lo em cada etapa do processo.
                </div>
            </div>
        </div>
    </div>
</section>

<div class="navbar-custom" id="navbar">
    <nav>
        <div class="lg:container flex flex-wrap items-center">
            <!-- Main Logo -->
            <a href="{{ route('home') }}" class="flex lg:ml-0 ml-8">
                        <span class="self-center sm:text-xl font-poppins font-bold tracking-widest whitespace-nowrap uppercase text-white">
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

<section class="container">
    <div class="sm:px-0">
        <h3 class="text-base font-semibold leading-7 text-gray-900">Facilitamos o processo de orçamento para você.</h3>
        <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500"> Preencha nosso formulário online, enviaremos uma resposta em poucos minutos, entregando todos os detalhes pra você.</p>
    </div>
    @if ($errors->any())
        <div class="flex items-center mt-4 w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
                </svg>
                <span class="sr-only">Error icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{ $errors->first() }}</div>
        </div>
    @endif
    @if(session('success'))
        <div id="toast-success" class="flex items-center mt-4 w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{ session('success') }}</div>
        </div>
    @endif
    <form class="mt-5" action="{{ route('store-budget') }}" name="myForm" id="myForm" method="POST">
        @csrf
        <div id="simple-msg"></div>
        <div class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <input type="text" name="name" value="{{ old('name') }}" id="name" class="border border-gray-300 text-gray-900 text-sm rounded focus:ring-0 focus:border-gray-400 block w-full p-3 dark:bg-zinc-700/20 dark:border-zinc-700/50 dark:placeholder:text-gray-300/50 dark:text-gray-300/50" placeholder="Informe seu nome">

                <input type="email" name="email" value="{{ old('email') }}" class="border border-gray-300 text-gray-900 text-sm rounded focus:ring-0 focus:border-gray-400 block w-full p-3 dark:bg-zinc-700/20 dark:border-zinc-700/50 dark:placeholder:text-gray-300/50 dark:text-gray-300/50" id="email" placeholder="Informe seu e-mail">
            </div>

            <select id="services" name="services" class="border border-gray-300 text-gray-900 text-sm rounded focus:ring-0 focus:border-gray-400 block w-full p-3 dark:bg-zinc-700/20 dark:border-zinc-700/50 dark:placeholder:text-gray-300/50 dark:text-gray-300/50">
                <option value="" class="text-gray-900">Selecione um serviço</option>
                <option value="Web site">Website</option>
                <option value="Sistema Web">Sistema Web</option>
                <option value="Landing Page">Landing Page</option>
                <option value="Loja Virtual">Loja Virtual</option>
                <option value="Cardápio Online">Cardápio Online</option>
            </select>

            <textarea name="content"  class="border border-gray-300 text-gray-900 text-sm rounded focus:ring-0 focus:border-gray-400 block w-full p-3 dark:bg-zinc-700/20 dark:border-zinc-700/50 dark:placeholder:text-gray-300/50 dark:text-gray-300/50" placeholder="O que você está buscando?"  rows="3"></textarea>

            <!-- Form Submit Button -->
            <div class="text-right">
                <input type="submit"  id="submit" name="send" class="btn bg-blue-500 text-white" value="Enviar mensagem">
            </div>

        </div>
    </form>

</section>
