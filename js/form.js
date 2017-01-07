$(document).ready(function () {

});

function validateForm() {
    var inputNames = ["name", "phone", "email", "message"];
    var isAllInputsValid = true;
    for (var i = 0; i < inputNames.length; i++) {
        var input = $("#" + inputNames[i]);
        var nameValue = input.val();
        if (nameValue == null || nameValue.trim() == "") {
            input.addClass('error');
            isAllInputsValid = false;
            $('#' + inputNames[i] + 'Error').css( "overflow", "visible" );
        } else {
            input.removeClass('error');
            $('#' + inputNames[i] + 'Error').css( "overflow", "hidden" );
        }
    }
    return isAllInputsValid;
};