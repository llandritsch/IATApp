
const validateForm = () => {
    let firstname = document.forms["createAccount"]["firstName"].value;
    if (firstname.length <= 5) {
        alert("Please add your first name");
        return false;
    }
}
