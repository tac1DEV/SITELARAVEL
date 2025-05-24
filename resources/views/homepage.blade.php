<x-layout>
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-blue-50 to-indigo-100 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="flex justify-center mb-8">
                    <img 
                        src="{{ Vite::asset('resources/img/only-feets-logo.png') }}" 
                        alt="OnlyFeets Logo" 
                        class="h-20 md:h-24 w-auto"
                    >
                </div>
                <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
                    Bienvenue sur <span style="color: #00aff0;">OnlyFeets</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-600 mb-8 max-w-3xl mx-auto">
                    La plateforme premium dédiée aux passionnés de pieds. Découvrez du contenu exclusif créé par les meilleurs créateurs.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    @guest
                        <a 
                            href="{{ route('register') }}" 
                            class="px-8 py-4 rounded-lg font-semibold text-white text-lg transition-all duration-200 hover:transform hover:scale-105"
                            style="background-color: #00aff0;"
                            onmouseover="this.style.backgroundColor='#0099d9';"
                            onmouseout="this.style.backgroundColor='#00aff0';"
                        >
                            Rejoindre maintenant
                        </a>
                        <a 
                            href="{{ route('login') }}" 
                            class="px-8 py-4 rounded-lg font-semibold text-gray-700 text-lg border-2 border-gray-300 hover:border-gray-400 transition-all duration-200"
                        >
                            Se connecter
                        </a>
                    @else
                        <a 
                            href="{{ url('/dashboard') }}" 
                            class="px-8 py-4 rounded-lg font-semibold text-white text-lg transition-all duration-200 hover:transform hover:scale-105"
                            style="background-color: #00aff0;"
                            onmouseover="this.style.backgroundColor='#0099d9';"
                            onmouseout="this.style.backgroundColor='#00aff0';"
                        >
                            Accéder au Dashboard
                        </a>
                    @endguest
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Pourquoi choisir OnlyFeets ?
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Une expérience unique conçue spécialement pour les amateurs de contenu pied
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="text-center p-6 rounded-lg border border-gray-200 hover:shadow-lg transition-shadow duration-200">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full flex items-center justify-center" style="background-color: #00aff0;">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Contenu Exclusif</h3>
                    <p class="text-gray-600">Accédez à du contenu premium créé spécialement pour notre communauté passionnée.</p>
                </div>

                <!-- Feature 2 -->
                <div class="text-center p-6 rounded-lg border border-gray-200 hover:shadow-lg transition-shadow duration-200">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full flex items-center justify-center" style="background-color: #00aff0;">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Communauté Active</h3>
                    <p class="text-gray-600">Rejoignez une communauté bienveillante de créateurs et d'amateurs partageant votre passion.</p>
                </div>

                <!-- Feature 3 -->
                <div class="text-center p-6 rounded-lg border border-gray-200 hover:shadow-lg transition-shadow duration-200">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full flex items-center justify-center" style="background-color: #00aff0;">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Sécurisé & Privé</h3>
                    <p class="text-gray-600">Votre confidentialité est notre priorité. Profitez d'un environnement sûr et discret.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-20" style="background-color: #f8fbff;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Prêt à découvrir OnlyFeets ?
            </h2>
            <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                Rejoignez des milliers d'utilisateurs qui ont déjà trouvé leur communauté sur OnlyFeets
            </p>
            @guest
                <a 
                    href="{{ route('register') }}" 
                    class="inline-block px-10 py-4 rounded-lg font-semibold text-white text-xl transition-all duration-200 hover:transform hover:scale-105"
                    style="background-color: #00aff0;"
                    onmouseover="this.style.backgroundColor='#0099d9';"
                    onmouseout="this.style.backgroundColor='#00aff0';"
                >
                    Commencer maintenant - C'est gratuit
                </a>
            @else
                <a 
                    href="{{ url('/dashboard') }}" 
                    class="inline-block px-10 py-4 rounded-lg font-semibold text-white text-xl transition-all duration-200 hover:transform hover:scale-105"
                    style="background-color: #00aff0;"
                    onmouseover="this.style.backgroundColor='#0099d9';"
                    onmouseout="this.style.backgroundColor='#00aff0';"
                >
                    Voir mon Dashboard
                </a>
            @endguest
        </div>
    </section>

    <!-- Stats Section -->
    {{-- todo: Modifier cette section avec des vrais stats dès que possible --}}
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-3xl md:text-4xl font-bold mb-2" style="color: #00aff0;">10K+</div>
                    <div class="text-gray-600">Membres actifs</div>
                </div>
                <div>
                    <div class="text-3xl md:text-4xl font-bold mb-2" style="color: #00aff0;">500+</div>
                    <div class="text-gray-600">Créateurs</div>
                </div>
                <div>
                    <div class="text-3xl md:text-4xl font-bold mb-2" style="color: #00aff0;">50K+</div>
                    <div class="text-gray-600">Contenus premium</div>
                </div>
                <div>
                    <div class="text-3xl md:text-4xl font-bold mb-2" style="color: #00aff0;">98%</div>
                    <div class="text-gray-600">Satisfaction</div>
                </div>
            </div>
        </div>
    </section>
</x-layout>