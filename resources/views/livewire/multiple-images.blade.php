<div class="mt-5">
    <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                    @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{session()->get('success')}}
                        </div>
                    @endif
                    <form id="multiImgUpload">
                        <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                        <input class="form-control" type="file" accept=".jpg,.jpeg,.png,.gif,.svg" wire:model="images" multiple>
                        </div>
                        <button type="submit" class="btn btn-primary" wire:click.prevent="store()">Upload</button>
                    </form>
                    </div>
                </div>
            <div>
    </section>
</div>