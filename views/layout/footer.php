<footer class="site-footer">
            <h2>Thanks!</h2><a href="#top">Back to the Top!</a>
            <section class="copy">
                <p>Website designed and developed by <a href="http://org-websites.com">ORG-Websites</a></p>
      <p>ORG Websites is an affiliate of <a href="http://ampnetmedia.com/">ampnetmedia</a>. Ben's Heart Foundation &copy;<?php echo date('Y'); ?> all rights reserved.</p>
            </section>
        </footer>

        <script src="/assets/js/main.js"></script>

        <!-- load anylitycs script  -->
        <script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', '<?php echo $Site->google_analytics; ?>', '<?php echo $Info->website_url; ?>');
			ga('send', 'pageview');
		</script>
    </body>
</html>