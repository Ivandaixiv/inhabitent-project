document.addEventListener('DOMContentLoaded', () => {
    const searchBtn = document.getElementById('search-icon');
    const page = document.getElementById('content');
    let isOpened = false;
    
    page.addEventListener('click',function(){
        const searchField = document.getElementsByClassName('search-field');
        if(isOpened == true) {
            searchField[0].style.width = "0px";
            isOpened = false;
            console.log('closing','page');
        }
    });

    searchBtn.addEventListener('click',function(){
        const searchField = document.getElementsByClassName('search-field');
        if(isOpened == false){
            searchField[0].style.width = "200px";
            isOpened = true;
            console.log('opening','search');
        } else {
            searchField[0].style.width = "0px";
            isOpened = false;
            console.log('closing','search');
        }
    });
});