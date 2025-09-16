function validate(event) {
    event.preventDefault();
    const pass = document.getElementById("Pass").value;
    const confPass = document.getElementById("ConfPass").value;
    if (pass.length < 8) {
        alert("Password is not long enough");
        return;
    }
    if (!(pass === confPass)) {
        alert("Passwords do not match");
        return;
    }
    alert("Passwords match");
}
