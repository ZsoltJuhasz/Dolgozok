@extends( "layouts.master" )

@section( "content" )
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-8">
                <table class="table">
                    <table class="table table-striped">
                        <thead>
                            <th scope="col">Id</th>
                            <th scope="col">Név</th>
                            <th scope="col">Email</th>
                            <th scope="col">Részleg</th>
                        </thead>
                        <tbody>
                            @foreach($workers as $worker)
                            <tr>
                                <td>{{ $worker->id }}</td>
                                <td>{{ $worker->name }}</td>
                                <td>{{ $worker->email }}</td>
                                <td>{{ $worker->departure }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </table>
            </div>
            <div class="col-2">
                <a class="btn btn-primary" href="/new-worker">Új dolgozó</a>
            </div>
        </div>
    </div>
</div>
@endsection