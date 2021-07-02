@extends('layouts.main')
@section('content')

@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger" role="alert">
  {{ $error }}
</div>
@endforeach
@endif


<div class="container">

<div class="form-row mb-4">
            <div class="col">
            <h1> Add User Page </h1>
            </div>
            <div class="col">
                @if (session('successMsg'))

                <div class="alert alert-success" role="alert">
                {{session('successMsg')}}
                </div>

                @endif

            </div>
    </div>

@guest
  
  <h1>Please Login to Proceed Further</h1>
  
@else

<!-- Default form register -->
<form class="text-center border border-light p-5" action="{{ route('store') }}" method="POST">

{{ csrf_field() }}

    <p class="h4 mb-4">Add User</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" name="firstname" placeholder="First name">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" name="lastname" placeholder="Last name">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" name="email" placeholder="E-mail">

    <!-- Password -->
    

    <!-- Phone number -->
    <input type="text" id="defaultRegisterPhonePassword" class="form-control" name="phone" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
    

    
    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Add Data</button>

    <!-- Social register -->
    

</form>
<!-- Default form register -->


@endguest
</div>
@endsection