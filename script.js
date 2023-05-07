// form validation code below
function validate(){
    let x = document.forms["myForm"]["name"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }

    let a = document.forms["myForm"]["email"].value;
    if (a == "") {
        alert("Email must be filled out");
        return false;
    }

    let b = document.forms["myForm"]["pass"].value;
    if (b == "") {
        alert("Password must be filled out");
        return false;
    }

    let c = document.forms["myForm"]["phonenum"].value;
    if (c == "") {
        alert("Phone Number must be filled out");
        return false;
    }

    let d = document.forms["myForm"]["gender"].value;
    if (d == "") {
        alert("Gender must be filled out");
        return false;
    }

    let e = document.forms["myForm"]["lang"].value;
    if (e == "") {
        alert("Language must be filled out");
        return false;
    }

    let f = document.forms["myForm"]["zipcode"].value;
    if (f == "") {
        alert("Zipcode must be filled out");
        return false;
    }

    let g = document.forms["myForm"]["about"].value;
    if (g == "") {
        alert("About you must be filled out");
        return false;
    }

    return true;
}