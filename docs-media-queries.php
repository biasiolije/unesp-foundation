<? require_once("header.php"); ?>

	<div class="row almost full">
		<div class="large-3 columns">
			<? require_once("sidebar-documentacao.php"); ?>
		</div>
		<div class="large-9 columns margin-top-double padding-bottom-quad documentacao">

			<h1>Media Queries</h1>
			<h3 class="subheader">As media queries são definidas de forma simples no Foundation, e a grid baseada em porcentagem realiza todo o trabalho pesado nos vários tamanhos de tela.</h3>

			<hr class="large">

			<h3 class="normal">Básico</h3>
			<p>Media queries são construidas utilizando-se <em>em's</em> no Foundation. Futuramente elas serão convertidas para <em>rem's</em>, mas no momento nem todos os browsers suportam media queries desta forma.</p>

			<h4>CSS</h4>
			<pre class="margin-bottom"><code class="language-scss">// Telas pequenas
@media only screen { } /* Define os estilos para mobile */

@media only screen and (max-width: 40em) { } /* largura máxima de 640px, estilos somente para mobile */

// Telas médias
@media only screen and (min-width: 40.063em) { } /* largura mínima de 641px, telas médias */

@media only screen and (min-width: 40.063em) and (max-width: 64em) { } /* largura mínima de 641px e largura máxima de 1024px, estilos aplicados para ajustes somente em tablets */

// Telas grandes
@media only screen and (min-width: 64.063em) { } /* largura mínima de 1025px, telas grandes */

@media only screen and (min-width: 64.063em) and (max-width: 90em) { } /* largura mínima de 1025px e largura máxima de 1440px, estilos aplicados para ajustes somente em telas grandes */

// Telas extra-grandes (XL)
@media only screen and (min-width: 90.063em) { } /* largura mínima de 1441px, telas extra-grandes */

@media only screen and (min-width: 90.063em) and (max-width: 120em) { } /* largura mínima de 1441px e largura máxima de 1920px, estilos aplicados para ajustes somente em telas extra-grandes */

// Telas gigantes (XXL)
@media only screen and (min-width: 120.063em) { } /* largura mínima de 1921px, telas gigantes */</code></pre>

			<h3 class="normal">Aplicando estilos com SASS</h3>

			<p>As seguintes media queries podem ser utilizadas para a criação do CSS acima.</p>

			<h4>SCSS</h4>

			<pre class="margin-bottom"><code class="language-scss">@media #{$small-up} { }
@media #{$small-only} { }

@media #{$medium-up} { }
@media #{$medium-only} { }

@media #{$large-up} { }
@media #{$large-only} { }

@media #{$xlarge-up} { }
@media #{$xlarge-only} { }

@media #{$xxlarge-up} { } //nota: estas duas media queries resultam no mesmo CSS
@media #{$xxlarge-only} { } //porque não há definições de telas maiores que XXL no Framework</code></pre>

			<hr class="large">

			<?= linkDocumentacaoOficial(array('append' => 'docs/media-queries.html')) ?>

			<script>
				document.addEventListener('DOMContentLoaded', function() {
					activeNav('docs-media-queries');
					activeNav('documentacao');
				}, false);
			</script>

		</div>
	</div>

<? require_once("footer.php"); ?>
