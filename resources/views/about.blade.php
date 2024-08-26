<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @vite(['resources/css/app.css','resources/js/app.js'])
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>

        <!-- Styles -->
       
        

    </head>
    <body>
  
    
    
 <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">

<div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
<a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
    <img src="https://i1.sndcdn.com/artworks-cRBnOj3dkpKHRYkp-czaumw-t500x500.jpg" class="h-8" alt="">
    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Chungus</span>
</a>
<div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">

   <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
   <li>
      <a href={{ route('register') }} class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Register</a>
    </li>
   <li>
      <a href={{ route('login') }} class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Login</a>
    </li>
   </ul>
    <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
      </svg>
  </button>
</div>
<div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
  <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
    <li>
      <a href={{route('upgrade')}} class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Upgrade to Chungus+</a>
    </li>
    <li>
      <a href={{route('about')}} class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
    </li>
    <li>
      <a href={{route('search')}} class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Search AI Images</a>
    </li>
    
    
    <li>
      <a href={{route('contact')}} class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
    </li>
  </ul>
</div>
</div>

</nav>
<br><br><br><br>


                                            
<br><br>

<section class="py-24 relative xl:mr-0 lg:mr-5 mr-0">
        <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
            <div class="w-full justify-start items-center xl:gap-12 gap-10 grid lg:grid-cols-2 grid-cols-1">
                <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                    <div class="w-full flex-col justify-center items-start gap-8 flex">
                        <div class="flex-col justify-start lg:items-start items-center gap-4 flex">
                            <h6 class="text-gray-400 text-base font-normal leading-relaxed">About Us</h6>
                            <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                                <h2
                                    class="text-indigo-700 text-4xl font-bold font-manrope leading-normal lg:text-start text-center">
                                    The Tale of Our Achievement Story</h2>
                                <p
                                    class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center">
                                    Our achievement story is a testament to teamwork and perseverance. Together, we've
                                    overcome challenges, celebrated victories, and created a narrative of progress and
                                    success.</p>
                            </div>
                        </div>
                        <div class="w-full flex-col justify-center items-start gap-6 flex">
                            <div class="w-full justify-start items-center gap-8 grid md:grid-cols-2 grid-cols-1">
                                <div
                                    class="w-full h-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex">
                                    <h4 class="text-gray-900 text-2xl font-bold font-manrope leading-9">33+ Years</h4>
                                    <p class="text-gray-500 text-base font-normal leading-relaxed">Influencing Digital
                                        Landscapes Together</p>
                                </div>
                                <div
                                    class="w-full h-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex">
                                    <h4 class="text-gray-900 text-2xl font-bold font-manrope leading-9">125+ Projects
                                    </h4>
                                    <p class="text-gray-500 text-base font-normal leading-relaxed">Excellence Achieved
                                        Through Success</p>
                                </div>
                            </div>
                            <div class="w-full h-full justify-start items-center gap-8 grid md:grid-cols-2 grid-cols-1">
                                <div
                                    class="w-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex">
                                    <h4 class="text-gray-900 text-2xl font-bold font-manrope leading-9">26+ Awards</h4>
                                    <p class="text-gray-500 text-base font-normal leading-relaxed">Our Dedication to
                                        Innovation Wins Understanding</p>
                                </div>
                                <div
                                    class="w-full h-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex">
                                    <h4 class="text-gray-900 text-2xl font-bold font-manrope leading-9">99% Happy
                                        Clients</h4>
                                    <p class="text-gray-500 text-base font-normal leading-relaxed">Mirrors our Focus on
                                        Client Satisfaction.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button
                        class="sm:w-fit w-full group px-3.5 py-2 bg-indigo-50 hover:bg-indigo-100 rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] transition-all duration-700 ease-in-out justify-center items-center flex">
                        <span
                            class="px-1.5 text-indigo-600 text-sm font-medium leading-6 group-hover:-translate-x-0.5 transition-all duration-700 ease-in-out">Read
                            More</span>
                        <svg class="group-hover:translate-x-0.5 transition-all duration-700 ease-in-out"
                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <path d="M6.75265 4.49658L11.2528 8.99677L6.75 13.4996" stroke="#4F46E5" stroke-width="1.6"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="w-full lg:justify-start justify-center items-start flex">
                    <div
                        class="sm:w-[564px] w-full sm:h-[646px] h-full sm:bg-gray-100 rounded-3xl sm:border border-gray-200 relative">
                        <img class="sm:mt-5 sm:ml-5 w-full h-full rounded-3xl"
                            src="https://pagedone.io/asset/uploads/1717742431.png" alt="about Us image" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white dark:bg-gray-900">
  <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
      <dl class="grid max-w-screen-md gap-8 mx-auto text-gray-900 sm:grid-cols-3 dark:text-white">
          <div class="flex flex-col items-center justify-center">
              <dt class="mb-2 text-3xl md:text-4xl font-extrabold">73M+</dt>
              <dd class="font-light text-gray-500 dark:text-gray-400">SATISFIED</dd>
          </div>
          <div class="flex flex-col items-center justify-center">
              <dt class="mb-2 text-3xl md:text-4xl font-extrabold">1B+</dt>
              <dd class="font-light text-gray-500 dark:text-gray-400">Concurrent CHUNGUS + user</dd>
          </div>
          <div class="flex flex-col items-center justify-center">
              <dt class="mb-2 text-3xl md:text-4xl font-extrabold">4M+</dt>
              <dd class="font-light text-gray-500 dark:text-gray-400">Organizations uses +</dd>
          </div>
      </dl>
  </div>
</section>                           
    <section class="py-24 ">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
              <div class="mb-14 text-center">
                  <h2 class="text-4xl text-center font-bold text-gray-900 leading-[3.25rem] mb-6 max-w-max lg:max-w-3xl lg:mx-auto">This is Chungus</h2>
                  <p class="text-base font-normal text-gray-500 lg:max-w-2xl lg:mx-auto mb-8">Using technology to make creativity simpler, smarter and more rewarding. </p>  
                  <div class="flex flex-col justify-center md:flex-row gap-5 max-w-lg mx-auto md:max-w-2xl lg:max-w-full">   
                      <a href="javascript:;"  class="cursor-pointer bg-indigo-600 py-3 px-6 rounded-full flex items-center justify-center text-sm font-semibold text-white transition-all duration-500 focus:outline-none hover:bg-indigo-700">
                          Get started
                      </a>
                      <a href="javascript:;"  class="cursor-pointer bg-indigo-50 py-3 px-6 rounded-full flex items-center justify-center  text-sm font-semibold text-indigo-600 transition-all duration-500 focus:outline-none hover:bg-indigo-100">
                          Learn more
                      </a>
                  </div>
              </div>
              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-lg mx-auto md:max-w-2xl lg:max-w-full">
                  <div class="relative w-full h-auto md:col-span-2">
                      <div class="bg-gray-800 rounded-2xl flex  justify-between flex-row flex-wrap">
                          <div class="p-5  xl:p-8 w-full md:w-1/2 ">
                              <div class="block">
                                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M15 12.5V18.75M18.75 2.5L11.25 2.5M15 28.75C8.7868 28.75 3.75 23.7132 3.75 17.5C3.75 11.2868 8.7868 6.25 15 6.25C21.2132 6.25 26.25 11.2868 26.25 17.5C26.25 23.7132 21.2132 28.75 15 28.75Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                      </svg>                                    
                              </div>
                              <h3 class="text-lg font-bold xl:text-xl text-white py-5 w-full xl:w-64">
                                  Accomplish tasks swiftly with online tools.
                              </h3>
                              <p class="text-xs font-normal text-gray-300 w-full mb-8 xl:w-64">Get quoted and covered in under 10 minutes online. no paperwork or waiting any more </p>
                              <button class="py-2 px-5 border border-solid border-gray-300 rounded-full gap-2 text-xs text-white font-semibold flex items-center justify-between transition-all duration-500 hover:bg-white/5">
                                  View More
                                  <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M1 9L3.58579 6.41421C4.25245 5.74755 4.58579 5.41421 4.58579 5C4.58579 4.58579 4.25245 4.25245 3.58579 3.58579L1 1" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                      </svg>
                                      
                              </button>
                          </div>
                          <div class="relative hidden h-auto md:w-1/2 md:block">
                              <img src="https://pagedone.io/asset/uploads/1695028873.png" alt="Header tailwind Section" class="h-full ml-auto">
                          </div>
                      </div>
                  </div>
                  <div class="relative w-full h-auto">
                      <div class="bg-indigo-500 rounded-2xl p-5  xl:p-8 h-full">
                          <div class="block">
                              <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M24.6429 11.4286C24.6429 14.3872 20.2457 16.7857 14.8214 16.7857C9.3972 16.7857 5 14.3872 5 11.4286M24.6429 16.7857C24.6429 19.7444 20.2457 22.1429 14.8214 22.1429C9.3972 22.1429 5 19.7444 5 16.7857M24.6429 22.1429C24.6429 25.1015 20.2457 27.5 14.8214 27.5C9.3972 27.5 5 25.1015 5 22.1429M24.6429 6.96429C24.6429 9.42984 20.2457 11.4286 14.8214 11.4286C9.3972 11.4286 5 9.42984 5 6.96429C5 4.49873 9.3972 2.5 14.8214 2.5C20.2457 2.5 24.6429 4.49873 24.6429 6.96429Z" stroke="white" stroke-width="2" stroke-linecap="round"></path>
                                  </svg>                                
                          </div>
                          <h3 class="py-5 text-white text-lg font-bold xl:text-xl">Improved technology yields greater value</h3>
                          <p class="text-xs font-normal text-white mb-8">We’ve eliminated old analogue process with state-of-the art tech </p>
                          <button class="py-2 px-5 border border-solid border-gray-300 rounded-full gap-2 text-xs text-white font-semibold flex items-center justify-between transition-all duration-500 hover:bg-white/5">
                              View More
                              <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M1 9L3.58579 6.41421C4.25245 5.74755 4.58579 5.41421 4.58579 5C4.58579 4.58579 4.25245 4.25245 3.58579 3.58579L1 1" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                  </svg>
                                  
                          </button>
                      </div>
                  </div>
                  <div class="relative w-full h-auto">
                      <div class="bg-violet-500 rounded-2xl p-5 xl:p-8 h-full">
                          <div class="block">
                              <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M26.7301 15.661C26.7301 22.1995 21.306 27.5 14.6151 27.5C7.9241 27.5 2.5 22.1995 2.5 15.661C2.5 9.1225 7.9241 3.822 14.6151 3.822M18.1313 10.1507L18.1313 4.85383C18.1313 3.22503 19.6455 2.00299 21.1519 2.70013C23.7608 3.90751 26.6177 6.25557 27.456 10.2563C27.7542 11.6798 26.4931 12.8563 25.0064 12.8368L20.7873 12.7814C19.3147 12.762 18.1313 11.5899 18.1313 10.1507Z" stroke="white" stroke-width="2" stroke-linecap="round"></path>
                                  </svg>
                                                                 
                          </div>
                          <h3 class="py-5 text-white text-lg font-bold xl:text-xl">Build wealth with insurance planning</h3>
                          <p class="text-xs font-normal text-white mb-8">Every life plan policy has a built-in wealth bonus, and we contribute too    </p>
                          <button class="py-2 px-5 border border-solid border-gray-300 rounded-full gap-2 text-xs text-white font-semibold flex items-center justify-between transition-all duration-500 hover:bg-white/5">
                              View More
                              <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M1 9L3.58579 6.41421C4.25245 5.74755 4.58579 5.41421 4.58579 5C4.58579 4.58579 4.25245 4.25245 3.58579 3.58579L1 1" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                  </svg>
                                  
                          </button>
                      </div>
                  </div>
              
              </div>
        </div>
    </section>

<footer class="p-4 bg-grey sm:p-6 dark:bg-gray-800">
    <div class="mx-auto max-w-screen-xl">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="" class="flex items-center">
                    <img src="https://i1.sndcdn.com/artworks-cRBnOj3dkpKHRYkp-czaumw-t500x500.jpg" class="mr-3 h-8" alt="FlowBite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Chungus</span>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="" class="hover:underline">Chungus</a>
                        </li>
                        <li>
                            <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                        </li>
                        <li>
                            <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com" class="hover:underline">Chungus™</a>. All Rights Reserved.
            </span>
            <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                </a>
            </div>
        </div>
    </div>
</footer>

        
    </body>
</html>
