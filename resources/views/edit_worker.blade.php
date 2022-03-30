@extends( "layouts.master" )

@section( "content" )
<div class="row justify-content-center">
    <div class="col-6 col-sm-5 col-md-4 col-lg-3">
        <form class="form-control m-5" action="/update-worker" method="post">
            @csrf
            @method("PUT")
            <input class="form-control" type="hidden" name="id" value="{{ $worker->id }}">
            <label for="name">Név</label>
            <input class="form-control" type="text" name="name" value="{{ $worker->name }}">
            <label for="email">Email</label>
            <input class="form-control" type="text" name="email" value="{{ $worker->email }}">
            <label for="departure">Részleg</label>
            <input class="form-control" type="text" name="departure" value="{{ $worker->departure }}">
            <button class="btn btn-outline-primary mt-2" type="submit">Küldés</button>
        </form>
    </div>
</div>
@endsection