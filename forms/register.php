<link rel="stylesheet" href="../css/index.css"/>
<form class="form" method="post" action=".././proccess/register.php">
    <p class="title">Register </p>
    <p class="message">Signup now and get full access to our app. </p>
        <div class="flex">
        <label>
            <input class="input" name="first_name" type="text" placeholder=""value="petko" required="">
            <span>Firstname</span>
        </label>
            <p>
                
        <label>
            <input class="input" type="text" name="last_name" placeholder="" value="popov"required="">
            <span>Lastname</span>
        </label>
            </p>
    </div>  
    <p>
        
    <label>
        <input class="input" type="email" name="email" placeholder="" value="pipjivko@gmail.com"required="">
        <span>Email</span>
    </label> 
        
    </p>
    <p>
        
    <label>
        <input class="input" type="password" name="password" placeholder=""value="123"required="">
        <span>Password</span>
    </label>
    </p>
    <p>
        
    <label>
        <input class="input" type="password" name="repeat_password" placeholder=""value="123" required="">
        <span>Confirm password</span>
    </label>
    </p>
    <input type="hidden" name="database" value="<?=$database_name?>"/>
    <button >Submit</button>
    <p class="signin">Already have an acount ? <a href="#">Signin</a> </p>
</form>
