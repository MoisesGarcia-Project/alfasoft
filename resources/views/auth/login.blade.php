@include('header.header')

<section class="login">
    <h1>Login</h1>
    <div class="login-form">
        <form action="" method="post">
            @csrf
            <div class="row">
                <div class="col-div">
                    <input type="text" name="name" placeholder="Your user">
                </div>
                <div class="col-div">
                    <input type="password" name="contact" placeholder="Your password">
                </div>
                <button type="submit" class="button-login">Login</buttton>
                
            </div>
        </form>
        <a href="{{url('/register')}}">Register</a>
    </div>
</section>


@include('footer.footer')