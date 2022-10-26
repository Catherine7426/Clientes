<x-layouts.app 
title="Clientes"   
>


<h2 style="margin-left:35%;margin-top: 50px">Hola , {{Auth::user()->name}} Bienvenido a Clientes </h2>

<p>Por favor confirma tu correo electronico</p>
<p>Para ello debes hacer click en el siguiente enlace </p>

<a href="url('register/verify/'. $password)">Clic para confirmar correo electronico</a>
</x-layouts.app>