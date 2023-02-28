const body = document.querySelector("body"),
      sidebar = body.querySelector(".sidebar"),
      toggle = body.querySelector(".toggle "),
      toggle1 = body.querySelector(".toggle1"),
      toggle2 = body.querySelector(".toggle2"),
      searchBtn = body.querySelector(".Sb"),
      modeSwtich = body.querySelector(".Sb")

      toggle.addEventListener("click", () => {
        sidebar.classList.toggle("closer");
      });

      toggle1.addEventListener("click", () => {
        sidebar.classList.toggle("closer");
      });

      toggle2.addEventListener("click", () => {
        sidebar.classList.toggle("closer");
      });