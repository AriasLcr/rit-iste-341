<?php 
    $fname = $lname = $date = $comments = $mood = "";
    $errors = [];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!isset($_POST['fname']) || trim($_POST['fname']) === "") {
            $errors[] = "First name is required.";
        } else {
            $fname = htmlspecialchars($_POST["fname"]);
        }

        if (!isset($_POST['lname']) || trim($_POST['lname']) === "") {
            $errors[] = "Last name is required.";
        } else {
            $lname = htmlspecialchars($_POST["lname"]);
        }

        if (!isset($_POST['date']) || trim($_POST['date']) === "") {
            $errors[] = "Date is required.";
        } else {
            $date = htmlspecialchars($_POST["date"]);
        }

        if (!isset($_POST['comments']) || trim($_POST['comments']) === "") {
            $errors[] = "Comments are required.";
        } else {
            $comments = htmlspecialchars($_POST["comments"]);
        }

        if (!isset($_POST['mood']) || trim($_POST['mood']) === "") {
            $errors[] = "Mood is required.";
        } else {
            $moodSelection = htmlspecialchars($_POST["mood"]);

            switch ($moodSelection) {
                case "happy":
                    $mood = "Great to hear you're happy today!";
                    break;
                case "mad":
                    $mood = "We all get mad sometimes, I hope you're doing good.";
                    break;
                case "indifferent":
                    $mood = "Indifferent... not every single day is eventful and that's okay. We all need a break sometimes.";
                    break;
                default:
                    $errors[] = "Mood is not valid.";
                    break;
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>How are you feeling today?</title>
    </head>
    <body>
        <form action="/~gma5404/iste-341/lab3/feelings.php" method="POST">
            <div>
                <label for="fname">First Name:</label>
			<input type="text" name="fname" size="30">
            </div>
            <div>
                <label for="lname">Last Name:</label>
                <input type="text" name="lname" size="30">
            </div>
            <div>
                <label for="date">Date:</label>
                <input type="text" name="date" size="30">
            </div>
            <div>
                <label for="comments">Comments:</label>
                <textarea name="comments" rows="3" cols="30"></textarea>
            </div>
            <div>
                <label for="mood">Mood:</label>
                <div class="radio">
                    <input type="radio" name="mood" value="happy">Happy<br><input type="radio" name="mood" value="mad">Mad<br><input type="radio" name="mood" value="indifferent">Indifferent<br>
    			</div>
            </div>
            <div class="clearfix">
                <input type="reset" value="Reset Form">
                <input type="submit" name="submit" value="Submit Form">
            </div>	
        </form>
        <?php 
            if (!empty($errors)): 
        ?>
            <div style="color: red;">
                <ul>
                    <?php foreach ($errors as $error): echo "<li>$error</li>"; endforeach; ?>
                </ul>
            </div>
        <?php 
            elseif ($_SERVER["REQUEST_METHOD"] === "POST"): 
                echo "<p>Today is $date</p>" .
                    "<p>Hello, $fname $lname. $mood</p>" .
                    "<p>Your comments: $comments</p>";
            endif;
        ?>

    </body>
</html>