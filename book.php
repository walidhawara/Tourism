
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="modified.css">
    <title>Document</title>
</head>
<body>
    
    <section class="book" id="book">

    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        &nbsp;
        &nbsp;
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>

    <div class="row">
        <div class="image">
            <img src="contact-img.svg" alt="">
        </div>
        <form action="done.php" method="POST">
            <div class="inputdiv">
                <!-- <h3>where to go</h3> -->
                <input type="number"  placeholder="number" name="idd" value='<?php echo $_GET['idd']?>'>
            </div>
            <div class="inputdiv">
                <h3>phone number</h3>
                <input type = "text" name="pnumber" placeholder="phone number" required >
            </div>
            <div class="inputdiv">
                <h3>Book</h3>
                <input type="number" name="num_ticket" placeholder="number of tickets">
            </div>
            <div class="inputdiv">
                <h3>Payment</h3>
                <input type="text" placeholder="crediet card number">
            </div>
            <input type="submit" class="btn" name="submitt" value="book now">
        </form>
    </div>
</section>
</body>
</html>