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
