document.addEventListener('DOMContentLoaded', function () {
    const dayButtons = document.querySelectorAll('.day-button');
    const dayContents = document.querySelectorAll('.day-content');

    dayButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            // Remove 'active' class from all buttons and contents
            dayButtons.forEach(btn => btn.classList.remove('active'));
            dayContents.forEach(content => content.classList.remove('active'));

            // Add 'active' class to the clicked button and corresponding content
            button.classList.add('active');
            dayContents[index].classList.add('active');
        });
    });
});
