<?php

require 'koneksi.php';


$posts = getData("SELECT * FROM artikels limit 4");


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <title>SMA IT HSI - IDN</title>
  <link href="./src/output.css" rel="stylesheet" />
  <link href="./image/logo-idn 1.png" rel="icon" />
  <style>
    html {
      scroll-behavior: smooth;
    }

    * {
      font-family: poppins;
    }
  </style>
</head>

<body class="dark:bg-gray-950">
  <nav class="w-full fixed z-30 bg-white dark:bg-gray-950">
    <div class="container mx-auto p-4 flex justify-between items-center">
      <div class="w-12 h-12">
        <img src="./image/logo-idn 1.png" alt="" />
      </div>
      <div class="hidden lg:block">
        <ul class="flex gap-9 text-slate-600 dark:text-slate-50">
          <li class="nav-link active hover:text-blue-500">
            <a href="#home">Beranda</a>
          </li>

          <li class="nav-link hover:text-blue-500">
            <a href="tentang-kami.html">Tentang Kami</a>
          </li>
          <li class="nav-link hover:text-blue-500">
            <a href="#jurusan">Jurusan</a>
          </li>
          <li class="nav-link hover:text-blue-500">
            <a href="#ekskul">Ekskul</a>
          </li>
          <li class="nav-linkhover:text-blue-500">
            <a href="berita.html">Berita</a>
          </li>
          <li class="nav-link hover:text-blue-500">
            <a href="#dokumentasi">Dokumentasi</a>
          </li>
        </ul>
      </div>
      <div
        onclick="openNavbar()"
        class="lg:hidden cursor-pointer fill-black dark:fill-white">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="32"
          height="32"
          viewBox="0 0 256 256">
          <path
            d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z"></path>
        </svg>
      </div>
      <div class="hidden lg:block">
        <input type="checkbox" class="peer sr-only opacity-0" id="toggle" />
        <label
          for="toggle"
          class="relative flex h-6 w-11 cursor-pointer items-center rounded-full bg-gray-400 px-0.5 outline-gray-400 transition-colors before:h-5 before:w-5 before:rounded-full before:bg-white before:shadow before:transition-transform before:duration-300 peer-checked:bg-blue-600 peer-checked:before:translate-x-full peer-focus-visible:outline peer-focus-visible:outline-offset-2 peer-focus-visible:outline-gray-400 peer-checked:peer-focus-visible:outline-blue-700"
          for="toggle">
          <span class="sr-only">Enable</span>
        </label>
      </div>
    </div>
  </nav>
  <div class="flex flex-col">
    <div
      id="qr-code"
      class="hidden bg-[#3B82F6] fixed z-30 bottom-8 lg:bottom-20 right-6 lg:right-4 w-[150px] h-[150px] p-4 lg:flex flex-col items-center transition-all duration-700 ease-in-out opacity-0 delay-500">
      <div
        class="w-[130px] h-[130px] fixed z-30 bottom-8 lg:bottom-[89px] right-6 lg:right-[25px]">
        <img src="./image/qrcode.png" alt="" />
      </div>
      <div class="fixed z-30 bottom-8 lg:bottom-16 right-5 lg:right-9">
        <img src="./image/ph_triangle-fill (1).png" alt="" />
      </div>
    </div>
    <div
      id="call-admin"
      class="opacity-0 fixed z-30 bottom-8 lg:bottom-6 right-6 lg:right-[84px] w-40 h-9 bg-blue-500 rounded-xl flex justify-center items-center transition-all duration-200 ease-in-out">
      <p class="text-xs font-semibold text-white">Chat Admin Now !</p>
      <div class="fixed z-30 bottom-8 lg:bottom-8 right-6 lg:right-[68px]">
        <img src="./image/ph_triangle-fright.png" alt="" />
      </div>
    </div>
    <div
      id="whatsaap"
      class="fixed z-40 bottom-5 lg:bottom-5 right-5 w-7 h-7 lg:w-10 lg:h-10 cursor-pointer">
      <a href="https://wa.me/085895080043" target="_blank">
        <img src="./image/logos_whatsapp-icon.png" alt="" />
      </a>
    </div>
  </div>

  <!-- NAV MOBILE -->
  <aside
    class="fixed z-30 -translate-x-full w-full h-full bg-[#00000081] transition-all duration-200 ease-in-out">
    <div class="container w-72 h-full bg-white dark:bg-gray-950">
      <div class="flex flex-col p-2 relative">
        <div onclick="closeNavbar()" class="absolute cursor-pointer right-2">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="32"
            height="32"
            viewBox="0 0 256 256"
            class="fill-black dark:fill-white">
            <path
              d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path>
          </svg>
        </div>
        <div class="absolute left-2 mt-1">
          <div class="w-11 h-11">
            <img src="./image/logo-idn 1.png" alt="" />
          </div>
        </div>
        <ul
          class="mt-28 flex flex-col gap-7 text-left ml-5 text-slate-500 font-semibold dark:text-gray-200">
          <li class="hover:text-blue-500">
            <a href="#">Beranda</a>
          </li>
          <li class="hover:text-blue-500">
            <a href="tentang-kami.html">Tentang kami</a>
          </li>
          <li class="hover:text-blue-500"><a href="#jurusan">Jurusan</a></li>
          <li class="hover:text-blue-500"><a href="#ekskul">Ekskul</a></li>
          <li class="hover:text-blue-500">
            <a href="berita.html">Berita</a>
          </li>
          <li class="hover:text-blue-500">
            <a href="#dokumentasi">Dokumentasi</a>
          </li>
          <li class="hover:text-blue-500">
            <input
              type="checkbox"
              class="peer sr-only opacity-0"
              id="toggle-mobile" />
            <label
              for="toggle-mobile"
              class="relative flex h-6 w-11 cursor-pointer items-center rounded-full bg-gray-400 px-0.5 outline-gray-400 transition-colors before:h-5 before:w-5 before:rounded-full before:bg-white before:shadow before:transition-transform before:duration-300 peer-checked:bg-blue-600 peer-checked:before:translate-x-full peer-focus-visible:outline peer-focus-visible:outline-offset-2 peer-focus-visible:outline-gray-400 peer-checked:peer-focus-visible:outline-blue-700">
              <span class="sr-only">Enable</span>
            </label>
          </li>
        </ul>
      </div>
    </div>
  </aside>

  <div class="h-16"></div>

  <!-- HOME -->
  <section
    id="home"
    class="w-full h-[500px] lg:h-screen flex justify-center items-center md:bg-none bg-[url('./../image/bg-home.png')] bg-cover bg-center bg-no-repeat">
    <div
      class="container mx-auto p-4 flex flex-col md:flex-row-reverse md:items-center lg:justify-evenly">
      <div class="flex -z-10 relative">
        <div
          class="hidden w-[192px] bg-white px-4 py-2 md:block absolute md:top-20 lg:top-24 -right-5 shadow-md rounded-md">
          <div class="flex gap-3">
            <div class="w-[42px] h-[42px]">
              <img src="./image/Ellipse 1.png" alt="" />
            </div>
            <div class="flex flex-col">
              <p class="text-[10px] lg:text-xs font-bold text-slate-700">
                Jika Ingin Sukses Belajarlah bersabar
              </p>
              <p class="text-[8px] text-slate-400 mt-2">CEO Marion Lexis</p>
            </div>
          </div>
        </div>
        <img
          class="hidden md:flex dark:boxShadow"
          src="./image/home.png"
          alt="" />
        <div
          class="hidden w-[192px] bg-white px-4 py-2 md:block absolute md:bottom-14 lg:bottom-24 -left-7 shadow-md rounded-md">
          <p class="text-[10px] lg:text-xs font-bold text-slate-700">
            “ Belajar Itu Menyenangkan kuncinya jangan pernah menyerah oleh
            apapun itu ”
          </p>
        </div>
      </div>
      <div class="flex flex-col md:mt-10 md:w-[533px]">
        <h3
          class="text-xl md:text-4xl lg:text-6xl font-black text-gray-100 text-center md:text-left md:text-slate-800 dark:text-slate-50">
          SMA IT
          <span class="text-gray-100 md:text-[#362FD9]">HSI - IDN</span>
          PURWOREJO
        </h3>
        <p
          class="text-[10px] lg:text-lg text-center md:text-left mt-3 text-white md:text-slate-700 dark:text-gray-200">
          sekolah adalah tempat mencetak penerus bangsa yang berkualitas dan
          berprestasi di segala bidang yang dapat bersaing di dunia
          internasional
        </p>
        <button
          class="mx-auto md:mx-0 bg-[#362FD9] hover:bg-blue-900 text-white w-24 h-10 lg:w-[147px] lg:h-[48px] mt-6 md:mt-8 rounded-full shadow-xl">
          <a class="text-xs lg:text-sm" href="">Video</a>
        </button>
        <!-- SOSMED -->
        <div
          class="mt-20 -mb-28 md:mb-0 md:mt-5 lg:mt-7 flex flex-col md:flex-row md:items-center gap-1">
          <p
            class="text-xs font-base md:font-semibold text-gray-100 md:text-slate-700 dark:text-gray-200">
            We are in Socials Media :
          </p>
          <!-- MOBILE SOSMED -->
          <div class="flex md:hidden dark:flex gap-1 items-center md:ml-3">
            <div class="w-4 h-4">
              <img src="./image/youtube-white.png" alt="" />
            </div>
            <div class="w-4 h-4">
              <img src="./image/instagram-white.png" alt="" />
            </div>
            <div class="w-3 h-3">
              <img src="./image/facebook-white.png" alt="" />
            </div>
          </div>
          <!-- PC SOSMED -->
          <div class="hidden dark:hidden md:flex gap-1 items-center md:ml-3">
            <div>
              <img src="./image/youtube.png" alt="" />
            </div>
            <div>
              <img src="./image/ant-design_instagram-filled.png" alt="" />
            </div>
            <div>
              <img src="./image/brandico_facebook-rect.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WHY -->
  <section id="why" class="w-full mt-5 mb-28">
    <div class="container mx-auto p-4 flex flex-col">
      <div class="flex flex-col items-center">
        <h3
          class="text-xl md:text-4xl md:w-[537px] font-bold text-center text-slate-800 dark:text-slate-50">
          Kenapa Harus
          <span class="text-[#362FD9]">HSI - IDN</span> PURWOREJO?
        </h3>
        <p
          class="w-[200px] sm:w-[252px] md:w-[552px] text-xs md:text-sm lg:text-lg lg:mt-10 text-center text-slate-700 mt-3 dark:text-gray-200">
          Alasan kenapa harus memilih untuk bergabung dengan SMA TI HSI - IDN
          PURWOREJO.
        </p>
      </div>
      <div
        class="flex flex-wrap items-center justify-center mt-8 lg:mt-12 gap-6 lg:gap-14">
        <div
          class="drop-shadow-xl px-4 py-6 flex flex-col items-center rounded-lg bg-white">
          <div>
            <img src="./image/fasilitas.png" alt="" />
          </div>
          <h4 class="text-sm text-slate-800 mt-3 md:mt-5 font-semibold">
            Fasilitas Lengkap
          </h4>
          <p
            class="text-xs text-slate-700 text-center w-[152px] mt-1 md:mt-3">
            Penunjang belajar dengan kualitas terbaik
          </p>
        </div>
        <div
          class="drop-shadow-xl px-4 py-6 flex flex-col items-center rounded-lg bg-white">
          <div>
            <img src="./image/lingkungan.png" alt="" />
          </div>
          <h4 class="text-sm text-slate-800 mt-3 md:mt-5 font-semibold">
            Lingkungan Nyaman
          </h4>
          <p
            class="text-xs text-slate-700 text-center w-[152px] mt-1 md:mt-3">
            Berada di lingkungan yang nyaman dan asri
          </p>
        </div>
        <div
          class="drop-shadow-xl px-4 py-6 flex flex-col items-center rounded-lg bg-white">
          <div>
            <img src="./image/pengajar.png" alt="" />
          </div>
          <h4 class="text-sm text-slate-800 mt-3 md:mt-5 font-semibold">
            Pengajar Kompeten
          </h4>
          <p
            class="text-xs text-slate-700 text-center w-[152px] mt-1 md:mt-3">
            Guru terbaik dengan pengalaman
          </p>
        </div>
        <div
          class="drop-shadow-xl px-4 py-6 flex flex-col items-center rounded-lg bg-white">
          <div>
            <img src="./image/kerjasama.png" alt="" />
          </div>
          <h4 class="text-sm text-slate-800 mt-3 md:mt-5 font-semibold">
            Kerja Sama Luas
          </h4>
          <p
            class="text-xs text-slate-700 text-center w-[152px] mt-1 md:mt-3">
            Dapat kesempatan kerja yang lebih terjamin
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ABOUT -->
  <section id="about" class="w-full mt-20">
    <div class="container mx-auto p-4 flex flex-col items-center gap-10">
      <h3
        class="text-xl md:text-4xl md:w-[537px] font-bold text-center text-slate-800 dark:text-gray-50">
        Profil SMA IT
        <span class="text-[#362FD9]">HSI - IDN</span> PURWOREJO?
      </h3>
      <div
        class="flex flex-col md:flex-row gap-5 lg:gap-7 lg:justify-between">
        <div class="mt-5">
          <img src="./image/about.png" alt="" />
        </div>
        <div class="flex flex-col md:w-[520px] lg:gap-5 mt-5">
          <h4
            class="text-xl lg:text-3xl font-semibold text-slate-700 md:font-bold dark:text-gray-50">
            Sambutan Kepala Sekolah SMA IT HSI - IDN
          </h4>
          <p
            class="text-xs lg:text-lg mt-5 text-slate-700 dark:text-gray-200">
            sekolah adalah tempat mencetak penerus bangsa yang berkualitas dan
            berprestasi di segala bidang yang dapat bersaing di dunia
            internasional
          </p>
          <p
            class="text-xs lg:text-lg mt-2 text-slate-700 dark:text-gray-200">
            dan Sekolah adalah tempat anak-anak mendapatkan dukungan untuk
            melengkapi pembelajarannya di sekolah
          </p>
          <button
            class="md:mx-0 bg-[#362FD9] hover:bg-blue-900 text-white w-24 h-10 lg:w-[147px] lg:h-[48px] mt-6 md:mt-8 rounded-full shadow-xl">
            <a class="text-xs lg:text-sm" href="">Video</a>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- JURUSAN -->
  <section id="jurusan" class="w-full mt-16">
    <div class="container mx-auto p-4 flex flex-col items-center">
      <div class="flex flex-col items-center">
        <h3
          class="text-xl text-center md:text-3xl md:w-[537px] font-bold text-slate-800 dark:text-gray-50">
          Jurusan Di SMA IT
          <span class="text-[#362FD9]">HSI - IDN</span> PURWOREJO
        </h3>
        <p
          class="text-xs text-center lg:text-lg text-slate-700 mt-5 dark:text-gray-200">
          Pilihan program keahlian di SMA IT HSI - IDN PURWOREJO.
        </p>
      </div>
      <div
        class="flex flex-wrap gap-4 mt-7 justify-center md:grid md:grid-cols-3 lg:gap-x-10">
        <div
          class="flex flex-col w-[170px] lg:w-[200px] lg:h-[190px] bg-[#362FD9] p-4 rounded-lg">
          <div
            class="w-[43px] h-[43px] bg-white flex justify-center items-center">
            <img src="./image/tkj.png" alt="" />
          </div>
          <p
            class="text-sm lg:text-lg font-medium lg:font-semibold text-white mt-3 lg:mt-5">
            Teknik Komputer Dan Jaringan
          </p>
          <p class="text-xs font-thin text-white mt-3">Detail</p>
        </div>
        <div
          class="flex flex-col w-[170px] lg:w-[200px] lg:h-[190px] bg-[#362FD9] p-4 rounded-lg">
          <div
            class="w-[43px] h-[43px] bg-white flex justify-center items-center">
            <img src="./image/rpl.png" alt="" />
          </div>
          <p
            class="text-sm lg:text-lg font-medium lg:font-semibold text-white mt-3 lg:mt-5">
            Rekayasa Perangkat Lunak
          </p>
          <p class="text-xs font-thin text-white mt-3">Detail</p>
        </div>
        <div
          class="flex flex-col w-[170px] lg:w-[200px] lg:h-[190px] bg-[#362FD9] p-4 rounded-lg">
          <div
            class="w-[43px] h-[43px] bg-white flex justify-center items-center">
            <img src="./image/audio.png" alt="" />
          </div>
          <p
            class="text-sm lg:text-lg font-medium lg:font-semibold text-white mt-3 lg:mt-5">
            Photo Dan Videography
          </p>
          <p class="text-xs font-thin text-white mt-3">Detail</p>
        </div>
        <div
          class="flex flex-col w-[170px] lg:w-[200px] lg:h-[190px] bg-[#362FD9] p-4 rounded-lg">
          <div
            class="w-[43px] h-[43px] bg-white flex justify-center items-center">
            <img src="./image/desain.png" alt="" />
          </div>
          <p
            class="text-sm lg:text-lg font-medium lg:font-semibold text-white mt-3 lg:mt-5">
            Desain Multimedia
          </p>
          <p class="text-xs font-thin text-white mt-8 md:mt-3">Detail</p>
        </div>
        <div
          class="flex flex-col w-[170px] lg:w-[200px] lg:h-[190px] bg-[#362FD9] p-4 rounded-lg">
          <div
            class="w-[43px] h-[43px] bg-white flex justify-center items-center">
            <img src="./image/language.png" alt="" />
          </div>
          <p
            class="text-sm lg:text-lg font-medium lg:font-semibold text-white mt-3 lg:mt-5">
            Pendalaman Bahasa
          </p>
          <p class="text-xs font-thin text-white mt-3">Detail</p>
        </div>
        <div
          class="flex flex-col w-[170px] lg:w-[200px] lg:h-[190px] bg-[#362FD9] p-4 rounded-lg">
          <div
            class="w-[43px] h-[43px] bg-white flex justify-center items-center">
            <img src="./image/robotic.png" alt="" />
          </div>
          <p
            class="text-sm lg:text-lg font-medium lg:font-semibold text-white mt-3 lg:mt-5">
            Pembelajaran Robotic
          </p>
          <p class="text-xs font-thin text-white mt-3">Detail</p>
        </div>
      </div>
    </div>
  </section>

  <!-- EKSKUL -->
  <section id="ekskul" class="w-full mt-16 bg-[#F0EFFF] dark:bg-gray-900">
    <div class="container mx-auto p-4 flex flex-col items-center pb-16">
      <div class="flex flex-col items-center mt-10">
        <h3
          class="text-xl text-center md:text-3xl md:w-[537px] font-bold text-slate-800 dark:text-gray-50">
          Ekstrakulikuler Di SMA IT
          <span class="text-[#362FD9]">HSI - IDN</span> PURWOREJO
        </h3>
        <p
          class="text-xs text-center lg:text-lg text-slate-700 mt-5 dark:text-gray-200">
          Pilihan Ekstrakulikuler di SMA IT HSI - IDN PURWOREJO
        </p>
      </div>
      <div class="flex flex-wrap justify-center mt-5 gap-4">
        <div
          class="flex flex-col w-[185px] h-[170px] gap-2 bg-white p-4 rounded-lg shadow-xl">
          <div>
            <img src="./image/pramuka-logohd-38028 1.png" alt="" />
          </div>
          <p class="font-semibold w-[128px] text-slate-800">
            Praja Muda Karana
          </p>
          <p class="text-xs text-slate-700">
            Pertama kali dibentuk team tahun 2002
          </p>
        </div>
        <div
          class="flex flex-col w-[185px] h-[170px] gap-2 bg-white p-4 rounded-lg shadow-xl">
          <div>
            <img src="./image/Pmi 1.png" alt="" />
          </div>
          <p class="font-semibold w-[128px] text-slate-800">
            Palang Merah Remaja
          </p>
          <p class="text-xs text-slate-700">
            Pertama kali dibentuk team tahun 2003
          </p>
        </div>
        <div
          class="flex flex-col w-[185px] h-[170px] gap-2 bg-white p-4 rounded-lg shadow-xl">
          <div class="w-[78px] h-[74px]">
            <img src="./image/mapala.png" alt="" />
          </div>
          <p class="font-semibold w-[128px] text-slate-800">Pecinta Alam</p>
          <p class="text-xs text-slate-700">
            Pertama kali dibentuk team tahun 2002
          </p>
        </div>
        <div
          class="flex flex-col w-[185px] h-[170px] gap-2 bg-white p-4 rounded-lg shadow-xl">
          <div>
            <img src="./image/sinematography.png" alt="" />
          </div>
          <p class="font-semibold w-[128px] text-slate-800">Sinematografi</p>
          <p class="text-xs text-slate-700">
            Pertama kali dibentuk team tahun 2016
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- BERITA -->
  <section id="berita" class="w-full mt-16">
    <div class="container mx-auto p-4 flex flex-col items-center">
      <div class="flex flex-col items-center">
        <h3
          class="text-xl text-center md:text-3xl md:w-[537px] font-bold text-slate-800 dark:text-gray-50">
          Berita Terbaru Di SMA IT
          <span class="text-[#362FD9]">HSI - IDN</span> PURWOREJO
        </h3>
        <p class="text-xs lg:text-lg text-slate-700 mt-5 dark:text-gray-200">
          Berita Terbaru Tentang SMA IT HSI - IDN PURWOREJO
        </p>
      </div>
      <div class="flex flex-wrap justify-center gap-4 mt-8">

        <?php foreach ($posts as $post) : ?>
          <div
            class="w-[187px] h-[232px] lg:w-[257px] lg:h-[302px] flex flex-col bg-white hover:bg-gray-300 hover:-translate-y-1 transition-all duration-200 ease-in-out rounded-lg drop-shadow-xl overflow-hidden dark:dark:bg-gray-900">
            <div class="w-full"><img src="./image/<?= $post["image"] ?>" alt="" /></div>
            <div class="w-full px-2 flex flex-col justify-between">
              <p class="text-xs text-slate-700 mt-5 dark:text-gray-50">
                <?= $post["created_at"] ?>
              </p>
              <p
                class="font-semibold text-sm lg:text-lg  mt-2 dark:text-gray-200 line-clamp-3">
                <?= $post["title"] ?>
              </p>
              <p class="text-xs text-slate-700 mt-2 dark:text-gray-50">
                <?= $post["author"] ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
      <button
        class="mx-auto md:mx-0 bg-[#362FD9] hover:bg-blue-900 text-white w-32 h-8 lg:w-[147px] lg:h-[48px] mt-6 md:mt-8 rounded-full shadow-xl">
        <a class="text-xs lg:text-sm" href="berita.html">Semua Berita</a>
      </button>
    </div>
  </section>

  <!-- DOKUMENTASI -->
  <section id="dokumentasi" class="w-full mt-16 bg-[#362FD9]">
    <div class="container flex flex-col mx-auto p-4 items-center pb-14">
      <h3
        class="text-xl text-center md:text-3xl md:w-[537px] font-bold text-white mt-10">
        Foto Documentasi Kegiatan SMA IT HSI - IDN PURWOREJO
      </h3>
      <div class="flex flex-wrap justify-center gap-4 lg:gap-6 mt-10">
        <div
          class="flex items-end w-[218px] h-[290px] lg:w-[318px] lg:h-[384px] bg-[url('./../image/doc1.png')] bg-center bg-cover bg-no-repeat">
          <div
            class="h-[100px] lg:h-[130px] p-3 w-full backdrop-blur bg-[#ffffff80]">
            <p class="font-bold text-sm lg:text-lg lg:w-[231px]">
              Lomba Voli Air 17 Agustus 2024
            </p>
            <p class="text-xs w-[141px] mt-1 lg:mt-2">
              SMA IT HSI - IDN PURWOREJO
            </p>
          </div>
        </div>
        <div
          class="flex items-end w-[218px] h-[290px] lg:w-[318px] lg:h-[384px] bg-[url('./../image/doc2.png')] bg-center bg-cover bg-no-repeat">
          <div
            class="h-[100px] lg:h-[130px] p-3 w-full backdrop-blur bg-[#ffffff80]">
            <p class="font-bold text-sm lg:text-lg lg:w-[231px]">
              PSB Tahun Ajaran 2024 - 2025
            </p>
            <p class="text-xs w-[145px] mt-1 lg:mt-2">
              SMA IT HSI - IDN PURWOREJO
            </p>
          </div>
        </div>
        <div
          class="flex items-end w-[218px] h-[290px] lg:w-[318px] lg:h-[384px] bg-[url('./../image/doc3.png')] bg-center bg-cover bg-no-repeat">
          <div
            class="h-[100px] lg:h-[130px] p-3 w-full backdrop-blur bg-[#ffffff80]">
            <p class="font-bold text-sm lg:text-lg lg:w-[231px]">
              Devfest Jogjakarta 2023 UKDW
            </p>
            <p class="text-xs w-[141px] mt-1 lg:mt-2">
              SMA IT HSI - IDN PURWOREJO
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQS -->
  <section class="w-full mt-16">
    <div
      class="container mx-auto p-4 flex flex-col justify-center md:flex-row md:items-center md:justify-center">
      <div>
        <img src="./image/calendar.png" alt="" />
      </div>
      <div>
        <div>
          <h3
            class="text-xl md:text-4xl md:w-[537px] font-bold text-center text-slate-800 dark:text-slate-50">
            AGENDA PSB ONLINE
          </h3>
          <p
            class="text-xs text-center lg:text-lg text-slate-700 mt-5 dark:text-gray-200">
            Berikut ini adalah rincian waktu proses Penerimaan Santri Baru
          </p>
        </div>

        <label for="check">
          <div
            id="faqs"
            class="flex flex-col bg-[#362FD9] p-3 rounded cursor-pointer mt-5">
            <div class="flex flex-col">
              <div class="flex items-center">
                <input type="checkbox" id="check" class="peer hidden" />
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  fill="#ffffff"
                  viewBox="0 0 256 256"
                  class="peer-checked:rotate-180 transition-all duration-100 ease-in-out">
                  <path
                    d="M213.66,165.66a8,8,0,0,1-11.32,0L128,91.31,53.66,165.66a8,8,0,0,1-11.32-11.32l80-80a8,8,0,0,1,11.32,0l80,80A8,8,0,0,1,213.66,165.66Z"></path>
                </svg>
                <p class="text-sm lg:text-lg text-white ml-5">
                  Waktu Pendaftaran
                </p>
              </div>
              <div id="info" class="p-4 md:p-2 hidden">
                <p class="text-xs text-gray-200 md:w-80">
                  Mohon tunggu informasi seputar PSB SMA IT HSI - IDN
                  PURWOREJO yg terbaru yaa
                </p>
              </div>
            </div>
          </div>
        </label>
        <label for="check2">
          <div
            id="faqs2"
            class="flex flex-col bg-[#362FD9] p-3 rounded group cursor-pointer mt-5">
            <div class="flex flex-col">
              <div class="flex items-center">
                <input
                  type="checkbox"
                  id="check2"
                  class="check peer hidden" />
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  fill="#ffffff"
                  viewBox="0 0 256 256"
                  class="peer-checked:rotate-180 transition-all duration-100 ease-in-out">
                  <path
                    d="M213.66,165.66a8,8,0,0,1-11.32,0L128,91.31,53.66,165.66a8,8,0,0,1-11.32-11.32l80-80a8,8,0,0,1,11.32,0l80,80A8,8,0,0,1,213.66,165.66Z"></path>
                </svg>
                <p class="text-sm lg:text-lg text-white ml-5">
                  Biaya Pendaftaran
                </p>
              </div>
              <div id="info2" class="p-4 md:p-2 hidden">
                <p class="text-xs text-gray-200 md:w-80">
                  Mohon tunggu informasi seputar PSB SMA IT HSI - IDN
                  PURWOREJO yg terbaru yaa
                </p>
              </div>
            </div>
          </div>
        </label>
        <label for="check3">
          <div
            id="faqs3"
            class="flex flex-col bg-[#362FD9] p-3 rounded cursor-pointer mt-5 group">
            <div class="flex flex-col">
              <div class="flex items-center">
                <input
                  type="checkbox"
                  id="check3"
                  class="check peer hidden" />
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  fill="#ffffff"
                  viewBox="0 0 256 256"
                  class="peer-checked:rotate-180 transition-all duration-100 ease-in-out">
                  <path
                    d="M213.66,165.66a8,8,0,0,1-11.32,0L128,91.31,53.66,165.66a8,8,0,0,1-11.32-11.32l80-80a8,8,0,0,1,11.32,0l80,80A8,8,0,0,1,213.66,165.66Z"></path>
                </svg>
                <p class="text-sm lg:text-lg text-white ml-5">
                  Biaya Daftar Ulang
                </p>
              </div>
            </div>
            <div id="info3" class="p-4 md:p-2 hidden">
              <p class="text-xs text-gray-200 md:w-80">
                Mohon tunggu informasi seputar PSB SMA IT HSI - IDN PURWOREJO
                yg terbaru yaa
              </p>
            </div>
          </div>
        </label>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="w-full mt-16 bg-[#362FD9]">
    <div
      class="container mx-auto p-4 flex flex-col md:flex-row md:justify-between">
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

  <script src="script.js"></script>
</body>

</html>