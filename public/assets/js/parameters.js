const form = document.getElementById('parameters');
const submitBtn = document.getElementById('save');
const smallMessages = document.querySelectorAll('.text-danger');

const requiredCheckboxes = 3;



// =======================================================================================================================================================
// -------------------------------------------------------------------------------------------------------------------------------------------------------
// FONCTION DE VÉRIFICATION DES DONNÉES DU FORMULAIRE


const verification = (event) => {

    event.preventDefault();

    // --------------------------------------------------------------------------------
    // Vérification sur le choix du thème

    let checkedTheme = document.querySelectorAll('.themeChoice:checked');

    if (checkedTheme.length != 1) {
        themeMessage.textContent = 'Veuillez choisir un thème.';

    } else {

        let theme = document.querySelector('.themeChoice:checked');

        if (theme.value != 1 && theme.value != 2) {
            themeMessage.textContent = 'Veuillez choisir un thème sans trafiquer le code.';
        } else {
            themeMessage.textContent = '';
        };
        
    };


    // --------------------------------------------------------------------------------
    // Vérification sur le choix des sujets

    let checkedSubject = document.querySelectorAll('.subjectCheckbox:checked');

    if (checkedSubject.length !== requiredCheckboxes) {
        subjectsMessage.textContent = 'Veuillez choisir trois sujets.';

    } else {

        let wrong;

        checkedSubject.forEach(element => {
            if (element.value < 0 || element.value > 4) {
                wrong = true;
            };
        });

        if (wrong == true) {
            subjectsMessage.textContent = 'Veuillez choisir trois sujets sans trafiquer le code.';
        } else {
            subjectsMessage.textContent = '';
        };
    };


    // --------------------------------------------------------------------------------
    // Vérification sur le nombre d'articles

    let checkedNumber = document.querySelectorAll('.articlesNumber:checked');

    if (checkedNumber.length != 1) {
        articlesNumberMessage.textContent = 'Veuillez choisir un nombre d\'articles.';

    } else {

        let number = document.querySelector('.articlesNumber:checked');

        if (number.value != 6 && number.value != 9 && number.value != 12) {
            articlesNumberMessage.textContent = 'Veuillez choisir un nombre d\'articles valide.';
        } else {
            articlesNumberMessage.textContent = '';
        };
        
    };


    // --------------------------------------------------------------------------------
    // Envoi du formulaire

    let sendForm;

    smallMessages.forEach(element => {
        if (element.textContent != '') {
            sendForm = false;
        };
    });

    if (sendForm != false) {
        form.submit();
    }

};



submitBtn.addEventListener('click', verification);