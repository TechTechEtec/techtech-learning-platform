function toggleMenu() {
  const menu = document.querySelector("#layout-menu");

  const button = document.querySelector("#openMenuButton");

  if (
    menu.getAttribute("style") === null ||
    menu.getAttribute("style") === "left:-230px"
  ) {
    menu.setAttribute("style", "left:0");
    button.innerHTML = '<i class="ph-x"></i>';
    return;
  }

  menu.setAttribute("style", "left:-230px");
  button.innerHTML = '<i class="ph-list"></i>';
}

function closeMenu() {
  const menu = document.querySelector("#layout-menu");

  const button = document.querySelector("#openMenuButton");

  if (
    menu.getAttribute("style") !== null ||
    menu.getAttribute("style") !== "left:-230px"
  ) {
    menu.setAttribute("style", "left:-230px");
    button.innerHTML = '<i class="ph-list"></i>';
  }
}
