<? require_once("header.php"); ?>

	<div class="row almost full">
		<div class="large-3 columns">
			<? require_once("sidebar-documentacao.php"); ?>
		</div>
		<div class="large-9 columns margin-top-double padding-bottom-quad documentacao">

			<h1>Classes Utilitárias</h1>
			<h3 class="subheader">O Foundation Unesp possui um punhado de classes úteis para controlar o comportamento de seus elementos.</h3>

			<hr class="large">

			<h3 class="normal">Classes de Float</h3>

			<p>Você pode fazer seu mudar a atribuito "position" de seu elemento utilizando as classes <code>.left</code> ou <code>.right</code>. Para limpar os floats, utilize a classe <code>.clearfix</code> no elemento pai.</p>
			<div class="row">
				<div class="large-6 columns">
					<h4>HTML</h4>
					<pre class="margin-bottom"><code class="language-html">&lt;div class="panel clearfix"&gt;
    &lt;a class="button right"&gt;Float Right&lt;/a&gt;
    &lt;a class="button left"&gt;Float Left&lt;/a&gt;
&lt;/div&gt;</code></pre>
				</div>
				<div class="large-6 columns">
					<h4>HTML renderizado</h4>
					<div class="panel clearfix">
							<a class="button right">Float Right</a>
							<a class="button left">Float Left</a>
					</div>
				</div>
			</div>

			<hr class="large">

			<h3 class="normal">Radius e Round</h3>

			<p>As classes <code>.radius</code> e <code>.round</code> permitem que você aplique facilmente um border-radius a um elemento da interface. Aplicando-as a um grupo de botões irá aplicar o efeito somente aos botões das bordas.</p>
			<div class="row">
				<div class="large-6 columns">
					<h4>HTML</h4>
					<pre class="margin-bottom"><code class="language-html">&lt;div class="alert-box [radius round]" data-alert&gt;Alert&lt;a href="#" class="close"&gt;&times;&lt;/a&gt;&lt;/div&gt;
&lt;div class="progress [radius round]"&gt;
  &lt;span class="meter" style="width:70%;"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;a href="#" class="button [radius round]"&gt;Button&lt;/a&gt;
&lt;span class="label [radius round]"&gt;Label&lt;/span&gt;
&lt;span data-tooltip class="[radius round]" title="Tooltip"&gt;Tooltip&lt;/span&gt;</code></pre>
				</div>
				<div class="large-6 columns">
					<h4>HTML renderizado</h4>
					<div class="row">
						<div class="medium-6 columns">
							<div class="alert-box radius" data-alert>Radius Alert<a href="#" class="close">&times;</a></div>
							<div class="progress radius">
								<span class="meter" style="width:70%;"></span>
							</div>
							<a href="#" class="button radius">Radius Button</a>
							<br>
							<span class="label radius">Radius Label</span>
							<br><br>
							<span data-tooltip title="Radius Tooltip" class="radius has-tip">Radius Tooltip</span>
							<br><br>
						</div>
						<div class="medium-6 columns">
							<div class="alert-box round" data-alert>Round Alert<a href="#" class="close">&times;</a></div>
							<div class="progress round">
								<span class="meter" style="width:70%;"></span>
							</div>
							<a href="#" class="button round">Round Button</a>
							<br>
							<span class="label round">Round Label</span>
							<br><br>
							<span data-tooltip title="Round Tooltip" class="round has-tip">Round Tooltip</span>
							<br><br>
						</div>
					</div>
				</div>
			</div>

			<hr class="large">
			<h3 class="normal">Alinhamento de texto</h3>

			<p>Você pode mudar o alinhamento de um texto adicionando as classes <code>.text-left</code>, <code>.text-right</code>, <code>.text-center</code> ou <code>.text-justify</code> ao elemento.</p>
			<p>Acidionando um tamanho como prefixo da classe de alinhamento irá fazer com que esta regra seja aplicada somente ao tamanho de tela especificado e maiores (ex. <code>.medium-text-center</code> vai centralizar para tudo, menos telas pequenas). Adicionando um tamanho e a palavra "only" irá fazer com que a regra seja aplicada somente ao tamanho de tela especificado e nada mais (ex. <code>.medium-only-text-center</code> irá centralizar somente para telas médias).</p>
			<div class="row">
				<div class="large-6 columns">
					<h4>HTML</h4>
						<pre class="margin-bottom"><code class="language-html">&lt;p class="text-left"&gt;&lt;!-- seu texto aqui --&gt;&lt;/p&gt;
&lt;p class="text-right"&gt;&lt;!-- seu texto aqui --&gt;&lt;/p&gt;
&lt;p class="text-center"&gt;&lt;!-- seu texto aqui --&gt;&lt;/p&gt;
&lt;p class="text-justify"&gt;&lt;!-- seu texto aqui --&gt;&lt;/p&gt;</code></pre>
				</div>
				<div class="large-6 columns">
					<h4>HTML renderizado</h4>
					<p class="text-left"><strong>Este texto é alinhado à equerda.</strong> Adventure Time, C'mon grab your friends, We'll go to very distant lands. With Jake the Dog and Finn the Human, The fun will never end, it's Adventure Time!</p>
					<p class="text-center"><strong>Este texto é alinhado ao centro.</strong> Adventure Time, C'mon grab your friends, We'll go to very distant lands. With Jake the Dog and Finn the Human, The fun will never end, it's Adventure Time!</p>
					<p class="text-right"><strong>Este texto é alinhado à direita.</strong> Adventure Time, C'mon grab your friends, We'll go to very distant lands. With Jake the Dog and Finn the Human, The fun will never end, it's Adventure Time!</p>
					<p class="text-justify"><strong>Este texto é justificado.</strong> Adventure Time, C'mon grab your friends, We'll go to very distant lands. With Jake the Dog and Finn the Human, The fun will never end, it's Adventure Time!</p>
				</div>
			</div>

			<h4>Classes de alinhamento disponíveis</h4>
			<table style="width:100%;">
				<thead>
					<td>Alinhamento à esquerda</td>
					<td>Alinhamento à direita</td>
					<td>Alinhamento ao centro</td>
					<td>Justificado</td>
				</thead>
				<tr>
					<td><code>.text-left</code></td>
					<td><code>.text-right</code></td>
					<td><code>.text-center</code></td>
					<td><code>.text-justify</code></td>
				</tr>
				<tr>
					<td><code>.small-text-left</code></td>
					<td><code>.small-text-right</code></td>
					<td><code>.small-text-center</code></td>
					<td><code>.small-text-justify</code></td>
				</tr>
				<tr>
					<td><code>.small-only-text-left</code></td>
					<td><code>.small-only-text-right</code></td>
					<td><code>.small-only-text-center</code></td>
					<td><code>.small-only-text-justify</code></td>
				</tr>
				<tr>
					<td><code>.medium-text-left</code></td>
					<td><code>.medium-text-right</code></td>
					<td><code>.medium-text-center</code></td>
					<td><code>.medium-text-justify</code></td>
				</tr>
				<tr>
					<td><code>.medium-only-text-left</code></td>
					<td><code>.medium-only-text-right</code></td>
					<td><code>.medium-only-text-center</code></td>
					<td><code>.medium-only-text-justify</code></td>
				</tr>
				<tr>
					<td><code>.large-text-left</code></td>
					<td><code>.large-text-right</code></td>
					<td><code>.large-text-center</code></td>
					<td><code>.large-text-justify</code></td>
				</tr>
				<tr>
					<td><code>.large-only-text-left</code></td>
					<td><code>.large-only-text-right</code></td>
					<td><code>.large-only-text-center</code></td>
					<td><code>.large-only-text-justify</code></td>
				</tr>
				<tr>
					<td><code>.xlarge-text-left</code></td>
					<td><code>.xlarge-text-right</code></td>
					<td><code>.xlarge-text-center</code></td>
					<td><code>.xlarge-text-justify</code></td>
				</tr>
				<tr>
					<td><code>.xlarge-only-text-left</code></td>
					<td><code>.xlarge-only-text-right</code></td>
					<td><code>.xlarge-only-text-center</code></td>
					<td><code>.xlarge-only-text-justify</code></td>
				</tr>
				<tr>
					<td><code>.xxlarge-text-left</code></td>
					<td><code>.xxlarge-text-right</code></td>
					<td><code>.xxlarge-text-center</code></td>
					<td><code>.xxlarge-text-justify</code></td>
				</tr>
			</table>

			<hr class="large">

			<h3 class="normal">Esconder um elemento</h3>

			<p>Você pode adicionar a classe <code>.hide</code> a um elemento para escondê-lo. Isso irá aplicar a propriedade <code>display: none</code> ao elemento.</p>

			<pre class="margin-bottom"><code class="language-html">&lt;div class="hide"&gt;&lt;/div&gt;</code></pre>

			<hr class="large">

			<h3 class="normal uf-addon">Controle de margins e paddings</h3>

			<p>O Foundation Unesp traz algumas classes de controle de margins e paddins, pois as vezes queremos suprimir o espaçamento padrão de determinados elementos em diferentes situações. É possível utilizar a classe <code>.no-margin</code> para remover totalmente a margem inferior de um elemento. Ela também pode ser utilizada com os sufixos <code>-for-[size]-up</code>, para ser aplicada somente a determinadas media-queries, como mostrado no exemplo abaixo:</p>

			<div class="row">
				<div class="large-6 columns">
					<h4>HTML</h4>
					<pre class="margin-bottom"><code class="language-html">&lt;div class="panel no-margin-for-large-up"&gt;.no-margin-for-large-up&lt;/div&gt;
&lt;div class="panel no-margin-for-medium-up"&gt;.no-margin-for-medium-up&lt;/div&gt;
&lt;div class="panel no-margin"&gt;.no-margin&lt;/div&gt;
&lt;div class="panel"&gt;...&lt;/div&gt;</code></pre>
				</div>
				<div class="large-6 columns">
					<h4>HTML renderizado</h4>
					<div class="panel no-margin-for-large-up">.no-margin-for-large-up</div>
					<div class="panel no-margin-for-medium-up">.no-margin-for-medium-up</div>
					<div class="panel no-margin">.no-margin</div>
					<div class="panel">...</div>
				</div>
			</div>
			
			<p>A mesma forma pode ser utilizada para as classes que adicionam margin e padding aos elementos. O tamanho da margem é baseada em <strong>rem</strong>, que é a unidade base de tamanho de fonte aplicada no framework (14px). Utilizando o padrão <code>.margin-bottom-[?|double|triple|quad]-[?size]</code> ou <code>.padding-bottom-[?|double|triple|quad]-[?size]</code>, conseguimos ter um bom controle sobre o espaçamento vertical dos itens.</p>

			<div class="row">
				<div class="large-6 columns">
					<h4>HTML</h4>
					<pre class="margin-bottom"><code class="language-html">&lt;div class="panel margin-bottom"&gt;.margin-bottom&lt;/div&gt;
&lt;div class="panel margin-bottom-double-for-medium-up"&gt;.margin-bottom-double-for-medium-up&lt;/div&gt;
&lt;div class="panel margin-bottom-triple-for-large-up"&gt;.margin-bottom-triple-for-large-up&lt;/div&gt;
&lt;div class="panel"&gt;...&lt;/div&gt;</code></pre>
					<h4>HTML renderizado</h4>
					<div class="panel margin-bottom">.margin-bottom</div>
					<div class="panel margin-bottom-double-for-medium-up">.margin-bottom-double-for-medium-up</div>
					<div class="panel margin-bottom-triple-for-large-up">.margin-bottom-triple-for-large-up</div>
					<div class="panel">...</div>
				</div>
				<div class="large-6 columns">
					<h4>HTML</h4>
					<pre class="margin-bottom"><code class="language-html">&lt;div class="panel padding-bottom"&gt;.padding-bottom&lt;/div&gt;
&lt;div class="panel padding-bottom-double-for-medium-up"&gt;.padding-bottom-double-for-medium-up&lt;/div&gt;
&lt;div class="panel padding-bottom-triple-for-large-up"&gt;.padding-bottom-triple-for-large-up&lt;/div&gt;
&lt;div class="panel"&gt;...&lt;/div&gt;</code></pre>
					<h4>HTML renderizado</h4>
					<div class="panel padding-bottom">.padding-bottom</div>
					<div class="panel padding-bottom-double-for-medium-up">.padding-bottom-double-for-medium-up</div>
					<div class="panel padding-bottom-triple-for-large-up">.padding-bottom-triple-for-large-up</div>
					<div class="panel">...</div>
				</div>
			</div>

			<hr class="large">

			<h3 class="normal uf-addon">Cores semânticas</h3>

			<p>O Foundation Unesp também traz combinações de classes que podem ser utilizadas para mudar as cores de fundo ou texto de qualquer elemento. Essas cores seguem uma estrutura de "semáforo" para condicionar o usuário a atentar-se primeiro ao que for mais importante. A classificação das cores segue a tabela abaixo:</p>

			<table class="expand">
				<thead>
					<tr>
						<th>Classe</th>
						<th>Cor</th>
						<th>Utilização</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>.alert</td>
						<td><div class="label bg-color alert">.alert</div></td>
						<td>Erros e situações de alerta para resolução imediada</td>
					</tr>
					<tr>
						<td>.warning</td>
						<td><div class="label bg-color warning">.warning</div></td>
						<td>Situações que requerem atenção</td>
					</tr>
					<tr>
						<td>.success</td>
						<td><div class="label bg-color success">.success</div></td>
						<td>Mensagens e situações de sucesso ou finalizadas</td>
					</tr>
					<tr>
						<td>.ongoing</td>
						<td><div class="label bg-color ongoing">.ongoing</div></td>
						<td>Status de situações decorrendo normalmente</td>
					</tr>
					<tr>
						<td>.info</td>
						<td><div class="label bg-color info">.info</div></td>
						<td>Avisos e mensagens informativas</td>
					</tr>
					<tr>
						<td>.unesp</td>
						<td><div class="label bg-color unesp">.unesp</div></td>
						<td>Cor de identidade visual da <strong class="unesp-tag">unesp</strong>, para diversos usos</td>
					</tr>
					<tr>
						<td>.primary</td>
						<td><div class="label bg-color primary">.primary</div></td>
						<td>Cor primária do sistema, para diversos usos</td>
					</tr>
					<tr>
						<td>.secondary</td>
						<td><div class="label bg-color secondary">.secondary</div></td>
						<td>Cor secundária do sistema, utilizada para elementos inativos, desabilitados ou de baixa prioridade visual</td>
					</tr>
					<tr>
						<td>.alternate</td>
						<td><div class="label bg-color alternate">.alternate</div></td>
						<td>Cor alternativa do sistema, normalmente utilizada em títulos para conforto visual</td>
					</tr>
					<tr>
						<td>.dark</td>
						<td><div class="label bg-color dark">.dark</div></td>
						<td>Tom de cinza escuro para textos e elementos</td>
					</tr>
					<tr>
						<td>.medium</td>
						<td><div class="label bg-color medium">.medium</div></td>
						<td>Tom de cinza médio para textos e elementos</td>
					</tr>
					<tr>
						<td>.light</td>
						<td><div class="label bg-color light">.light</div></td>
						<td>Tom de cinza claro para textos e elementos</td>
					</tr>
				</tbody>
			</table>
			
			<p>As classes de cores semânticas precisam ser aplicadas em conjunto com as classes <code>.color</code> ou <code>.bg-color</code> para aplicarem seu efeito. Confira a tabela abaixo:</p>

			<table class="expand">
				<thead>
					<tr>
						<th>.bg-color</th>
						<th>.color</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td data-title=".bg-color"><div class="bg-color alert text-center">&lt;div class="bg-color alert"&gt;&lt;/div&gt;</div></td>
						<td data-title=".color"><div class="color alert text-center">&lt;div class="color alert"&gt;&lt;/div&gt;</div></td>
					</tr>
					<tr>
						<td data-title=".bg-color"><div class="bg-color warning text-center">&lt;div class="bg-color warning"&gt;&lt;/div&gt;</div></td>
						<td data-title=".color"><div class="color warning text-center">&lt;div class="color warning"&gt;&lt;/div&gt;</div></td>
					</tr>
					<tr>
						<td data-title=".bg-color"><div class="bg-color success text-center">&lt;div class="bg-color success"&gt;&lt;/div&gt;</div></td>
						<td data-title=".color"><div class="color success text-center">&lt;div class="color success"&gt;&lt;/div&gt;</div></td>
					</tr>
					<tr>
						<td data-title=".bg-color"><div class="bg-color ongoing text-center">&lt;div class="bg-color ongoing"&gt;&lt;/div&gt;</div></td>
						<td data-title=".color"><div class="color ongoing text-center">&lt;div class="color ongoing"&gt;&lt;/div&gt;</div></td>
					</tr>
					<tr>
						<td data-title=".bg-color"><div class="bg-color info text-center">&lt;div class="bg-color info"&gt;&lt;/div&gt;</div></td>
						<td data-title=".color"><div class="color info text-center">&lt;div class="color info"&gt;&lt;/div&gt;</div></td>
					</tr>
					<tr>
						<td data-title=".bg-color"><div class="bg-color unesp text-center">&lt;div class="bg-color unesp"&gt;&lt;/div&gt;</div></td>
						<td data-title=".color"><div class="color unesp text-center">&lt;div class="color unesp"&gt;&lt;/div&gt;</div></td>
					</tr>
					<tr>
						<td><div class="bg-color primary text-center">&lt;div class="bg-color primary"&gt;&lt;/div&gt;</div></td>
						<td><div class="color primary text-center">&lt;div class="color primary"&gt;&lt;/div&gt;</div></td>
					</tr>
					<tr>
						<td><div class="bg-color secondary text-center">&lt;div class="bg-color secondary"&gt;&lt;/div&gt;</div></td>
						<td><div class="color secondary text-center">&lt;div class="color secondary"&gt;&lt;/div&gt;</div></td>
					</tr>
					<tr>
						<td><div class="bg-color alternate text-center">&lt;div class="bg-color alternate"&gt;&lt;/div&gt;</div></td>
						<td><div class="color alternate text-center">&lt;div class="color alternate"&gt;&lt;/div&gt;</div></td>
					</tr>
					<tr>
						<td><div class="bg-color dark text-center">&lt;div class="bg-color dark"&gt;&lt;/div&gt;</div></td>
						<td><div class="color dark text-center">&lt;div class="color dark"&gt;&lt;/div&gt;</div></td>
					</tr>
					<tr>
						<td><div class="bg-color medium text-center">&lt;div class="bg-color medium"&gt;&lt;/div&gt;</div></td>
						<td><div class="color medium text-center">&lt;div class="color medium"&gt;&lt;/div&gt;</div></td>
					</tr>
					<tr>
						<td><div class="bg-color light text-center">&lt;div class="bg-color light"&gt;&lt;/div&gt;</div></td>
						<td><div class="color light text-center">&lt;div class="color light"&gt;&lt;/div&gt;</div></td>
					</tr>
				</tbody>
			</table>

			<hr class="large">

			<h3 class="normal uf-addon">Outras classes</h3>

			<p>Confira na tabela abaixo outras classes utilitárias presentes no Foundation Unesp:</p>

			<table class="expand">
				<thead>
					<tr>
						<th>Classe</th>
						<th>Efeito</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><code>.pointer</code></td>
						<td>Adiciona a propriedade <code>cursor: pointer</code> ao elemento</td>
					</tr>
					<tr>
						<td><code>.relative</code></td>
						<td>Adiciona a propriedade <code>position: relative</code> ao elemento</td>
					</tr>
					<tr>
						<td><code>.top-[1..20]</code></td>
						<td>Desloca o elemento para baixo de 1 a 20px. Usada para acertos precisos no layout</td>
					</tr>
					<tr>
						<td><code>.top-[1..20]-for-[medium|large]-up</code></td>
						<td>Mesmo efeito, mas aplicado à media queries específicas</td>
					</tr>
				</tbody>
			</table>
			
			<hr class="large">

			<?= linkDocumentacaoOficial(array('append' => 'docs/utility-classes.html')) ?>

			<script>
				document.addEventListener('DOMContentLoaded', function() {
					activeNav('docs-classes-utilitarias');
					activeNav('documentacao');
				}, false);
			</script>

		</div>
	</div>

<? require_once("footer.php"); ?>
