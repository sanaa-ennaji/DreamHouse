
document.addEventListener("DOMContentLoaded", function () {
    fetch('json/cities.json')
        .then(response => response.json())
        .then(data => {
            const citySelect = document.getElementById('city');


            data.forEach(city => {
                const option = document.createElement('option');
                option.value = city.ville;
                option.textContent = city.ville;
                citySelect.appendChild(option);
            });
        })
        .catch(error => console.error('Error fetching JSON:', error));
});





function openCreateTrajetModal() {
    document.getElementById('createTrajetModal').classList.remove('hidden');
}

function closeCreateTrajetModal() {
    document.getElementById('createTrajetModal').classList.add('hidden');
}
function toggleModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.toggle('hidden');
        }
      
function toggleModal(modalId, buttonId) {
    const modal = document.getElementById(modalId);
    const button = document.getElementById(buttonId);
    const rect = button.getBoundingClientRect();
    modal.style.top = rect.bottom + 'px';
    modal.style.left = rect.left + 'px';

    modal.classList.toggle('hidden');
}
function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.style.top = '0';
    modal.style.left = '0';

    modal.classList.add('hidden');
}
















