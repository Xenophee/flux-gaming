


const mainLink = document.querySelectorAll('.mainLink');
const mediumLink = document.querySelectorAll('.mediumLink');


// =======================================================================================================================================================
// -------------------------------------------------------------------------------------------------------------------------------------------------------
// AFFICHAGE DU TEXTE SUR LES ARTICLES DE GRANDE TAILLE

mainLink.forEach(element => {
    element.addEventListener('mouseover', () => {
        let paragraph = element.querySelector('p');
        paragraph.classList.remove('d-none');
    });
    
    element.addEventListener('mouseout', () => {
        let paragraph = element.querySelector('p');
        paragraph.classList.add('d-none');
    });
});



// =======================================================================================================================================================
// -------------------------------------------------------------------------------------------------------------------------------------------------------
// AFFICHAGE DU TEXTE SUR LES ARTICLES DE TAILLE MOYENNE


mediumLink.forEach(element => {
    element.addEventListener('mouseover', () => {
        let title = element.querySelector('h3');
        let date = element.querySelector('small');
        let paragraph = element.querySelector('p');
        title.classList.add('d-none');
        date.classList.add('d-none');
        paragraph.classList.remove('d-none');
    });
    
    element.addEventListener('mouseout', () => {
        let title = element.querySelector('h3');
        let date = element.querySelector('small');
        let paragraph = element.querySelector('p');
        title.classList.remove('d-none');
        date.classList.remove('d-none');
        paragraph.classList.add('d-none');
    });
});

