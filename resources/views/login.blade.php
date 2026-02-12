<center>
    <form action="{{route('login.submit')}}" method="post">

    @csrf
     <label>Email:</label>
    <input type="text" name="email">
    @error('email')
        <p style="color:red">{{ $message }}</p>
    @enderror

    <label>Password:</label>
    <input type="password" name="password">
    @error('password')
        <p style="color:red">{{ $message }}</p>
    @enderror

    <button type="submit">Login</button>
    </form>
</center>