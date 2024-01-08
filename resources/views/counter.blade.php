<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <livewire:counter />
    
    
    <div x-data="{ count: 0 }">
        <button x-on:click="count++">Increment</button>
        <span x-text="count" ></span>
    </div>

    <div x-data="{ open: false }">
        <button @click="open = ! open">Toggle Content</button>
     
        <div x-show="open">
            Content...
        </div>
    </div>

</body>
</html>