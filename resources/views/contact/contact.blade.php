@include('header.header')

<section class="list-contact">
    <div class="container">
        <div class="button-add-div">
            <a href="{{url('/create')}}" class="button-add"><i class="fa-solid fa-user-plus"></i></a>
        </div>
        <table id="contacts" style="width:100%">
          <tr>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
          </tr>
          @foreach ($contacts as $contact)
              <tr>
                <td>{{$contact->name}}</td>
                <td>{{$contact->contact}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->address}}</td>
                <td>
                    <div class="action">
                        <div class="row">
                            <div class="col-div">
                                <a class="button-edit" href="{{url('/edit/'.$contact->id.'')}}"><i class="fa-solid fa-user-pen"></i></a> 
                            </div>
                            <div class="col-div">
                                <form action="{{url('/delete/'.$contact->id.'')}}" method="post">
                                @csrf
                                {{method_field('DELETE')}}
                                <button class="button-del"><i class="fa-sharp fa-solid fa-user-minus"></i></button>
                            </form>
                            </div>
                        </div>
                    </div>
                </td>
              </tr>
          @endforeach
        </table>
    </div>
</section>


@include('footer.footer')