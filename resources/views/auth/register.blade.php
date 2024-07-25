<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - News Talenthub</title>
  <link rel="icon" href="https://flowbite.com/docs/images/logo.svg" type="image/svg+xml">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.2/dist/cdn.min.js" defer></script>
</head>

<body class="bg-gray-100 dark:bg-gray-900 flex items-center justify-center min-h-screen p-6">
  <div class="w-full max-w-md bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
    <div class="p-6">
      <div class="flex justify-center mb-4">
        <img <<<<<<< HEAD
          src="https://talenthub.kemnaker.go.id/_next/image?url=%2F_next%2Fstatic%2Fmedia%2FLogo.c19b844f.png&w=128&q=75"
          alt="News Talenthub Logo" class="h-12">
        =======
        src="https://talenthub.kemnaker.go.id/_next/image?url=%2F_next%2Fstatic%2Fmedia%2FLogo.c19b844f.png&w=128&q=75"
        alt="News Talenthub Logo" class="h-12">
        >>>>>>> 942c2b27d81538a0fcf6255816e818969909f771
      </div>
      <h2 class="text-center text-3xl font-extrabold text-gray-900 dark:text-white mb-6">Buat Akun Anda</h2>
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="space-y-4">
          <<<<<<< HEAD <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Anda</label>
            =======
            <div>
              <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Anda</label>
              >>>>>>> 942c2b27d81538a0fcf6255816e818969909f771
              <input type="text" id="name" name="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Nama Lengkap" required>
              @error('name')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
              <<<<<<< HEAD </div>
                =======
            </div>
            >>>>>>> 942c2b27d81538a0fcf6255816e818969909f771
            <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Anda</label>
              <input type="email" id="email" name="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="name@example.com" required>
              @error('email')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        <<<<<<< HEAD @enderror </div>
                <div>
                  <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kata Sandi
                    Anda</label>
                  =======
                  @enderror
                </div>
                <div>
                  <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kata Sandi
                    Anda</label>
                  >>>>>>> 942c2b27d81538a0fcf6255816e818969909f771
                  <input type="password" id="password" name="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
                  @error('password')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
                  <<<<<<< HEAD </div>
                    =======
                </div>
                >>>>>>> 942c2b27d81538a0fcf6255816e818969909f771
                <div>
                  <label for="password_confirmation"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi Kata Sandi</label>
                  <input type="password" id="password_confirmation" name="password_confirmation"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
                </div>
                <div>
                  <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                    Telepon</label>
                  <input type="text" id="phone_number" name="phone_number"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Nomor Telepon" required>
                  @error('phone_number')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          <<<<<<< HEAD @enderror=======@enderror>>>>>>> 942c2b27d81538a0fcf6255816e818969909f771
                </div>
                <div>
                  <label for="address"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                  <input type="text" id="address" name="address"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Alamat Lengkap" required>
                  @error('address')
            <span class="text-red-500 text-sm">{{ $message }}</span>
          <<<<<<< HEAD @enderror=======@enderror>>>>>>> 942c2b27d81538a0fcf6255816e818969909f771
                </div>
            </div>
            <div class="flex items-start mb-4 mt-4">
              <div class="flex items-center h-5">
                <input id="remember" name="remember" type="checkbox"
                  class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800">
              </div>
              <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ingat saya</label>
            </div>
            <div>
              <button type="submit"
                class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Daftar
              </button>
            </div>
      </form>
      <d iv class="mt-4 flex justify-between items-center">
        <a href="{{ url('/') }}" class="text-blue-600 hover:underline dark:text-blue-500">
          &larr; Masuk sebagai tamu
        </a>
        <h3>Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-600 hover:underline dark:text-blue-500">
            Masuk Sekarang
          </a></h3>
      </d>
    </div>
  </div>

</body>

</html>