@include('header.header')

<section class="form">
    <div class="container">
        <a class="back" href="{{url('/')}}"><- Back</a>
        <h2>Create Contact</h2>
        <div class="form-contact">
            <form action="{{url('/store')}}" method="POST">
                @csrf
                @include('contact.form.form', ['mode' => 'Save contact'])
            </form>
        </div>
    </div>
    
</section>

@include('footer.footer')