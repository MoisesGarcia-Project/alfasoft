<div class="row">
    <div class="col-div">
        <input type="text" name="name" placeholder="Your name" value="{{$contact->name ?? ''}}" required>
    </div>
    <div class="col-div">
        <input type="number" name="contact" placeholder="Your phone"   value="{{$contact->contact ?? ''}}" required>
        
    </div>
    <div class="col-div">
        <input type="email" name="email" placeholder="Your email" value="{{$contact->email ?? ''}}" required>
        
    </div>
    <div class="col-div">
        <input type="text" name="address" placeholder="Your address" value="{{$contact->address ?? ''}}" required>
    </div>
    <button type="submit" class="button-form">{{$mode}}</button>
</div>