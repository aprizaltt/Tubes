const arrow = document.getElementById("arrow");
const close = document.getElementById("close-icon");
const profile = document.getElementById("profile");
const editBtns = document.querySelectorAll('.edit-btn');

editBtns.forEach(editBtn => {
    editBtn.addEventListener('click', function (e) {
        const modal = document.querySelector('[aria-modal="true"]');
        const inputHidden = document.querySelector('input[name="id"]');
        modal.classList.toggle('hidden');
        inputHidden.value = this.dataset.id;
    });
});

const backdrop = document.querySelector('#backdrop');
backdrop.addEventListener('click', function () {
    const modal = document.querySelector('[aria-modal="true"]');
    modal.classList.toggle('hidden');
});

arrow.addEventListener("click", () => {
    profile.classList.remove("-translate-x-full");
});

close.addEventListener("click", () => {
    profile.classList.add("-translate-x-full");
});
