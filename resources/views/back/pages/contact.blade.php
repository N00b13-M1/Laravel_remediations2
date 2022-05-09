@extends('back.layouts.app')
@section('content')
    @include('back.partials.navbar')
    <div class="vh-100 w-100 d-flex justify-content-center align-items-center">
        <form action="{{ route("submitemail") }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp" name="name">
                <div id="emailHelp" class="form-text"></div>
              </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputSubject" class="form-label">Subject</label>
              <input type="text" class="form-control" id="exampleInputsubject" name="subject">
            </div>
            <div class="mb-3">
                <label for="exampleInputMessage" class="form-label">Message</label>
                <input type="text" class="form-control" id="exampleInputMessage" name="messag">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

@endsection



