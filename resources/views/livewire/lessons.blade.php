<div class="">
    <p>{{$lesson->lesson_ko}}</p>
    <div class="grid grid-cols-3 max-w-5xl mx-auto">
        @foreach($lesson->purposes as $purpose)
            <a href="{{ route('purposes', ['lesson' => $lesson->lesson, 'purpose' => $purpose->purpose]) }}" class="border w-full aspect-square flex items-center justify-center">
                {{$purpose->purpose}}
            </a>
        @endforeach
    </div>
</div>
