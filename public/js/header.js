const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('navMenu');
const menuItems = document.querySelectorAll('.nav-menu ul li');
const closeBtn = document.getElementById('closeBtn');

const closeMenu = () => {
    navMenu.classList.remove('active');
    hamburger.classList.remove('open');
};

hamburger.addEventListener('click', () => {
    navMenu.classList.toggle('active');
    hamburger.classList.toggle('open');
});

//close btn
closeBtn.addEventListener('click', closeMenu);


menuItems.forEach(item => {
    item.addEventListener('click', () => {
        menuItems.forEach(i => i.classList.remove('active'));
        item.classList.add('active');
        closeMenu();
    });
});


document.addEventListener('click', (event) => {
    if (navMenu.classList.contains('active') && !navMenu.contains(event.target) && !hamburger.contains(event.target)) {
        closeMenu();
    }
});
