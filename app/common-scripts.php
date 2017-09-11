<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="../js/vendor/jquery.viewportchecker.min.js"></script>
<script src="../js/plugins.js"></script>
<script src="../js/main.js"></script>


<script>
    $(document).ready(function() {

            var allPanels = $('.accordion-content').hide();

              $('h2 > a').click(function() {
                allPanels.slideUp();
                $(this).parent().next().slideDown();
                return false;
              });

    });
</script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-93535408-1', 'auto');
  ga('send', 'pageview');

</script>