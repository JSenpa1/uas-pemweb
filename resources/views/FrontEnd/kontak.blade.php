@extends('layouts.main')

@section('content')
    <div>
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Us</h2>
                <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Jika ingin bertanya mengenai sekolah boleh kontak kita</p>
                <form action="{{ url('/addPertanyaan') }}" class="space-y-8" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">E-Mail Anda</label>
                        <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="batman@email.com" required>
                    </div>
                    <div>
                        <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Judul</label>
                        <input type="text" name="judul" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Judul Pertanyaan Anda" required>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pertanyaan</label>
                        <textarea id="message" name="pertanyaan" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Deskripsi Pertanyaan"></textarea>
                    </div>
                    <center><button type="submit" id="mySubmit" class="bg-emerald-400 py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-emerald-700 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:focus:ring-primary-800">Send message</button></center>
                </form>
            </div>
          </section>

          <script>
            document.getElementById('mySubmit').addEventListener("click", showAlert);

            function showAlert()
            {
                alert('Terima Kasih Telah Bertanya, Akan Kami Jawab lewat Email Segera');
            }
        </script>

        <div class="bg-cover bg-center bg-fixed" style="background-image: url('{{ asset('galeri/1.png') }}');">
            <section class="flex justify-center items-center h-screen flex-wrap">
            <div class="bg-gray-900 flex flex-col justify-center items-center text-white font-Lexend w-100 h-200 m-8 p-5 rounded-md transition-transform transform hover:scale-103">
                <h2 class="text-2xl mb-5">Alamat & Kontak</h2>
                <div class="maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63453.90460788182!2d106.58433689417558!3d-6.280942289134596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fc9e84f0230d%3A0xad8f68bf33d26d66!2sPAUD%20%2F%20TK%20Azzahra%20Islamic%20School!5e0!3m2!1sen!2sid!4v1700984286733!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <h4 class="mb-2">Lengkong Kulon, Pagedangan,<br />Tangerang Regency Banten 15331</h4>
                <h4 class="mb-2">081380251978</h4>
                <h4>Email</h4>
            </div>
            </section>
        </div>
    </div>
@stop
