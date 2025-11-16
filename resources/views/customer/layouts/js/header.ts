const hamburger = document.getElementById('hamburger') as HTMLElement;
const navMenu = document.getElementById('navMenu') as HTMLElement;
const menuItems = document.querySelectorAll('.nav-menu ul li');
const closeBtn = document.getElementById('closeBtn') as HTMLElement;

const closeMenu = () => {
    navMenu.classList.remove('active');
    hamburger.classList.remove('open');
}

// باز و بسته کردن منو با همبرگر
hamburger.addEventListener('click', () => {
    navMenu.classList.toggle('active');
    hamburger.classList.toggle('open');
});

// بستن منو با ضربدر
closeBtn.addEventListener('click', closeMenu);

// بستن منو وقتی روی آیتم کلیک شد
menuItems.forEach(item => {
    item.addEventListener('click', () => {
        menuItems.forEach(i => i.classList.remove('active'));
        item.classList.add('active');
        closeMenu();
    });
});

// بستن منو وقتی بیرون منو کلیک شد
document.addEventListener('click', (event) => {
    if(navMenu.classList.contains('active') && !navMenu.contains(event.target as Node) && !hamburger.contains(event.target as Node)) {
        closeMenu();
    }
});
