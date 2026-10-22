document.addEventListener('DOMContentLoaded', function () {
    const volunteerForm = document.getElementById('zgloszenieWolontariat');
    const clearFormBtn = document.getElementById('clearFormBtn');
    const showApplicationsBtn = document.getElementById('showApplicationsBtn');

    volunteerForm.addEventListener('submit', function (event) {

        const formData = {
            imie: document.getElementById('imie').value.trim(),
            nazwisko: document.getElementById('nazwisko').value.trim(), // Poprawiono literówkę 'naziwsko' na 'nazwisko'
            email: document.getElementById('email').value,
            telefon: document.getElementById('telefon').value,
            praca: document.querySelector('input[name="praca"]:checked') ? document.querySelector('input[name="praca"]:checked').value : '', // Dodano warunek na wypadek braku wyboru
            oTobie: document.getElementById('oTobie').value
        };

        let applications = JSON.parse(sessionStorage.getItem('zgloszenia')) || [];
        applications.push(formData);
        sessionStorage.setItem('zgloszenia', JSON.stringify(applications));

        alert('Twoje zgłoszenie zostało wysłane!');
        volunteerForm.reset();
    });

    clearFormBtn.addEventListener('click', function () {
        volunteerForm.reset();
    });

    showApplicationsBtn.addEventListener('click', function () {
        const applications = JSON.parse(sessionStorage.getItem('zgloszenia')) || [];

        if (applications.length === 0) {
            alert('Brak zapisanych zgłoszeń wolontariatu.');
            return;
        }

        let modalElement = document.getElementById('applicationsModal');
        if (modalElement) {
            modalElement.remove();
        }

        let tableHtml = '<div class="modal fade" id="applicationsModal" tabindex="-1" aria-labelledby="applicationsModalLabel" aria-hidden="true">';
        tableHtml += '<div class="modal-dialog modal-lg">';
        tableHtml += '<div class="modal-content">';
        tableHtml += '<div class="modal-header bg-dark text-white">';
        tableHtml += '<h5 class="modal-title" id="applicationsModalLabel">Zgłoszenia</h5>';
        tableHtml += '<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>';
        tableHtml += '</div>';
        tableHtml += '<div class="modal-body">';
        tableHtml += '<div class="table-responsive">';
        tableHtml += '<table class="table table-striped table-bordered">';
        tableHtml += '<thead><tr><th>Imię</th><th>Nazwisko</th><th>E-mail</th><th>Telefon</th><th>Doświadczenie</th><th>O sobie</th></tr></thead>';
        tableHtml += '<tbody>';

        applications.forEach(app => {
            tableHtml += `<tr>
                <td>${app.imie}</td>
                <td>${app.nazwisko}</td>
                <td>${app.email}</td>
                <td>${app.telefon}</td>
                <td>${app.praca === 'tak' ? 'Tak' : 'Nie'}</td>
                <td>${app.oTobie}</td>
            </tr>`;
        });

        tableHtml += '</tbody>';
        tableHtml += '</table>';
        tableHtml += '</div>';
        tableHtml += '</div>';
        tableHtml += '<div class="modal-footer bg-light">';
        tableHtml += '<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Zamknij</button>';
        tableHtml += '</div>';
        tableHtml += '</div>';
        tableHtml += '</div>';
        tableHtml += '</div>';

        document.body.insertAdjacentHTML('beforeend', tableHtml);
        const modal = new bootstrap.Modal(document.getElementById('applicationsModal'));
        modal.show();
    });

    const currentPath = window.location.pathname.split('/').pop();
    const offcanvasNavLinks = document.querySelectorAll('#offcanvasMenu .nav-link');

    offcanvasNavLinks.forEach(link => {
        const linkPath = link.getAttribute('href').split('/').pop();
        if (linkPath === currentPath || (currentPath === '' && linkPath === 'index.html')) {
            link.classList.add('active');
            link.setAttribute('aria-current', 'page');
        } else {
            link.classList.remove('active');
            link.removeAttribute('aria-current');
        }
    });
});