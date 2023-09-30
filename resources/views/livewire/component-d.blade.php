<form wire:submit="save">
    @dump($errors->toArray())
    <div>
        <input wire:model="form.title" />
        <div>@error('form.title') {{ $message }} @enderror</div>
    </div>
    <div>
        <input wire:model="form.address.street" />
        <div>@error('form.address.street') {{ $message }} @enderror</div>
        <div>@error('address.street') {{ $message }} @enderror</div>
        <div>@error('street') {{ $message }} @enderror</div>
    </div>
    <div>
        <input wire:model="form.address.city" />
        <div>@error('form.address.city') {{ $message }} @enderror</div>
    </div>
    <div>
        <input wire:model="form.address.state" />
        <div>@error('form.address.state') {{ $message }} @enderror</div>
    </div>
    <div>
        <input wire:model="form.address.zip" />
        <div>@error('form.address.zip') {{ $message }} @enderror</div>
    </div>
    <button>Submit</button>
</form>
