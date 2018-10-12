<html>
<head>
    <link rel="stylesheet" href="style.css" />
    <script type="text/javascript">
        var user = document.getElementById('user');
        user.addEventListener("focusout", () => {
            if (user.value == "") document.getElementById('userError').hidden = false;
            else document.getElementById('userError').hidden = true;
        });
        var pass = document.getElementById('pass');
        pass.addEventListener("focusout", () => {
            if (pass.value == "") document.getElementById('passError').hidden = false;
            else document.getElementById('passError').hidden = true;
        });
        var passMatch = document.getElementById('pass');
        passMatch.addEventListener("focusout", () => {
            if (passMatch.value == "") document.getElementById('passMatchError').hidden = false;
            else passMatch.hidden = true;
        });
    </script>
</head>
<body>
    <header>
        <nav>
            <a href="../../index.html">Home</a>
            &#x2712;
            <a href="index.html">Lab 05</a>
        </nav>
    </header>
    <main>
        <div class="content titlebox"><h1>Create An Account</h1></div>
        <div class="content">
            <form id="form" method="customerBackend.php" action="" onsubmit="return checkForm()">
                <fieldset id="createuser">
                    <legend>Login Credentials</legend>
                    <label>Username: </label>
                    <input type="text" id="user" name="user" placeholder="user">*
                    <span id="userError" class="error" hidden>Username is required</span><br>
                    <label>Password: </label>
                    <input type="password" id="pass" name="pass" placeholder="password">*
                    <span id="passError" class="error" hidden>Password is required</span><br>
                    <label>Confirm Password: </label>
                    <input type="password" id="passConfirm" name="pass" placeholder="password">
                    <span id="passConfirmError" class="error" hidden>Passwords must match</span>
                </fieldset>
                <input class="button" type="submit" value="Submit">
            </form>
        </div>
    </main>
</body>
</html>
