<div class="mt-5">
    @include('livewire.create')
    @include('livewire.update')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-8">
                                    <h3>Student List
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudentModel">Add New Student</button>
                                    </h3>
                                    @if(session()->has('success'))
                                        <div class="alert alert-success" role="alert">{{session()->get('success')}}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="Type Your Search" id="searchRecords" wire:model.delays.2000ms="searchRecords">
                                </div>
                            </div>    
                            <div class="card-body">
                            <table class="table table-primary table-striped">
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Name</td>
                                        <td>Image</td>
                                        <td>Email</td>
                                        <td>Phone</td>
                                        <td colspan="">Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students AS $student)
                                    <tr>
                                        <td>{{$student->id}}</td>
                                        <td>{{$student->firstname}} {{$student->lastname}}</td>
                                        <td><img class="rounded-circle" style="object-fit:cover" src ="{{asset('storage/'.$student->image)}}" width="100" height="100"></td>
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->phone}}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateStudentModel" wire:click.prevent="edit({{$student->id}})">Edit</button>
                                            <button type="button" class="btn btn-danger" wire:click.prevent="delete({{$student->id}})">Delete</button>
                                        </td>
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
