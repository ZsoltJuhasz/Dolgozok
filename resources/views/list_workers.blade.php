@extends( "layouts.master" )

@section( "content" )
<div class="container">
    <div class="row my-3">
        <div class="col-6">
            <form action="search-worker">
                <select name="departure" id="" class="form-select">
                    <option selected>Részleg</option>
                    <option>HR</option>
                    <option>Pénzügy</option>
                    <option>Nemzetközi kapcsolatok</option>
                </select>
                <button class="btn btn-outline-info mt-2" type="submit">Keresés</button>
            </form>
        </div>
        <div class="col-6">
            <a class="btn btn-outline-info mb-1" href="/register">Regisztráció</a>
            <a class="btn btn-outline-info mb-1" href="/login">Bejelentkezés</a>
            <a class="btn btn-outline-danger mb-1" href="/logout">Kijelentkezés</a>
        </div>
        <div class="row mt-5">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <table class="table">
                    <table class="table table-striped">
                        <thead>
                            <th scope="col">Id</th>
                            <th scope="col">Név</th>
                            <th scope="col">Email</th>
                            <th scope="col">Részleg</th>
                        </thead>
                        <tbody>
                            @foreach( $workers as $worker)
                            <tr>
                                <td>{{ $worker->id }}</td>
                                <td>{{ $worker->name }}</td>
                                <td>{{ $worker->email }}</td>
                                <td>{{ $worker->departure }}</td>
                                <td>
                                    <a class="btn btn-outline-primary" href="/edit-worker/{{ $worker->id }}">Szerkesztés</a>
                                    <a class="btn btn-outline-danger" href="/delete-worker/{{ $worker->id }}">Törlés</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </table>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <a class="btn btn-outline-primary" href="/new-worker">Új dolgozó</a>
            </div>
        </div>
    </div>
</div>
@endsection