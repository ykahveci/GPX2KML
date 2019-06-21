function select_all() {
    let checkboxes = document.getElementsByClassName('selectButtonActionMod');
    for(let i=0, n=checkboxes.length;i<n;i++) {
        checkboxes[i].checked = true;
    }
}

function select_none() {
    let checkboxes = document.getElementsByClassName('selectButtonActionMod');
    for(let i=0, n=checkboxes.length;i<n;i++) {
        checkboxes[i].checked = false;
    }
}
