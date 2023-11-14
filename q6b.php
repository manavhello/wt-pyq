<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Validation</title>
</head>
<body>

<script>
    function checkPassword() {
        // Prompt the user to enter a password
        var password = prompt("Please enter a pass phrase:");

        // Check if the password contains only characters a-z and numbers 0-9
        var isValid = /^[a-zA-Z0-9]+$/.test(password);

        // Display the appropriate message based on the validation result
        if (isValid) {
            alert("Password contains valid characters.");
        } else {
            alert("Invalid password. Please use only characters a-z and numbers 0-9.");
        }
    }
</script>

<button onclick="checkPassword()">Check Password</button>

</body>
</html>
