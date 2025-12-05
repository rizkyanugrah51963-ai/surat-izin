<form action="/login-admin" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login Admin</button>
</form>
