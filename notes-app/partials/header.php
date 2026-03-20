<header class="absolute inset-x-0 top-0 z-50">
  <nav aria-label="Global" class="flex items-center justify-between p-6 lg:px-8">

    <div class="flex lg:hidden">
      <button type="button" command="show-modal" commandfor="mobile-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-200">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="size-6">
          <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
    </div>

    <div class="hidden lg:flex lg:gap-x-12">
      <a href="/" class="text-sm/6 font-semibold text-white">Home</a>
      <a href="about" class="text-sm/6 font-semibold text-white">About</a>
      <a href="contact" class="text-sm/6 font-semibold text-white">Contact</a>
    </div>
  </nav>

  <!-- Mobile Menu -->
  <el-dialog>
    <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
      <div tabindex="0" class="fixed inset-0 focus:outline-none">
        <el-dialog-panel class="fixed inset-y-0 right-0 z-50 w-full bg-gray-900 p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-100/10">
          <div class="flex items-center justify-between">
            <a href="/" class="-m-1.5 p-1.5">
              <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" class="h-8 w-auto" alt="">
            </a>
            <button type="button" command="close" commandfor="mobile-menu" class="-m-2.5 rounded-md p-2.5 text-gray-200">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="size-6">
                <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>

          <div class="mt-6">
            <div class="space-y-2 py-6">
              <a href="/" class="block px-3 py-2 text-base font-semibold text-white hover:bg-white/5">Home</a>
              <a href="about" class="block px-3 py-2 text-base font-semibold text-white hover:bg-white/5">About</a>
              <a href="contact" class="block px-3 py-2 text-base font-semibold text-white hover:bg-white/5">Contact</a>
            </div>
          </div>
        </el-dialog-panel>
      </div>
    </dialog>
  </el-dialog>

</header>