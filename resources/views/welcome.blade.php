<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KialaCasa</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"
        integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxAppearance

</head>

<body>
    <header
        class="relative bg-[url('https://images.pexels.com/photos/1134176/pexels-photo-1134176.jpeg')] bg-cover bg-center min-h-screen">
        <div class="absolute inset-0 bg-black/50"> </div>
        <nav class="mx-auto px-4 relative">
            <div class="container mx-auto px-4">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center gap-2">
                        <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M4 4a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2v14a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2V5a1 1 0 0 1-1-1Zm5 2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-1Zm-5 4a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Zm-3 4a2 2 0 0 0-2 2v3h2v-3h2v3h2v-3a2 2 0 0 0-2-2h-2Z"
                                clip-rule="evenodd" />
                        </svg>

                        <span class="text-xl font-bold text-white"> Kiala<b class=" text-blue-600">Casa</b> </span>
                    </div>
                    <div class="flex items-center gap-4">

                        <flux:modal.trigger name="edit-profile">
                            <flux:button> Login do parceiro</flux:button>
                        </flux:modal.trigger>
                    </div>
                </div>
            </div>
        </nav>
        <flux:modal name="edit-profile" variant="flyout">
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg">Log in to your account</flux:heading>
                    <flux:text class="mt-2">Make changes to your personal details.</flux:text>
                </div>
                <x-auth-session-status class="text-center" :status="session('status')" />

                <form wire:submit="login" class="flex flex-col gap-6">
                    <!-- Email Address -->
                    <flux:input wire:model="email" :label="__('Email address')" type="email" required autofocus
                        autocomplete="email" placeholder="email@example.com" />

                    <!-- Password -->
                    <div class="relative">
                        <flux:input wire:model="password" :label="__('Password')" type="password" required
                            autocomplete="current-password" :placeholder="__('Password')" />

                        @if (Route::has('password.request'))
                            <flux:link class="absolute end-0 top-0 text-sm" :href="route('password.request')"
                                wire:navigate>
                                {{ __('Forgot your password?') }}
                            </flux:link>
                        @endif
                    </div>

                    <!-- Remember Me -->
                    <flux:checkbox wire:model="remember" :label="__('Remember me')" />

                    <div class="flex items-center justify-end">
                        <flux:button variant="primary" type="submit" class="w-full">{{ __('Log in') }}</flux:button>
                    </div>
                </form>
            </div>
        </flux:modal>
        <div class="container mx-auto px-4 py-24 relative">

            <div class="max-w-3xl text-gray-100 z-10 relative">
                <h1 class="text-5xl font-bold tracking-tight mb-6">
                    Expanda o seu negócio de hotelaria em Angola
                </h1>
                <p class="text-xl opacity-90 mb-8 text-gray-300">
                    Junte-se à principal plataforma de reservas de Angola. Liste os seus hotéis, locais e espaços para
                    eventos no KialaCasa e
                    conectar com clientes em todo o país.
                </p>
                <div class="flex gap-4">
                    <Button size="lg" variant="default"
                        class="inline-flex text-white items-center justify-center whitespace-nowrap text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 bg-blue-600 text-blue-600-foreground shadow hover:bg-blue-600/90 h-10 rounded-md w-auto px-4 sm:px-8 gap-2">
                        Torne-se um parceiro
                        <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>

                    </Button>
                    <Button size="lg" variant="default"
                        class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 border shadow-sm hover:text-accent-foreground h-10 rounded-md px-8 gap-2 bg-white/10 hover:bg-white/20 border-white/50">
                        Saber mais
                    </Button>
                </div>
            </div>
        </div>
    </header>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-16">Enumere qualquer tipo de espaço</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="relative rounded-lg overflow-hidden group">
                    <img src="https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg" alt="Hotel Room"
                        class="w-full h-64 object-cover group-hover:scale-110 transition duration-300" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-6">
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-2">Hotéis e alojamento</h3>
                            <p class="text-white/80 text-sm">Hotéis, pensões e alojamento boutique</p>
                        </div>
                    </div>
                </div>
                <div class="relative rounded-lg overflow-hidden group">
                    <img src="https://images.pexels.com/photos/2774556/pexels-photo-2774556.jpeg" alt="Event Space"
                        class="w-full h-64 object-cover group-hover:scale-110 transition duration-300" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-6">
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-2">Locais de eventos</h3>
                            <p class="text-white/80 text-sm">Salas de espetáculos, centros de conferências e espaços
                                para eventos
                            </p>
                        </div>
                    </div>
                </div>
                <div class="relative rounded-lg overflow-hidden group">
                    <img src="https://images.pexels.com/photos/1181406/pexels-photo-1181406.jpeg" alt="Meeting Room"
                        class="w-full h-64 object-cover group-hover:scale-110 transition duration-300" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-6">
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-2">Espaços Empresariais</h3>
                            <p class="text-white/80 text-sm">Salas de reunião, espaços de coworking e escritórios</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-16">Por que se tornar nosso parceiro?</h2>
            <div class="grid md:grid-cols-3 gap-8">

                <div
                    class="rounded-2xl bg-white text-gray-800 shadow-lg border hover:border-blue-600 transition-colors p-6">
                    <div class="mb-4">
                        <Users class="w-10 h-10 text-blue-600" />
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Mercado em Expansão</h3>
                    <p class="text-gray-600">
                        Alcance milhares de clientes em Angola que procuram espaços de qualidade.
                    </p>
                </div>

                <div
                    class="rounded-2xl bg-white text-gray-800 shadow-lg border hover:border-blue-600 transition-colors p-6">
                    <div class="mb-4">
                        <Shield class="w-10 h-10 text-blue-600" />
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Plataforma Segura</h3>
                    <p class="text-gray-600">
                        Sistema de reservas confiável com pagamentos seguros em Kwanza.
                    </p>
                </div>

                <div
                    class="rounded-2xl bg-white text-gray-800 shadow-lg border hover:border-blue-600 transition-colors p-6">
                    <div class="mb-4">
                        <Star class="w-10 h-10 text-blue-600" />
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Fortaleça sua Marca</h3>
                    <p class="text-gray-600">
                        Destaque o seu espaço e construa sua reputação com avaliações verificadas.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-16">
                Tudo o que você precisa para ter sucesso
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

                <div class="flex flex-col items-center text-center p-4 hover:bg-gray-50 rounded-xl transition">
                    <svg class="w-12 h-12 text-blue-600 mb-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z"
                            clip-rule="evenodd" />
                    </svg>
                    <h3 class="text-lg font-semibold mb-2">Anúncios Rápidos</h3>
                    <p class="text-gray-600">Crie anúncios atrativos em minutos com nossas ferramentas fáceis de usar.
                    </p>
                </div>

                <div class="flex flex-col items-center text-center p-4 hover:bg-gray-50 rounded-xl transition">
                    <svg class="w-12 h-12 text-blue-600 mb-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                            clip-rule="evenodd" />
                    </svg>
                    <h3 class="text-lg font-semibold mb-2">Calendário Inteligente</h3>
                    <p class="text-gray-600">Gerencie reservas e disponibilidade com nosso calendário intuitivo.</p>
                </div>

                <div class="flex flex-col items-center text-center p-4 hover:bg-gray-50 rounded-xl transition">
                    <svg class="w-12 h-12 text-blue-600 mb-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M3 6a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-6.616l-2.88 2.592C8.537 20.461 7 19.776 7 18.477V17H5a2 2 0 0 1-2-2V6Zm4 2a1 1 0 0 0 0 2h5a1 1 0 1 0 0-2H7Zm8 0a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2h-2Zm-8 3a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2H7Zm5 0a1 1 0 1 0 0 2h5a1 1 0 1 0 0-2h-5Z"
                            clip-rule="evenodd" />
                    </svg>
                    <h3 class="text-lg font-semibold mb-2">Suporte Local</h3>
                    <p class="text-gray-600">Conte com nossa equipe de suporte em Luanda, disponível em português.</p>
                </div>

                <div class="flex flex-col items-center text-center p-4 hover:bg-gray-50 rounded-xl transition">
                    <svg class="w-12 h-12 text-blue-600 mb-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M4 4a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2v14a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2V5a1 1 0 0 1-1-1Zm5 2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-1Zm-5 4a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Zm-3 4a2 2 0 0 0-2 2v3h2v-3h2v3h2v-3a2 2 0 0 0-2-2h-2Z"
                            clip-rule="evenodd" />
                    </svg>
                    <h3 class="text-lg font-semibold mb-2">Ferramentas Profissionais</h3>
                    <p class="text-gray-600">Acesse relatórios e dados úteis para impulsionar seu negócio.</p>
                </div>

            </div>
        </div>
    </section>



    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl text-gray-600  font-bold mb-6">Baixe o aplicativo KialaCasa</h2>
                    <p class="text-xl text-gray-600 mb-8">
                        Gerencie suas propriedades de qualquer lugar com nosso aplicativo móvel. Disponível para iOS e
                        Android.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <Button size="lg" variant="default"
                            class="inline-flex text-white items-center justify-center whitespace-nowrap text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 bg-blue-600 text-blue-600-foreground shadow hover:bg-blue-600/90 h-10 rounded-md w-auto px-4 sm:px-8 gap-2">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/App_Store_%28iOS%29.svg/2048px-App_Store_%28iOS%29.svg.png"
                                class="w-4 h-4" alt="">
                            Baixar na App Store
                        </Button>
                        <Button size="lg" variant="default"
                            class="inline-flex text-white items-center justify-center whitespace-nowrap text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 bg-blue-600 text-blue-600-foreground shadow hover:bg-blue-600/90 h-10 rounded-md w-auto px-4 sm:px-8 gap-2">
                            <img src="https://freelogopng.com/images/all_img/1664285914google-play-logo-png.png"
                                class="w-4 h-4" alt="">
                            Disponível no Play Store
                        </Button>
                    </div>
                    <div class="mt-8 grid grid-cols-2 gap-6">
                        <div class="flex items-center gap-3">
                            <svg class="w-8 h-8 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16v-4m0 0l4 4m-4-4l-4 4m8-4h8m-8 0V4" />
                            </svg>
                            <div>
                                <p class="font-semibold text-gray-600">100K+</p>
                                <p class="text-sm text-gray-600">Downloads</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-8 h-8 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                            </svg>
                            <div>
                                <p class="font-semibold text-gray-600">4.8/5</p>
                                <p class="text-sm text-gray-600">Avaliação dos usuários</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="rounded-3xl p-8">
                        <img src="https://static.vecteezy.com/system/resources/thumbnails/008/520/928/small_2x/hand-holding-smartphone-with-screen-mockup-png.png"
                            alt="Aplicativo KialaCasa" class="" />
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-white p-4 rounded-2xl shadow-xl">
                        <svg class="w-12 h-12 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 2h10a2 2 0 012 2v16a2 2 0 01-2 2H7a2 2 0 01-2-2V4a2 2 0 012-2z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl text-gray-600 font-bold text-center mb-16">O que nossos parceiros dizem</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Maria Silva"
                            class="w-14 h-14 rounded-full object-cover">
                        <div>
                            <p class="font-semibold">Maria Silva</p>
                            <p class="text-sm text-gray-500">Gerente de Hotel</p>
                            <div class="flex mt-1 text-yellow-400">
                                ⭐⭐⭐⭐⭐
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"KialaCasa transformou a forma como gerenciamos nossas reservas. O suporte
                        é
                        excepcional!"</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="João Santos"
                            class="w-14 h-14 rounded-full object-cover">
                        <div>
                            <p class="font-semibold">João Santos</p>
                            <p class="text-sm text-gray-500">Proprietário de Espaço</p>
                            <div class="flex mt-1 text-yellow-400">
                                ⭐⭐⭐⭐☆
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"A plataforma é fácil de usar e nos ajudou a aumentar nossa visibilidade."
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="https://randomuser.me/api/portraits/women/22.jpg" alt="Ana Pereira"
                            class="w-14 h-14 rounded-full object-cover">
                        <div>
                            <p class="font-semibold">Ana Pereira</p>
                            <p class="text-sm text-gray-500">Empresária</p>
                            <div class="flex mt-1 text-yellow-400">
                                ⭐⭐⭐⭐⭐
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"Recomendo KialaCasa a todos os meus colegas. É uma ótima oportunidade de
                        negócio!"</p>
                </div>
            </div>
        </div>
    </section>



    <section class="py-20 bg-blue-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Junte-se à plataforma de reservas líder de Angola</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Comece hoje mesmo a expandir o seu negócio com a KialaCasa. O nosso processo simples de integração
                deixá-lo-á pronto e a funcionar em poucos minutos.
            </p>
            <Button size="lg" variant="secondary"
                class="inline-flex text-blue-600 items-center justify-center whitespace-nowrap text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 bg-white text-blue-600-foreground shadow hover:bg-white/90 h-10 rounded-md w-auto px-4 sm:px-8 gap-2">
                Crie a sua conta
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </Button>
        </div>
    </section>


    <footer class="bg-gray-900 text-gray-400 py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center gap-2 text-white mb-4">
                        <Building2 class="w-6 h-6" />
                        <span class="font-semibold">KialaCasa</span>
                    </div>
                    <p class="text-sm">A principal plataforma de Angola para gestão e reservas de espaços.</p>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Empresa</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white transition-colors">Sobre Nós</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Carreiras</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Imprensa</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Recursos</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white transition-colors">Central de Ajuda</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Guia do Parceiro</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Legal</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white transition-colors">Política de Privacidade</a>
                        </li>
                        <li><a href="#" class="hover:text-white transition-colors">Termos de Serviço</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Política de Cookies</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 text-sm text-center">
                <p>&copy; {{ date('Y') }} KialaCasa. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"
        integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        feather.replace()
    </script>
    @fluxScripts
</body>

</html>
