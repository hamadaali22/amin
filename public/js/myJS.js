const checkbox = document.getElementById('toggle-switch');
const Property = document.getElementById('manufacturing-year');
checkbox.onclick = function() {
    checkbox.checked = !checkbox.checked;
if (checkbox.checked ) {
    
    Property.style.display= 'flex'
    // console.log('hi');
}
if (!checkbox.checked ) {
    Property.style.display= 'none'
    // console.log('not hi');
}
}