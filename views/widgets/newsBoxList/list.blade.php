@foreach($pages as $page)
    <div class="{{ $options['itemBoxClass'] }}">
        <a href="{{$page->url}}">
            <img src="{{{ $page->imageUrl }}}" alt="" class="portifolio">
            <div class="{{ $options['titleClass'] }}">
                {{{ $page->title }}}
            </div>
            <div class="{{ $options['descriptionClass'] }}">
                {{{ $page->description }}}
            </div>
        </a>
    </div>
@endforeach