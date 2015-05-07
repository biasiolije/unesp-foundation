				</div>

				<footer id="main-footer"></footer>

				<a class="exit-off-canvas"></a>
			</div>
		</div>

		<div id="media-query-indicator">
			<span class="show-for-small-only">S</span>
			<span class="show-for-medium-only">M</span>
			<span class="show-for-large-only">L</span>
			<span class="show-for-xlarge-only">XL</span>
			<span class="show-for-xxlarge-only">XXL</span>
		</div>

		<script>
			function activeNav(nav) {
				els = document.getElementsByClassName('menu-'+nav);
				[].forEach.call(els, function(el){
					el.classList.add('active');
				})
			}
		</script>

		<script src="bower_components/jquery/dist/jquery.min.js"></script>
		<script src="bower_components/foundation/js/foundation.min.js"></script>
		<script src="js/app.js"></script>
		<script src="bower_components/highlightjs/highlight.pack.js"></script>
		<script>hljs.initHighlightingOnLoad();</script>
	</body>
</html>