@include("common/header")

<h1>Login</h1>

<form action="/login" method="post">
    @csrf
    Usuario: <input type="text" name="name"> <br>
    Contraseña: <input type="password" name="password"> <br>
    <input type="submit" value="Login">

</form>
@include("common/footer")
