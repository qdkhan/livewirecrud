<div class="mt-5">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="card">
                        <div class="card-header">
                            <h3>User List</h3><a href="{{url('contact')}}" class="btn btn-primary">Contact Form</a>
                            <div class="card-body">
                            <table class="table table-success table-striped">
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Name</td>
                                        <td>Email</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users AS $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <span class="d-flex justify-content-end"> {{ $users->links() }} </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>