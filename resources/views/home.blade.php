<x-app-layout title="Home Page">
    @section('hero')
        <div class="relative overflow-hidden">
            <section
                class="mx-auto max-w-screen-3xl px-6 lg:px-0 3xl:px-0 flex flex-col justify-between py-10 pb-32 md:gap-28 lg:py-4 xl:flex-row">
                <div class="relative z-20 flex justify-center items-end flex-col xl:w-1/2 text-right">
                    <h1 class="text-[52px] font-[700] leading-[120%] lg:text-[48px]  lg:font-[700] lg:leading-[120%] text-right">Selamat Datang di</h1>
                    <h1 class="text-[52px] font-[700] leading-[120%] lg:text-[92px]  lg:font-[700] lg:leading-[120%] text-green-50">MINAHASA</h1>
                    <p class="regular-16 mt-6 text-gray-30 xl:max-w-[520px]">
                        surga tersembunyi di Sulawesi Utara yang menawarkan keindahan alam,
                        budaya kaya, dan pengalaman tak terlupakan.
                        Temukan keajaiban Danau Tondano, cita rasa khas Minahasa, serta keramahan penduduk lokal yang akan
                        membuat Anda ingin kembali lagi.
                    </p>
                    <div class="flex flex-col my-11 gap-3 sm:flex-row">
                        <x-nav-link href="{{ route('posts.index') }}" :active="request()->routeIs('posts.index')"
                            class="flex justify-center gap-3 rounded-full border border-green-50 bg-green-50 px-8 py-5 text-white">
                            {{ __('Jelajahi Sekarang') }}
                        </x-nav-link>
                    </div>
                </div>
                <img src="assets/tondano.jpg" class="bg-cover bg-center rounded-[40px]" />
            </section>

            <section class="flex justify-center items-center flex-col py-24">
                <div class="mx-auto max-w-[1440px] px-6 lg:px-20 3xl:px-0 w-full pb-24">
                    <p class="uppercase text-[18px] -mt-1 mb-3 text-green-50">
                        We are here for you
                    </p>
                    <div class="flex flex-wrap justify-between gap-5 lg:gap-10">
                        <h2 class="text-[40px] font-[400] leading-[120%] lg:text-[64px] lg:font-[700] xl:max-w-[390px]">
                            Budaya Menarik</h2>
                        <p class="text-[16px] text-gray-30 xl:max-w-[520px]">Jelajahi kekayaan budaya Minahasa yang penuh
                            warna dan makna.
                            Saksikan <strong>tarian tradisional Maengket</strong>, yang menggambarkan kehidupan masyarakat
                            setempat, dan kunjungi situs-situs bersejarah yang menceritakan warisan nenek moyang.
                            Temui keramahan penduduk lokal yang dengan senang hati membagikan cerita dan tradisi mereka,
                            menjadikan kunjungan Anda lebih bermakna.</p>
                    </div>
                </div>

                <div class="flex justify-center items-center mx-auto max-w-[1440px] relative w-full">
                    <img src="assets/tari.jpg" alt="tari" width="1440" height="580"
                        class="w-full object-cover object-center lg:rounded-5xl" />
                </div>
            </section>

            <section class="flex justify-center items-center flex-col py-24">
                <div class="mx-auto max-w-[1440px] px-6 lg:px-20 3xl:px-0 w-9/12 pb-24">
                    <p class="uppercase text-[18px] font-[400] -mt-1 mb-3 text-green-50">
                        Tourist Feedback
                    </p>
                    <div class="flex justify-between gap-5 lg:gap-10">
                        <h2 class="text-[40px] font-[700] lg:text-[64px] xl:max-w-[1000px]">Apa kata mereka?</h2>
                    </div>
                </div>

                <div class="z-20 flex w-full flex-col lg:w-[60%]">
                    <ul class="mt-10 grid gap-10 md:grid-cols-3 lg:mg-20 lg:gap-12">
                        <div
                            class="w-full max-w-sm h-[300px] flex justify-center items-center bg-white border border-gray-200 rounded-lg shadow ">
                            <div class="flex flex-col items-center pb-10">
                                <img class="w-24 h-24 mb-3 mt-3 rounded-full shadow-lg" src="assets/placeholder-user.png"
                                    alt="user" />
                                <h5 class="mb-1 text-xl font-semibold text-gray-900">Pelix</h5>
                                <span class="text-md font-light text-gray-500">Mahasiswa</span>
                                <p class="text-sm text-gray-500 text-center">Lorem ipsum, dolor sit amet consectetur
                                    adipisicing.</p>
                            </div>
                        </div>
                        <div
                            class="w-full max-w-sm h-[300px] flex justify-center items-center bg-white border border-gray-200 rounded-lg shadow ">
                            <div class="flex flex-col items-center pb-10">
                                <img class="w-24 h-24 mb-3 mt-3 rounded-full shadow-lg" src="assets/placeholder-user.png"
                                    alt="user" />
                                <h5 class="mb-1 text-xl font-semibold text-gray-900">Pelix</h5>
                                <span class="text-md font-light text-gray-500">Mahasiswa</span>
                                <p class="text-sm text-gray-500 text-center">Lorem ipsum, dolor sit amet consectetur
                                    adipisicing.</p>
                            </div>
                        </div>
                        <div
                            class="w-full max-w-sm h-[300px] flex justify-center items-center bg-white border border-gray-200 rounded-lg shadow ">
                            <div class="flex flex-col items-center pb-10">
                                <img class="w-24 h-24 mb-3 mt-3 rounded-full shadow-lg" src="assets/placeholder-user.png"
                                    alt="user" />
                                <h5 class="mb-1 text-xl font-semibold text-gray-900">Pelix</h5>
                                <span class="text-md font-light text-gray-500">Mahasiswa</span>
                                <p class="text-sm text-gray-500 text-center">Lorem ipsum, dolor sit amet consectetur
                                    adipisicing.</p>
                            </div>
                        </div>
                    </ul>

                </div>
            </section>

            <section class="flex justify-center items-center flex-col pt-24">
                <div class="mx-auto max-w-[1440px] px-6 lg:px-20 3xl:px-0 w-9/12 pb-24">
                    <p class="uppercase text-[18px] font-[400] -mt-1 mb-3 text-green-50">
                        Our Destination
                    </p>
                    <div class="flex justify-between gap-5 lg:gap-10">
                        <div class="">
                            <h2 class="text-[40px] font-[700] lg:text-[64px] xl:max-w-[1000px]">Destinasi Menarik</h2>
                            </h2>
                            <div class="pt-4">
                                <x-nav-link href="{{ route('posts.index') }}" :active="request()->routeIs('posts.index')"
                                    class="flex items-center justify-center gap-3 rounded-full border border-green-50 bg-green-50 px-8 py-5 text-white">
                                    {{ __('Jelajahi Sekarang') }}
                                </x-nav-link>
                            </div>
                        </div>
                        <p class="regular-16 text-gray-30 xl:max-w-[520px]">Nikmati kelezatan kuliner khas Minahasa yang
                            penuh cita rasa dan rempah-rempah tradisional.
                            Dari <strong>rica-rica</strong> pedas yang menggugah selera hingga <strong>tinutuan</strong>,
                            bubur khas yang hangat dan menyehatkan, setiap sajian menghadirkan pengalaman rasa yang
                            autentik.
                            Jangan lewatkan petualangan kuliner di pasar lokal dan warung tradisional, tempat Anda dapat
                            menemukan makanan terbaik dari tangan para ahli masakan Minahasa.</p>
                    </div>
                </div>
            </section>
        </div>
    @endsection

    <div class="mb-10 w-full">
        <div class="mb-16">
            <h2 class="mt-16 mb-5 text-3xl text-green-500 font-bold">Wisata Alam Terbaru</h2>
            <div class="w-full">
                <div class="grid grid-cols-3 gap-10 w-full">
                    @foreach ($alamPosts as $post)
                        <x-posts.post-card class="md:col-span-1 col-span-3" :post="$post" />
                    @endforeach
                </div>
            </div>
            <a class="mt-10 block text-center text-lg text-green-500 font-semibold"
                href="{{ route('posts.index') }}">Wisata Lainnya</a>
        </div>
        <hr>

        <div class="mb-16">
            <h2 class="mt-16 mb-5 text-3xl text-green-500 font-bold">Wisata Buatan Terbaru</h2>
            <div class="grid grid-cols-3 gap-10 w-full">
                @foreach ($buatanPosts as $post)
                    <x-posts.post-card class="md:col-span-1 col-span-3" :post="$post" />
                @endforeach
            </div>
            <a class="mt-10 block text-center text-lg text-green-500 font-semibold"
                href="{{ route('posts.index') }}">Wisata lainnya</a>
        </div>

        <div class="mb-16">
            <h2 class="mt-16 mb-5 text-3xl text-green-500 font-bold">Wisata Budaya Terbaru</h2>
            <div class="grid grid-cols-3 gap-10 w-full">
                @foreach ($budayaPosts as $post)
                    <x-posts.post-card class="md:col-span-1 col-span-3" :post="$post" />
                @endforeach
            </div>
            <a class="mt-10 block text-center text-lg text-green-500 font-semibold"
                href="{{ route('posts.index') }}">Wisata lainnya</a>
        </div>
    </div>
</x-app-layout>
