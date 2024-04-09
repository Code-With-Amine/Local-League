<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite('resources/css/app.css')
            <!-- Scripts -->

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <img class="absolute inset-0 w-full h-full object-cover" src="{{url('/images/team.png')}}" alt="Background Image" />
        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <form class="flex justify-center items-center min-h-screen form-content">
                @csrf
                <div class="bg-white rounded-lg p-8 shadow-md w-80 p-6">
                  <h2 class="text-center text-xl font-bold mb-4">Start your <span class="text__lightColor"> journey </span></h2>
                  <div class="flex justify-center mb-4">
                    <img src="{{url('/images/addProfilePic.png')}}" alt="add picture icon" class="w-30 h-30 cursor-pointer" onclick="handelImageClick()"/>
                    <input class="hidden" type="file" id="uploadImage" name="coachImage"/>
                  </div>
                  <form>
                    <div class="mb-4">
                      <label for="fullname" class="block mb-1">Full name</label>
                      <input type="text" id="fullname" name="fullname" class="w-full border border-gray-300 rounded-md px-3 py-2">
                    </div>
                    <div class="mb-4">
                      <label for="email" class="block mb-1">Email</label>
                      <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-md px-3 py-2">
                    </div>
                    <div class="mb-4">
                      <label for="password" class="block mb-1">Password</label>
                      <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded-md px-3 py-2">
                    </div>
                    <div class="mb-6">
                      <label for="confirm-password" class="block mb-1">Confirm Password</label>
                      <input type="password" id="confirm-password" name="confirm-password" class="w-full border border-gray-300 rounded-md px-3 py-2">
                    </div>
                    <div class="flex justify-between">
                      <button type="button" class="text-sm text-gray-600 hover:text-gray-800 border-4 border-300 px-4 rounded-md">Go back</button>
                      <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">Continue</button>
                    </div>
                  </form>
                </div>
            </form>
              
            </div>
    </body>
    <script>
      
      const image = document.getElementById('uploadImage');
      const handelImageClick = () => {
        image.click()
        }
    </script>
</html>
