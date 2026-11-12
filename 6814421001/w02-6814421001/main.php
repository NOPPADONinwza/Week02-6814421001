<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Week02.com - หน้าหลัก</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Alpine Plugins & Core สำหรับ Sidebar และ Carousel -->
  <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Kanit', sans-serif; }
    html { scroll-behavior: smooth; }
    [x-cloak] { display: none !important; }
  </style>
</head>
<body class="bg-gray-100 text-gray-800">

<div x-data="{ showSidebar: false }" class="relative flex w-full flex-col md:flex-row">
    <a class="sr-only" href="#main-content">skip to the main content</a>
    
    <!-- dark overlay -->
    <div x-cloak x-show="showSidebar" class="fixed inset-0 z-10 bg-neutral-950/10 backdrop-blur-xs md:hidden" aria-hidden="true" x-on:click="showSidebar = false" x-transition.opacity></div>

    <!-- ================= SIDEBAR ================= -->
    <nav x-cloak class="fixed left-0 z-20 flex h-svh w-60 shrink-0 flex-col border-r border-neutral-300 bg-neutral-50 p-4 transition-transform duration-300 md:w-64 md:translate-x-0 md:sticky md:top-0" x-bind:class="showSidebar ? 'translate-x-0' : '-translate-x-60'" aria-label="sidebar navigation">
        
        <!-- Logo -->
        <a href="main.php" class="ml-2 w-fit text-2xl font-bold text-blue-600 flex items-center gap-2">
            <span>Week02.com</span>
        </a>

        <!-- Search -->
        <div class="relative my-4 flex w-full max-w-xs flex-col gap-1 text-neutral-600">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" class="absolute left-2 top-1/2 size-5 -translate-y-1/2 text-neutral-600/50" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>
            </svg>
            <input type="search" class="w-full border border-neutral-300 rounded-sm bg-white px-2 py-1.5 pl-9 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600" name="search" aria-label="Search" placeholder="ค้นหา..."/>
        </div>

        <!-- Sidebar Links -->
        <div class="flex flex-col gap-2 overflow-y-auto pb-6">

            <!-- หน้าหลัก (Active) -->
            <a href="main.php" class="flex items-center rounded-sm gap-2 bg-blue-600 px-2 py-2 text-sm font-medium text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true">
                    <path d="M15.5 2A1.5 1.5 0 0 0 14 3.5v13a1.5 1.5 0 0 0 1.5 1.5h1a1.5 1.5 0 0 0 1.5-1.5v-13A1.5 1.5 0 0 0 16.5 2h-1ZM9.5 6A1.5 1.5 0 0 0 8 7.5v9A1.5 1.5 0 0 0 9.5 18h1a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 10.5 6h-1ZM3.5 10A1.5 1.5 0 0 0 2 11.5v5A1.5 1.5 0 0 0 3.5 18h1A1.5 1.5 0 0 0 6 16.5v-5A1.5 1.5 0 0 0 4.5 10h-1Z"/>
                </svg>
                <span>หน้าหลัก (Home)</span>
            </a>

            <!-- ประวัติส่วนตัว -->
            <a href="main.php#profile" class="flex items-center rounded-sm gap-2 px-2 py-2 text-sm font-medium text-neutral-600 hover:bg-black/5 hover:text-neutral-900">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true">
                    <path d="M10 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM3.465 14.493a1.23 1.23 0 0 0 .41 1.412A9.957 9.957 0 0 0 10 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 0 0-13.074.003Z"/>
                </svg>
                <span>ประวัติส่วนตัว (Profile)</span>
            </a>

            <!-- ประวัติการทำงาน (Bio) -->
            <a href="bio.php" class="flex items-center rounded-sm gap-2 px-2 py-2 text-sm font-medium text-neutral-600 hover:bg-black/5 hover:text-neutral-900">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 2c-2.236 0-4.43.18-6.57.524C1.993 2.755 1 4.014 1 5.426v5.148c0 1.413.993 2.67 2.43 2.902 1.168.188 2.352.327 3.55.414.28.02.521.18.642.413l1.713 3.293a.75.75 0 0 0 1.33 0l1.713-3.293a.783.783 0 0 1 .642-.413 41.102 41.102 0 0 0 3.55-.414c1.437-.231 2.43-1.49 2.43-2.902V5.426c0-1.413-.993-2.67-2.43-2.902A41.289 41.289 0 0 0 10 2ZM6.75 6a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Zm0 2.5a.75.75 0 0 0 0 1.5h3.5a.75.75 0 0 0 0-1.5h-3.5Z" clip-rule="evenodd"/>
                </svg>
                <span>ประวัติการทำงาน (Bio)</span>
            </a>

            <!-- รายการงาน (Assignment) -->
            <a href="assignment.php" class="flex items-center rounded-sm gap-2 px-2 py-2 text-sm font-medium text-neutral-600 hover:bg-black/5 hover:text-neutral-900">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 2a6 6 0 0 0-6 6c0 1.887-.454 3.665-1.257 5.234a.75.75 0 0 0 .515 1.076 32.91 32.91 0 0 0 3.256.508 3.5 3.5 0 0 0 6.972 0 32.903 32.903 0 0 0 3.256-.508.75.75 0 0 0 .515-1.076A11.448 11.448 0 0 1 16 8a6 6 0 0 0-6-6ZM8.05 14.943a33.54 33.54 0 0 0 3.9 0 2 2 0 0 1-3.9 0Z" clip-rule="evenodd"/>
                </svg>
                <span>รายการงาน (Assignment)</span>
            </a>

        </div>

        <!-- Profile Menu ด้านล่าง Sidebar -->
        <div x-data="{ menuIsOpen: false }" class="mt-auto relative" x-on:keydown.esc.window="menuIsOpen = false">
            <button type="button" class="flex w-full items-center rounded-sm gap-2 p-2 text-left text-neutral-600 hover:bg-black/5 hover:text-neutral-900" x-bind:class="menuIsOpen ? 'bg-black/10' : ''" aria-haspopup="true" x-on:click="menuIsOpen = ! menuIsOpen" x-bind:aria-expanded="menuIsOpen">
                <div class="size-8 rounded-sm bg-blue-600 text-white flex items-center justify-center font-bold shrink-0">น</div>
                <div class="flex flex-col overflow-hidden">
                    <span class="text-sm font-bold text-neutral-900 truncate">นพดล แจ่มใส</span>
                    <span class="text-xs text-neutral-500 truncate">@6814421001</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" class="ml-auto size-4 shrink-0" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
                </svg>
            </button>  
            
            <!-- Dropdown Menu -->
            <div x-cloak x-show="menuIsOpen" class="absolute bottom-14 left-0 z-30 w-48 border divide-y divide-neutral-300 border-neutral-300 bg-white rounded-sm shadow-lg" role="menu" x-on:click.outside="menuIsOpen = false">
                <div class="flex flex-col py-1.5">
                    <a href="main.php#profile" class="flex items-center gap-2 px-3 py-1.5 text-sm font-medium text-neutral-600 hover:bg-black/5 hover:text-neutral-900" role="menuitem">
                        <span>ดูประวัติส่วนตัว</span>
                    </a>
                    <a href="bio.php" class="flex items-center gap-2 px-3 py-1.5 text-sm font-medium text-neutral-600 hover:bg-black/5 hover:text-neutral-900" role="menuitem">
                        <span>ประวัติการทำงาน (Bio)</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- ================= MAIN CONTENT ================= -->
    <div id="main-content" class="min-h-svh w-full overflow-y-auto p-4 md:p-8 bg-gray-100 flex flex-col">
      <div class="max-w-4xl w-full mx-auto space-y-6 flex-grow">

        <!-- 1. PENGUIN UI CAROUSEL -->
        <section class="rounded-lg overflow-hidden shadow-md border border-gray-300 bg-white">
          <div x-data="{            
              slides: [                
                  {
                      imgSrc: 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-1.webp',
                      imgAlt: 'Slide 1',  
                      title: 'ยินดีต้อนรับสู่ Week01.com',
                      description: 'เว็บไซต์รวบรวมประวัติส่วนตัวและผลงานของ นาย นพดล แจ่มใส มหาวิทยาลัยราชภัฏรำไพพรรณี',              
                  },                
                  {                    
                      imgSrc: 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-2.webp',                    
                      imgAlt: 'Slide 2',  
                      title: 'การพัฒนาเว็บไซต์ (Web Development)',
                      description: 'เรียนรู้การสร้างหน้าเว็บด้วย PHP, Tailwind CSS และคอมโพเนนต์จาก Penguin UI',              
                  },                
                  {                    
                      imgSrc: 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-3.webp',                    
                      imgAlt: 'Slide 3',    
                      title: 'รายการส่งงาน (Assignments)',
                      description: 'สามารถกดดูรายละเอียดงานทั้งหมดได้ที่เมนูด้านซ้ายมือ',             
                  },            
              ],            
              currentSlideIndex: 1,
              previous() {                
                  this.currentSlideIndex = (this.currentSlideIndex > 1) ? this.currentSlideIndex - 1 : this.slides.length;
              },            
              next() {                
                  this.currentSlideIndex = (this.currentSlideIndex < this.slides.length) ? this.currentSlideIndex + 1 : 1;
              },        
          }" class="relative w-full overflow-hidden">

              <button type="button" class="absolute left-4 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/50 p-2 text-neutral-800 transition hover:bg-white/80 cursor-pointer" aria-label="previous slide" x-on:click="previous()">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="3" class="size-5 pr-0.5" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                  </svg>
              </button>

              <button type="button" class="absolute right-4 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/50 p-2 text-neutral-800 transition hover:bg-white/80 cursor-pointer" aria-label="next slide" x-on:click="next()">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="3" class="size-5 pl-0.5" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                  </svg>
              </button>
             
              <div class="relative h-64 md:h-80 w-full">
                  <template x-for="(slide, index) in slides">
                      <div x-cloak x-show="currentSlideIndex == index + 1" class="absolute inset-0" x-transition.opacity.duration.700ms>
                          <div class="lg:px-24 lg:py-12 absolute inset-0 z-10 flex flex-col items-center justify-end gap-2 bg-gradient-to-t from-neutral-950/90 via-neutral-950/40 to-transparent px-12 py-10 text-center">
                              <h3 class="w-full text-balance text-2xl lg:text-3xl font-bold text-white" x-text="slide.title"></h3>
                              <p class="lg:w-3/4 w-full text-pretty text-sm text-neutral-200" x-text="slide.description"></p>
                          </div>
                          <img class="absolute w-full h-full inset-0 object-cover" x-bind:src="slide.imgSrc" x-bind:alt="slide.imgAlt" />
                      </div>
                  </template>
              </div>
              
              <div class="absolute bottom-3 left-1/2 z-20 flex -translate-x-1/2 gap-3 px-2 py-1" role="group" aria-label="slides">
                  <template x-for="(slide, index) in slides">
                      <button type="button" class="size-2.5 rounded-full transition cursor-pointer" x-on:click="currentSlideIndex = index + 1" x-bind:class="[currentSlideIndex === index + 1 ? 'bg-white scale-110' : 'bg-white/50']" x-bind:aria-label="'slide ' + (index + 1)"></button>
                  </template>
              </div>
          </div>
        </section>

        <!-- 2. PROFILE -->
        <section id="profile" class="bg-white p-6 rounded-lg shadow-sm border border-gray-300">
          <h2 class="text-xl font-bold text-center text-gray-800 mb-6 bg-gray-100 py-2.5 rounded border border-gray-200">
            --- ประวัติส่วนตัว (My Profile) ---
          </h2>

          <div class="text-center mb-6">
            <div class="w-32 h-32 bg-gray-200 border-2 border-dashed border-gray-400 rounded-full mx-auto flex items-center justify-center text-gray-600 text-4xl shadow-inner">
              👤
            </div>
            <p class="text-xs text-gray-500 mt-2">[ รูปถ่ายนักศึกษา ]</p>
          </div>

          <div class="max-w-md mx-auto">
            <table class="w-full border-collapse border border-gray-300 text-sm">
              <tbody>
                <tr>
                  <td class="border border-gray-300 p-2.5 font-bold bg-gray-50 w-1/3">ชื่อ-นามสกุล:</td>
                  <td class="border border-gray-300 p-2.5">นาย นพดล แจ่มใส</td>
                </tr>
                <tr>
                  <td class="border border-gray-300 p-2.5 font-bold bg-gray-50">สถานศึกษา:</td>
                  <td class="border border-gray-300 p-2.5">มหาวิทยาลัยราชภัฏรำไพพรรณี</td>
                </tr>
                <tr>
                  <td class="border border-gray-300 p-2.5 font-bold bg-gray-50">อายุ:</td>
                  <td class="border border-gray-300 p-2.5">19 ปี</td>
                </tr>
                <tr>
                  <td class="border border-gray-300 p-2.5 font-bold bg-gray-50">ส่วนสูง:</td>
                  <td class="border border-gray-300 p-2.5">176 ซม.</td>
                </tr>
                <tr>
                  <td class="border border-gray-300 p-2.5 font-bold bg-gray-50">น้ำหนัก:</td>
                  <td class="border border-gray-300 p-2.5">53 กก.</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="mt-6 p-3 bg-yellow-50 border border-yellow-300 rounded text-xs text-gray-600 text-center">
            📌 หมายเหตุ: เว็บไซต์นี้จัดทำขึ้นโดย นพดล แจ่มใส เพื่อใช้ในการเรียนการสอน
          </div>
        </section>

      </div>

      <!-- Footer -->
      <footer class="mt-8 pt-4 border-t border-gray-300 text-center text-xs text-gray-500">
        <p>© 2026 Week02.com - นาย นพดล แจ่มใส | มหาวิทยาลัยราชภัฏรำไพพรรณี</p>
      </footer>
    </div>

    <!-- Toggle Button สำหรับหน้าจอมือถือ -->
    <button x-cloak class="fixed right-4 top-4 z-30 rounded-full bg-blue-600 p-3 md:hidden text-white shadow-lg" x-on:click="showSidebar = ! showSidebar">
        <svg x-show="showSidebar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-5" aria-hidden="true">
            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
        </svg>
        <svg x-show="! showSidebar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-5" aria-hidden="true">
            <path d="M0 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5-1v12h9a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zM4 2H2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h2z"/>
        </svg>
        <span class="sr-only">sidebar toggle</span>
    </button>
</div>

</body>
</html>