import { accountBtn, accountDd, accountDdIcon } from './main.js'

document.addEventListener('click', toggleAccountDd);

function toggleAccountDd(event) {
    const classNames = ['account-btn', 'account-dp', 'account-name', 'account-dd-icon'];
    if(classNames.some(className => event.target.classList.contains(className))) {
        accountDd.classList.toggle('open');
        accountDdIcon.classList.toggle('open');
    }
    else {
        accountDd.classList.remove('open');
        accountDdIcon.classList.remove('open');
    }
}
