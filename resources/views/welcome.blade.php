<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documents    </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="bg-gray-700"></div>
    <div class="w-2/5 flex-col bg-gray-200">
        <div class="h-auto w-full">
          <span class="float-left ml-2 my-1 font-semibold">Stories</span>
          <span class="float-right mr-2 my-1 font-semibold">Watch All</span>
        </div>
        <div class="- max-w-2xl mx-auto p-8">
          <ul class="flex space-x-6">
            <li class="flex flex-col items-center space-y-1">
              <div class="relative bg-gradient-to-tr from-yellow-400 to-fuchsia-600 p-1 rounded-full">
                <a href="#" class="block bg-white p-1 rounded-full transform transition hover:rotate-6">
                  <img class="h-24 w-24 rounded-full" src="https://placekitten.com/202/200" alt="cute kitty" />
                </a>
                <button class="absolute bottom-0 right-1 h-8 w-8 bg-blue-500 rounded-full text-white text-base text-center font-semibold border-4 border-white font-mono hover:bg-blue-700">+</button>
              </div>
              <a href="#">You</a>
            </li>
            <li class="flex flex-col items-center space-y-1">
              <div class="bg-gradient-to-tr from-yellow-400 to-fuchsia-600 p-1 rounded-full">
                <a href="#" class="block bg-white p-1 rounded-full transform transition hover:rotate-6">
                  <img class="h-24 w-24 rounded-full" src="https://placekitten.com/200/203" alt="cute kitty" />
                </a>
              </div>
              <a href="#">kitty_two</a>
            </li>
            <li class="flex flex-col items-center space-y-1">
              <div class="bg-gradient-to-tr from-yellow-400 to-fuchsia-600 p-1 rounded-full">
                <a href="#" class="block bg-white p-1 rounded-full transform transition hover:rotate-6">
                  <img class="h-24 w-24 rounded-full" src="https://placekitten.com/200/202" alt="cute kitty" />
                </a>
              </div>
              <a href="#">kitty_tree</a>
            </li>
            <li class="flex flex-col items-center space-y-1">
              <div class="bg-gradient-to-tr from-yellow-400 to-fuchsia-600 p-1 rounded-full">
                <a href="#" class="block bg-white p-1 rounded-full transform transition hover:rotate-6">
                  <img class="h-24 w-24 rounded-full" src="https://placekitten.com/200/201" alt="cute kitty" />
                </a>
              </div>
              <a href="#">kitty_four</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="bg-gray-100 w-2/5">
        <div class="mx-3 py-4">
          <div class="flex">
            <div class="">
              <img class="w-16 h-16 rounded-full" src="https://placekitten.com/202/200" alt="" />
            </div>
            <div class="mx-5 flex-col">
              <div class="my-1 w-44 h-4 rounded-full bg-gray-400"></div>
              <div class="my-1 w-24 h-4 rounded-full bg-gray-400"></div>
            </div>
          </div>
          <div class="w-full h-96 bg-gray-400 my-4 rounded-t"></div>
        </div>
      </div>
      
</body>
</html>