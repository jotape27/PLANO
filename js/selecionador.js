const list = document.querySelectorAll('.list');
function activeLink() {
    list.forEach((m) =>
        m.classList.remove('active'));
    this.classList.add('active');
}
list.forEach((m) =>
    m.addEventListener('click', activeLink));
