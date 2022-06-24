import { addProjectBtn, editProjectBtn, deleteProjectBtn } from './main.js';

document.addEventListener('click', addProject);

function addProject(event) {
    if (event.target.classList.contains('add-project-btn')) {
        addProjectBtn.classList.add('clicked');
        setTimeout(() => {
            addProjectBtn.classList.remove('clicked');
        }, 100);
    }
}

// table
// edit
document.addEventListener('click', editProject)
function editProject(event) {
    if (event.target.classList.contains('edit')) {
        editProjectBtn.classList.add('clicked');
        setTimeout(() => {
            editProjectBtn.classList.remove('clicked');
        }, 100);
    }
}

// delete

document.addEventListener('click', deleteProject)
function deleteProject(event) {
    if (event.target.classList.contains('delete')) {
        deleteProjectBtn.classList.add('clicked');
        setTimeout(() => {
            deleteProjectBtn.classList.remove('clicked');
        }, 100);
    }
}
