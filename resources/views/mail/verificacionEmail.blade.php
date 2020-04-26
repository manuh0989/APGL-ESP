
<form action="{{ $verificationUrl }}" method="GET">
    @csrf @method('GET')
    <input type="submit" value="Confirmar correo">
</form>
