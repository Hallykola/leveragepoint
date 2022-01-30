<div>

    {{-- The whole world belongs to you. --}}
    <h1 class="display-4 text-danger m-5">
        {{$status}}
    </h1>
    <button wire:click="approve({{$form}})" type="button"> Approve</button>
    <button wire:click="decline" type="button"> Decline</button>
    <button wire:click="pending" type="button"> Pend</button>

</div>
