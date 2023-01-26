@include('header.header')

<section class="login">
    <h1>Register</h1>
    <div class="login-form">
        <form action="{{url('/register')}}" method="post">
             @csrf
            <div class="row">
                <div class="col-div">
                    <input type="text" name="name" placeholder="Your Name">
                </div>
                 <div class="col-div">
                    <input type="email" name="email" placeholder="Your email">
                </div>
                <div class="col-div">
                    <input type="password" name="password" placeholder="Your password">
                </div>
                <button type="submit" class="button-login">Register</buttton>
            </div>
        </form>
        <a href="{{url('/')}}">Login</a>
    </div>
</section>


@include('footer.footer')