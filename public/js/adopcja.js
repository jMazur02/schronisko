document.addEventListener('DOMContentLoaded', function() {
    const radioTak = document.getElementById('posiadaszInneZwierzetaTak');
    const radioNie = document.getElementById('posiadaszInneZwierzetaNie');
    const sekcjaInne = document.getElementById('rodzajInnychZwierzatSection');

    function toggleZwierzeta() {
        if (radioTak.checked) {
            sekcjaInne.classList.add('show');
             sekcjaInne.classList.remove('collapse'); 
        } else {
            sekcjaInne.classList.remove('show');
            sekcjaInne.classList.add('collapse');
        }
    }

    if(radioTak && radioNie) {
        radioTak.addEventListener('change', toggleZwierzeta);
        radioNie.addEventListener('change', toggleZwierzeta);
    }
    
    if(radioTak && radioTak.checked) {
        toggleZwierzeta();
    }
});