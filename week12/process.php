<html>
    <body>
        <?php
        $first_name = $_POST['fname'];
        $last_name = $_POST['lname'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
        echo "<h1>Information Received</h1>";
        echo "First Name: " . $first_name . "<br>";
        echo "Last Name: " . $last_name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Comment: " . $comment . "<br>";
        echo "Thank you for the info. <br>";

         ?>
    </body>
</html>
