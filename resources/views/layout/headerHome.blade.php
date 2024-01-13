<section class="lg:pb-40 lg:pt-56 py-32" id="home">
    <div class="overflow-hidden">
        <video class="absolute inset-0 h-full w-full object-cover" autoplay muted loop>
            <source src="{{asset('assets/images/video.mp4')}}" type="video/mp4">
            Houve um erro ao reproduzir o video.
        </video>
        <div class="absolute inset-0 w-full h-full bg-gradient-to-r bg-gradient-to-left from-purple-900 opacity-90"></div>
    </div>
    <div class="container">
        <div class="flex justify-center">
            <div class="lg:w-2/3 text-center relative">
                <div class="space-y-5 mb-10">
                    <!-- Home Page Title -->
                    <h1 class="text-white md:text-[32px] lg:text-[46px] leading-[64px] capitalize">
                        Transformamos ideias em realidade.
                    </h1>
                    <p class="text-gray-300/80">Se você sonha em ter um site, uma loja virtual ou um sistema web
                        personalizado, estamos aqui para tornar isso possível. Nossa plataforma é sua aliada,
                        simplificando o processo de criação e proporcionando uma experiência acessível.</p>

                    <a href="{{ route('budget') }}" type="button"
                            class="btn border text-white border-gray-700 hover:bg-blue-700 hover:text-white"
                            aria-expanded="false">
                        Saiba mais
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Wave Animation -->
    <div class="absolute left-0 right-0 bottom-0 m-auto h-[150px] overflow-hidden wave-anim">
        <div class="absolute -bottom-[1px] w-full h-full overflow-hidden z-20 opacity-20">

        </div>
        <div class="absolute -bottom-[1px] w-full h-full overflow-hidden z-10 opacity-40">

        </div>
        <div class="absolute -bottom-[1px] w-full h-full overflow-hidden z-[5]">
            <div class="wave wave-three block dark:hidden"
                 style="background-image: url({{asset('assets/images/wave-shape/wave3.png')}})"></div>
            <div class="wave wave-three hidden dark:block"
                 style="background-image: url({{asset('assets/images/wave-shape/wave2.png')}})"></div>
        </div>
    </div>
</section>
