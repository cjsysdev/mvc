<div class="container">
    <input type="checkbox" id="check">
    <div class="registration form">
        <header>Signup</header>
        <form id="registerForm" onsubmit="register(event)">
            <input type="text" placeholder="Enter your email">
            <input type="password" placeholder="Create a password">
            <input type="password" placeholder="Confirm your password">
            <input type="button" class="button" value="Signup">
        </form>
        <div class="signup">
            <span class="signup">Already have an account?
                <label for="check">Login</label>
            </span>
        </div>
    </div>
</div>

<!-- <form id="registerForm" onsubmit="register(event)">
    <input name="name" type="text" placeholder="name" />
    <input name="username" type="text" placeholder="username" />
    <input name="password" type="password" placeholder="password" />
    <input name="confirm_password" type="password" placeholder="confirm password" />
    <button type="submit">Submit</button>
</form> -->