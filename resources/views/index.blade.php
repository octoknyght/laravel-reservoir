<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge /">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Reservoir | Landing</title>

  @vite('resources/css/app.css')

</head>

<body class="bg-white font-Poppins">


  <!-- HEADER -->
  <header>
    <nav class="container flex items-center sm:mt-12">
      <div class="py-1">
        <img class="flex-none w-8 h-8 mr-2.5 -mt-2.3 ml-5" src="assets/img/index-icon.png" alt="index-icon">
      </div>
      <h3 class="font-sans hover:text-gray-600 text-3xl leading-4.5 font-bold">RESERVOIR</h3>
      <ul class="hidden sm:flex flex-1 justify-end items-center gap-12 text-reservoir-blue uppercase text-xs px-7 mb-2">
        <li class="cursor-pointer">Features</li>
        <li class="cursor-pointer">Pricing</li>
        <li class="cursor-pointer">Contact</li>
      </ul>
      <div class="flex sm:hidden flex-1 justify-end">
        <i class="text-2xl fa-solid fa-bars"></i>
      </div>
    </nav>
  </header>

  <!-- Hero -->
  <section class="relative">
    <div class="container flex flex-col-reverse lg:flex-row items-center gap-12 mt-14 lg:mt-28">
      <!-- Content -->
      <div class="flex flex-1 flex-col items-center lg:items-start">
        <h2 class="text-reservoir-blue text-center text-3xl md:text-4 lg:text-5xl text-center lg:text-left mb-6">
          Hi! Welcome
        </h2>
        <p class="text-reservoir-grey text-lg text-justify lg:text-left mb-6">
          A clean and simple interface to organize your water refilling station. Reservoir offers various features
          to make your service more convenient.
        </p>
        <div class="flex justify-center flex-wrap gap-6">
          <button type="button" class="btn btn-blue hover:bg-reservoir-white hover:text-black"> I'm a Vendor</button>
          <button type="button" class="btn btn-white hover:bg-sky-400 hover:text-white"> I'm a Customer</button>
        </div>
        <!-- Temporary Image -->
      </div>
      <div class="flex justify-center flex-1 mb-10 md:mb-16 lg:mb-0 z-10">
        <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="./assets/img/index-picture.png" alt="">
      </div>
    </div>
    <!-- Shape -->
    <div class="hidden md:block overflow-hidden bg-sky-400 rounded-l-full absolute h-80 w-2/4 top-32 right-0 lg:-bottom-28 lg:-right-36">
    </div>
  </section>

  <!-- Features -->
  <section class="bg-reservoir-white py-20 mt-20 lg:mt-60">
    <!-- Heading -->
    <div class="sm:w-3/4 lg:w-5/12 mx-auto px-2">
      <h1 class="text-3xl text-center text-reservoir-blue">Features</h1>
      <p class="text-center text-reservoir-grey mt-4"> We provide hassle free and fully internet based water delivery search for your office and home.
        Add your product, pick the best price or your favorite supplier, and track your delivery online!
      </p>
    </div>

    <!-- Feature 1 -->
    <div class="relative mt-20 lg:mt-24">
      <div class="container flex flex-col lg:flex-row items-center justify-center gap-x-24">
        <!-- Image -->
        <div class="flex flex-1 justify-center z-10 mb-10 lg:mb-0">
          <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="./assets/img/index-picture2.png" alt="">
        </div>
        <!-- Content -->
        <div class="flex flex-1 flex-col items-center lg:items-start">
          <h1 class="text-3xl text-reservoir-blue">Organize your Station</h1>
          <p class="text-reservoir-grey my-4 text-center lg:text-left sm:w-3/4 lg:w-full">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et netus et malesuada fames. Eu tincidunt tortor aliquam nulla facilisi cras.
          </p>
          <button type="button" class="btn btn-blue hover:bg-reservoir-white hover:text-black">More Info</button>
        </div>
      </div>
      <!-- Shape -->
      <div class="hidden lg:block overflow-hidden bg-sky-400 rounded-r-full absolute h-80 w-2/4  -bottom-24 -left-36"></div>
    </div>

    <!-- Feature 2 -->
    <div class="relative mt-20 lg:mt-52">
      <div class="container flex flex-col lg:flex-row-reverse items-center justify-center gap-x-24">
        <!-- Image -->
        <div class="flex flex-1 justify-center z-10 mb-10 lg:mb-0">
          <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="./assets/img/index-picture2.png" alt="">
        </div>
        <!-- Content -->
        <div class="flex flex-1 flex-col items-center lg:items-start">
          <h1 class="text-3xl text-reservoir-blue">Track Push and Pull Orders</h1>
          <p class="text-reservoir-grey my-4 text-center lg:text-left sm:w-3/4 lg:w-full">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et netus et malesuada fames. Eu tincidunt tortor aliquam nulla facilisi cras.
          </p>
          <button type="button" class="btn btn-blue hover:bg-reservoir-white hover:text-black">More Info</button>
        </div>
      </div>
      <!-- Shape -->
      <div class="hidden lg:block overflow-hidden bg-sky-400 rounded-l-full absolute h-80 w-2/4  -bottom-24 -right-36"></div>
    </div>

    <!-- Feature 3 -->
    <div class="relative mt-20 lg:mt-52">
      <div class="container flex flex-col lg:flex-row items-center justify-center gap-x-24">
        <!-- Image -->
        <div class="flex flex-1 justify-center z-10 mb-10 lg:mb-0">
          <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="./assets/img/index-picture2.png" alt="">
        </div>
        <!-- Content -->
        <div class="flex flex-1 flex-col items-center lg:items-start">
          <h1 class="text-3xl text-reservoir-blue">Point of Sale</h1>
          <p class="text-reservoir-grey my-4 text-center lg:text-left sm:w-3/4 lg:w-full">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et netus et malesuada fames. Eu tincidunt tortor aliquam nulla facilisi cras.
          </p>
          <button type="button" class="btn btn-blue hover:bg-reservoir-white hover:text-black">More Info</button>
        </div>
      </div>
      <!-- Shape -->
      <div class="hidden lg:block overflow-hidden bg-sky-400 rounded-r-full absolute h-80 w-2/4  -bottom-24 -left-36"></div>
    </div>
  </section>

  <!-- Card -->
  <section class="py-20 mt-20">
    <!-- Heading -->
    <div class="sm:w-3/4 lg:w-5/12 mx-auto px-2">
      <h1 class="text-3xl text-center text-reservoir-blue">Reviews</h1>
      <p class="text-center text-reservoir-grey mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et netus et malesuada fames. Eu tincidunt tortor aliquam nulla facilisi cras.
      </p>
    </div>
    <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16 max-w-screen-lg mt-16">
      <!-- Card1 -->
      <div class="flex flex-col rounded-md shadow-md lg:mb-16">
        <div class="p-6 flex flex-col items-center">
          <img class="h-48" src="./assets/img/sample-station-cards1.png" alt="">
          <h3 class="mt-5 mb-2 text-reservoir-blue text-lg">Station 1</h3>
          <p class="mb-2 text-reservoir-grey font-light text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <hr class="border-b border-reservoir-white ">
        <div class="flex p-6 ">
          <button type="button" class="flex-1 btn btn-blue hover:bg-reservoir-white hover:text-black">Read More</button>
        </div>
      </div>
      <!-- Card2 -->
      <div class="flex flex-col rounded-md shadow-md lg:my-8">
        <div class="p-6 flex flex-col items-center">
          <img class="h-48" src="./assets/img/sample-station-cards1.png" alt="">
          <h3 class="mt-5 mb-2 text-reservoir-blue text-lg">Station 2</h3>
          <p class="mb-2 text-reservoir-grey font-light text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <hr class="border-b border-reservoir-white ">
        <div class="flex p-6 ">
          <button type="button" class="flex-1 btn btn-blue hover:bg-reservoir-white hover:text-black">Read More</button>
        </div>
      </div>
      <!-- Card3 -->
      <div class="flex flex-col rounded-md shadow-md lg:mt-16">
        <div class="p-6 flex flex-col items-center">
          <img class="h-48" src="./assets/img/sample-station-cards1.png" alt="">
          <h3 class="mt-5 mb-2 text-reservoir-blue text-lg">Station 3</h3>
          <p class="mb-2 text-reservoir-grey font-light text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <hr class="border-b border-reservoir-white ">
        <div class="flex p-6 ">
          <button type="button" class="flex-1 btn btn-blue hover:bg-reservoir-white hover:text-black">Read More</button>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="bg-reservoir-white py-20">
    <div class="container">
      <!-- Heading -->
      <div class="sm:w-3/4 lg:w-5/12 mx-auto px-2">
        <h1 class="text-3xl text-center text-reservoir-blue">Frequently Asked Questions</h1>
        <p class="text-center text-reservoir-grey mt-4">
          Here are some of our FAQs. If you have any other questions you'd like answered please feel free to email us.
        </p>
      </div>
      <!-- FAQ Items -->
      <div class="flex flex-col sm:w-3/4 lg:w-5/12 mt-12 mx-auto">
        <div class="flex items-center border-b py-4">
          <span class="flex-1">Question 1</span>
          <i class="text-sky-400 fa-solid fa-chevron-down"></i>
        </div>
        <div class="flex items-center border-b py-4">
          <span class="flex-1">Question 2</span>
          <i class="text-sky-400 fa-solid fa-chevron-down"></i>
        </div>
        <div class="flex items-center border-b py-4">
          <span class="flex-1">Question 3</span>
          <i class="text-sky-400 fa-solid fa-chevron-down"></i>
        </div>
        <button type="button" class="mt-12 flex self-center btn btn-blue hover:bg-reservoir-white hover:text-black">More Info</button>
      </div>
    </div>
  </section>

  <!-- Contact Us -->
  <section class="bg-sky-400 text-white py-20">
    <div class="container">
      <div class="sm::w-3/4 lg:w-2/4 mx-auto">
        <p class="font-light uppercase text-center mb-8">5,000+ already joined</p>
        <h1 class="text-2xl text-center">Stay up-to-date with what we're doing</h1>
        <div class="flex flex-col sm:flex-row gap-6 mt-8">
          <input type="text" placeholder="Enter your email address" class="focus:outline-none flex-1  px-2 py-3 rounded-md text-black">
          <button type="button" class="btn bg-reservoir-red hover:bg-reservoir-white hover:text-black">Contact Us</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-reservoir-blue py-8">
    <div class="container flex flex-col md:flex-row items-center">
      <div class="flex flex-1  flex-wrap  items-center justify-center md:justify-start  gap-12">
        <img class="w-8 h-8" src="assets/img/index-icon.png" alt="">
        <ul class="flex text-white uppercase gap-12 text-xs">
          <li class="cursor-pointer">Features</li>
          <li class="cursor-pointer">Pricing</li>
          <li class="cursor-pointer">Contact</li>
          <li class="cursor-pointer">About us</li>
        </ul>
      </div>
      <div class="flex gap-10 mt-12 md:mt-0">
        <li class="list-none inline-block"><i class=" text-white text-2xl fa-brands fa-square-facebook"></i></li>
        <li class="list-none inline-block"><i class="text-white text-2xl fa-brands fa-twitter"></i></li>
      </div>
    </div>
  </footer>
</body>

</html>