<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/d0fb25e48c.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

</head>
<body>
    
{{-- @if(auth()->user()->role == 'Driver') --}}
@auth
 {{-- navbar --}}

 <nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center ">
            {{-- <img src="img/Yellow.png" class="mr-3 h-6 sm:h-9" alt="Logo" /> --}}
            <h2 class="font-bold text-2xl">Grand<span class="bg-[#FFD700] text-white px-2 rounded-md">Taxi</span></h2>
        </a>
        <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
          <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
              <li>
                  <a href="/home" class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0" aria-current="page">Home</a>
              </li>
              <li>
                  <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 lg:dark:hover:text-white lg:dark:hover:bg-transparent">Home</a>
              </li>
            
              <li>
                  <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 lg:dark:hover:text-white lg:dark:hover:bg-transparent">contact</a>
              </li>
              <li>
                  <a href="/reservation" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 lg:dark:hover:text-white lg:dark:hover:bg-transparent">reservations</a>
              </li>
              <li>
                  <a href="/trajet" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 lg:dark:hover:text-white lg:dark:hover:bg-transparent">trajets</a>
              </li>
          </ul>
      </div>
    <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">


      <button type="button" class="dropdown-toggle flex items-center" id="user-menu-button" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <div class="flex-shrink-0 w-10 h-10 relative">
            <div class="p-1 bg-white rounded-full focus:outline-none focus:ring">
                <img class="w-10 h-8 rounded-full" src="{{ asset('storage/img/' . auth()->user()->profile)}}" alt="user photo"/>
               
            </div>
        </div>
        <div class="px-2 md:block text-left">
            <h2 class="text-sm font-semibold text-gray-800">{{ auth()->user()->name}}</h2>
            <p class="text-xs text-gray-500">{{ auth()->user()->role}}</p>
        </div>                
    </button>
        
     
        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
          <div class="px-4 py-3">
            <span class="block text-sm text-gray-900 dark:text-white">{{ auth()->user()->name}}</span>
            <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ auth()->user()->email}}</span>
          </div>
          <ul class="py-2" aria-labelledby="user-menu-button">
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">home</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"> 
                <form action="/logout" method="POST">
                @csrf
                <button  id="bot">
                  <i class="fas fa-sign-out-alt"></i>
                  <span >Logout</span>
              </button>
            </form></a>
            </li>
          </ul>
        </div>
        <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
          <span class="sr-only"> menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">

    </div>
    </div>
  </nav>
    <div aria-label="group of cards" tabindex="0" class="focus:outline-none py-8 items-center m-5">
        <div class="lg:flex-col items-center justify-center w-full cards-container grid grid-cols-1 lg:grid-cols-3 gap-7">
            @foreach ($reservations as $reservation)
            <div tabindex="0" aria-label="card 1" class="focus:outline-none bg-white p-6 shadow rounded ">
                <div class="flex items-center border-b border-gray-200 pb-6">
                    <img    src="{{ asset('storage/img/' . $reservation->passanger->profile) }}" alt="coin avatar" class="w-12 h-12 rounded-full" />
                    <div class="flex items-start justify-between w-full">
                        <div class="pl-3 w-full">
                            <p tabindex="0" class="focus:outline-none text-xl font-medium leading-5 text-gray-800">{{ $reservation->passanger->name }}</p>
                          
                        </div>
                       
                    </div>
                </div>
                <div class="px-2">
                    <span> trajet:{{ $reservation->trajetreserve->id }}</span>
                    <div  class="text-sm font-semibold flex items-center space-x-2">
                        
                        <p tabindex="0" class="focus:outline-none text-sm leading-normal pt-2 text-gray-500">{{$reservation['reserved_time']}}</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-normal pt-2 text-gray-500">{{$reservation['status']}}</p>
                       
                    </div> 
                    <div tabindex="0" class="focus:outline-none flex">
                       
                        <div class="py-2 px-4 text-xs leading-3 text-indigo-700 rounded-full bg-green-100"> <button>reserved</button></div>
    
                       
                    </div>
                </div>
            </div>
        </section>
    @endforeach  

    @else
    <main class="grid min-h-full place-items-center bg-white px-6  lg:px-8">
      <div class="text-center">
          <img src="img/404.png" alt="">
          <h1 class="text-3xl font-bold tracking-tight text-yellow-500 sm:text-5xl">Page not found</h1>
        <div class="mt-6 flex items-center justify-center gap-x-5">
          <a href="#" class="rounded-md bg-yellow-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-yellow-600  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go back home</a>
          <a href="#" class="text-sm font-semibold text-gray-900">Contact support <span aria-hidden="true">&rarr;</span></a>
        </div>
      </div>
    </main>
    @endauth

</body>
</html>