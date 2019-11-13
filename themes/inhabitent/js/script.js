document.addEventListener('DOMContentLoaded', () => {
    const searchBtn = document.getElementById('search-icon');
    const page = document.getElementById('content');
    const searchFields = document.getElementsByClassName('search-field');
    const searchField = searchFields[0];
    let isOpened = false;

    const openField = () => {
        searchField.style.display = "inline-block";
            setTimeout(
                function(){     
                    searchField.style.width = "200px";
                },50);
        searchField.focus();
        isOpened = true;
    }

    const closeField = () => {
        searchField.style.width = "0px";
            setTimeout(
                function(){
                    searchField.style.display = "none"
            },550);
        searchField.value = "";
        isOpened = false;
    }

    page.addEventListener('click',function(){
        if(isOpened == true) {
            closeField();
        }
    });

    searchBtn.addEventListener('click',function(){
        if(isOpened == false){
            openField();
        } else {
            closeField();
        }
    });
});