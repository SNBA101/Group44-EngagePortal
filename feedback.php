<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<?php 
include "navbar.php";
?>
<body>
    <div class="feedback">
    <form class="feedbackForm">
            
            
        <br><div>
        <label for="femployee"> Full name: </label>
        <input type="text" id="femployee" name="femployee" placeholder="Enter your name" required>
        </div></br>

        <br><div>
        <label for="ftitle"> Feedback title: </label>
        <input type="text" id="ftitle" name="ftitle" placeholder="Enter your title" required>
        </div></br>

        <br><div>
            <label for="ffeedback"> Feedback: </label>
            <textarea id="ffeedback" name="ffeedback" placeholder="Enter your feedback" required></textarea>
            </div></br>

        <div>
            <button type="submit">Submit</button>
        </div>

        <div class="feet">

            <input name ="checkbox" type="checkbox">
            <label class="check">I acknowledge that by submitting this feedback it will be reviewed and taken seriously.</label>
            
        </div>
    </form>
</div>
</body>
</html>