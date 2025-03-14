
<?php
// Include the login logic
include_once($_SERVER['DOCUMENT_ROOT'] . "/ITS122L-MatterCase/Functions/login.php");
?>

<!DOCTYPE html>
<html>

<div style="
    width: 100vw;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background: linear-gradient(154deg, #272838 0%, #F2B418 100%);
">

    <style>
        ::placeholder {
            color: white;
            opacity: 0.75;
        }
    </style>

    <head>  
        <title>Login</title>
    </head>

    <body>
        <!-- Title -->
        <h1 style="
            color: rgba(255, 255, 255, 0.80);
            font-size: 64px;
            font-family: Inter;
            font-weight: 400;
            margin-bottom: 20px;
        ">
            Login
        </h1>

        <!-- Form -->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" style="
            display: flex;
            flex-direction: column;
            gap: 30px;
            align-items: center;
        ">

            <!-- Email Input -->
            <div style="
                width: 400px;
                height: 70px;
                background: rgba(236, 250, 253, 0.50);
                border-radius: 25px;
                display: flex;
                align-items: center;
                padding: 0 20px;
            ">
                <input type="text" id="email" name="username" placeholder="Email" style="
                    flex: 1;
                    background: transparent;
                    border: none;
                    outline: none;
                    color: white;
                    font-size: 18px;
                    font-family: Inter;
                    caret-color: white;
                ">
            </div>

            <!-- Password Input -->
            <div style="
                width: 400px;
                height: 70px;
                background: rgba(236, 250, 253, 0.50);
                border-radius: 25px;
                display: flex;
                align-items: center;
                padding: 0 20px;
            ">
                <input type="password" id="password" name="pass" placeholder="Password" style="
                    flex: 1;
                    background: transparent;
                    border: none;
                    outline: none;
                    color: white;
                    font-size: 18px;
                    font-family: Inter;
                    caret-color: white;
                ">
            </div>

            <!-- Submit Button -->
            <input type="submit" value="Login" style="
                width: 400px;
                height: 60px;
                background: rgba(242, 180, 24, 0.50);
                border-radius: 100px;
                color: rgba(255, 255, 255, 0.80);
                font-size: 24px;
                font-family: Inter;
                font-weight: 400;
                border: none;
                outline: none;
                cursor: pointer;
                text-align: center;
				margin-top: 50px;
            ">
        </form>
    </body>
</div>

</html>
