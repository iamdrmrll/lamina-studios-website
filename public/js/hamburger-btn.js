import { hamburgerBtn, hamburgerBtn1, hamburgerBtn2, hamburgerBtn3, navItems } from "./main.js";
export { addHamburger, toggleHamburger, removeHamburger };

document.addEventListener('click', Hamburger);

function Hamburger(event) {
    const classNames = ['hamburger-container', 'hamburger-1', 'hamburger-2', 'hamburger-3', 'about', 'about-dd-icon', 'sidebar', 'logo-container', 'nav', 'nav-container', 'about-link', 'about-dropdown'];
    const classNamesForAbout = ['about', 'about-dd-icon', 'sidebar', 'logo-container', 'nav', 'nav-container', 'about-link', 'about-dropdown'];
    if (classNames.some(className => event.target.classList.contains(className))) {
        if (classNamesForAbout.some(className => event.target.classList.contains(className))) {
            if (event.target.classList.contains('logo-container')) {
                removeHamburger();
                return
            }
            addHamburger();
            return;
        }
        toggleHamburger();
    }
    else {
        removeHamburger();
    }
}

function addHamburger() {
    hamburgerBtn.classList.add('hamburger-open');
    hamburgerBtn1.classList.add('hamburger-open');
    hamburgerBtn2.classList.add('hamburger-open');
    hamburgerBtn3.classList.add('hamburger-open');

    navItems.forEach((arrayElement, index) => {
        setTimeout(function() {
            navItems[index].classList.add('nav-show');
        })
    });
}

function toggleHamburger() {
    hamburgerBtn.classList.toggle('hamburger-open');
    hamburgerBtn1.classList.toggle('hamburger-open');
    hamburgerBtn2.classList.toggle('hamburger-open');
    hamburgerBtn3.classList.toggle('hamburger-open');

    navItems.forEach((arrayElement, index) => {
        setTimeout(function() {
            navItems[index].classList.toggle('nav-show');
        })
    });
}

function removeHamburger() {
    hamburgerBtn.classList.remove('hamburger-open');
    hamburgerBtn1.classList.remove('hamburger-open');
    hamburgerBtn2.classList.remove('hamburger-open');
    hamburgerBtn3.classList.remove('hamburger-open');

    navItems.forEach((arrayElement, index) => {
        setTimeout(function() {
            navItems[index].classList.remove('nav-show');
        })
    });
}
