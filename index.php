<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php form</title>
    <link rel="stylesheet" href="stylesheet4.css">
</head>

<script>
    function hide() {
        document.getElementById("form1").style.display = "none";
    }

    function show() {
        document.getElementById("form2").style.display = "block";
    }
</script>

<body>
    <section id="contactus">
        <br>
        <br>
        <h2>PHP Form</h2>

        <div>


            <center>


                <br>

                <form method="post" action="connect.php">
                    <section id="form1">
                        Name: <input type="text" placeholder="name" name="name"><br><br> Number: <input type="number" placeholder="Phone no.  +91" name="number"><br><br> E-mail:
                        <input type="email" placeholder="E-mail" name="email"><br><br>


                        <input id="button" type="button" value="Next Form " onclick="hide(); show();" />


                    </section>

                    <section id="form2" style="display: none;">
                        Country: <input type="text" placeholder="Country" name="country" required><br><br> city: <input type="city" placeholder="City" name="city" required><br><br> Age:
                        <input type="number" placeholder="age" name="age" required><br><br> University:
                        <input type="text" placeholder="university" name="university" required><br><br>



                        <input class="submit" type="submit">
                    </section>


                    <br><br>

                </form>

            </center>





        </div>

    </section>

    </div>

    </section>



</body>

</html>