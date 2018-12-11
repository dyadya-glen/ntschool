<aside class="col-sm-5 col-md-4 col-lg-4">
    <div class="widget widget_apsc_widget">
        <h3 class="widget-title poppins">Categorise</h3>
        <div class="apsc-icons-wrapper clearfix apsc-theme-4">
        @forelse($categories as $category)
            <div class="apsc-each-profile">
                <a class="apsc-facebook-icon clearfix" href="#">
                    <div class="apsc-inner-block">
                        <span class="social-icon">
                            <span class="media-name">{{ $category->title }}</span>
                        </span>
                        {{--<span class="apsc-count">9.8K</span>--}}
                        {{--<span class="apsc-media-type">Fans</span>--}}
                    </div>
                </a>
            </div>
        @empty
            <p>Ни одной категории еще не создано</p>
        @endforelse
        </div>
    </div>
</aside>

