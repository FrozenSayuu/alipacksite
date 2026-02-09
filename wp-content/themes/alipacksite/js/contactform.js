// Define variables and set to empty values
$name = $mail = $message = "";
$nameErr = $mailErr = $messageErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["name"]))
    {
        $nameErr = "Name is required";
    } else {
        $name = mail_input($_POST["name"]);

    // The preg_match() function searches a string for pattern, returning true if the pattern exists, and false otherwise.
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name))
    {
        $nameErr = "Only letters and white space allowed";
    }
  }

    // The easiest and safest way to check whether an email address is well-formed is to use PHP's filter_var() function.
    if (empty($_POST["mail"]))
    {
        $mailErr = "Email is required";
    } else {
        $mail = mail_input($_POST["mail"]);
        
        // Check if e-mail address is well-formed
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL))
        {
            $mailErr = "Invalid email format";
        }
    }

    // Checking if message has content.
    if (empty($_POST["message"]))
    {
        $message = "";
    } else {
        $message = mail_input($_POST["message"]);
    }
}

function mail_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}