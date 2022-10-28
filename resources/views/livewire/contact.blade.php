<div class="mt-5">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>Contact Form</h3><a href="{{url('user')}}" class="btn btn-primary">User List</a>
                            <div class="card-body">
                                <form wire:submit.prevent="submitForm">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" wire:model.delays.2000ms="name" placeholder="Input Your Name Here">
                                        @error('name')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="email" wire:model.delays.2000ms="email" placeholder="Input Your Email Here">
                                        @error('email')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="number" class="form-control" id="phone" wire:model.delays.2000ms="phone" placeholder="Input Your Phone Here">
                                        @error('phone')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control" id="message" wire:model.delays.100ms="message" rows="3"></textarea>
                                        @error('message')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-success btn-lg btn-block w-100">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>