@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Create new Survey') }}</div>

          <div class="card-body">
            <form action="/questionnaires" method="POST">

              @csrf

              <div class="form-group">
                <label for="title">Title</label>
                <input name="title" type="text" class="form-control" id="title" value="{{ old('title') }}"
                  aria-describedby="titleHelp" placeholder="Enter a Title">
                <small id="titlelHelp" class="form-text text-muted">Give your survey a meaninful
                  title.</small>
              </div>

              @error('title')
                <small class="text-danger"> {{ $message }} </small>

              @enderror

              <div class="form-group">
                <label for="purpose">Purpose</label>
                <input name="purpose" type="text" class="form-control" id="purpose" value="{{ old('purpose') }}"
                  aria-describedby="purposeHelp" placeholder="Enter a purpose">
                <small id="purposelHelp" class="form-text text-muted">Give your survey a meaningful
                  purpose.</small>

                @error('purpose')
                  <small class="text-danger"> {{ $message }} </small>

                @enderror
              </div>

              <button type="submit" class="btn btn-primary">Create Survey</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
