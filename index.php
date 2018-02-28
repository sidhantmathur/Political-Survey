<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Political Idealogy</title>
</head>
<body>
    <div class="container">
        <h1>Survey</h1>
            <form action="quiz_results.php" method="post" id="quiz">
                <div class="form-group">
                    <label for="Identity">Self-Identitified Idealogy</label>
                    <input type="text" class="form-control" id="identity" name="id" aria-describedby="identity" placeholder="Idealogy">
                </div>
                <p>Is healthcare a right?</p>
                <div class="custom-control custom-radio">
                    <input type="radio" id="health1" name="health" value="1" class="custom-control-input">
                    <label class="custom-control-label" for="health1">Yes</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="health2" name="health" value="2" class="custom-control-input">
                    <label class="custom-control-label" for="health2">No</label>
                </div>
                <p>Do you support free trade?</p>
                <div class="custom-control custom-radio">
                    <input type="radio" id="ft1" name="ft" value="1" class="custom-control-input">
                    <label class="custom-control-label" for="ft1">Yes</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="ft2" name="ft" value="2" class="custom-control-input">
                    <label class="custom-control-label" for="f2">No</label>
                </div>

                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<!-- 
<form action="/quiz_result.php" method="POST" id="quiz">
    <h2>Identity</h2>
        <p>How do you politically identify?</p>
            <input type="text" name="identity">
    <h2>Moral Foundations</h2>
        <p>Which of the following do you think are the most</p>
        <input type="radio">
    <h2>Policy Support</h2>
</form>
-->