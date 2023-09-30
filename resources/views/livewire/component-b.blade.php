<div>
    <h2>Init Address Info:</h2>
    <p>Address Type: {{ gettype($address) }}</p>
    <p>Address: @json($address)</p>
    <button wire:click="dispatchThing">Click to dispatch</button>
    <livewire:component-c />
</div>
