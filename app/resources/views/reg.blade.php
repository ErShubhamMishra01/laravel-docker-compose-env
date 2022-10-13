@extends('welcome')

@section('main-section')
    
    <h1>Register Here</h1>
   <form action="{{url('/')}}/user" method="post">
    @csrf
    <div class="form-group">
      <label for="">Name</label>
      <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
      <small id="helpId" class="form-text text-muted">Help text</small>
    </div>
   <div class="form-group">
    <label for="">Email</label>
    <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
    <small id="helpId" class="form-text text-muted">Help text</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form><br/>

@endsection