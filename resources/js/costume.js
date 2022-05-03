// get queryselector .sidebar-menu
const sidebarMenu = document.querySelector(".sidebar-menu");
// find a in sidebarMenu
const a = sidebarMenu.querySelectorAll("a");
// if href == window.location.href then add class active
for (let i = 0; i < a.length; i++) {
    if (a[i].href == window.location.href) {
        a[i].parentElement.classList.add("active");
    }
}
