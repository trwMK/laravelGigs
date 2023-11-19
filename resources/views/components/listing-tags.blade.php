@props(['tagsCsv'])

@php
    //Put the csv file into an array and separate it by an comma and stores it in the varibale $tags
    $tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
    @foreach($tags as $tag)
    <li
        class="bg-black text-white rounded-xl px-3 py-1 mr-2"
    >
        <!-- If a tag is clicked -> add the tag to the query string so it can be accessed and filtered -->
        <a href="/?tag={{$tag}}">{{$tag}}</a>
    </li>
    @endforeach
</ul>
