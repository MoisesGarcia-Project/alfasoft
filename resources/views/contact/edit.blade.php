@include('header.header')

<section class="form">
    <div class="container">
        <a class="back" href="{{url('/')}}"><- Back</a>
        <h2>Edit contact</h2>
        <div class="form-contact">
            <form action="{{url('/update/'.$contact->id)}}" method="POST">
                @csrf
                {{ method_field('PUT') }}
                @include('contact.form.form', ['mode' => 'Edit contact'])
            </form>
        </div>
    </div>
    
</section>

@include('footer.footer')