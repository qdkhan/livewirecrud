<div>
    <button type="button" wire:click="addNumber(19,35)" >Sum</button><br/>
    <textarea wire:keydown.enter="displayMessage($event.target.value)"></textarea><br/>

    <form wire:submit.prevent="getSum()">
        <input type="text" name="num1" placeholder="Enter First Number" wire:model="num1"><br/>
        <input type="text" name="num2" placeholder="Enter Second Number" wire:model="num2"><br/>
        <button type="submit">Submit</button>
    </form>
    Sum: {{ $sum }} <br/>
    Message: {{ $msg }}
</div>
