</div><!-- #content -->
{{--<script src="{{ asset('js/app.js') }}"></script>--}}
<script>
    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://localehost:8000.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>

<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
<script>
    // add this rail gallery effect
    $(document).on('click', '#socialShare > .socialBox', function() {

        var self = $(this);
        var element = $('#socialGallery a');
        var c = 0;

        if (self.hasClass('animate')) {
            return;
        }

        if (!self.hasClass('open')) {

            self.addClass('open');

            TweenMax.staggerTo(element, 0.3, {
                    opacity: 1,
                    visibility: 'visible'
                },
                0.075);
            TweenMax.staggerTo(element, 0.3, {
                    top: -12,
                    ease: Cubic.easeOut
                },
                0.075);

            TweenMax.staggerTo(element, 0.2, {
                    top: 0,
                    delay: 0.1,
                    ease: Cubic.easeOut,
                    onComplete: function() {
                        c++;
                        if (c >= element.length) {
                            self.removeClass('animate');
                        }
                    }
                },
                0.075);

            self.addClass('animate');

        } else {

            TweenMax.staggerTo(element, 0.3, {
                    opacity: 0,
                    onComplete: function() {
                        c++;
                        if (c >= element.length) {
                            self.removeClass('open animate');
                            element.css('visibility', 'hidden');
                        };
                    }
                },
                0.075);
        }
    });
</script>
@stack('js')

</body>

</html>
