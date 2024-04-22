document.getElementById('contact-form').addEventListener('submit', function(event) {
	event.preventDefault();

	var name = document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var subject = document.getElementById('subject').value;
	var message = document.getElementById('message').value;

	var xhr = new XMLHttpRequest();
	xhr.open('POST', 'send-email.php', true);
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xhr.onload = function() {
		if (xhr.status === 200) {
			document.getElementById('response').innerHTML = 'Email sent successfully!';
			document.getElementById('contact-form').reset();
		} else {
			document.getElementById('response').innerHTML = 'Error sending email.';
		}
	};
	xhr.send('name=' + name + '&email=' + email + '&subject=' + subject + '&message=' + message);
});
