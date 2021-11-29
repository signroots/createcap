<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invest Result </title>
</head>

<body>

    <center>
        <?php if ($_GET['stat'] == 1) : ?>
            <h3>Application submitted successful</h3>
        <?php else : ?>
            <h3>Application not submitted, try again</h3>
        <?php endif; ?>
    </center>
</body>

</html>