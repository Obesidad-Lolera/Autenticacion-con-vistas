<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>
            <a href="/">Inicio</a>
        </li>
        <li><a href="/publico">Publico</a></li>
        <li><a href="/privado">Privado</a></li>
        @if(Auth::check())
            <li >
                Bienvenido <b>{{ Auth::user()->Persona->nombre }}.</b> <a href="/logout">Logout</a>

            </li>
        @else 
        <li>
            <a href="/login">Login</a>
        </li>

        @endif
    </ul>
  