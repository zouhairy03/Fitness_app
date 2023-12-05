<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="subscribtion_fitness _class.css">
</head>
<body>
        <form action="process_form.php" method="post">
    <div class='bold-line'></div>
    <div class='container'>
    <div class='window'>
        <div class='overlay'></div>
        <div class='content'>
        <div class='welcome'>Hello There!</div>
        <div class='subtitle'>We're almost done. Before using our services you need to create an account.</div>
        <div class='input-fields'>
    <input type='text' name="username" placeholder='Username' class='input-line full-width' required></input>
    <input type='email' name="email" placeholder='Email' class='input-line full-width' required></input>
    <input type='date' name="date"  class='input-line full-width' required></input>
    <input type='time' name="time" class='input-line full-width' required></input>
    <select name="sport" class='input-line full-width' required>
        <option value="">Choose a sport</option>
        <option value="fitness">Fitness</option>
        <option value="bodybuilding">Bodybuilding</option>
        <option value="yoga">yoga</option>
        <option value="other">Other</option>
    </select>
</div>


<!--start -->




<!-- end -->

        <hr>    
        <!-- <div class='spacing'>or continue with <span class='highlight'>Facebook</span></div> -->
        <div><button class='ghost-round full-width'>Register</button></div>
    <a href="fitnessclass.php">Go Back </a>
        <!-- <div><button class='ghost-round full-width'>Register</button></div> -->
        </div>
    </div>
    </div>

        </form>

    
</body>
</html>