<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <section class="form singup">
            <header> Start chatting with ChatME </header>
            <form action="#">
                <div class="errortekst"> Error tekst! </div>
                    <div class="field input">
                        <label>Username</label>
                        <input type="text" placeholder="Username">
                    </div>
                    <div class="field input">
                        <label>E-mail </label>
                        <input type="text" placeholder="E-mail">
                    </div>
                    <div class="field input">
                        <label>Wachtwoord</label>
                        <input type="password" placeholder="Uw Wachtwoord">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field input">
                        <label>Wachtwoord herhalen</label>
                        <input type="password" placeholder="Wachtwoord herhalen">
                    </div>
                    <div class="field image">
                        <label>Profiel foto kiezen</label>
                        <input type="file">
                    </div>
                    <div class="field button">
                        <input type="submit" value="Start chatting">
                    </div>
            </form>
            <div class="link">Al een acount? <a href="#"> Log hier in</a></div> 
        </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>

</body>
</html>