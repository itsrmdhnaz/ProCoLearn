// Ambil elemen tombol dan modal
const newAssignmentButton = document.getElementById('new-assignment-button');
const modal = document.getElementById('modal');
const cancelBtn = document.getElementById('cancelBtn');

// Event untuk menampilkan modal
newAssignmentButton.addEventListener('click', () => {
    modal.classList.remove('hidden');
    modal.classList.add('flex');
});

// Event untuk menyembunyikan modal
cancelBtn.addEventListener('click', () => {
    modal.classList.add('hidden');
});

// Tutup modal jika klik di luar area modal
window.addEventListener('click', (e) => {
    if (e.target === modal) {
        modal.classList.add('hidden');
    }
});

// Ambil semua dropdown buttons dengan class yang sama
const dropdownButtons = document.querySelectorAll('[id^="dropdownButton"]'); // Pilih id yang diawali "dropdownButton"

// Loop untuk menambahkan event listener ke setiap tombol dropdown
dropdownButtons.forEach((button, index) => {
    const iconButton = button.querySelector('i'); // Ambil elemen <i> di dalam tombol
    const assignedTo = document.getElementById(`assignedTo${index}`);
    const assignedToContainer = document.getElementById(`assignedToContainer${index}`);

    button.addEventListener('click', () => {
        // Cek apakah dropdown sedang terbuka
        const isDropdownOpen = assignedToContainer.classList.contains('flex');

        if (isDropdownOpen) {
            // Tutup dropdown
            assignedToContainer.classList.remove('flex');
            assignedToContainer.classList.add('hidden');
            assignedTo.classList.remove('hidden');
            assignedTo.classList.add('flex');
            iconButton.classList.remove('ti-chevron-up');
            iconButton.classList.add('ti-chevron-down');
        } else {
            // Buka dropdown
            assignedTo.classList.remove('flex');
            assignedTo.classList.add('hidden');
            assignedToContainer.classList.remove('hidden');
            assignedToContainer.classList.add('flex');
            iconButton.classList.remove('ti-chevron-down');
            iconButton.classList.add('ti-chevron-up');
        }
    });
});
