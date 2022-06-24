export { accountBtn, accountDd, accountDdIcon, hamburgerBtn, hamburgerBtn1, hamburgerBtn2, hamburgerBtn3, navItems, about, aboutItems, aboutDdIcon, addProjectBtn, editProjectBtn, deleteProjectBtn, modalAdd, modal }
export { clickTheModalBgToCloseTheModal, pressEscKeyToCloseModal, clickingTheXButtonToCloseModal }

// document.addEventListener('click', showElement);
function showElement(event) {
    console.log(event.target);
}

// variables
// account-dd
const accountBtn = document.querySelector('.account-btn'),
accountDd = document.querySelector('.account-dd'),
accountDdIcon = document.querySelector('.account-dd-icon');

// hamburger button
const hamburgerBtn = document.querySelector('.hamburger-container'),
hamburgerBtn1 = document.querySelector('.hamburger-1'),
hamburgerBtn2 = document.querySelector('.hamburger-2'),
hamburgerBtn3 = document.querySelector('.hamburger-3'),
navItems = document.querySelectorAll('.nav-item');

// SIDEBAR DROPDOWN
const about = document.querySelector('.about'),
aboutItems = document.querySelectorAll('.about-item'),
aboutDdIcon = document.querySelector('.about-dd-icon');

// add project button
const addProjectBtn = document.querySelector('.add-project-btn');

// table
const editProjectBtn = document.querySelector('.edit'),
deleteProjectBtn = document.querySelector('.delete');


// modals

const fileName = document.querySelectorAll('.filename');
const fileInput = document.querySelectorAll('.fileInput');
const modalAdd = document.querySelector('#AddProjectModal');
const modalEdit = document.querySelectorAll('.modal-edit');
const modal = document.querySelectorAll('.modal');
document.addEventListener('click', function(e) {
    if (e.target.classList.contains('add-project-btn')) {
        modalAdd.classList.add('show');

        fileInput.forEach((arrayElement, index) => {
            if (fileName[index].innerHTML == '') {
                fileName[index].innerHTML = 'CHOOSE A FILE';
            }
            fileInput[index].addEventListener('click', function(e) {
                e.target.addEventListener('change', function(event) {
                    let tempFileName = fileInput[index].value.split('\\').pop();
                    const fileNameLength = tempFileName.length;
                    if (fileNameLength >= 20) {
                        const fileNameCutFirst = tempFileName.slice(0, 5);
                        const fileNameCutLast = tempFileName.slice((fileNameLength - 10), fileNameLength);
                        const finalName = fileNameCutFirst.concat('...', fileNameCutLast);
                        tempFileName = finalName;
                    }
                    fileName[index].innerHTML = tempFileName;
                });
            });
        });

        // CLOSING
        // clicking the modal bg
        clickTheModalBgToCloseTheModal();
        // pressing esc key
        pressEscKeyToCloseModal();
        // clicking x button
        clickingTheXButtonToCloseModal();
    }
});
// EDIT
document.addEventListener('click', function(e) {
    for (let i = 0; i < modalEdit.length; i++) {
        if (e.target.classList.contains('edit-' + (i+1))) {
            modalEdit[i].classList.add('show');
            const editFileNames = document.querySelectorAll('.editFileName-' + (i+1));
            const editFileInputs = document.querySelectorAll('.editFileInput-' + (i+1));
            // console.log(editFileNames);
            // console.log(editFileInputs);
            for (let x = 0; x < editFileNames.length; x++) {
                let tempFileName = editFileNames[x].innerHTML;
                const tempFileNameLength = tempFileName.length;
                if (tempFileNameLength >= 20) {
                    const fileNameCutFirst = tempFileName.slice(0, 5);
                    const fileNameCutLast = tempFileName.slice((tempFileNameLength - 10), tempFileNameLength);
                    const finalName = fileNameCutFirst.concat('...', fileNameCutLast);
                    tempFileName = finalName;
                }
                editFileNames[x].innerHTML = tempFileName;
            }

            document.addEventListener('change', function(f) {
                for (let j = 0; j < editFileInputs.length; j++) {
                    if (f.target.classList.contains('editFileInput-' + (i+1))) {
                        if (f.target.classList.contains('editFileInputPos-' + (j+1))) {
                            // console.log(editFileInputs[j])
                            // console.log(editFileInputs[j].value);
                            // console.log(editFileInputs[j].value.split('\\').pop());
                            let tempFileName = editFileInputs[j].value.split('\\').pop();
                            const fileNameLength = tempFileName.length;
                            if (fileNameLength >= 20) {
                                const fileNameCutFirst = tempFileName.slice(0, 5);
                                const fileNameCutLast = tempFileName.slice((fileNameLength - 5), fileNameLength);
                                const finalName = fileNameCutFirst.concat('...', fileNameCutLast);
                                tempFileName = finalName;
                            }
                            editFileNames[j].innerHTML = tempFileName;
                        }
                    }
                }
            });


            // CLOSING
            // clicking the modal bg
            clickTheModalBgToCloseTheModal();
            // pressing esc key
            pressEscKeyToCloseModal();
            // clicking x button
            clickingTheXButtonToCloseModal();
        }
    }
});

// functions
// clicking the modal bg to close
function clickTheModalBgToCloseTheModal() {
    document.addEventListener('mousedown', function(e) {
        if (e.target.classList.contains('modal')) {
            modal.forEach((arrayElement, index) => {
                modal[index].classList.remove('show');
            });
        }
    });
}
// pressing esc key
function pressEscKeyToCloseModal() {
    document.addEventListener('keyup', function(e) {
        if (e.keyCode === 27) {
            modal.forEach((arrayElement, index) => {
                modal[index].classList.remove('show');
            });
        }
    });
}
// clicking the 'X' button to close the modal
function clickingTheXButtonToCloseModal() {
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('x')) {
            modal.forEach((arrayElement, index) => {
                modal[index].classList.remove('show');
            });
        }
    });
}
