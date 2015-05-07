<? require_once("header.php"); ?>

	<div class="row almost full">
		<div class="large-3 columns">
			<? require_once("sidebar-documentacao.php"); ?>
		</div>
		<div class="large-9 columns margin-top-double padding-bottom-quad documentacao">

			<h1>Block Grid</h1>
			<h3 class="subheader">Block grids possibilitam a divisão de conteúdo de uma lista igualmente pela grid. Se a intenção é criar uma linha de 5 imagens ou parágrafos que precisam ficar igualmente espaçados independemente do tamanho da tela, block grid é o componente certo.</h3>

			<hr class="large">

			<ul class="small-block-grid-3">
				<li><img class="th" src="assets-documentacao/img/finn.png"></li>
				<li><img class="th" src="assets-documentacao/img/jake.png"></li>
				<li><img class="th" src="assets-documentacao/img/beemo.png"></li>
			</ul>

			<hr class="large">
			<h3 class="normal">Básico</h3>

			<p>Utilize a classe <code>small-block-grid-#</code> para codificar o block grid e especificar o número de elementos por linha.</p>
			<div class="row">
				<div class="large-6 columns">
					<h4>HTML</h4>
					<pre class="margin-bottom"><code class="language-html">&lt;ul class="small-block-grid-3"&gt;
  &lt;li&gt;...&lt;/li&gt;
  &lt;li&gt;...&lt;/li&gt;
  &lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;</code></pre>
				</div>
				<div class="large-6 columns">
					<h4>HTML renderizado</h4>
					<ul class="small-block-grid-3">
						<li><img class="th" src="assets-documentacao/img/finn.png"></li>
						<li><img class="th" src="assets-documentacao/img/jake.png"></li>
						<li><img class="th" src="assets-documentacao/img/beemo.png"></li>
					</ul>
				</div>
			</div>

			<hr class="large">
			<h3 class="normal">Avançado</h3>

			<p>Utilize classes adicionais para especificar um número diferente de itens para cada tamanho de tela.</p>
			<div class="row">
				<div class="large-6 columns">
					<h4>HTML</h4>
					<pre class="margin-bottom"><code class="language-html">&lt;ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-4"&gt;
  &lt;li&gt;...&lt;/li&gt;
  &lt;li&gt;...&lt;/li&gt;
  &lt;li&gt;...&lt;/li&gt;
  &lt;li&gt;...&lt;/li&gt;
  &lt;li&gt;...&lt;/li&gt;
  &lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;</code></pre>
				</div>
				<div class="large-6 columns">
					<h4>HTML renderizado</h4>
					<ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-4">
						<li><img class="th" src="assets-documentacao/img/finn.png"></li>
						<li><img class="th" src="assets-documentacao/img/jake.png"></li>
						<li><img class="th" src="assets-documentacao/img/beemo.png"></li>
						<li><img class="th" src="assets-documentacao/img/bubblegum.png"></li>
						<li><img class="th" src="assets-documentacao/img/marceline.png"></li>
						<li><img class="th" src="assets-documentacao/img/lsp.png"></li>
					</ul>
				</div>
			</div>

			<p>Se você utilizar somente a classe <code>small-block-grid</code>, o grid irá manter sua configuração de espaçamento em qualquer tamanho de tela. Se você utilizar somente a classe <code>large-block-grid</code>, os itens irão stackar um sobre o outro em dispositivos menores. Se você utilizar ambas, é possível controlar o espaçamento dos itens para cada breakpoint das media queries.</p>

			<hr class="large">

			<h3 class="normal uf-addon">Espaçamento</h3>

			<p>O Unesp Foundation traz duas classes para controlar melhor o espaçamento entre os elementos de um block grid, <code>.packed</code> e <code>.collapse</code>, conforme os exemplos abaixo:</p>

			<div class="row">
				<div class="large-4 columns">
					<h4>HTML</h4>
					<pre class="margin-bottom"><code class="language-html">&lt;!-- Padrão do Foundation --&gt;
&lt;ul class="small-block-grid-2"&gt;           
  &lt;li&gt;...&lt;/li&gt;
  &lt;li&gt;...&lt;/li&gt;
  &lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;</code></pre>
					<h4>HTML Renderizado</h4>
					<ul class="small-block-grid-2">
						<li><img class="th" src="assets-documentacao/img/finn.png"></li>
						<li><img class="th" src="assets-documentacao/img/jake.png"></li>
						<li><img class="th" src="assets-documentacao/img/beemo.png"></li>
						<li><img class="th" src="assets-documentacao/img/bubblegum.png"></li>
					</ul>
				</div>
				<div class="large-4 columns">
					<h4>HTML</h4>
					<pre class="margin-bottom"><code class="language-html">&lt;!-- .packed --&gt;
&lt;ul class="packed small-block-grid-2"&gt;
  &lt;li&gt;...&lt;/li&gt;
  &lt;li&gt;...&lt;/li&gt;
  &lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;</code></pre>
					<h4>HTML Renderizado</h4>
					<ul class="small-block-grid-2 packed">
						<li><img class="th" src="assets-documentacao/img/finn.png"></li>
						<li><img class="th" src="assets-documentacao/img/jake.png"></li>
						<li><img class="th" src="assets-documentacao/img/beemo.png"></li>
						<li><img class="th" src="assets-documentacao/img/bubblegum.png"></li>
					</ul>
				</div>
				<div class="large-4 columns">
					<h4>HTML</h4>
					<pre class="margin-bottom"><code class="language-html">&lt;!-- .collapse --&gt;
&lt;ul class="collapse small-block-grid-2"&gt;
  &lt;li&gt;...&lt;/li&gt;
  &lt;li&gt;...&lt;/li&gt;
  &lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;</code></pre>
					<h4>HTML Renderizado</h4>
					<ul class="small-block-grid-2 collapse">
						<li><img class="th" src="assets-documentacao/img/finn.png"></li>
						<li><img class="th" src="assets-documentacao/img/jake.png"></li>
						<li><img class="th" src="assets-documentacao/img/beemo.png"></li>
						<li><img class="th" src="assets-documentacao/img/bubblegum.png"></li>
					</ul>
				</div>
			</div>
			

			<hr class="large">

			<?= linkDocumentacaoOficial(array('append' => 'docs/components/block-grid.html')) ?>

			<script>
				document.addEventListener('DOMContentLoaded', function() {
					activeNav('docs-componentes-block-grid');
					activeNav('documentacao');
				}, false);
			</script>

		</div>
	</div>

<? require_once("footer.php"); ?>
