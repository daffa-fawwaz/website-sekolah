<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HSI - IDN News</title>
    <link href="./src/output.css" rel="stylesheet" />
    <link href="./image/logo-idn 1.png" rel="icon" />
  </head>
  <body class="dark:bg-gray-950">
    <nav class="w-full fixed z-30 bg-white dark:bg-gray-950">
      <div class="container mx-auto p-4 flex justify-between items-center">
        <div class="w-12 h-12">
          <img src="./image/logo-idn 1.png" alt="" />
        </div>
        <div class="hidden lg:block">
          <ul class="flex gap-9 text-slate-600 dark:text-slate-50">
            <li class="hover:text-blue-500">
              <a href="index.html">Beranda</a>
            </li>
            <li class="hover:text-blue-500">
              <a href="#about">Tentang kami</a>
            </li>
            <li class="hover:text-blue-500"><a href="#jurusan">Jurusan</a></li>
            <li class="hover:text-blue-500"><a href="#ekskul">Ekskul</a></li>
            <li class="hover:text-blue-500"><a href="#berita">Berita</a></li>
            <li class="hover:text-blue-500">
              <a href="#dokumentasi">Dokumentasi</a>
            </li>
            <li class="hover:text-blue-500"><a href="#alumni">Alumni</a></li>
          </ul>
        </div>
        <div
          onclick="openNavbar()"
          class="lg:hidden cursor-pointer fill-black dark:fill-white"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="32"
            height="32"
            viewBox="0 0 256 256"
          >
            <path
              d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z"
            ></path>
          </svg>
        </div>
        <div class="hidden lg:block">
          <input type="checkbox" class="peer sr-only opacity-0" id="toggle" />
          <label
            for="toggle"
            class="relative flex h-6 w-11 cursor-pointer items-center rounded-full bg-gray-400 px-0.5 outline-gray-400 transition-colors before:h-5 before:w-5 before:rounded-full before:bg-white before:shadow before:transition-transform before:duration-300 peer-checked:bg-blue-600 peer-checked:before:translate-x-full peer-focus-visible:outline peer-focus-visible:outline-offset-2 peer-focus-visible:outline-gray-400 peer-checked:peer-focus-visible:outline-blue-700"
            for="toggle "
          >
            <span class="sr-only">Enable</span>
          </label>
        </div>
      </div>
    </nav>

    <!-- NAV MOBILE -->
    <aside
      class="fixed z-30 -translate-x-full w-full h-full bg-[#00000081] transition-all duration-200 ease-in-out"
    >
      <div class="container w-72 h-full bg-white dark:bg-gray-950">
        <div class="flex flex-col p-2 relative">
          <div onclick="closeNavbar()" class="absolute cursor-pointer right-2">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="32"
              height="32"
              viewBox="0 0 256 256"
              class="fill-black dark:fill-white"
            >
              <path
                d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"
              ></path>
            </svg>
          </div>
          <div class="absolute left-2 mt-1">
            <div class="w-11 h-11">
              <img src="./image/logo-idn 1.png" alt="" />
            </div>
          </div>
          <ul
            class="mt-28 flex flex-col gap-7 text-left ml-5 text-slate-500 font-semibold dark:text-gray-200"
          >
            <li class="hover:text-blue-500">
              <a href="index.html">Beranda</a>
            </li>
            <li class="hover:text-blue-500">
              <a href="#about">Tentang kami</a>
            </li>
            <li class="hover:text-blue-500"><a href="#jurusan">Jurusan</a></li>
            <li class="hover:text-blue-500"><a href="#ekskul">Ekskul</a></li>
            <li class="hover:text-blue-500"><a href="#berita">Berita</a></li>
            <li class="hover:text-blue-500">
              <a href="#dokumentasi">Dokumentasi</a>
            </li>
            <li class="hover:text-blue-500"><a href="#alumni">Alumni</a></li>
            <li class="hover:text-blue-500">
              <input
                type="checkbox"
                class="peer sr-only opacity-0"
                id="toggle-mobile"
              />
              <label
                for="toggle-mobile"
                class="relative flex h-6 w-11 cursor-pointer items-center rounded-full bg-gray-400 px-0.5 outline-gray-400 transition-colors before:h-5 before:w-5 before:rounded-full before:bg-white before:shadow before:transition-transform before:duration-300 peer-checked:bg-blue-600 peer-checked:before:translate-x-full peer-focus-visible:outline peer-focus-visible:outline-offset-2 peer-focus-visible:outline-gray-400 peer-checked:peer-focus-visible:outline-blue-700"
              >
                <span class="sr-only">Enable</span>
              </label>
            </li>
          </ul>
        </div>
      </div>
    </aside>
    <div class="h-16"></div>

    <section class="w-full mt-6">
      <div
        class="container mx-auto p-4 flex flex-col lg:flex-row lg:justify-evenly"
      >
        <div class="lg:w-[65%]">
          <p class="text-xs lg:text-lg text-slate-700 dark:text-gray-200">
            Berita
            <span class="text-[#FAFF00] font-bold">></span> Liputan/Berita
          </p>
          <h3
            class="text-xl md:text-4xl font-bold text-slate-800 dark:text-gray-50 mt-5"
          >
            Lomba HUT Kemerdekaan RI Ke-79 Di SMA IT HSI - IDN PURWEREJO
          </h3>
          <div class="flex gap-4 items-center mt-4">
            <div class="flex items-center gap-2">
              <div class="w-5 h-5">
                <img src="./image/time.png" alt="" />
              </div>
              <p class="text-xs lg:text-lg text-slate-700 dark:text-gray-200">
                5 Agustus 2024
              </p>
            </div>
            <div class="flex items-center gap-2">
              <div class="w-5 h-5">
                <img src="./image/profile-news.png" alt="" />
              </div>
              <p class="text-xs lg:text-lg text-slate-700 dark:text-gray-200">
                Oleh : Daffa Fawwaz
              </p>
            </div>
          </div>
          <div class="w-full mt-2">
            <img class="w-full" src="./image/photo8.png" alt="" />
          </div>
          <div class="flex flex-col gap-5 mt-5">
            <p class="text-slate-900 dark:text-gray-200">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit
              sit similique quasi nihil facilis. Sint, distinctio! Iste magnam
              accusantium delectus harum laborum, distinctio facere omnis ea,
              animi molestiae, aperiam fugit voluptas sed! Impedit, iusto
              voluptas! Repudiandae, nemo. Sint mollitia nulla hic. Architecto
              consequuntur obcaecati voluptates autem repellat consectetur,
              animi quas?
            </p>
            <p class="text-slate-900 dark:text-gray-200">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero
              aspernatur inventore enim expedita, doloribus sed minima eveniet
              quod ipsum eligendi eaque voluptate optio esse explicabo. Hic
              ducimus voluptate asperiores molestias necessitatibus. Saepe
              distinctio mollitia, accusamus beatae minima aut et iste explicabo
              obcaecati perspiciatis quis, corrupti ab rem dolorem debitis
              necessitatibus!
            </p>
            <p class="mt-3 text-slate-900 dark:text-gray-200">
              Penulis : Daffa Fawwaz
            </p>
            <p class="text-slate-900 dark:text-gray-200">
              Editor : Bambang Sutrisno
            </p>
          </div>
          <div class="flex flex-wrap gap-2 items-center mt-7">
            <p class="text-slate-600">TAGS :</p>
            <p
              class="bg-blue-200 px-2 py-1 text-sm cursor-pointer text-blue-700"
            >
              GOWES
            </p>
            <p
              class="bg-blue-200 px-2 py-1 text-sm cursor-pointer text-blue-700"
            >
              SEKOLAH KU BERSIH DAN HIJAU
            </p>
            <p
              class="bg-blue-200 px-2 py-1 text-sm cursor-pointer text-blue-700"
            >
              KEGIATAN BAKTI SOSIAL
            </p>
            <p
              class="bg-blue-200 px-2 py-1 text-sm cursor-pointer text-blue-700"
            >
              JUARA OLIMPIADE SAINS
            </p>
            <p
              class="bg-blue-200 px-2 py-1 text-sm cursor-pointer text-blue-700"
            >
              SEKOLAH RAMAH LINGKUNGAN
            </p>
            <p
              class="bg-blue-200 px-2 py-1 text-sm cursor-pointer text-blue-700"
            >
              HSI - IDN GOES TO SINGAPORE
            </p>
          </div>
        </div>
        <hr />

        <!-- SIDE NEWS -->
        <div class="flex flex-col">
          <!-- BERITA TERBARU -->
          <div class="flex flex-col mt-5">
            <h3 class="text-xl font-bold text-slate-800 dark:text-gray-50 mt-5">
              Berita Terbaru
            </h3>
            <div class="flex flex-col mt-5 gap-7 lg:w-72">
              <div class="flex flex-col">
                <p class="text-blue-800 dark:text-blue-500 font-medium">
                  Santri SMA HSI - IDN mendapatkan Juara 1 Olimpiade Sains
                  internasional
                </p>
                <p class="text-sm text-slate-600 dark:text-slate-200 mt-1">
                  6 September 2024
                </p>
                <hr class="mt-2 border-slate-500" />
              </div>
              <div class="flex flex-col">
                <p class="text-blue-800 dark:text-blue-500 font-medium">
                  Santri SMA HSI - IDN mendapatkan Juara 1 Olimpiade Sains
                  internasional
                </p>
                <p class="text-sm text-slate-600 dark:text-slate-200 mt-1">
                  6 September 2024
                </p>
                <hr class="mt-2 border-slate-500" />
              </div>
              <div class="flex flex-col">
                <p class="text-blue-800 dark:text-blue-500 font-medium">
                  Santri SMA HSI - IDN mendapatkan Juara 1 Olimpiade Sains
                  internasional
                </p>
                <p class="text-sm text-slate-600 dark:text-slate-200 mt-1">
                  6 September 2024
                </p>
                <hr class="mt-2 border-slate-500" />
              </div>
              <div class="flex flex-col">
                <p class="text-blue-800 dark:text-blue-500 font-medium">
                  Santri SMA HSI - IDN mendapatkan Juara 1 Olimpiade Sains
                  internasional
                </p>
                <p class="text-sm text-slate-600 dark:text-slate-200 mt-1">
                  6 September 2024
                </p>
                <hr class="mt-2 border-slate-500" />
              </div>
            </div>
          </div>

          <!-- AGENDA TERBARU -->
          <div class="flex flex-col md:mt-5">
            <h3 class="text-xl font-bold text-slate-800 dark:text-gray-50 mt-5">
              Agenda Terbaru
            </h3>
            <div class="flex flex-col gap-8 mt-5 lg:w-72">
              <div
                class="flex border-b pb-2 border-slate-400 items-center gap-5 cursor-pointer"
              >
                <div
                  class="flex flex-col border-r border-slate-400 pr-3 items-center"
                >
                  <p class="text-xl font-bold text-blue-800">17</p>
                  <p class="text-lg text-slate-500 font-semibold">SEP</p>
                </div>
                <div class="text-blue-800 font-medium">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Numquam, iusto.
                </div>
              </div>
              <div
                class="flex border-b pb-2 border-slate-400 items-center gap-5 cursor-pointer"
              >
                <div
                  class="flex flex-col border-r border-slate-400 pr-3 items-center"
                >
                  <p class="text-xl font-bold text-blue-700">17</p>
                  <p class="text-lg font-semibold text-slate-500">SEP</p>
                </div>
                <div class="text-blue-800 font-medium">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Numquam, iusto.
                </div>
              </div>
              <div
                class="flex border-b pb-2 border-slate-400 items-center gap-5 cursor-pointer"
              >
                <div
                  class="flex flex-col border-r border-slate-400 pr-3 items-center"
                >
                  <p class="text-xl font-bold text-blue-800">17</p>
                  <p class="text-lg font-semibold text-slate-500">SEP</p>
                </div>
                <div class="text-blue-800 font-medium">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Numquam, iusto.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="w-full mt-16 bg-[#362FD9]">
      <div
        class="container mx-auto p-4 flex flex-col md:flex-row md:justify-between"
      >
        <div class="flex flex-col">
          <div class="flex flex-col gap-2">
            <div class="w-12 h-12">
              <img src="./image/logo-idn 1.png" alt="" />
            </div>
            <p class="text-[10px] lg:text-sm text-[#E1E1E1] mt-2 md:w-[371px]">
              sekolah adalah tempat mencetak penerus bangsa yang berkualitas dan
              berprestasi di segala bidang yang dapat bersaing di dunia
              internasional
            </p>
          </div>
        </div>
        <div class="flex flex-col md:justify-center md:items-end">
          <div class="flex items-center gap-3 mt-4">
            <div class="w-5 h-5 lg:w-10 lg:h-10">
              <img src="./image/youtube-white.png" alt="" />
            </div>
            <div class="w-5 h-5 lg:w-10 lg:h-10">
              <img src="./image/instagram-white.png" alt="" />
            </div>
            <div class="w-4 h-4 lg:w-9 lg:h-9">
              <img src="./image/facebook-white.png" alt="" />
            </div>
          </div>
          <div class="flex flex-col mt-3 lg:mt-3 md:text-right">
            <p class="text-xs text-[#E1E1E1] font-medium lg:text-[14px]">
              Dibuat Oleh SMA IT HSI - IDN
            </p>
            <p class="text-xs text-[#E1E1E1] font-medium lg:text-[14px]">
              Menggunakan Tailwind css dan Js. @2024
            </p>
          </div>
        </div>
      </div>
    </footer>

    <script>
      var sideBar = document.querySelector("aside");

      function openNavbar() {
        sideBar.classList.add("translate-x-0");
        sideBar.classList.remove("-translate-x-full");
      }
      function closeNavbar() {
        sideBar.classList.add("-translate-x-full");
        sideBar.classList.remove("translate-x-0");
      }

      var checkbox = document.querySelector("#toggle");
      var checkboxMobile = document.querySelector("#toggle-mobile");

      checkbox.addEventListener("click", function () {
        if (checkbox.checked) {
          document.documentElement.classList.add("dark");
          localStorage.theme = "dark";
        } else {
          document.documentElement.classList.remove("dark");
          localStorage.theme = "light";
        }
      });
      checkboxMobile.addEventListener("click", function () {
        if (checkboxMobile.checked) {
          document.documentElement.classList.add("dark");
          localStorage.theme = "dark";
        } else {
          document.documentElement.classList.remove("dark");
          localStorage.theme = "light";
        }
      });
    </script>
  </body>
</html>
