<div>
    Hello World {{ $name }}
    <input type="text" wire:model.lazy="message1">
    <p>{{ $message1 }}</p>
    <input type="text" wire:model.lazy="message2">
    <p>{{ $message2 }}</p>
</div>