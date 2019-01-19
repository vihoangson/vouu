<section id="sec2">
    @if (PageBuilder::block('show_features', ['import_return_value' => 1]))
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-10 col-sm-offset-1">
                <h2>{{ PageBuilder::block('features_title') }}</h2>
                <p class="lead">{{ PageBuilder::block('features_lead_text') }}</p>
            </div>
        </div>
        <hr />
        {!! PageBuilder::block('feature') !!}
    </div>
    @endif
</section>

{!! PageBuilder::block('social') !!}

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <button class="btn btn-default" id="scrollbutton2">{{ PageBuilder::block('scroll_to_top_text') }} &nbsp; <i class="fa fa-arrow-up"></i></button>
                <p>&copy; {{ PageBuilder::block('copyright') }} {!! date("Y") !!}. Powered by <a href="http://www.coastercms.org">Coaster CMS</a>.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ PageBuilder::js('jquery.min') }}"></script>
<script src="{{ PageBuilder::js('bootstrap.min') }}"></script>

@yield('scripts')
<script type="text/javascript">
    $(document).ready(function(){

        $('#blogSearch').submit(function(event) {
            event.preventDefault();
            window.location.href = '{{ PageBuilder::pageUrl(PageBuilder::block('blog_search_page')) }}/'+$('#query').val();
        });

        $("#scrollbutton").click(function() {
            $('html, body').animate({
                scrollTop: $("#sec1").offset().top
            }, 1000);
        });

        $("#scrollbutton2").click(function() {
            $('html, body').animate({
                scrollTop: $("#top").offset().top
            }, 1000);
        });

        var	menudesktop=function(){
            $('.dropdown-toggle').attr("data-toggle", "none");
        };

        var	menuonmobiles=function(){
            $('.dropdown-toggle').attr("data-toggle", "dropdown");
        };

        ww = $(window).width();
        if(ww  < 1200){
            menuonmobiles();
        }else{
            menudesktop();
        }

        $(window).on('resize', function(){
            ww = $(window).width();
            if(ww  < 1200){
                menuonmobiles();
            } else{
                menudesktop();
            }
        });

    });
</script>

{!! PageBuilder::block('footer_html', ['source' => true]) !!}
</body>
</html>