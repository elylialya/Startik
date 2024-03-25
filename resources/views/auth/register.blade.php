<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<style>
    body{
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    height: 600px;
    align-items: center;
    font-family: sans-serif;
}


.Login {
	background-color: #089da1;
	width: 300px;
	text-align: center;
	padding: 30px;
	box-sizing: border-box;
	border-radius: 10px;

}

.Login h2{
	margin: 0 0 20px;
	width: 100%;
	margin-bottom: 25px;
    color: #ffffff;
}

.checkbox {
    font-size: 11px;
    text-decoration: none;
    color: #ffffff;
    font-style: sans-serif;

}

.Login .input-group{
    position: relative;
    width: 100%;
    margin-bottom: 15px;
}
 
.Login .input-group input{
    height: 50px;
    width: 100%;
    padding: 10px 20px;
    box-sizing: border-box;
    font-size: 18px;
    border: 3px solid white;
    border-radius: 10px;
    border: 3px solid #929497;
}

.Login .input-group span{
    position: absolute;
    top: 13px;
    left: 20px;
    padding: 2px;
    text-transform: capitalize;
    background-color: #fff;
    transition: 0.5;
    
}

.Login .input-group input:focus ~ span,
.Login .input-group input:valid ~ span{
    top:-12px;
    left: 20px;
    font-size: 12px;
    background-color: #fff;
    padding: 2px 4px;
    border: 1px solid black;
    border-radius: 5px;
    
} 

.Login .input-group [type="submit"]{
    position: relative;
    width: 100%;
    margin-right: 16px;
}

.Login .input-group [type="submit"]{
    height: 50px;
    width: 45%;
    padding: 10 20px;
    margin-top: 20px;
    box-sizing: border-box;
    background-color: #fff;
    font-size: 15px;
    border: 10px ;
    border-radius: 10px;
}

.Login .input-group [type="button"]{
    height: 50px;
    width: 45%;
    padding: 10 20px;
    box-sizing: border-box;
    background-color: #fff;
    font-size: 15px;
    border: 10px ;
    border-radius: 10px;
}

.Login .group input[type="submit"]{
    width: 100%;
    background-color: #fff; 
    color: #fff;
}

.Login .group input[type="button"]{
    width: 100%;
    background-color: #fff;;
    color: #ffffff;
}

</style>
<body>
    
          <form action="{{ route('register.save') }}" method="POST" class="space-y-4 md:space-y-6">
          @csrf
         <div class="Login">
        <h2>REGISTER</h2>
        <div class="input-group">
            <input type="text" name="name" id="name"  required=""><span>Username</span>
        </div>
        <div class="input-group">
            <input type="email" name="email" id="email" required=""><span>Email</span>
        </div>
        <div class="input-group">
            <input type="password" name="password" id="password" required=""><span>Password</span>
        </div>
        <div class="input-group">
            <input type="password" name="password_confirmation" id="password_confirmation" required=""><span>Konfirmasi Password</span>
        </div>
        <div>
            <div class="checkbox">
                <input type="checkbox" id="signupCheck" />
                <label for="signupCheck">Saya menerima semua<span> syarat & ketentuan</span></label>
            </div>

            <!--button-->
            <div class="input-group">
                <td><button type="submit">Sign up</button></td>
                <td><a href="{{ route('login') }}"><button type="button">login</button></a>
            </div>
        </div>
    </div>
    </div>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>