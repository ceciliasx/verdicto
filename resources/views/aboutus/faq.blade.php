<x-app-layout>
    <section id="faq" class="bg-customWhite py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-xl font-bold text-center mb-10 text-customFont">Frequently Asked Questions</h2>

            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div x-data="{ open: false }" class="border border-gray-200 rounded-md p-6">
                    <button @click="open = !open" class="w-full flex justify-between items-center px-4 py-4 text-left text-lg font-medium text-customFont focus:outline-none">
                        <span>Apa itu VERDICTO?</span>
                        <svg :class="{'rotate-180': open}" class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="px-4 pb-4 text-gray-600 leading-8">
                        VERDICTO adalah platform online terkemuka yang bertujuan membuat hukum dapat diakses dan dimengerti oleh semua orang. Kami menyediakan berbagai informasi dan alat hukum yang gratis, terkini, dan mudah dipahami. Selain itu, kami juga menawarkan direktori pengacara terlengkap di internet.
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div x-data="{ open: false }" class="border border-gray-200 rounded-md p-6">
                    <button @click="open = !open" class="w-full flex justify-between items-center px-4 py-4 text-left text-lg font-medium text-customFont focus:outline-none">
                        <span>Apa saja yang ditawarkan VERDICTO?</span>
                        <svg :class="{'rotate-180': open}" class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="px-4 pb-4 text-gray-600 leading-8">
                        Kami menawarkan beberapa hal utama:<br>
                        • <strong>Informasi dan Alat Hukum: </strong>Akses gratis ke berbagai artikel, berita, kasus hukum, dan undang-undang mendalam tentang beragam topik dan bidang praktik hukum.<br>
                        • <strong>Direktori Pengacara: </strong>Temukan dan hubungkan dengan profesional hukum yang tepat dan siap membantu masalah hukum Anda.<br>
                        • <strong>Solusi Pemasaran Internet untuk Firma Hukum: </strong>Kami juga merupakan pemimpin industri dalam membantu firma hukum dengan solusi pemasaran online mereka.
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div x-data="{ open: false }" class="border border-gray-200 rounded-md p-6  ">
                    <button @click="open = !open" class="w-full flex justify-between items-center px-4 py-4 text-left text-lg font-medium text-customFont focus:outline-none">
                        <span>Bagaimana VERDICTO membantu konsumen?</span>
                        <svg :class="{'rotate-180': open}" class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="px-4 pb-4 text-gray-600 leading-8">
                        VERDICTO menyediakan informasi hukum yang mudah diakses agar Anda bisa memahami hukum dengan lebih baik, membuat keputusan hukum yang tepat, dan mendapatkan bantuan hukum berkualitas. Kami ingin menghilangkan anggapan bahwa informasi hukum online yang berkualitas itu membingungkan, mahal, atau sulit ditemukan.
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div x-data="{ open: false }" class="border border-gray-200 rounded-md p-6  ">
                    <button @click="open = !open" class="w-full flex justify-between items-center px-4 py-4 text-left text-lg font-medium text-customFont focus:outline-none">
                        <span>Apa yang VERDICTO lakukan untuk meningkatkan aksesibilitas?</span>
                        <svg :class="{'rotate-180': open}" class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="px-4 pb-4 text-gray-600 leading-8">
                        Aksesibilitas adalah upaya berkelanjutan bagi kami. Kami secara aktif mengambil langkah-langkah, termasuk audit situs web dengan pakar industri, untuk memastikan VERDICTO dan properti web kami yang lain memenuhi atau bahkan melampaui standar aksesibilitas.
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div x-data="{ open: false }" class="border border-gray-200 rounded-md p-6  ">
                    <button @click="open = !open" class="w-full flex justify-between items-center px-4 py-4 text-left text-lg font-medium text-customFont focus:outline-none">
                        <span>Bagaimana cara memberikan masukan atau bertanya?</span>
                        <svg :class="{'rotate-180': open}" class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="px-4 pb-4 text-gray-600 leading-8">
                        Jika Anda memiliki komentar, pertanyaan, atau mengalami kesulitan mengakses bagian mana pun dari situs web kami, silakan kirim email ke mary.priscilla@binus.ac.id.
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>