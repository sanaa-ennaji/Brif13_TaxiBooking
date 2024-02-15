


document.addEventListener("DOMContentLoaded", function () {
    fetch('json/cities.json')
        .then(response => response.json())
        .then(data => {
            const departSelect = document.getElementById('depart');
            const citySelect = document.getElementById('city');

            data.forEach(city => {
                const option = document.createElement('option');
                option.value = city.id;
                option.textContent = city.ville;
                departSelect.appendChild(option);
            });

            data.forEach(city => {
                const option = document.createElement('option');
                option.value = city.id;
                option.textContent = city.ville;
                citySelect.appendChild(option);
            });
        })
        .catch(error => console.error('Error fetching JSON:', error));
});
















// fetch('json/cities.json')
// .then(response => response.json())
// .then(data => {
//     const citySelect = document.querySelector('.citySelect');
//     data.forEach(city => {
//         const option = document.createElement('option');
//         option.value = city.id;
//         option.textContent = city.ville;
//         citySelect.appendChild(option);
//     });
// })
// .catch(error => console.error('Error fetching JSON:', error));