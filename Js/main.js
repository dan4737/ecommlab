// Regular expression for login
const form = document.getElementById("form");
// const name = document.getElementById("name");
// const email = document.getElementById("email");
// const password = document.getElementById("password");
// const country = document.getElementById("country");
// const city = document.getElementById("city");
// const contact = document.getElementById("contact");
// const error = document.getElementById("error")

// form.addEventListener("submit", (e) =>{
//     let message = []

//     let correct = true;

//     let letters = /^[A-Za-z]+$/;
//     if(name.value.match(letters)){
//         correct = false;
//         document.getElementById('name_error').innerHTML = "Please check value";
//         document.getElementById('name_error').style.color = "red";
//     }

//     // if(name.value === "" || name.value == null || isNaN(name)){
       
//     // }

//     let pattern = '/^(([2][3][3])|[0])?\d{9}$/';
//     if(contact.value === "" || contact.value == null || !contact.matches(pattern)){
//         message.push("error in contact number")
//     }


//     let pass = '/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/';
//     if(password.value === "" || password.value == null ||!password.matches(pass)){
//         message.push("Password error")
//     }

//     if(isNaN(country) || country.value === "" || country.value == null ){
//         message.push("error in country")
//     }

//     if(isNaN(city) || city.value === "" || city.value == null ){
//         message.push("error in city")
//     }

//     // if(message.length > 0){
//     //     e.preventDefault();
//     //     error.innerText = message.join(", ")
//     // }
// })


function sub(){
    let correct = true;

    const name = form.elements['name'].value;
    const email = form.elements['email'].value;
    const password = form.elements['password'].value;
    const country = form.elements['country'].value;
    const city = form.elements['city'].value;
    const contact = form.elements['contact'].value;

    
    if(!isNaN(name)){
        correct = false;
        document.getElementById('name_error').innerHTML = "Please check value";
        document.getElementById('name_error').style.color = "red";
    }

    emailregex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    if(!email.match(emailregex)){
        correct = false;
        document.getElementById('email_error').innerHTML = "Please check value";
        document.getElementById('email_error').style.color = "red";
    }

    passwordregex = "^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})"
    if(!password.match(passwordregex)){
        correct = false;
        document.getElementById('password_error').innerHTML = "Please check value";
        document.getElementById('password_error').style.color = "red";
    }

    if(!isNaN(country)){
        correct = false;
        document.getElementById('country_error').innerHTML = "Please check value";
        document.getElementById('country_error').style.color = "red";
    }

    if(!isNaN(city)){
        correct = false;
        document.getElementById('city_error').innerHTML = "Please check value";
        document.getElementById('city_error').style.color = "red";
    }

    // let phone =/^[0]{1}([2]|[5]|[3]){1}\d{8}$/
    if(isNaN(contact)){
        correct = false;
        document.getElementById('contact_error').innerHTML = "Invalid Input";
        document.getElementById('contact_error').style.color = "red";
    }

    return correct;
}
