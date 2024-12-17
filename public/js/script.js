// Bagian Order Form
function showForm(formId) {
    // Sembunyikan semua form
    document.querySelectorAll('.form-packing').forEach(form => form.classList.add('hidden'));
    // Tampilkan form yang sesuai
    document.getElementById(formId).classList.remove('hidden');
}

function resetForm() {
    // Sembunyikan semua form
    document.querySelectorAll('.form-packing').forEach(form => form.classList.add('hidden'));
}

function calculatePrice(form) {
    const weightInput = form.querySelector('input[type="number"]');
    const priceSpan = form.querySelector('.price span');

    if (weightInput) {
        const weight = parseFloat(weightInput.value) || 0;
        const basePrice = 10000;
        const calculatedPrice = weight * basePrice;
        priceSpan.textContent = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR'
        }).format(calculatedPrice);
    }
}

function navigateToPayment() {
    window.location.href = "{{ route('pembayaran') }}"; // Ganti dengan URL halaman pembayaran
}

// Bagian Pembayaran
const inputFile = document.getElementById("upload-input");
const uploadText = document.getElementById("upload-text");

inputFile.addEventListener("change", () => {
    if (inputFile.files.length > 0) {
        const fileName = inputFile.files[0].name;
        uploadText.textContent = fileName;
    } else {
        uploadText.textContent = "Upload here";
    }
});
