document.addEventListener('DOMContentLoaded', function() {
    const searchIcon = document.getElementById('search-icon');
    const searchBar = document.querySelector('.input');

    searchIcon.addEventListener('click', function() {
        if (searchBar.classList.contains('visible')) {
            searchBar.classList.remove('visible');
        } else {
            searchBar.classList.add('visible');
        }
    });
});