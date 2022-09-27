let showHideButton;
window.onload = function(){
    showHideButton = document.getElementById('show-password');
    showHideButton.addEventListener("click", showHidePassword);
}

function showHidePassword() {
    var field = document.getElementById('password');
    if(field.type == 'password'){
        field.type = 'text';
        showHideButton.src = "../res/icons/hide_password.png";
    } else {
        field.type = 'password';
        showHideButton.src = "../res/icons/show_password.png";
    }  
}