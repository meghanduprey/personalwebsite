//function to validate form inputs and alert when something is missing
function validate() {
    var email = document.forms["contact"]["email"];
    var message = document.forms["contact"]["message"];

    if (email.value=="") {
       alert("Validation Failed: Please enter an email address");
       return false;
    }
    if (message.value=="") {
        alert("Validation Failed: Please enter a message")
        return false;
    }
    return true;
}