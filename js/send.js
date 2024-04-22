const form = document.querySelector("form");
const fullName = document.getElementById("name");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const subject = document.getElementById("subject");
const mess = document.getElementById("message");

function sendEmail() {
    const bodyMessage = 'Full Name: ${fullName.value}<br> Email: ${email.value}<br> Phone Number: ${phone.value}<br> Message: ${mess.value}<br>';

    Email.send({
        Host : "smtp.elasticemail.com",
        Username : "studentmonitoringsystem3@gmail.com",
        Password : "46127DB5ABFD09CEDC8BD24C02C931837D5F",
        To : 'studentmonitoringsystem3@gmail.com',
        From : "studentmonitoringsystem3@gmail.com",
        Subject : subject.value,
        Body : bodyMessage
    }).then(
      message => alert(message)
    );
}

form.addEventListener("submit", (e) => {
    e.preventDefault();
    
    sendEmail();
});