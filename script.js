var sideBar = document.querySelector("aside");
      var callAdmin = document.getElementById("call-admin");
      var wa = document.getElementById("whatsaap");
      var qrCode = document.getElementById("qr-code")

      function openNavbar() {
        sideBar.classList.add("translate-x-0");
        sideBar.classList.remove("-translate-x-full");
      }
      function closeNavbar() {
        sideBar.classList.add("-translate-x-full");
        sideBar.classList.remove("translate-x-0");
      }

      wa.addEventListener("mouseenter", function () {
        callAdmin.classList.add("opacity-100");
        callAdmin.classList.remove("opacity-0");
      });
      wa.addEventListener("mouseleave", function () {
        callAdmin.classList.add("opacity-0");
        callAdmin.classList.remove("opacity-100");
      });

      wa.addEventListener("mouseenter", function () {
        qrCode.classList.add("opacity-100" + "delay-1000");
        qrCode.classList.remove("opacity-0");
      });
      wa.addEventListener("mouseleave", function () {
        qrCode.classList.add("opacity-0");
        qrCode.classList.remove("opacity-100");
      });

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
