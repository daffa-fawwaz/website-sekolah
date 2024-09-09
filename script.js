var sideBar = document.querySelector("aside");


      function openNavbar() {
        sideBar.classList.add("translate-x-0");
        sideBar.classList.remove("-translate-x-full");
      }
      function closeNavbar() {
        sideBar.classList.add("-translate-x-full");
        sideBar.classList.remove("translate-x-0");
      }
      
      var callAdmin = document.getElementById("call-admin");
      var wa = document.getElementById("whatsaap");
      var qrCode = document.getElementById("qr-code")
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

      var faqs = [
        document.getElementById("faqs"),
        document.getElementById("faqs2"),
        document.getElementById("faqs3")
      ]
      ;
      var info = [
        document.getElementById("info"),
        document.getElementById("info2"),
        document.getElementById("info3")
      ];
      var check = [
        document.getElementById("check"),
        document.getElementById("check2"),
        document.getElementById("check3")
      ];

       
     
      faqs[0].addEventListener("click", function() {   
        if (check[0].checked) {
          info[0].classList.add("block")
          info[0].classList.remove("hidden")
        } else {
          info[0].classList.add("hidden")
          info[0].classList.remove("block")
        }
      })
      faqs[1].addEventListener("click", function() {   
        if (check[1].checked) {
          info[1].classList.add("block")
          info[1].classList.remove("hidden")
        } else {
          info[1].classList.add("hidden")
          info[1].classList.remove("block")
        }
      })
      faqs[2].addEventListener("click", function() {   
        if (check[2].checked) {
          info[2].classList.add("block")
          info[2].classList.remove("hidden")
        } else {
          info[2].classList.add("hidden")
          info[2].classList.remove("block")
        }
      })

