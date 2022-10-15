<div>
    <form wire:submit.prevent="update">
        <input type="hidden" name="" wire:model="contactId">
        <div class="form-group">
            <div class="form-row">
                <div class="col">
                    <input wire:model="name"
                    type="text" name="" id=""
                    class="form-control"
                    placeholder="Name">
                    @error('name')
                    <div class="form-group">
                        <label class="col-form-label" for="inputError"><i class="far fa-times-circle"></i> {{ $message }}</label>
                      </div>
                    @enderror
                </div>
                <div class="col">
                    <input wire:model="phone" type="text" name="" id="" class="form-control" placeholder="Phone">
                    @error('phone')
                    <div class="form-group">
                        <label class="col-form-label" for="inputError"><i class="far fa-times-circle"></i> {{ $message }}</label>
                      </div>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
    </form>
</div>
