

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
                        Contate-nos
                    </h2>
                    <p class="text-gray-300/80">
                        Estamos aqui para ajudar! Se você tiver dúvidas sobre como operamos ou se está se perguntando como iniciar a construção do seu site, não hesite em entrar em contato. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 ">
            <div class="lg:col-span-2">
                @if ($errors->any())
                        <div class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
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
                        <div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
                            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                <span class="sr-only">Check icon</span>
                            </div>
                            <div class="ms-3 text-sm font-normal">{{ session('success') }}</div>
                        </div>
                @endif
                <!-- Contact Form -->
                <form action="{{ route('store') }}" name="myForm" id="myForm" method="POST">
                    @csrf
                    <p id="error-msg"></p>
                    <div id="simple-msg"></div>
                    <div class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Name Input -->
                            <input type="text" name="name" value="{{ old('name') }}" id="name" class="border border-gray-300 text-gray-900 text-sm rounded focus:ring-0 focus:border-gray-400 block w-full p-3 dark:bg-zinc-700/20 dark:border-zinc-700/50 dark:placeholder:text-gray-300/50 dark:text-gray-300/50" placeholder="Informe seu nome">

                            <!-- Email ID Input -->
                            <input type="email" name="email" value="{{ old('email') }}" class="border border-gray-300 text-gray-900 text-sm rounded focus:ring-0 focus:border-gray-400 block w-full p-3 dark:bg-zinc-700/20 dark:border-zinc-700/50 dark:placeholder:text-gray-300/50 dark:text-gray-300/50" id="email" placeholder="Informe seu e-mail">
                        </div>

                        <!-- Subject Input -->
                        <input type="text" name="subject" value="{{ old('subject') }}" class="border border-gray-300 text-gray-900 text-sm rounded focus:ring-0 focus:border-gray-400 block w-full p-3 dark:bg-zinc-700/20 dark:border-zinc-700/50 dark:placeholder:text-gray-300/50 dark:text-gray-300/50" id="subject" placeholder="Informe o assunto">


                        <!-- Telephone Input -->
                        <input type="text" name="telephone" value="{{ old('telephone') }}" class="border border-gray-300 text-gray-900 text-sm rounded focus:ring-0 focus:border-gray-400 block w-full p-3 dark:bg-zinc-700/20 dark:border-zinc-700/50 dark:placeholder:text-gray-300/50 dark:text-gray-300/50" id="telephone" placeholder="(99)99999-9999">

                        <!-- Maessage Textarea Input -->
                        <textarea name="content"  class="border border-gray-300 text-gray-900 text-sm rounded focus:ring-0 focus:border-gray-400 block w-full p-3 dark:bg-zinc-700/20 dark:border-zinc-700/50 dark:placeholder:text-gray-300/50 dark:text-gray-300/50" placeholder="Digite aqui sua mensagem"  rows="3"></textarea>

                        <!-- Form Submit Button -->
                        <div class="text-right">
                            <input type="submit"  id="submit" name="send" class="btn bg-blue-500 text-white" value="Enviar mensagem">
                        </div>

                    </div>
                </form>
                <!--end form-->
            </div>
        </div>
    </div>
</section>
