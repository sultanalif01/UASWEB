<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <style type="text/tailwindcss">
    @layer utilities {
      .container {
        @apply max-w-[90%] mx-auto;
      }

      .btn {
        @apply bg-[#212121] text-white px-5 py-3 text-center;
      }  

      .btn.rounded {
        @apply rounded-full;
      }

      .home::before {
      }

      .active {
        @apply block;
      }
    }
  </style>
  <title>Online Course</title>
  <link rel="icon" type="image/x-icon" href="/gambar/favicon.ico">
</head>

<body>
  <header class="bg-[#FFFAF2]">
    <nav class="container relative flex items-center justify-between py-5 ">
      <a href="">
        <img src="./gambar/logo-dark.svg" alt="">
      </a>

      <div class="flex-1 hidden ml-12 space-x-4 md:block">
        <a href="" class="text-[#FF994F] font-bold">Home</a>
        <a href="">Course</a>
        <a href="">Mentors</a>
        <a href="">About Us</a>
        <a href="">Contact</a>
      </div>

      <div class="flex items-center hidden space-x-5 md:flex">
        @if (Route::has('login'))
                
                    @auth
                        <a href="{{ url('/dashboard') }}" class="outline outline-2 py-3 px-8 text-[#FF994F] rounded-full text-sm ">Dashboard</a>
                    @else
                        <button class="outline outline-2 py-3 px-8 text-[#FF994F] rounded-full"><a href="{{ route('login') }}" class="">Log in</a></button>

                        @if (Route::has('register'))
                            <button class="bg-[#FF994F] py-3 px-8 text-white rounded-full"><a href="{{ route('register') }}" class="">Register</a></button>
                        @endif
                    @endauth
                
            @endif
        {{-- @if (Route::has('login'))
        <button class="outline outline-2 py-3 px-8 text-[#FF994F] rounded-full">Log in</button>
        <button class="bg-[#FF994F] py-3 px-8 text-white rounded-full">Registration</button>
        @endif --}}
      </div>

      <a href="#" class="hamburger md:hidden">
        <img src="./gambar/hamburger.svg" alt="">
      </a>

      <div
        class="absolute inset-x-0 z-40 hidden p-4 bg-white border border-gray-300 rounded-lg shadow-lg popup top-10 right-12 md:hidden">
        <div class="flex space-x-5">
          <div class="flex items-center w-full h-full px-3 mb-4 space-x-1 border border-gray-400 rounded-full">
            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="8.36556" cy="8.36458" r="7.03353" stroke="#070D13" stroke-width="2" />
              <rect x="13.8848" y="13" width="6.56463" height="1.25023" rx="0.625113" transform="rotate(45 13.8848 13)"
                fill="#070D13" />
            </svg>
            <input type="text" class="w-full border-none" placeholder="Search ..." />
          </div>
        </div>

        <div class="flex flex-col space-y-4">
          <a href="" class="text-[#FF994F] font-bold">Home</a>
          <a href="">Course</a>
          <a href="">Mentors</a>
          <a href="">About Us</a>
          <a href="">Contact</a>
        </div>

        <div class="flex flex-col mt-4">
          @if (Route::has('login'))                
          @auth
              <a href="{{ url('/dashboard') }}" class="outline outline-2 py-3 px-8 text-[#FF994F] rounded-full text-sm ">Dashboard</a>
          @else
              <button class="outline outline-2 py-3 px-8 text-[#FF994F] rounded-full"><a href="{{ route('login') }}" class="">Log in</a></button>

              @if (Route::has('register'))
                  <button class="bg-[#FF994F] py-3 px-8 text-white rounded-full"><a href="{{ route('register') }}" class="">Register</a></button>
              @endif
          @endauth      
  @endif
        </div>
      </div>
    </nav>
  </header>

  <section class=" pt-8 pb-28  bg-[#FFFAF2]">
    <div class="container flex flex-col items-center lg:flex-row">
    <div class="flex-1 space-y-8 ">
      <h1 class="relative font-bold leading-none text-7xl">
        The best 
        <span class="text-[#FF994F]">Course <br></span>
        With the Best <br>
        <span class="relative home">Mentors</span>
      </h1>
      <p class="text-xl text-gray-500">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget gravida leo, nec iaculis diam.
      </p>
      <button class="bg-[#FF994F] py-3 px-8 text-white rounded-full hover:bg-opacity-50">Register Now</button>
    </div>

    <div class="flex flex-1 hidden space-x-4 lg:flex">
      <img class="w-full" src="./gambar/hero.png" alt="">
    </div>
    </div>
  </section>

  <div class="container py-20">
    <div class="flex items-center justify-between w-full">
      <h3 class="text-5xl font-bold w-[364px]">Find The Course You Want</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum massa sit amet porta efficitur.</p>
    </div>

    @include('layouts.course')
    


    
    <div class="flex justify-center w-full mt-7">
      <button class="bg-[#FF994F] py-3 px-8 text-white rounded-full hover:bg-opacity-50">See course</button>
    </div>
  </div>

  <section class="container flex flex-col items-center py-20 space-y-5 lg:flex-row lg:space-x-10 lg:space-y-0">
    <img src="./gambar/metors.png" class="flex-1 w-full" alt="">
    <div class="flex-1 space-y-6">
      <h2 class="text-5xl font-bold w-[364px]">Mentors who are professional in their fields</h2>
      <p class="text-gray-500">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum massa sit amet porta efficitur.
      </p>
    </div>

  </section>

  <section class="container">
  @include('layouts.mentor')

      <div class="flex justify-center w-full mt-7">
        <button class="bg-[#FF994F] py-3 px-8 text-white rounded-full hover:bg-opacity-50">See course</button>
      </div>
  </section>

  <section class="container flex flex-col items-center py-20 space-y-5 lg:flex-row lg:space-x-10 lg:space-y-0">
    <div class="flex-1 space-y-6">
      <h2 class="text-5xl font-bold">We will provide the best for our users from year to year</h2>
      <p class="text-gray-500">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum massa sit amet porta efficitur.
      </p>
      <ul class="grid grid-cols-2 max-w-[290px] mt-5">
        <li class="flex py-2">
          <img src="./gambar/ceklis.svg" alt="">
          <p class="ml-2 text-sm font-bold">World Class</p>
        </li>
        <li class="flex py-2">
          <img src="./gambar/ceklis.svg" alt="">
          <p class="ml-2 text-sm font-bold">Flexible</p>
        </li>
        <li class="flex py-2">
          <img src="./gambar/ceklis.svg" alt="">
          <p class="ml-2 text-sm font-bold">Affordable</p>
        </li>
        <li class="flex py-2">
          <img src="./gambar/ceklis.svg" alt="">
          <p class="ml-2 text-sm font-bold">Job-relevan</p>
        </li>
      </ul>
      @if (Route::has('register'))
                
      @auth
          <a href="{{ url('/dashboard') }}" class="outline outline-2 py-3 px-8 text-[#FF994F] rounded-full text-sm ">Dashboard</a>
      @else
          {{-- <button class="outline outline-2 py-3 px-8 text-[#FF994F] rounded-full"><a href="{{ route('login') }}" class="">Log in</a></button> --}}
              <button class="bg-[#FF994F] py-3 px-8 text-white rounded-full"><a href="{{ route('register') }}" class="">Registration</a></button>
      @endauth
      @endif
      {{-- <button class="bg-[#FF994F] py-3 px-8 text-white rounded-full">Registration</button> --}}
    </div>
    <img src="./gambar/grafik.png" class="flex-1 w-full" alt="">
  </section>

  <section class="bg-[#FFFAF2] py-20 mb-20">
    <div class="container flex flex-col items-center space-y-5 lg:flex-row lg:space-x-10 lg:space-y-0">
    <div class="flex-1 space-y-6">
      <h1 class="text-5xl font-bold">Trusted <br> by 20,000+ People</h1>
      <p class="text-gray-500">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Donec fermentum massa sit amet porta efficitur.
      </p>
    </div>
    <div class="grid items-center justify-center grid-cols-1 grid-rows-2 sm:mt-8 lg:mt-0">
      <div class="shadow-sm max-w-[350px] rounded-md bg-white relative z-10 sm:ml-[250px]">
        <img src="./gambar/review1.png" class="w-full" alt="">
      </div>
      <div class="shadow-sm max-w-[350px] rounded-md bg-white relative mt-5 sm:mt-[-40px]">
        <img src="./gambar/review2.png" class="w-full" alt="">
      </div>
    </div>
    
    </div>
  </section>

  <section class="banner container relative mt-20 mb-20 bg-[#FFFAF2] min-h-[400px] flex items-center justify-center">
    <img src="./gambar/develop-quality-background.svg" alt="" class="absolute top-0 left-0">

    <div class="flex-1 space-y-6 ml-[80px]">
      <h2 class="text-5xl font-bold">Develop Your Quality</h2>
      <p class="text-gray-500">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum massa sit amet porta efficitur.
      </p>
      <button class="bg-[#FF994F] py-3 px-8 text-white rounded-full">Get Started</button>
    </div>
    <img src="./gambar/develop-quality.png" class="flex-1 w-1/3" alt="">
  </section>

  <footer class="bg-[#281900] text-white py-10">
    <div class="container">
      <div class="grid grid-cols-5 lg:grid-cols-12">
        <div class="col-span-5 lg:col-span-4 sm:pb-5 lg:pb-0">
          <a href="/">
            <img src="./gambar/logo-white.svg" alt=""/>
            <p class="text-sm text-white mt-7">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
              fermentum massa sit amet porta efficitur.
            </p>
            <ul class="flex justify-center gap-5 mt-10 md:justify-start">
              <li class="mr-2">
                <img src="./gambar/facebook logo.svg" alt="">
              </li>
              <li class="mr-2">
                <img src="./gambar/Vector.svg" alt="">
              </li>
              <li class="mr-2">
                <img src="./gambar/linkedin logo.svg" alt="">
              </li>
              <li class="mr-2">
                <img src="./gambar/instagram logo.svg" alt="">
              </li>
            </ul>
          </a>
        </div>
        <div class="col-span-2 sm:col-span-1">
          <h6 class="font-bold">Home</h6>
          <ul class="flex flex-col gap-3 mt-3 space-y-1">
            <li>Class</li>
            <li>Course</li>
            <li>About </li>
            <li>Mentors</li>
          </ul>
        </div>
        <div class="col-span-3 sm:col-span-2">
          <h6 class="font-bold">Our company</h6>
          <ul class="flex flex-col gap-5 mt-3 space-y-1">
            <li>Class Comunity</li>
            <li>Course company</li>
            <li>Company name</li>
            <li>mens course</li>
            <li>Courses.com</li>
          </ul>
        </div>
        <div class="col-span-5 sm:col-span-2">
          <h6 class="font-bold">Class</h6>
          <ul class="flex flex-col gap-5 mt-3 space-y-1">
            <li>Potography</li>
            <li>HTML & CSS</li>
            <li>JavaScript</li>
            <li>Java</li>
            <li>PHP</li>
            <li>UI/UX Design</li>
            <li>Web Design</li>
            <li>Design Grafis</li>
          </ul>
        </div>
        <div class="col-span-5 mt-4 lg:col-span-3 lg:mt-0">
          <h6 class="font-bold">About us</h6>
          <p class="my-2">You can contact Us to send email to us</p>
          <form action="?">
            <div class="flex w-full pr-3 overflow-hidden bg-white rounded-3xl">
              <input type="email " placeholder="Your email" class="w-full p-3 px-5 outline-none"/>
              <img src="./gambar/panah email.svg" alt="">
            </div>
          </form>
        </div>
      </div>
    </div>
  </footer>



  <script src="./js/landing.js"></script>
</body>

</html>