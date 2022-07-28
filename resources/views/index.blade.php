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

<body class="bg-slate-100 font-Poppins">


  <!-- HEADER -->
  <header>
    <nav class="container flex items-center sm:mt-12">
      <div class="py-1">
        <img class="flex-none w-8 h-8 mr-2.5 -mt-2.3 ml-5" src="assets/img/index-icon.png" alt="index-icon">
      </div>
      <h3 class="font-sans hover:text-gray-600 text-3xl leading-4.5 font-bold">RESERVOIR</h3>
      <ul class="hidden sm:flex flex-1 justify-end items-center gap-12 text-bookmark-blue uppercase text-xs px-7 mb-2">
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
        <h2 class="text-bookmark-blue text-3xl md:text-4 lg:text-5xl text-center lg:text-left mb-6">
          Hi! Welcome
        </h2>
        <p class="text-bookmark-grey text-lg text-justify lg:text-left mb-6">
          We provide hassle free and fully internet based water delivery search for your office and home. <br>
          Add your product, pick the best price or your favorite supplier, and track your delivery online!
        </p>
        <div class="flex justify-center flex-wrap gap-6">
          <button type="button" class="btn btn-blue hover:bg-bookmark-white hover:text-black"> I'm a Vendor</button>
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
</body>

</html>