function showHidePassword() {
    let field = document.getElementById('password');
    let showHideButton = document.getElementById('show-password');
    if (field.type == 'password') {
        field.type = 'text';
        showHideButton.src = "../res/icons/hide_password.png";
    } else {
        field.type = 'password';
        showHideButton.src = "../res/icons/show_password.png";
    }
}