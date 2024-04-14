
<div class="bg-black md:block hidden">
    <div class="max-w-screen-lg px-2 py-2 flex justify-between text-[0.7rem] text-white mx-auto">
        <div class="flex gap-5">
            <span class="inline-flex gap-1 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                </svg>
                  
                +91-7408348080, +91-9454854190
            </span>
            <span class="inline-flex gap-1 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                </svg>
                  
                info.fiddy@gmail.com
            </span>
        </div>
        <div class="flex gap-2">
            <span class="inline-flex gap-1 items-center">

            </span>
        </div>
    </div>
</div>
<nav x-data="{mobile_menu:false}" class="bg-white border-gray-200 dark:bg-white h-16 md:h-auto shadow shadow-gray-700/10">
    <div class="max-w-screen-lg flex flex-wrap items-center justify-between mx-auto px-4 py-1">
      <a href="https://www.fiddy.in/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="{{asset('images/fiddy-logo-black.png')}}" class="h-14" alt="Fiddy Logo" />
      </a>
      <button @click="mobile_menu=!mobile_menu" data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg  x-bind:class="{'hidden':mobile_menu==true,'':mobile_menu==false}" class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
          <svg  x-bind:class="{'':mobile_menu==true,'hidden':mobile_menu==false}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
          </svg>
          
      </button>
      <div class="z-10 w-full md:!scale-y-100 block md:w-auto overflow-hidden origin-top ease-linear duration-200" x-bind:class="{'scale-y-100':mobile_menu==true,'scale-y-0':mobile_menu==false}" id="navbar-default">
        <ul class="text-sm flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-white md:dark:bg-white dark:border-gray-700">
          <li>
            <a href="https://www.fiddy.in/" class="block py-2 px-3 t uppercase font-light hover:font-thin text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary/80 md:p-0 dark:text-black md:dark:hover:text-primary/80 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" aria-current="page">Home</a>
          </li>
          <li>
            <a href="https://www.fiddy.in/studio/" class="block py-2 px-3 t uppercase font-light hover:font-thin text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary/80 md:p-0 dark:text-black md:dark:hover:text-primary/80 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
          </li>
          <li>
            <a href="https://www.fiddy.in/products/" class="block py-2 px-3 t uppercase font-light hover:font-thin text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary/80 md:p-0 dark:text-black md:dark:hover:text-primary/80 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Our Products</a>
          </li>
          <li>
            <a href="https://www.fiddy.in/contact/" class="block py-2 px-3 t uppercase font-light hover:font-thin text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary/80 md:p-0 dark:text-black md:dark:hover:text-primary/80 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact Us</a>
          </li>
          <li>
            <a href="https://www.fiddy.in/career/" class="block py-2 px-3 t uppercase font-light hover:font-thin text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary/80 md:p-0 dark:text-black md:dark:hover:text-primary/80 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Career</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  