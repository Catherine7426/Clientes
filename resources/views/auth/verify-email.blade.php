<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verificacion de correo</title>
</head>
<body>
    <h2 style="margin-left:35%;margin-top: 50px">Verifique su correo electronico</h2>

<p>Por favor confirma tu correo electronico para poder ingresar </p>
<p>Para ello ingresa a tu correo y has click en el enlace</p>


<div class="mb-4 text-sm text-gray-600">
{{ __('Gracias por registrarte. Antes de empezar, ¿podrías verificar tu dirección de correo electrónico haciendo clic en el enlace que acabamos de enviarte? Si no has recibido el correo electrónico, te enviaremos otro con mucho gusto.') }}
</div>

{{-- @if (session('status') == 'verification-link-sent')
<div class="mb-4 font-medium text-sm text-green-600">
    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
</div>
@endif

<div class="mt-4 flex items-center justify-between">
<form method="POST" action="{{ route('verification.send') }}">
    @csrf

    <div>
        <x-button>
            {{ __('Resend Verification Email') }}
        </x-button>
    </div>
</form>

<form method="POST" action="{{ route('logout') }}">
    @csrf

    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
        {{ __('Log Out') }}
    </button>
</form>
</div> --}}

</body>
</html>