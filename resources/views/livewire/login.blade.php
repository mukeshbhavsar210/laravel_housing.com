<div>
    <form action="/login" method="post">
        @csrf
        <input type="email" name="email" placeholder="Email" />
        <input type="submit" name="login" value="login" />
    </form>
</div>
