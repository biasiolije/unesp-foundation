<? require_once("header.php"); ?>

	<div class="row almost full">
		<div class="large-3 columns">
			<? require_once("sidebar-documentacao.php"); ?>
		</div>
		<div class="large-9 columns margin-top-double padding-bottom-quad documentacao">

			<h1>Grid</h1>
			<h3 class="subheader">A grid de 12 colunas aninhável do Foundation permite a criação de layouts multi-dispositivos de forma rápida e fácil. Se você já está familiarizado com sistemas de grid, vai se sentir em casa. Senão, vai aprender rapidamente.</h3>

			<hr class="large">

			<h3 class="normal">Básico</h3>

			<p>Começe adicionando um elementdo com a classe <code>row</code>. Isso irá criar um bloco horizontal que contém as colunas verticais. Então, adicione divs com a classe <code>column</code> dentro desta linha. Você pode utilizar <code>column</code> ou <code>columns</code> &#8212; a diferença é meramente gramatical. Especifique a largura de cada coluna com as classes <code>small-#</code>, <code>medium-#</code>, e <code>large-#</code>.</p>
			<p><strong>O Foundation é mobile-first</strong>. Codifique para telas pequenas primeiro, e dispositivos maiores irão herdar estes estilos. Customize para telas maiores quando necessário.</p>

			<h4>HTML</h4>

			<pre class="margin-bottom"><code class="language-html">&lt;div class="row"&gt;
  &lt;div class="small-2 large-4 columns"&gt;...&lt;/div&gt;
  &lt;div class="small-4 large-4 columns"&gt;...&lt;/div&gt;
  &lt;div class="small-6 large-4 columns"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
  &lt;div class="large-3 columns"&gt;...&lt;/div&gt;
  &lt;div class="large-6 columns"&gt;...&lt;/div&gt;
  &lt;div class="large-3 columns"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
  &lt;div class="small-6 large-2 columns"&gt;...&lt;/div&gt;
  &lt;div class="small-6 large-8 columns"&gt;...&lt;/div&gt;
  &lt;div class="small-12 large-2 columns"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
  &lt;div class="small-3 columns"&gt;...&lt;/div&gt;
  &lt;div class="small-9 columns"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
  &lt;div class="large-4 columns"&gt;...&lt;/div&gt;
  &lt;div class="large-8 columns"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
  &lt;div class="small-6 large-5 columns"&gt;...&lt;/div&gt;
  &lt;div class="small-6 large-7 columns"&gt;...&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
  &lt;div class="large-6 columns"&gt;...&lt;/div&gt;
  &lt;div class="large-6 columns"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>

			<h4>HTML renderizado</h4>

			<div class="row display">
				<div class="small-2 large-4 columns"><span class="hide-for-large-up">2</span><span class="show-for-large-up">4</span></div>
				<div class="small-4 large-4 columns">4</div>
				<div class="small-6 large-4 columns"><span class="hide-for-large-up">6</span><span class="show-for-large-up">4</span></div>
			</div>
			<div class="row display">
				<div class="large-3 columns"><span class="hide-for-large-up">full</span><span class="show-for-large-up">3</span></div>
				<div class="large-6 columns"><span class="hide-for-large-up">full</span><span class="show-for-large-up">6</span></div>
				<div class="large-3 columns"><span class="hide-for-large-up">full</span><span class="show-for-large-up">3</span></div>
			</div>
			<div class="row display">
				<div class="small-6 large-2 columns"><span class="hide-for-large-up">6</span><span class="show-for-large-up">2</span></div>
				<div class="small-6 large-8 columns"><span class="hide-for-large-up">6</span><span class="show-for-large-up">8</span></div>
				<div class="small-12 large-2 columns"><span class="hide-for-large-up">full</span><span class="show-for-large-up">2</span></div>
			</div>
			<div class="row display">
				<div class="small-3 columns">3</div>
				<div class="small-9 columns">9</div>
			</div>
			<div class="row display">
				<div class="large-4 columns"><span class="hide-for-large-up">full</span><span class="show-for-large-up">4</span></div>
				<div class="large-8 columns"><span class="hide-for-large-up">full</span><span class="show-for-large-up">8</span></div>
			</div>
			<div class="row display">
				<div class="small-6 large-5 columns"><span class="hide-for-large-up">6</span><span class="show-for-large-up">5</span></div>
				<div class="small-6 large-7 columns"><span class="hide-for-large-up">6</span><span class="show-for-large-up">7</span></div>
			</div>
			<div class="row display">
				<div class="large-6 columns"><span class="hide-for-large-up">full</span><span class="show-for-large-up">6</span></div>
				<div class="large-6 columns"><span class="hide-for-large-up">full</span><span class="show-for-large-up">6</span></div>
			</div>

			<hr class="large">
			<h3 id="small-grid" class="normal">Grid para telas pequenas <small>(Small Grid)</small></h3>
			<p>Grids pequenas expandem para telas maiores mais facilmente que grids maiores diminuem.</p>

			<h4>HTML</h4>

			<pre class="margin-bottom"><code class="language-html">&lt;div class="row"&gt;
  &lt;div class="small-2 columns"&gt;2 columns&lt;/div&gt;
  &lt;div class="small-10 columns"&gt;10 columns&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
  &lt;div class="small-3 columns"&gt;3 columns&lt;/div&gt;
  &lt;div class="small-9 columns"&gt;9 columns&lt;/div&gt;
&lt;/div&gt;</code></pre>

			<h4>HTML renderizado</h4>

			<div class="row display">
				<div class="small-2 columns">2 columns</div>
				<div class="small-10 columns">10 columns</div>
			</div>
			<div class="row display">
				<div class="small-3 columns">3 columns</div>
				<div class="small-9 columns">9 columns</div>
			</div>

			<hr class="large">

			<h3 id="medium-grid" class="normal">Grid para telas médias <small>(Medium Grid)</small></h3>
			<p>Grids médias irão herdar os estilos das pequenas, a não ser que seja especificado um layout diferente, utilzando as classes <code>medium-#</code>.</p>

			<pre class="margin-bottom"><code class="language-html">&lt;div class="row"&gt;
  &lt;div class="medium-2 columns"&gt;2 columns&lt;/div&gt;
  &lt;div class="medium-10 columns"&gt;10 columns&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
  &lt;div class="medium-3 columns"&gt;3 columns&lt;/div&gt;
  &lt;div class="medium-9 columns"&gt;9 columns&lt;/div&gt;
&lt;/div&gt;</code></pre>

			<h4>HTML renderizado</h4>

			<div class="row display">
				<div class="medium-2 columns">2 columns</div>
				<div class="medium-10 columns">10 columns</div>
			</div>
			<div class="row display">
				<div class="medium-3 columns">3 columns</div>
				<div class="medium-9 columns">9 columns</div>
			</div>

			<hr class="large">
			<h3 class="normal">Avançado</h3>

			<p>Você pode aninhar as grids indefinidamente, mas em um certo ponto a situação ficará absurda.</p>
			<h4>HTML</h4>

			<pre class="margin-bottom"><code class="language-html">&lt;div class="row"&gt;
  &lt;div class="small-8 columns"&gt;8
    &lt;div class="row"&gt;
      &lt;div class="small-8 columns"&gt;8 Aninhada
        &lt;div class="row"&gt;
          &lt;div class="small-8 columns"&gt;8 Aninhada novamente&lt;/div&gt;
          &lt;div class="small-4 columns"&gt;4&lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class="small-4 columns"&gt;4&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="small-4 columns"&gt;4&lt;/div&gt;
&lt;/div&gt;</code></pre>

			<h4>HTML renderizado</h4>

			<div class="row display">
				<div class="small-8 columns">8
					<div class="row">
						<div class="small-8 columns">8 Aninhada
							<div class="row">
								<div class="small-8 columns">8 Aninhada novamente</div>
								<div class="small-4 columns">4</div>
							</div>
						</div>
						<div class="small-4 columns">4</div>
					</div>
				</div>
				<div class="small-4 columns">4</div>
			</div>

			<hr class="large">
			<h3 id="offsets" class="normal">Deslocamentos <small>(Offsets)</small></h3>
			<p>Desloque blocos até 11 colunas para a direita utilizando clases como <code>.large-offset-1</code> e <code>.small-offset-3</code></p>

			<h4>HTML</h4>

			<pre class="margin-bottom"><code class="language-html">&lt;div class="row"&gt;
  &lt;div class="large-1 columns"&gt;1&lt;/div&gt;
  &lt;div class="large-11 columns"&gt;11&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
  &lt;div class="large-1 columns"&gt;1&lt;/div&gt;
  &lt;div class="large-10 large-offset-1 columns"&gt;10, offset 1&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
  &lt;div class="large-1 columns"&gt;1&lt;/div&gt;
  &lt;div class="large-9 large-offset-2 columns"&gt;9, offset 2&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
  &lt;div class="large-1 columns"&gt;1&lt;/div&gt;
  &lt;div class="large-8 large-offset-3 columns"&gt;8, offset 3&lt;/div&gt;
&lt;/div&gt;</code></pre>

			<h4>HTML renderizado</h4>

			<div class="row display">
				<div class="large-1 columns">1</div>
				<div class="large-11 columns">11</div>
			</div>
			<div class="row display">
				<div class="large-1 columns">1</div>
				<div class="large-10 large-offset-1 columns">10, offset 1</div>
			</div>
			<div class="row display">
				<div class="large-1 columns">1</div>
				<div class="large-9 large-offset-2 columns">9, offset 2</div>
			</div>
			<div class="row display">
				<div class="large-1 columns">1</div>
				<div class="large-8 large-offset-3 columns">8, offset 3</div>
			</div>


			<hr class="large">
			<h3 id="incomplete-rows" class="normal">Linhas incompletas</h3>
			<p>Para contornar a situação de arredondamento de medidas que difere entre os browsers, O Foundation flutua a última coluna de cada linha à direita para que as bordas fiquem alinhadas. Se sua linha não tem uma quantidade que soma 12 colunas, você pode utilizar a classe <code>end</code> na última coluna para sobrecarregar este comportamento.</p>

			<h4>HTML</h4>

			<pre class="margin-bottom"><code class="language-html">&lt;div class="row"&gt;
  &lt;div class="medium-3 columns"&gt;3&lt;/div&gt;
  &lt;div class="medium-3 columns"&gt;3&lt;/div&gt;
  &lt;div class="medium-3 columns"&gt;3&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
  &lt;div class="medium-3 columns"&gt;3&lt;/div&gt;
  &lt;div class="medium-3 columns"&gt;3&lt;/div&gt;
  &lt;div class="medium-3 columns end"&gt;3 end&lt;/div&gt;
&lt;/div&gt;</code></pre>

			<h4>HTML renderizado</h4>

			<div class="row display-end">
				<div class="medium-3 columns">3</div>
				<div class="medium-3 columns">3</div>
				<div class="medium-3 columns">3</div>
			</div>
			<div class="row display-end">
				<div class="medium-3 columns">3</div>
				<div class="medium-3 columns">3</div>
				<div class="medium-3 columns end">3 end</div>
			</div>


			<hr class="large">
			<h3 id="collapse-uncollapse-rows" class="normal">Colapso e Espaçamento de colunas <small>(Collapse/Uncollapse)</small></h3>
			<p>A classe <code>collapse</code> permite que você remova o espaçamento entre as colunas (column gutter).</p>
			<p>Há situações em que não queremos que todas as media queries estejam colapsadas ou espaçadas. Neste caso, use a media query que você quer que esteja ou não colapsada e adicione isso ao seu elemento <code>row</code>. O exemplo mostra nenhum espaçamento em telas pequenas e médias, e então adiciona o espaçamento padrão em telas grandes.</p>
			<h4>HTML</h4>

			<pre class="margin-bottom"><code class="language-html">&lt;div class="row collapse large-uncollapse"&gt;
  &lt;div class="small-6 columns"&gt;
    &lt;div class="panel"&gt;
      &lt;p class="hide-for-large-up"&gt;Em uma tela pequena ou média, eu não tenho espaçamento!&lt;/p&gt;
      &lt;p class="show-for-large-up"&gt;Em uma tela grande eu tenho espaçamento!&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="small-6 columns"&gt;
    &lt;div class="panel"&gt;
      &lt;p class="hide-for-large-up"&gt;Em uma tela pequena ou média, eu não tenho espaçamento!&lt;/p&gt;
      &lt;p class="show-for-large-up"&gt;Em uma tela grande eu tenho espaçamento!&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>

			<h4>HTML renderizado</h4>

			<p>Redimensione a janela para telas menores/maiores para ver a diferença.</p>

			<div class="row collapse large-uncollapse">
				<div class="small-6 columns">
					<div class="panel">
						<p class="hide-for-large-up">Em uma tela pequena ou média, eu não tenho espaçamento!</p>
						<p class="show-for-large-up">Em uma tela grande eu tenho espaçamento!</p>
					</div>
				</div>
				<div class="small-6 columns">
					<div class="panel">
						<p class="hide-for-large-up">Em uma tela pequena ou média, eu não tenho espaçamento!</p>
						<p class="show-for-large-up">Em uma tela grande eu tenho espaçamento!</p>
					</div>
				</div>
			</div>

			<hr class="large">

			<h3 id="centered-columns" class="normal">Colunas centralizadas</h3>
			<p>Centralize suas colunas adicionando a classe <code>small-centered</code> na coluna desejada. Telas maiores irão herdar o alinhamento por padrão, mas você pode centralizar unicamente em outros tamanhos, adicionando classes do tipo <code>large-centered</code>. Para descentralizar em telas grandes, use a classe <code>large-uncentered</code>.</p>

			<h4>HTML</h4>

			<pre class="margin-bottom"><code class="language-html">&lt;div class="row"&gt;
  &lt;div class="small-3 small-centered columns"&gt;3 centered&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
  &lt;div class="small-6 large-centered columns"&gt;6 centered&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
  &lt;div class="small-9 small-centered large-uncentered columns"&gt;9 centered&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
  &lt;div class="small-11 small-centered columns"&gt;11 centered&lt;/div&gt;
&lt;/div&gt;</code></pre>

			<h4>HTML renderizado</h4>

			<div class="row display">
				<div class="small-3 small-centered columns">3 centered</div>
			</div>
			<div class="row display">
				<div class="small-6 large-centered columns">6 centered, large</div>
			</div>
			<div class="row display">
				<div class="small-9 small-centered large-uncentered columns">9 centered small</div>
			</div>
			<div class="row display">
				<div class="small-11 small-centered columns">11 centered</div>
			</div>

			<hr class="large">

			<h3 id="source-ordering" class="normal">Ordenação do código fonte <small>(Source ordering)</small></h3>
			
			<p>Utilizando as classes de ordenação do código fonte, você pode trocar a posição de colunas entre si variando entre as media queries. Isso significa que se você colocar uma sub-navegação abaixo do conteúdo principal em uma tela pequena, você tem a possibilidade de posicioná-la tanto à direita quanto à esquerda em telas maiores. Prefixe push/pull com o tamanho da tela na qual você quer aplicar o efeito. <code>medium-push-#</code>, <code>large-push-#</code> é a sintaxe que você irá utilizar. Utilize <code>large-reset-order</code> para, em telas grandes, resetar colunas modificadas para seu posicionamento original.</p>

			<h4>HTML</h4>

			<pre class="margin-bottom"><code class="language-html">&lt;div class="row"&gt;
  &lt;div class="small-10 small-push-2 columns"&gt;10&lt;/div&gt;
  &lt;div class="small-2 small-pull-10 columns"&gt;2, last&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
  &lt;div class="large-9 large-push-3 columns"&gt;9&lt;/div&gt;
  &lt;div class="large-3 large-pull-9 columns"&gt;3, last&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
  &lt;div class="large-8 large-push-4 columns"&gt;8&lt;/div&gt;
  &lt;div class="large-4 large-pull-8 columns"&gt;4, last&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
  &lt;div class="small-5 small-push-7 medium-7 medium-push-5 columns"&gt;7&lt;/div&gt;
  &lt;div class="small-7 small-pull-5 medium-5 medium-pull-7 columns"&gt;5, last&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
  &lt;div class="medium-6 medium-push-6 columns"&gt;6&lt;/div&gt;
  &lt;div class="medium-6 medium-pull-6 columns"&gt;6, last&lt;/div&gt;
&lt;/div&gt;</code></pre>

			<h4>HTML renderizado</h4>

			<div class="row display">
				<div class="small-10 small-push-2 columns">10</div>
				<div class="small-2 small-pull-10 columns">2, last</div>
			</div>
			<div class="row display">
				<div class="large-9 large-push-3 columns">9</div>
				<div class="large-3 large-pull-9 columns">3, last</div>
			</div>
			<div class="row display">
				<div class="large-8 large-push-4 columns">8</div>
				<div class="large-4 large-pull-8 columns">4, last</div>
			</div>
			<div class="row display">
				<div class="small-5 small-push-7 medium-7 medium-push-5 columns">7</div>
				<div class="small-7 small-pull-5 medium-5 medium-pull-7 columns">5, last</div>
			</div>
			<div class="row display">
				<div class="medium-6 medium-push-6 columns">6</div>
				<div class="medium-6 medium-pull-6 columns">6, last</div>
			</div>



			<hr class="large">

			<?= linkDocumentacaoOficial(array('append' => 'docs/components/grid.html')) ?>

			<script>
				document.addEventListener('DOMContentLoaded', function() {
					activeNav('docs-componentes-grid');
					activeNav('documentacao');
				}, false);
			</script>

		</div>
	</div>

<? require_once("footer.php"); ?>
