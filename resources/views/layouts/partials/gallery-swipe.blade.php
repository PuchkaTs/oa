<div id="lightgallery">
    @foreach($agall->images as $image)
        <div>
            <a href="/assets/gallery/{{$image->image}}" class="zoom-wrap">
                <img src="/assets/gallery/thumbs/{{$image->image}}" class="zoom-in">
            </a>
        </div>

    @endforeach
</div>