function showHideInput(sel) {
    var manualInput = document.getElementById('wpmp_twilio_from_number_manual');
    var friendlyNameInput = document.getElementById('wpmp_twilio_number_frndly_name');

    if(sel.value == 'manual') {
        manualInput.style.display = 'block';
        manualInput.required = true;
        sel.required = false;
    } else {
        manualInput.style.display = 'none';
        manualInput.required = false;
        sel.required = true;
        
        var selectedOption = sel.options[sel.selectedIndex];
        friendlyNameInput.value = selectedOption.getAttribute('data-friendly-name');
    }
}
