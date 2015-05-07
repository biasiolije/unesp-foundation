<? require_once("header.php"); ?>

	<div class="row almost full">
		<div class="large-3 columns">
			<? require_once("sidebar-documentacao.php"); ?>
		</div>
		<div class="large-9 columns margin-top-double padding-bottom-quad documentacao">

			<h1>Classes de Visibilidade</h1>
			<h3 class="subheader">Classes de visibilidade permitem que você mostre ou oculte elementos baseando-se no tamanho da tela ou orientação do dispositivo. Você pode controlar o que o usuário vê de acordo com o ambiente do browser que ele está utilizando.</h3>

			<hr class="large">

			<p class="panel">
				<strong class="show-for-small-only">Este texto é mostrado somente em telas pequenas.</strong>
				<strong class="show-for-medium-up">Este texto é mostrado em telas médias e maiores.</strong>
				<strong class="show-for-medium-only">Este texto é mostrado somente em telas médias.</strong>
				<strong class="show-for-large-up">Este texto é mostrado em telas grandes e maiores.</strong>
				<strong class="show-for-large-only">Este texto é mostrado somente em telas grandes.</strong>
				<strong class="show-for-xlarge-up">Este texto é mostrado em telas extra-grandes e maiores.</strong>
				<strong class="show-for-xlarge-only">Este texto é mostrado somente em telas extra-grandes.</strong>
				<strong class="show-for-xxlarge-up">Este texto é mostrado em telas gigantes.</strong>
			</p>

			<hr class="large">

			<h3 class="normal">Exibir de acordo com o tamanho da tela</h3>
			<p>Neste exemplo, nos usamos a classe de visibilidade <strong>show</strong> para exibir determinadas strings de texto baseando-se no dispositivo que os usuários visualizam a página. Se o browser se enquadrar nas condições da classe, o elemento será exibido. Senão, ficará oculto.</p>
			<div class="row">
				<div class="large-6 columns">
				<h4>HTML</h4>
				<pre class="margin-bottom"><code class="language-html">&lt;p class="panel"&gt;
  &lt;strong class="show-for-small-only"&gt;Este texto é mostrado somente em telas pequenas.&lt;/strong&gt;
  &lt;strong class="show-for-medium-up"&gt;Este texto é mostrado em telas médias e maiores.&lt;/strong&gt;
  &lt;strong class="show-for-medium-only"&gt;Este texto é mostrado somente em telas médias.&lt;/strong&gt;
  &lt;strong class="show-for-large-up"&gt;Este texto é mostrado em telas grandes e maiores.&lt;/strong&gt;
  &lt;strong class="show-for-large-only"&gt;Este texto é mostrado somente em telas grandes.&lt;/strong&gt;
  &lt;strong class="show-for-xlarge-up"&gt;Este texto é mostrado em telas extra-grandes e maiores.&lt;/strong&gt;
  &lt;strong class="show-for-xlarge-only"&gt;Este texto é mostrado somente em telas extra-grandes.&lt;/strong&gt;
  &lt;strong class="show-for-xxlarge-up"&gt;Este texto é mostrado em telas gigantes.&lt;/strong&gt;
&lt;/p&gt;</code></pre>
				</div>
				<div class="large-6 columns">
					<h4>HTML renderizado</h4>
					<p class="panel">
						<strong class="show-for-small-only">Este texto é mostrado somente em telas pequenas.</strong>
						<strong class="show-for-medium-up">Este texto é mostrado em telas médias e maiores.</strong>
						<strong class="show-for-medium-only">Este texto é mostrado somente em telas médias.</strong>
						<strong class="show-for-large-up">Este texto é mostrado em telas grandes e maiores.</strong>
						<strong class="show-for-large-only">Este texto é mostrado somente em telas grandes.</strong>
						<strong class="show-for-xlarge-up">Este texto é mostrado em telas extra-grandes e maiores.</strong>
						<strong class="show-for-xlarge-only">Este texto é mostrado somente em telas extra-grandes.</strong>
						<strong class="show-for-xxlarge-up">Este texto é mostrado em telas gigantes.</strong>
					</p>
				</div>
			</div>

			<h3 id="hide-by-screen-size" class="normal">Ocultar de acordo com o tamanho da tela</h3>
			<p>Este exemplo mostra o oposto: Utiliza a classe de visibilidade <strong>hide</strong> para determinar quais elementos devem desaparecer baseando-se no tamanho da tela ou orientação do dispositivo. Usuários verão os elementos em qualquer navegador <strong>menos</strong> aqueles que se enquadram nessas condições.</p>
			<div class="row">
				<div class="large-6 columns">
				<h4>HTML</h4>
			<pre class="margin-bottom"><code class="language-html">&lt;p class="panel"&gt;
  &lt;strong class="hide-for-small-only"&gt;Você &lt;em&gt;não está&lt;/em&gt; em uma tela pequena.&lt;/strong&gt;
  &lt;strong class="hide-for-medium-up"&gt;Você &lt;em&gt;não está&lt;/em&gt; em uma tela média, grande, extra-grande ou gigante.&lt;/strong&gt;
  &lt;strong class="hide-for-medium-only"&gt;Você &lt;em&gt;não está&lt;/em&gt; em uma tela média.&lt;/strong&gt;
  &lt;strong class="hide-for-large-up"&gt;Você &lt;em&gt;não está&lt;/em&gt; em uma tela grande, extra-grande ou gigante.&lt;/strong&gt;
  &lt;strong class="hide-for-large-only"&gt;Você &lt;em&gt;não está&lt;/em&gt; em uma tela grande.&lt;/strong&gt;
  &lt;strong class="hide-for-xlarge-up"&gt;Você &lt;em&gt;não está&lt;/em&gt; em uma tela extra-grande ou gigante.&lt;/strong&gt;
  &lt;strong class="hide-for-xlarge-only"&gt;Você &lt;em&gt;não está&lt;/em&gt; em uma tela extra-grande.&lt;/strong&gt;
  &lt;strong class="hide-for-xxlarge-up"&gt;Você &lt;em&gt;não está&lt;/em&gt; em uma tela gigante.&lt;/strong&gt;
&lt;/p&gt;</code></pre>

				</div>
				<div class="large-6 columns">
				<h4>HTML renderizado</h4>
					<p class="panel">
						<strong class="hide-for-small-only">Você <em>não está</em> em uma tela pequena.</strong>
						<strong class="hide-for-medium-up">Você <em>não está</em> em uma tela média, grande, extra-grande ou gigante.</strong>
						<strong class="hide-for-medium-only">Você <em>não está</em> em uma tela média.</strong>
						<strong class="hide-for-large-up">Você <em>não está</em> em uma tela grande, extra-grande ou gigante.</strong>
						<strong class="hide-for-large-only">Você <em>não está</em> em uma tela grande.</strong>
						<strong class="hide-for-xlarge-up">Você <em>não está</em> em uma tela extra-grande ou gigante.</strong>
						<strong class="hide-for-xlarge-only">Você <em>não está</em> em uma tela extra-grande.</strong>
						<strong class="hide-for-xxlarge-up">Você <em>não está</em> em uma tela gigante.</strong>
					</p>
				</div>
			</div>



			<h3 id="orientation-detection" class="normal">Detecção de orientação</h3>
			<p>Este exemplo mostra como duas simples classes determinam quando um elemento é visivel em uma orientação específica do dispositivo ou não. O exemplo irá mudar em dispositivos móveis quando você rotacionar a tela. Em desktops, a orientação é praticamente sempre mostrada como paisagem (landscape).</p>
			<div class="row">
				<div class="large-6 columns">
				<h4>HTML</h4>
					<pre class="margin-bottom"><code class="language-html">&lt;p class="panel"&gt;
  &lt;strong class="show-for-landscape"&gt;Você está em orientação paisagem (landscape).&lt;/strong&gt;
  &lt;strong class="show-for-portrait"&gt;Você está em orientação retrato (portrait).&lt;/strong&gt;
&lt;/p&gt;</code></pre>
				</div>
				<div class="large-6 columns">
				<h4>HTML renderizado</h4>
					<p class="panel">
						<strong class="show-for-landscape">Você está em orientação paisagem (landscape).</strong>
						<strong class="show-for-portrait">Você está em orientação retrato (portrait).</strong>
					</p>
				</div>
			</div>



			<h3 id="touch-detection" class="normal">Detecção de toque</h3>
			<p>Há também classes de visibilidade para exibir ou ocultar conteúdo baseando-se no suporte ao toque do dispositivo (determinado pela biblioteca Modernizr).</p>
			<div class="row">
				<div class="large-6 columns">
				<h4>HTML</h4>
				<pre class="margin-bottom"><code class="language-html">&lt;p class="panel"&gt;
  &lt;strong class="show-for-touch"&gt;Você está em um dispositivo com suporte ao toque.&lt;/strong&gt;
  &lt;strong class="hide-for-touch"&gt;Você não está em um dispositivocom suporte ao toque.&lt;/strong&gt;
&lt;/p&gt;</code></pre>

				</div>
				<div class="large-6 columns">
				<h4>HTML renderizado</h4>
					<p class="panel">
						<strong class="show-for-touch">Você está em um dispositivo com suporte ao toque.</strong>
						<strong class="hide-for-touch">Você não está em um dispositivo com suporte ao toque.</strong>
					</p>
				</div>
			</div>

			<hr class="large">

			<h2 id="accessibility">Acessibilidade</h2>
			<p>Adicionar <code>display: none</code> a um elemento irá impedir que leitores de tela leiam seu conteúdo. No entanto, existem técnicas para ocultar conteúdo e mesmo assim permitir sua legibilidade pelos leitores de tela.</p>
			<h3 id="show-for-screen-readers-only" class="normal">Exibir somente para leitores de tela</h3>
			<p>Para visualmente ocultar conteúdo, mas permitir que a tecnologia assistiva consiga lê-lo, adicione a classe <code>show-for-sr</code>.</p>
			<div class="row">
				<div class="large-6 columns">
					<h4>HTML</h4>
					<pre class="margin-bottom"><code class="language-html">&lt;p class="show-for-sr"&gt;Este texto pode ser lido somente por um leitor de tela.&lt;/p&gt;
&lt;p&gt;Há uma linha acima desta, mas você não pode visualizá-la.&lt;/p&gt;</code></pre>
				</div>
				<div class="large-6 columns">
					<h4>HTML renderizado</h4>
					<p class="show-for-sr">Este texto pode ser lido somente por um leitor de tela.</p>
					<p>Há uma linha acima desta, mas você não pode visualizá-la.</p>
				</div>
			</div>

			<h3 id="hide-for-screen-readers-only" class="normal">Ocultar somente para leitores de tela</h3>
			<p>Para ocultar texto da tecnologia assistiva, mas deixá-lo visível na tela, adicione o atributo <code>aria-hidden=&quot;true&quot;</code>. Isso não afeta o layout do elemento, mas os leitores de tela irão ignorá-lo.</p>
			<div class="row">
				<div class="large-6 columns">
					<h4>HTML</h4>
					<pre class="margin-bottom"><code class="language-html">&lt;p aria-hidden="true"&gt;This text can be seen, but won&#39;t be read by a screen reader.&lt;/p&gt;</code></pre>
				</div>
				<div class="large-6 columns">
					<h4>Rendered HTML</h4>
					<p aria-hidden="true">This text can be seen, but won&#39;t be read by a screen reader.</p>
				</div>
			</div>

			<h3 id="creating-skip-links" class="normal">Criação de links de passagem</h3>
			<p>Se a sua página tem muitos menus de navegação, um leitor de tela terá que passar por todos os elementos dos menus antes de chegar ao conteúdo principal. Para consertar esta situação, bem no topo de sua página, adicione um "Link de Passagem" que irá enviar diretamente ao conteúdo principal, depois da navegação, quando acessado.</p>
			<p>Utilize a classe <code>show-on-focus</code> para ocultar o elemento, <em>exceto</em> quando ele tiver foco.</p>
			<div class="row">
				<div class="large-6 columns">
					<h4>HTML</h4>
					<pre class="margin-bottom"><code class="language-html">&lt;p&gt;&lt;a class="show-on-focus" href="#"&gt;Pular para o conteúdo&lt;/a&gt;&lt;/p&gt;</code></pre>
				</div>
				<div class="large-6 columns">
					<h4>HTML renderizado</h4>
					<p><a class="show-on-focus" href="#">Pular para o conteúdo</a></p>
				</div>
			</div>

			<h3 id="responsive-visibility" class="normal">Visibilidade responsiva</h3>
			<p>Finalmente, se você quer ocultar algum conteúdo mas continuar disponibilizando-o para leitores de tela, utilize as classes de visibilidade <strong>hidden</strong>. Não confunda-a com a classe <strong>hide</strong>. Utilize-as em conjunto com as classes <strong>hide</strong> e <strong>show</strong> para controlar layouts complexos ao mesmo tempo que os deixa acessiveis para aqueles que utilizam leitores de tela.</p>
			<div class="row">
				<div class="large-6 columns">
				<h4>HTML</h4>
				<pre class="margin-bottom"><code class="language-html">&lt;p class="panel"&gt;
  &lt;strong class="hidden-for-small-only"&gt;Você &lt;em&gt;não está&lt;/em&gt; em uma tela pequena.&lt;/strong&gt;
  &lt;strong class="hidden-for-medium-up"&gt;Você &lt;em&gt;não está&lt;/em&gt; em uma tela média, grande, extra-grande ou gigante.&lt;/strong&gt;
  &lt;strong class="hidden-for-medium-only"&gt;Você &lt;em&gt;não está&lt;/em&gt; em uma tela média.&lt;/strong&gt;
  &lt;strong class="hidden-for-large-up"&gt;Você &lt;em&gt;não está&lt;/em&gt; em uma tela grande, extra-grande ou gigante.&lt;/strong&gt;
  &lt;strong class="hidden-for-large-only"&gt;Você &lt;em&gt;não está&lt;/em&gt; em uma tela grande.&lt;/strong&gt;
  &lt;strong class="hidden-for-xlarge-up"&gt;Você &lt;em&gt;não está&lt;/em&gt; em uma tela extra-grande ou gigante.&lt;/strong&gt;
  &lt;strong class="hidden-for-xlarge-only"&gt;Você &lt;em&gt;não está&lt;/em&gt; em uma tela extra-grande.&lt;/strong&gt;
  &lt;strong class="hidden-for-xxlarge-up"&gt;Você &lt;em&gt;não está&lt;/em&gt; em uma tela gigante.&lt;/strong&gt;
&lt;/p&gt;</code></pre>
				</div>
				<div class="large-6 columns">
					<h4>Rendered HTML</h4>
					<p class="panel">
						<strong class="hidden-for-small-only">Você <em>não está</em> em uma tela pequena.</strong>
						<strong class="hidden-for-medium-up">Você <em>não está</em> em uma tela média, grande, extra-grande ou gigante.</strong>
						<strong class="hidden-for-medium-only">Você <em>não está</em> em uma tela média.</strong>
						<strong class="hidden-for-large-up">Você <em>não está</em> em uma tela grande, extra-grande ou gigante.</strong>
						<strong class="hidden-for-large-only">Você <em>não está</em> em uma tela grande.</strong>
						<strong class="hidden-for-xlarge-up">Você <em>não está</em> em uma tela extra-grande ou gigante.</strong>
						<strong class="hidden-for-xlarge-only">Você <em>não está</em> em uma tela extra-grande.</strong>
						<strong class="hidden-for-xxlarge-up">Você <em>não está</em> em uma tela gigante.</strong>
					</p>
				</div>
			</div>

			<p>Para reverter as regras definidas pelas classes <strong>hidden</strong>, utilize as classes de visibilidade <strong>visible</strong>.</p>
			<div class="row">
				<div class="large-6 columns">
				<h4>HTML</h4>
					<pre><code class="language-html">&lt;p class="panel"&gt;
  &lt;strong class="visible-for-small-only"&gt;Este texto é mostrado somente em telas pequenas.&lt;/strong&gt;
  &lt;strong class="visible-for-medium-up"&gt;Este texto é mostrado em telas médias e maiores.&lt;/strong&gt;
  &lt;strong class="visible-for-medium-only"&gt;Este texto é mostrado somente em telas médias.&lt;/strong&gt;
  &lt;strong class="visible-for-large-up"&gt;Este texto é mostrado em telas grandes e maiores.&lt;/strong&gt;
  &lt;strong class="visible-for-large-only"&gt;Este texto é mostrado somente em telas grandes.&lt;/strong&gt;
  &lt;strong class="visible-for-xlarge-up"&gt;Este texto é mostrado em telas extra-grandes e maiores.&lt;/strong&gt;
  &lt;strong class="visible-for-xlarge-only"&gt;Este texto é mostrado somente em telas extra-grandes.&lt;/strong&gt;
  &lt;strong class="visible-for-xxlarge-up"&gt;Este texto é mostrado em telas gigantes.&lt;/strong&gt;
&lt;/p&gt;</code></pre>
				</div>
				<div class="large-6 columns">
					<h4>HTML renderizado</h4>
					<p class="panel">
						<strong class="visible-for-small-only">Este texto é mostrado somente em telas pequenas.</strong>
						<strong class="visible-for-medium-up">Este texto é mostrado em telas médias e maiores.</strong>
						<strong class="visible-for-medium-only">Este texto é mostrado somente em telas médias.</strong>
						<strong class="visible-for-large-up">Este texto é mostrado em telas grandes e maiores.</strong>
						<strong class="visible-for-large-only">Este texto é mostrado somente em telas grandes.</strong>
						<strong class="visible-for-xlarge-up">Este texto é mostrado em telas extra-grandes e maiores.</strong>
						<strong class="visible-for-xlarge-only">Este texto é mostrado somente em telas extra-grandes.</strong>
						<strong class="visible-for-xxlarge-up">Este texto é mostrado em telas gigantes.</strong>
					</p>
				</div>
			</div>

			<hr class="large">

			<h2 id="print-styles">Estilos para impressão</h2>
			<p>O Foundation inclui estilos para impressão desenvolvidos pelo HTML5 Boilerplace para fornecer alguns ajustes básicos na impressão. Eles são ativados quando você imprime através das media queries. Suas funcionalidades incluem:</p>
			<ul>
				<li>Limpeza de backgrounds, box-shadows e text-shadows</li>
				<li>Adição das urls dos links logo após seu texto</li>
				<li>Adição de bordas em elementos blockquote e pre</li>
				<li>Clenaup da página e minimização da janela</li>
			</ul>
			<p>Além disso, o Foundation inclui algumas classes simples para o controle da impressão de elementos. Simplesmente adicione <code>.show-for-print</code> a um elemento para somente mostrá-lo na impressão, e <code>.hide-for-print</code> para esconder algo quando imprimir.</p>
			<p>Classes disponíveis:</p>
			<ul>
				<li><code>.show-for-print</code>, <code>.print-only</code> (Visível na impressão)</li>
				<li><code>.hide-for-print</code>, <code>.hide-on-print</code> (Escondido na impressão)</li>
			</ul>

			<hr class="large">

			<?= linkDocumentacaoOficial(array('append' => 'docs/components/visibility.html')) ?>

			<script>
				document.addEventListener('DOMContentLoaded', function() {
					activeNav('docs-componentes-visibilidade');
					activeNav('documentacao');
				}, false);
			</script>

		</div>
	</div>

<? require_once("footer.php"); ?>
