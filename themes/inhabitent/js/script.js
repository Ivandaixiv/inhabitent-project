document.addEventListener('DOMContentLoaded', () => {
    const searchBtn = document.getElementById('search-icon');
    searchBtn.addEventListener('click',function(){
        const searchField = document.getElementsByClassName('search-field');
        searchField[0].style.width = "200px";
    });
});