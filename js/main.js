function showPage(pageName) {
    let pages = document.getElementsByClassName('pages');
    for (let i = 0; i < pages.length; i++) {
        let page = pages[i];
        if (page.id != pageName){
            page.style.display = 'none';
        } else {
            page.style.display = 'block';
        }
    }
}