// const mainFileName = document.getElementById('main-filename');
// if (mainFileName.innerHTML == "") {
//     mainFileName.innerHTML = 'NO FILE SELECTED';
// }
// const firstFileName = document.getElementById('first-filename');
// if (firstFileName.innerHTML == "") {
//     firstFileName.innerHTML = 'NO FILE SELECTED';
// }
// const secondFileName = document.getElementById('second-filename');
// if (secondFileName.innerHTML == "") {
//     secondFileName.innerHTML = 'NO FILE SELECTED';
// }
// const thirdFileName = document.getElementById('third-filename');
// if (thirdFileName.innerHTML == "") {
//     thirdFileName.innerHTML = 'NO FILE SELECTED';
// }
// const fourthFileName = document.getElementById('fourth-filename');
// if (fourthFileName.innerHTML == "") {
//     fourthFileName.innerHTML = 'NO FILE SELECTED';
// }

// function showFileName(event, fileNameContainer) {
//     event.target.addEventListener('change', function() {
//         let fileName = event.target.value.split('\\').pop();
//         if (fileName == "") {
//             fileName = 'NO FILE SELECTED';
//         }
//         const fileNameLength = fileName.length;
//         if (fileNameLength >= 20) {
//             const fileNameCutFirst = fileName.slice(0, 5);
//             const fileNameCutLast = fileName.slice((fileNameLength - 10), fileNameLength);
//             const finalName = fileNameCutFirst.concat('...', fileNameCutLast);
//             fileName = finalName;
//         }
//         fileNameContainer.innerHTML = fileName;
//     })
// }

// // MAIN
// document.addEventListener('click', showFileNameForMain);
// function showFileNameForMain(event) {
//     if (event.target.id == 'main-upload-bg') {
//         const text = document.querySelector('#main-filename');
//         showFileName(event, text);
//     }
// }

// // FIRST PAGE
// document.addEventListener('click', showFileNameForFirst);
// function showFileNameForFirst(event) {
//     if (event.target.id == 'first-upload-bg') {
//         const text = document.querySelector('#first-filename');
//         showFileName(event, text);
//     }
// }

// // SECOND PAGE
// document.addEventListener('click', showFileNameForSecond);
// function showFileNameForSecond(event) {
//     if (event.target.id == 'second-upload-bg') {
//         const text = document.querySelector('#second-filename');
//         showFileName(event, text);
//     }
// }

// // THIRD PAGE
// document.addEventListener('click', showFileNameForThird);
// function showFileNameForThird(event) {
//     if (event.target.id == 'third-upload-bg') {
//         const text = document.querySelector('#third-filename');
//         showFileName(event, text);
//     }
// }

// // FOURTH PAGE
// document.addEventListener('click', showFileNameForFourth);
// function showFileNameForFourth(event) {
//     if (event.target.id == 'fourth-upload-bg') {
//         const text = document.querySelector('#fourth-filename');
//         showFileName(event, text);
//     }
// }



// const uploadIcon = document.querySelectorAll('.upload-icon');
// const fileName = document.querySelectorAll('.filename');
// const fileInput = document.querySelectorAll('.fileInput');
// console.log(uploadIcon);
// console.log(fileName);
// console.log(fileInput);

// fileInput.forEach((arrayElement, index) => {
//     if (fileInput[index].value == '') {
//         fileName[index].innerHTML = 'CHOOSE A FILE';
//     }
// });
