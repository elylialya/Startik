<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
   
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
	background-color:#fff;
	width: 300px;
	text-align: center;
	padding: 20px;
	box-sizing: border-box;
	border-radius: 10px;
    border: 3px solid #089da1;
    

}

.Login h2{
	margin: 0 0 10px;
	width: 100%;
	margin-bottom: 25px;
}


/*.Forgot {
   /* padding-right: 40%; */


.Forgot a {
    color: #000000;
    text-decoration: none;
    font-size: 14px;
}

.Forgot span a {
    color: #089da1;
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
    border: 3px solid #929497;
    border-radius: 10px;
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
    box-sizing: border-box;
    background-color: #089da1;
    font-size: 15px;
    border: 10px ;
    border-radius: 10px;
    color: #ffffff;
    
}

.Login .input-group [type="button"]{
    margin-top: 20px;
    height: 50px;
    width: 45%;
    padding: 10 20px;
    box-sizing: border-box;
    background-color: #089da1;
    font-size: 15px;
    border: 10px ;
    border-radius: 10px;
    color: #ffffff;
   
}

.Login .group input[type="submit"]{
    width: 100%;
    background-color: rgba(255,0,0,0,5);
    color: #fff;
}

.Login .group input[type="button"]{
    width: 100%;
    background-color: rgba(255,0,0,0,5);
    color: #fff;
}
</style>

<body>

                    <form class="space-y-4 md:space-y-6" method="post" action="{{ route('login.action') }}">
                        @csrf
                        <div class="Login">
      <h2>LOGIN</h2>

            <!--input-->
            <div class="input-group">
                <input type="email" name="email" id="email" required=""><span>Email</span> 
            </div>
            <div class="input-group">
                <input type="password" name="password" id="password" required=""><span>Password</span>
            </div>
            <div class="Forgot">
                <a>Belum Memiliki akun?</a> <span><a href="register.html">Daftar Sekarang</a>
            </div>

            <!--button-->
                <div class="input-group">
                    <td><a href="landingpage1.html"><button type="submit">Login</button></a>
                    <td><a href="{{ route('register') }}"><button type="button">Register</button></a>
                </div>
            </div>
            </div>
            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>