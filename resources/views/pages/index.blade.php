<ul>
    @foreach($slide as $slideItem)
        <li>
            <img src="{{ asset('source/image/slide/' . $slideItem->image) }}" alt="">
        </li>
    @endforeach
</ul>
