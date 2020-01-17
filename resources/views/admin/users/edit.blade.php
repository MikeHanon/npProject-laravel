@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Modification utilisateur {{ $user->name }}</div>

                <div class="card-body">
                    <form action="{{ route('admin.users.update',$user)}}" method="POST">
                      {{ method_fiels('PUT') }}
                      @foreach($roles as $role)
                      <div class="form-check">
                        <input type="checkbox" name="roles[]" value="{{ $role->id }}" id="">
                        <label for="">{{ $role->name }}</label>
                      </div>
                      @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection