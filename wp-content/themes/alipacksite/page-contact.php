<?php
get_header();

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
?>
        <div class="contact-form">
            <h1>Contact form</h1>
            <!--
            The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script.

            So, the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, instead of jumping to a different page. This way, the user will get error messages on the same page as the form.

            The htmlspecialchars() function converts special characters into HTML entities. This means that it will replace HTML characters like < and > with &lt; and &gt;. This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.
            -->
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="contact_form">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
                <span id="name_error"><?php echo $nameErr; ?></span>

                <label for="mail">E-mail</label>
                <input type="email" name="mail" id="mail" required>

                <label for="message">Message</label>
                <textarea name="message" rows="10" cols="30">
                </textarea>

                <input type="submit" value="Submit">
                <span id="mail_error"><?php echo $mailErr; ?></span>
            </form>
        </div>

<?php get_footer(); ?>