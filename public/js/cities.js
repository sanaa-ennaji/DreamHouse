


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




















