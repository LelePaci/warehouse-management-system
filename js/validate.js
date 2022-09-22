window.onload = function(){
    var showHideButton = document.getElementById('show-password');
    showHideButton.addEventListener("click", showHidePassword);
}

function showHidePassword() {
    var field = document.getElementById('password');
    if(field.type == 'password'){
        field.type = 'text';
    } else {
        field.type = 'password';
    }  
}