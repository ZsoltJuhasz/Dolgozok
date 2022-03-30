@extends ( "layouts.master" )

@section( "content" )
<div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3
    offset-xl-4 offset-lg-4 offset-md-4 offset-sm-4">
        <form class="form-control mt-5 p-3" action="/store-worker" method="post">
            @csrf
            <label for="name" class="mt-2">Név</label>
            <input class="form-control" type="text" name="name">
            <label for="email" class="mt-2">Email</label>
            <input class="form-control" type="text" name="email">
            <label for="departure" class="mt-2">Részleg</label>
            <input class="form-control" type="text" name="departure">
            <button class="btn btn-outline-primary mt-3" type="submit">Küldés</button>
        </form>
    </div>
</div>
@endsection