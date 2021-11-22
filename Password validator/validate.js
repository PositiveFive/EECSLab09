function validate() {
    if(document.getElementById("password").value != document.getElementById("repeat").value)
    {
        alert("passwords do not match")
    }
    if(document.getElementById("password").value.length < 8)
    {
        alert("password must be at least 8 characters")
    }
}