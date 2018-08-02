<div id="buteegdehuun-lightgallery">
    @foreach($product->images as $key => $image)
        <a href="/assets/products/{{$image->image}}">
            <img src="/assets/products/{{$key == 0 ? $image->image : 'thumbs/' . $image->image}}">
        </a>
    @endforeach
</div>