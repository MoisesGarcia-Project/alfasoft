<div class="row">
    <div class="col-div">
        <input type="text" name="name" placeholder="Your name" value="{{$contact->name ?? ''}}">
    </div>
    <div class="col-div">
        <input type="text" name="contact" placeholder="Your phone" value="{{$contact->contact ?? ''}}">
        
    </div>
    <div class="col-div">
        <input type="email" name="email" placeholder="Your email" value="{{$contact->email ?? ''}}">
        
    </div>
    <div class="col-div">
        <input type="phone" name="address" placeholder="Your address" value="{{$contact->address ?? ''}}">
    </div>
    <button type="submit" class="button-form">{{$mode}}</button>
</div>