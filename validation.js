
const validateForm = () => {
    let input = document.querySelector("#email");
    let email = input.value;
    if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email)) {
        alert("Please add your first name");
        return true;
    } else {
        alert("Please enter a valid email address");
        return false;
    }
}
