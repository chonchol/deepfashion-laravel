@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('saveFeedback') }}">
    @csrf
    <div class="form-group">
        <label for="exampleInputName">Name</label>
        <input type="text" name="name" class="form-control" id="exampleInputName">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email Address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputPhone">Phone Number</label>
        <input type="number" name="phone_number" class="form-control" id="exampleInputPhone">
    </div>
    <div class="form-group">
        <label for="exampleInputDescription">What would you like to know?</label>
        <textarea class="form-control" name="message" id="exampleInputDescription" rows="6"
                  placeholder="Ask any question..."></textarea>
    </div>
    <div class="custom-control custom-checkbox">
        <input type="checkbox" name="accept_privacy" value="1" class="custom-control-input" id="customCheck1">
        <label class="custom-control-label" for="customCheck1">I accept the website's privacy policy.</label>
    </div>
    <div class="button-area">
        <button type="submit" class="btn btn-primary btn-submit">Submit</button>
    </div>
</form>
