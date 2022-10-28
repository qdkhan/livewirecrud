<div>
    <input type="text" wire:model.delays.1000ms="title" placeholder="enter Your Title Here"><br/>
    <input type="text" wire:model.delays.1000ms="name" placeholder="enter Your Name Here"><br/><br/>
    Name:: {{$title}} {{$name}} <br/><br/>

    @foreach($infos AS $info)
        <h2>{{$info}}<h2>
    @endforeach
</div>
