const checkbox = document.getElementById('toggle-me');
const Property = document.getElementById('manufacturing-year');
document.onclick = function() {
    checkbox.checked = !checkbox.checked;
if (checkbox.checked ) {
    
    Property.style.display= 'flex'
    console.log('hi');
}
if (!checkbox.checked ) {
    Property.style.display= 'none'
    console.log('not hi');
}
}
console.log(checkbox);