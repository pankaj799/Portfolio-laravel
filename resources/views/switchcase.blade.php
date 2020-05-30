@php

$i= 5;
@endphp
@switch($i)
    @case(1)
    <div>
        Welcome to case1
    </div>
    @break
    @case(2)
    <div>
        Welcome to case2
    </div>
    @break
    @case(3)
    <div>
        Welcome to case3
    </div>
    @break
    @case(4)
    <div>
        Welcome to case4
    </div>
    @break
    @default
    <div>
        no case found
    </div>
    @break
@endswitch
