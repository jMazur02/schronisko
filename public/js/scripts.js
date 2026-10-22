document.addEventListener('DOMContentLoaded', function () {
    const toggleButtons = document.querySelectorAll('.toggle-button');

    toggleButtons.forEach(button => {
        const targetId = button.dataset.bsTarget;
        const targetCollapse = document.querySelector(targetId);

        if (targetCollapse) {
            targetCollapse.addEventListener('show.bs.collapse', function () {
                button.textContent = button.dataset.textHide;
            });

            targetCollapse.addEventListener('hide.bs.collapse', function () {
                button.textContent = button.dataset.textShow;
            });
        }
    });
});