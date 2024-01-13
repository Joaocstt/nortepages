<section class="bg-gray-900 dark:bg-zinc-900/40" id="contatos">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div class="lg:col-span-3">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="col-span-2">
                        <!-- Logo -->
                        <h1 class="text-lg uppercase text-white font-medium mb-6">Nortepages</h1>

                        <p class="text-gray-400 dark:text-gray-300/60">Aprimoramos continuamente nossos processos,
                            sempre em busca do melhor para você, desenvolvendo soluções de forma dedicada e eficaz.
                        </p>
                    </div>

                    <div>
                        <div class="text-lg text-white font-medium mb-6">Informações</div>
                        <!-- Footer Link -->
                        <ul class="space-y-2 text-sm">
                            <li><a href="{{ route('home') }}" class="text-gray-400 dark:text-gray-300/60 hover:text-gray-300">Página
                                    inicial</a></li>
                            <li><a href="{{ route('about') }}"
                                   class="text-gray-400 dark:text-gray-300/60 hover:text-gray-300">Sobre nós</a></li>
                            <li><a href="{{ route('contact') }}"
                                   class="text-gray-400 dark:text-gray-300/60 hover:text-gray-300">Contato</a></li>
                        </ul>
                    </div>

                    <div>
                        <div class="text-lg text-white font-medium mb-6">Duvidas</div>
                        <!-- Footer Link -->
                        <ul class="space-y-2 text-sm">
                            <li><a href="{{ route('faq') }}" class="text-gray-400 dark:text-gray-300/60 hover:text-gray-300">FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div>
                <div class="text-lg text-white mb-6">Marque sua presença</div>
                <div class="text-gray-400 dark:text-gray-300/60 text-sm mb-5">Fique por dentro de tudo, promoções
                    exclusivas e descontos especiais! Deixe-nos seu e-mail e faça parte da nossa comunidade.
                </div>

                <div class="flex bg-gray-800 rounded-lg items-center dark:bg-zinc-700/30">
                    <!-- Subscribe form -->
                    <input type="email"
                           class="border-0 focus:border-0 focus:ring-0 text-gray-50 bg-transparent w-full dark:placeholder:text-gray-300/50 placeholder:text-sm"
                           placeholder="Email"/>
                    <button type="submit" class="text-xl text-gray-400 dark:text-gray-300/60 px-3">
                        <i class="pe-7s-paper-plane"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="bg-gray-800 dark:bg-zinc-900/60 py-5">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-3 items-center gap-6">
            <div class="col-span-2">
                <div class="text-sm text-gray-400 dark:text-gray-300/60">
                    <script>document.write(new Date().getFullYear()) </script>&copy; Nortepages
                </div>
            </div>

            <div class="ltr:lg:ml-auto rtl:lg:mr-auto">
                <img src="assets/images/payment.png" alt="payment-img" class="h-9">
            </div>
        </div>
    </div>
</footer>
