@if($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <p><strong>{{ $message }}</strong></p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <p><strong>{{ $message }}</strong></p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    @foreach($errors->all() as $error)
        <p><strong>{{ $error }}</strong></p>
    @endforeach
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif