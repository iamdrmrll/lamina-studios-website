// scroll behavior and up-down buttons
let temp = 1
const sections = document.querySelectorAll('.hero');
// document.addEventListener('scroll', () => {
//     const arr = [];
//     for (let i = 0; i < sections.length; i++) {
//         arr.push(Math.abs(sections[i].getBoundingClientRect().top));
//     }
//     const min = Math.min(...arr);
//     const index = arr.indexOf(min);
//     temp = index + 1;
//     console.log(arr);
//     console.log(temp);
// });
document.addEventListener('click', function(e) {
    const a = e.target.parentElement;
    console.log(a);
    if (a.classList.contains('scroll-up')) {
        if (sections[0].getBoundingClientRect().top === 0) {
            temp = 1
            a.hash = '#section' + temp;
            console.log('first-' + temp);
            return;
        }
        if (sections[sections.length-1].getBoundingClientRect().top === 0) {
            temp = sections.length-1;
            a.hash = '#section' + temp;
            console.log('first-' + temp);
            return;
        }
        const arr = [];
        for (let i = 0; i < sections.length; i++) {
            const sectionTop = sections[i].getBoundingClientRect().top;
            arr.push(Math.abs(sectionTop));
            if (sectionTop === 0) {
                temp = (i+1) - 1;
                a.hash = '#section' + temp;
                console.log('second-' + temp);
                return;
            }
        }
        const min = Math.min(...arr);
        const index = arr.indexOf(min);
        temp = index + 1;
        a.hash = '#section' + temp;
        console.log('third-' + temp);

    // SCROLL DOWN
    } else if (a.classList.contains('scroll-down')) {
        console.log();
        if (sections[sections.length-1].getBoundingClientRect().top === 0) {
            temp = sections.length
            a.hash = '#section' + temp;
            console.log('first-' + temp);
            return;
        }
        if (sections[0].getBoundingClientRect().top === 0) {
            temp += 1;
            a.hash = '#section' + temp;
            console.log('first-' + temp);
            return;
        }
        const arr = [];
        for (let i = 0; i < sections.length; i++) {
            const sectionTop = sections[i].getBoundingClientRect().top;
            arr.push(Math.abs(sectionTop));
            if (sectionTop === 0) {
                temp = (i+1) + 1;
                a.hash = '#section' + temp;
                console.log('second-' + temp);
                return;
            }
        }
        const min = Math.min(...arr);
        const index = arr.indexOf(min);
        temp = index + 1;
        a.hash = '#section' + temp;
        console.log('third-' + temp);
    }
});
// document.addEventListener('click', function(e) {
//     const a = e.target.parentElement;
//     if (a.classList.contains('scroll-up')) {
//         if (temp === 1) {
//             temp = 1
//             a.hash = '#section' + temp;
//         } else {
//             temp = temp - 1;
//             a.hash = '#section' + temp;
//         }
//     } else if (a.classList.contains('scroll-down')) {
//         if (temp === sections.length) {
//             temp = sections.length
//             a.hash = '#section' + temp;
//         } else {
//             temp = temp + 1;
//             a.hash = '#section' + temp;
//         }
//     }
// });

// carousel
const carousels = document.getElementsByClassName('carousel-items');
const totalCarousels = carousels.length;
const indicators = document.querySelectorAll('.indicators');
let counter = 0;
carousels[0].classList.add('active');
indicators[0].classList.add('active');
document.addEventListener('click', (e) => {
    if (e.target.id === 'next') {
        if (counter === (totalCarousels - 1)) {
            counter = 0;
        } else {
            counter += 1;
        }
        removeClassActive();
        addClassActive();
    } else if (e.target.id === 'prev') {
        if (counter === 0) {
            counter = (totalCarousels - 1);
        } else {
            counter -= 1;
        }
        removeClassActive();
        addClassActive();
    }
});
indicators.forEach((indicator, index) => {
    document.addEventListener('click', (e) => {
        if (e.target === indicator) {
            counter = index;
            console.log(counter);
            removeClassActive();
            addClassActive();
        }
    });
});
function removeClassActive() {
    for (let carousel of carousels) {
        carousel.classList.remove('active');
    }
    for (let indicator of indicators) {
        indicator.classList.remove('active');
    }
}
function addClassActive() {
    carousels[counter].classList.add('active');
    indicators[counter].classList.add('active');
}
// automatic carousel
setInterval(function() {
    if (counter === (totalCarousels - 1)) {
        counter = 0;
    } else {
        counter += 1;
    }
    removeClassActive();
    addClassActive();
}, 10000);
