<form action="{{route('core.auth')}}" method="POST">
    @csrf
    <label for="">email</label>
    <input type="email" name="email" required>
    <label for="">password</label>
    <input type="password" name="password" required>

    <button type="submit"> Masuk </button>
</form>
