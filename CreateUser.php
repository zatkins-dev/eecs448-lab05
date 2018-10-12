<html>
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
            <form id="form" action="customerBackend.php" method="POST" onreset="resetForm()" onsubmit="return checkForm()">
                <fieldset id="createuser">
                    <legend>Login Credentials</legend>
                    <label>Username: </label> <input type="text" id="user" name="user" placeholder="user"><br>
                    <label>Password: </label> <input type="password" id="pass" name="pass" placeholder="password">
                    <label>Confirm Password: </label> <input type="password" id="pass" name="pass" placeholder="password">
                </fieldset>

                <input class="button" type="submit" value="Submit">
            </form>
        </div>
    </main>
</body>
</html>
