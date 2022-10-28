<div class="mt-5">
    @include('livewire.create')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="card">
                        <div class="card-header">
                            <h3>Student List
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudentModel">Add New Student</button>
                            </h3>
                            <div class="card-body">
                            <table class="table table-primary table-striped">
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Name</td>
                                        <td>Email</td>
                                        <td>Phone</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students AS $student)
                                    <tr>
                                        <td>{{$student->id}}</td>
                                        <td>{{$student->firstname}} {{$student->lastname}}</td>
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->phone}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <span class="d-flex justify-content-end"> {{ $students->links() }} </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>