import { about, aboutItems, aboutDdIcon } from './main.js'
export { addAbout, removeAbout, toggleAbout }

document.addEventListener('click', AboutFunction);

function AboutFunction(event) {
    const classNames = ['about', 'about-dd-icon', 'about-dropdown'];
    if (classNames.some(className => event.target.classList.contains(className))) {
        if (event.target.classList.contains('about-dropdown')) {
            addAbout();
            return;
        }
        toggleAbout();
    }
    else {
        removeAbout();
    }
}

function addAbout() {
    aboutItems.forEach((arrayElement, index) => {
        setTimeout(function() {
            aboutItems[index].classList.add('about-animate');
        })
    });
    about.classList.add('selected');
    aboutDdIcon.classList.add('selected');
}

function removeAbout() {
    aboutItems.forEach((arrayElement, index) => {
        setTimeout(function() {
            aboutItems[index].classList.remove('about-animate');
        })
    });
    about.classList.remove('selected');
    aboutDdIcon.classList.remove('selected');
}

function toggleAbout() {
    aboutItems.forEach((arrayElement, index) => {
        setTimeout(function() {
            aboutItems[index].classList.toggle('about-animate');
        })
    });
    about.classList.toggle('selected');
    aboutDdIcon.classList.toggle('selected');
}
