<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateStudentModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <input type="hidden" id="ids" wire:model="ids">
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="firstname" wire:model.delays.2000ms="firstname" placeholder="Input Your First Name Here">
                @error('firstname')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="lastname" wire:model.delays.2000ms="lastname" placeholder="Input Your Last Name Here">
                @error('lastname')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="email" wire:model.delays.2000ms="email" placeholder="Input Your Email Here">
                @error('email')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone<span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="phone" wire:model.delays.2000ms="phone" placeholder="Input Your Phone Here">
                @error('phone')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <!-- <div class="mb-3">
                <label for="image" class="form-label">Upload Image<span class="text-danger">*</span></label>
                <input type="file" class="form-control" accept=".jpeg,.png,.jpg,.gif,.svg" id="image" wire:model.delays.2000ms="image">
                @error('image')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <img class="rounded-circle" src ="{{asset('storage/'.$image)}}" style="object-fit:cover" width="100" height="100"> -->
            <div class="col-md-12 d-flex ">
              <div class="col-md-6 mb-3">
                  <label for="image" class="form-label">Upload Image<span class="text-danger">*</span></label>
                  <input type="file" class="form-control" accept=".jpeg,.png,.jpg,.gif,.svg" id="image" wire:model="image">
                  @error('image')
                      <small class="text-danger">{{$message}}</small>
                  @enderror
              </div>
              <div class="col-md-6 mb-3 text-center">
                @if ($image && $ids)
                  <img style="object-fit:cover; width:130px; height:130px" src="{{ $isUploaded ? asset('storage/'.$image) : $image->temporaryUrl() }}" class="border border-5 border-secondary rounded" />
                @endif
              </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" wire:click.prevent="update()">Update</button>
      </div>
    </div>
  </div>
</div>