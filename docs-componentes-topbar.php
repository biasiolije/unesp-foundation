<? require_once("header.php"); ?>

	<div class="row almost full">
		<div class="large-3 columns">
			<? require_once("sidebar-documentacao.php"); ?>
		</div>
		<div class="large-9 columns margin-top-double padding-bottom-quad documentacao">

			<h1>Top Bar</h1>

			<h3 class="subheader">A Top Bar do Foudation fornece uma excelente forma de exibir um menu de navegação complexo em telas de tamanho pequeno, médio ou grandes.</h3>

			<hr class="large">

			<div class="wrapper-top-bar">
				<nav class="top-bar" data-topbar role="navigation">
					<ul class="title-area">
						<!-- Title Area -->
						<li class="name">
				
						</li>
						<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
						<li class="toggle-topbar menu-icon"><a href=""><span>Menu</span></a></li>
					</ul>
				
					<section class="top-bar-section">
						<ul class="left">
							<li class="has-dropdown"><a href="docs/componentes/topbar.html#">Item 1</a>
				
								<ul class="dropdown">
									<li><label>Nível um</label></li>
									<li><a href="docs/componentes/topbar.html#">Sub-item 1</a></li>
									<li><a href="docs/componentes/topbar.html#">Sub-item 2</a></li>
									<li class="divider"></li>
									<li><a href="docs/componentes/topbar.html#">Sub-item 3</a></li>
									<li class="has-dropdown"><a href="docs/componentes/topbar.html#">Sub-item 4</a>
				
										<ul class="dropdown">
											<li><label>Nível dois</label></li>
											<li class="has-dropdown"><a href="docs/componentes/topbar.html#">Sub-item 1</a>
				
												<ul class="dropdown">
													<li><label>Nível três</label></li>
													<li class="has-dropdown"><a href="docs/componentes/topbar.html#">Sub-item 1</a>
				
														<ul class="dropdown">
															<li><label>Nível quatro</label></li>
															<li><a href="docs/componentes/topbar.html#">Sub-item 1</a></li>
														</ul>
													</li>
													<li><a href="docs/componentes/topbar.html#">Sub-item 2</a></li>
													<li><a href="docs/componentes/topbar.html#">Sub-item 3</a></li>
													<li class="divider"></li>
													<li><a href="docs/componentes/topbar.html#">Sub-item 4</a></li>
												</ul>
											</li>
											<li><a href="docs/componentes/topbar.html#">Sub-item 2</a></li>
											<li><a href="docs/componentes/topbar.html#">Sub-item 3</a></li>
											<li><a href="docs/componentes/topbar.html#">Sub-item 4</a>
										</ul>
									</li>
									<li><a href="docs/componentes/topbar.html#">Sub-item 5</a></li>
								</ul>
							</li>
							<li class="divider"></li>
						</ul>
						<!-- Right Nav Section -->
						<ul class="right">
							<li class="divider"></li>
							<li class="active"><a href="docs/componentes/topbar.html#">Item 2</a></li>
							<li><a href="docs/componentes/topbar.html#">Item 3</a></li>
						</ul>
					</section>
				</nav>
			</div>

			<hr class="large">

			<h3 id="build-with-html-classes" class="normal">Construindo com as classes HTML</h3>
			
			<p>A top bar é uma bela peça de complexidade e mágia de interface. É baseada em muitas classes de apresentação para definir seu aspecto visual, e há muita coisa acontecendo no JavaScript. A top bar é ativada no hover por padrão, mas você pode mudar seu comportamente para clicks adicionando <code>data-options=&quot;is_hover: false&quot;</code> para o elemento <code>&lt;nav&gt;</code>. Se você tem uma top bar com hover, ela irá se fechar automaticamente no click, por padrão... Mas você também pode alterar este comportamento setando o atributo <code>data-options=&quot;dropdown_autoclose: false&quot;</code>. <a href="docs/componentes/topbar.html#clickable">Veja um exemplo</a>.</p>

			<p>A top bar modificada do Unesp Foundation tem seu fundo branco por padrão, para ser usada em diversos contextos. Foi adicionado também um novo elemento de auxílio chamado <code>.wrapper-top-bar</code>, que pode ser adiconado englobando a top bar, ou até mesmo no próprio elemento <code>&lt;nav&gt;</code>, dependendo da situação. Isso foi necessário para manter uma estética padronizada da top bar em diversos cenários, quando por exemplo queremos colocá-la dentro de uma coluna. Veja os exemplos abaixo:</p>

			<h4>Sem o .wrapper-top-bar</h4>

			<div class="row">
				<div class="large-12 columns">
					<nav class="top-bar" data-topbar role="navigation">
						<ul class="title-area">
							<li class="name">
								<h1><a href="docs/componentes/topbar.html#">Meu site</a></h1>
							</li>
							<li class="toggle-topbar menu-icon"><a href=""><span>Menu</span></a></li>
						</ul>
					
						<section class="top-bar-section">
					
							<!-- Right Nav Section -->
							<ul class="right show-for-large-up">
								<li class="active"><a href="docs/componentes/topbar.html#">Botão à direita ativo</a></li>
								<li class="has-dropdown">
									<a href="docs/componentes/topbar.html#">Botão à direita com dropdown</a>
									<ul class="dropdown">
										<li><a href="docs/componentes/topbar.html#">Primeiro link no dropdown</a></li>
										<li class="active"><a href="docs/componentes/topbar.html#">Link ativo no dropdown</a></li>
									</ul>
								</li>
							</ul>
					
							<ul class="right hide-for-large-up">
								<li class="active"><a href="docs/componentes/topbar.html#">Botão à direita</a></li>
								<li class="has-dropdown">
									<a href="docs/componentes/topbar.html#">Dropdown à direita</a>
									<ul class="dropdown">
										<li><a href="docs/componentes/topbar.html#">Primeiro link no dropdown</a></li>
										<li class="active"><a href="docs/componentes/topbar.html#">Link ativo no dropdown</a></li>
									</ul>
								</li>
							</ul>
					
							<!-- Left Nav Section -->
							<ul class="left show-for-large-up">
								<li><a href="docs/componentes/topbar.html#">Botão à esquerda</a></li>
							</ul>
						</section>
					</nav>
				</div>
			</div>
			<div><br></div>

			<h4>Com o .wrapper-top-bar</h4>

			<div class="row">
				<div class="large-12 columns">
					<div class="wrapper-top-bar">
						<nav class="top-bar" data-topbar role="navigation">
							<ul class="title-area">
								<li class="name">
									<h1><a href="docs/componentes/topbar.html#">Meu site</a></h1>
								</li>
								<li class="toggle-topbar menu-icon"><a href=""><span>Menu</span></a></li>
							</ul>
						
							<section class="top-bar-section">
						
								<!-- Right Nav Section -->
								<ul class="right show-for-large-up">
									<li class="active"><a href="docs/componentes/topbar.html#">Botão à direita ativo</a></li>
									<li class="has-dropdown">
										<a href="docs/componentes/topbar.html#">Botão à direita com dropdown</a>
										<ul class="dropdown">
											<li><a href="docs/componentes/topbar.html#">Primeiro link no dropdown</a></li>
											<li class="active"><a href="docs/componentes/topbar.html#">Link ativo no dropdown</a></li>
										</ul>
									</li>
								</ul>
						
								<ul class="right hide-for-large-up">
									<li class="active"><a href="docs/componentes/topbar.html#">Botão à direita</a></li>
									<li class="has-dropdown">
										<a href="docs/componentes/topbar.html#">Dropdown à direita</a>
										<ul class="dropdown">
											<li><a href="docs/componentes/topbar.html#">Primeiro link no dropdown</a></li>
											<li class="active"><a href="docs/componentes/topbar.html#">Link ativo no dropdown</a></li>
										</ul>
									</li>
								</ul>
						
								<!-- Left Nav Section -->
								<ul class="left show-for-large-up">
									<li><a href="docs/componentes/topbar.html#">Botão à esquerda</a></li>
								</ul>
							</section>
						</nav>
					</div>
				</div>
			</div>
			<div><br></div>

			<h4 id="html">HTML</h4>
			<pre class="margin-bottom"><code class="language-html">&lt;nav class="top-bar" data-topbar role="navigation">
  &lt;ul class="title-area">
    &lt;li class="name">
      &lt;h1>&lt;a href="#">Meu site&lt;/a>&lt;/h1>
    &lt;/li>
    &lt;li class="toggle-topbar menu-icon">&lt;a href="">&lt;span>Menu&lt;/span>&lt;/a>&lt;/li>
  &lt;/ul>

  &lt;section class="top-bar-section">

    &lt;!-- Seção da direita -->
    &lt;ul class="right show-for-large-up">
      &lt;li class="active">&lt;a href="#">Botão à direita ativo&lt;/a>&lt;/li>
      &lt;li class="has-dropdown">
        &lt;a href="#">Botão à direita com dropdown&lt;/a>
        &lt;ul class="dropdown">
          &lt;li>&lt;a href="#">Primeiro link no dropdown&lt;/a>&lt;/li>
          &lt;li class="active">&lt;a href="#">Link ativo no dropdown&lt;/a>&lt;/li>
        &lt;/ul>
      &lt;/li>
    &lt;/ul>

    &lt;ul class="right hide-for-large-up">
      &lt;li class="active">&lt;a href="#">Botão à direita&lt;/a>&lt;/li>
      &lt;li class="has-dropdown">
        &lt;a href="#">Dropdown à direita&lt;/a>
        &lt;ul class="dropdown">
          &lt;li>&lt;a href="#">Primeiro link no dropdown&lt;/a>&lt;/li>
          &lt;li class="active">&lt;a href="#">Link ativo no dropdown&lt;/a>&lt;/li>
        &lt;/ul>
      &lt;/li>
    &lt;/ul>

    &lt;!-- Seção da equerda -->
    &lt;ul class="left show-for-large-up">
      &lt;li>&lt;a href="#">Botão à esquerda&lt;/a>&lt;/li>
    &lt;/ul>
  &lt;/section>
&lt;/nav>
</code></pre>


			<hr class="large">

			<h3 id="positioning-the-bar" class="normal">Posicionando a barra</h3>

			<p>A top bar é construída com um simples elemento <code>&lt;nav&gt;</code> com a classe top-bar. Ela vai ocupar 100% do seu elemento pai por padrão. Para fazer a top bar permanecer fixa quando a tela é rolada, englobe-a em um elemento <code>div class=&quot;fixed&quot;</code>. Se você quiser que a navegação mantenha o tamanho base da sua grid, englobe-a em um elemento <code>div class=&quot;contain-to-grid&quot;</code>. Você pode usar as duas classes no mesmo container, e até mesmo a classe .wrapper-top-bar para fazer o efeito de sombra na parte inferior. <code>div class=&quot;contain-to-grid fixed wrapper-top-bar&quot;</code></p>

			<div class="row">
			<div class="large-6 columns">

			<h5>Naveção fixa</h5>

			<pre class="margin-bottom"><code class="language-html">&lt;div class="fixed wrapper-top-bar"&gt;
  &lt;nav class="top-bar" data-topbar role="navigation"&gt;
    ...
  &lt;/nav&gt;
&lt;/div&gt;</code></pre>

			</div>
			<div class="large-6 columns">

			<h5>Conter à grid</h5>

			<pre class="margin-bottom"><code class="language-html">&lt;div class="contain-to-grid wrapper-top-bar"&gt;
  &lt;nav class="top-bar" data-topbar role="navigation"&gt;
    ...
  &lt;/nav&gt;
&lt;/div&gt;</code></pre>

			</div>
			</div>

			<hr class="large">
			<h3 id="sticky-top-bar" class="normal">Sticky Top Bar</h3>
			
			<p>Você também pode englobar sua top bar em um <code>div class=&quot;sticky&quot;</code> e colocar em qualquer lugar do seu markup. Quando a navegação chegar ao topo do browser, ela vai agir como uma top bar fixa e grudar no topo da janela enquanto o usuário continua o scroll. </p>

			<div class="row">
				<div class="large-12 columns">
					<div class="sticky wrapper-top-bar">
						<nav class="top-bar" data-topbar role="navigation" data-options="sticky_on: large">
							<ul class="title-area">
								<!-- Title Area -->
								<li class="name">
									<h1><a href="docs/componentes/topbar.html#">Sticky Top Bar</a></h1>
								</li>
								<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
								<li class="toggle-topbar menu-icon"><a href="docs/componentes/topbar.html#"><span>Menu</span></a></li>
							</ul>

							<section class="top-bar-section">

								<!-- Right Nav Section -->
								<ul class="right">
									<li class="divider hide-for-small"></li>
									<li><a href="docs/componentes/topbar.html#">Botão à direita</a></li>
								</ul>
							</section>
						</nav>
					</div>
				</div>
			</div></p>
			<div><br></div>

			<p>Você também pode adicionar <code>sticky_on</code> no seu atributo <code>data-options</code> para permitir que sua barra seja sticky somente em determinadas media queries: <code>small</code>, <code>medium</code>, ou <code>large</code> quando a página carrega. Isso funciona em conjunto com o classe <code>.sticky</code> do container.</p>

			<p>Além disso, você pode passar um array contendo os tamanhos desejados. Por exemplo, <code>data-options=&quot;sticky_on: [small,large]&quot;</code> vai ser sticky em telas pequenas e grandes, mas NÃO em telas médias.</p>

			<pre class="margin-bottom"><code class="language-html">&lt;div class="contain-to-grid sticky wrapper-top-bar"&gt;
  &lt;nav class="top-bar" data-topbar role="navigation" data-options="sticky_on: large"&gt;
    ...
  &lt;/nav&gt;
&lt;/div&gt;</code></pre>


			<hr class="large">
			<p><a name="clickable"></a></p>
			<h3 id="clickable-top-bar" class="normal">Top Bar clicável</h3>
			<p>Você também pode fazer top bar ser clicável adicionando um valor ao atribudo <code>data-options</code>. Veja um exemplo:</p>
			<div class="row">
				<div class="large-12 columns">
					<nav class="top-bar wrapper-top-bar" data-topbar role="navigation" data-options="is_hover: false">
				<ul class="title-area">
					<!-- Title Area -->
					<li class="name">
						<h1><a href="docs/componentes/topbar.html#">Top Bar clicável</a></h1>
					</li>
					<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
					<li class="toggle-topbar menu-icon"><a href="docs/componentes/topbar.html#"><span>Menu</span></a></li>
				</ul>

				<section class="top-bar-section">

					<!-- Right Nav Section -->
					<ul class="right">
						<li class="divider hide-for-small"></li>
						<li class="has-dropdown"><a>Item 1</a>
							<ul class="dropdown">
								<li><label>Dropdown Nível 1 Label</label></li>
								<li class="has-dropdown"><a>Dropdown Nível 1a</a>

									<ul class="dropdown">
										<li><a href="docs/componentes/topbar.html#">Dropdown Nível 2a</a></li>
										<li><a href="docs/componentes/topbar.html#">Dropdown Nível 2b</a></li>
										<li class="has-dropdown"><a>Dropdown Nível 2c</a>

											<ul class="dropdown">
												<li><a href="docs/componentes/topbar.html#">Dropdown Nível 3a</a></li>
												<li><a href="docs/componentes/topbar.html#">Dropdown Nível 3b</a></li>
												<li><a href="docs/componentes/topbar.html#">Dropdown Nível 3c</a></li>
											</ul>
										</li>
										<li><a href="docs/componentes/topbar.html#">Dropdown Nível 2d</a></li>
										<li><a href="docs/componentes/topbar.html#">Dropdown Nível 2e</a></li>
										<li><a href="docs/componentes/topbar.html#">Dropdown Nível 2f</a></li>
									</ul>
								</li>
								<li><a href="docs/componentes/topbar.html#">Dropdown Nível 1b</a></li>
								<li><a href="docs/componentes/topbar.html#">Dropdown Nível 1c</a></li>
								<li class="divider"></li>
								<li><label>Dropdown Nível 1 Label</label></li>
								<li><a href="docs/componentes/topbar.html#">Dropdown Nível 1d</a></li>
								<li><a href="docs/componentes/topbar.html#">Dropdown Nível 1e</a></li>
								<li><a href="docs/componentes/topbar.html#">Dropdown Nível 1f</a></li>
								<li class="divider"></li>
								<li><a href="docs/componentes/topbar.html#">Ver todos &rarr;</a></li>
							</ul>
						</li>
					</ul>
				</section>
			</nav>

				</div>
			</div>
			<div><br></div>

			<pre class="margin-bottom"><code class="language-html">&lt;nav class="top-bar" data-topbar role="navigation" data-options="is_hover: false"&gt;</code></pre>


			<hr class="large">
			<h3 id="mobile-parent-links" class="normal">Links para o pai em mobile</h3>
			<p>O Foundation irá mostrar o link para o elemento pai em navegação mobile. Uma ajuda na forma como os usuários navegam pelo seu site em dispositivos móveis.</p>
			<div class="row">
				<div class="large-12 columns">
					<nav class="top-bar wrapper-top-bar" data-topbar role="navigation">
				<ul class="title-area">
					<!-- Title Area -->
					<li class="name">
						<h1><a href="docs/componentes/topbar.html#">Mobile</a></h1>
					</li>
					<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
					<li class="toggle-topbar menu-icon"><a href=""><span>Menu</span></a></li>
				</ul>

				<section class="top-bar-section">
					<ul class="left">
						<li class="has-dropdown"><a href="http://foundation.zurb.com/docs/components/topbar.html">Item 1</a>

							<ul class="dropdown">
								<li><label>Nível um</label></li>
								<li><a href="docs/componentes/topbar.html#">Sub-item 1</a></li>
								<li><a href="docs/componentes/topbar.html#">Sub-item 2</a></li>
								<li class="divider"></li>
								<li><a href="docs/componentes/topbar.html#">Sub-item 3</a></li>
								<li class="has-dropdown"><a href="http://foundation.zurb.com/docs/components/topbar.html">Sub-item 4</a>

									<ul class="dropdown">
										<li><label>Nível dois</label></li>
										<li class="has-dropdown"><a href="http://foundation.zurb.com/docs/components/topbar.html">Sub-item 1</a>

											<ul class="dropdown">
												<li><label>Nível três</label></li>
												<li class="has-dropdown"><a href="http://foundation.zurb.com/docs/components/topbar.html">Sub-item 1</a>

													<ul class="dropdown">
														<li><label>Nível quatro</label></li>
														<li><a href="docs/componentes/topbar.html#">Sub-item 1</a></li>
													</ul>
												</li>
												<li><a href="docs/componentes/topbar.html#">Sub-item 2</a></li>
												<li><a href="docs/componentes/topbar.html#">Sub-item 3</a></li>
												<li class="divider"></li>
												<li><a href="docs/componentes/topbar.html#">Sub-item 4</a></li>
											</ul>
										</li>
										<li><a href="docs/componentes/topbar.html#">Sub-item 2</a></li>
										<li><a href="docs/componentes/topbar.html#">Sub-item 3</a></li>
										<li><a href="docs/componentes/topbar.html#">Sub-item 4</a>
									</ul>
								</li>
								<li><a href="docs/componentes/topbar.html#">Sub-item 5</a></li>
							</ul>
						</li>
						<li class="divider"></li>
					</ul>
					<!-- Right Nav Section -->
					<ul class="right">
						<li class="divider"></li>
						<li><a href="docs/componentes/topbar.html#">Item 2</a></li>
					</ul>
				</section>
			</nav>
				</div>
			</div>
			<div><br></div>

			<hr class="large">
			<h3 id="built-in-components" class="normal">Built-in Components</h3>
			<p>Several common elements have been supported by default, each one of these elements gets added to either the <code>ul.right</code> or <code>ul.left</code> unordered lists within your Top Bar navigation.</p>
			<nav class="top-bar" data-topbar role="navigation">
				<!-- Title -->
				<ul class="title-area">
					<li class="name"><h1><a href="docs/componentes/topbar.html#">Sexy Top Bar</a></h1></li>

					<!-- Mobile Menu Toggle -->
					<li class="toggle-topbar menu-icon"><a href="docs/componentes/topbar.html#"><span>Menu</span></a></li>
				</ul>

				<!-- Top Bar Section -->
				<section class="top-bar-section">

					<!-- Top Bar Left Nav Elements -->
					<ul class="left">

						<!-- Search | has-form wrapper -->
						<li class="has-form">
							<div class="row collapse">
								<div class="large-8 small-9 columns">
									<input type="text" placeholder="Find Stuff">
								</div>
								<div class="large-4 small-3 columns">
									<a href="docs/componentes/topbar.html#" class="alert button expand">Search</a>
								</div>
							</div>
						</li>
						<li class="has-form">
							<a class="button">Test</a>
						</li>
					</ul>

					<!-- Top Bar Right Nav Elements -->
					<ul class="right">
						<!-- Divider -->
						<li class="divider"></li>

						<!-- Dropdown -->
						<li class="has-dropdown"><a href="docs/componentes/topbar.html#">Item 1</a>
							<ul class="dropdown">
								<li><label>Nível um</label></li>
								<li><a href="docs/componentes/topbar.html#">Sub-item 1</a></li>
								<li><a href="docs/componentes/topbar.html#">Sub-item 2</a></li>
								<li class="divider"></li>
								<li><a href="docs/componentes/topbar.html#">Sub-item 3</a></li>
								<li class="has-dropdown"><a href="docs/componentes/topbar.html#">Sub-item 4</a>

									<!-- Nested Dropdown -->
									<ul class="dropdown">
										<li><label>Nível dois</label></li>
										<li><a href="docs/componentes/topbar.html#">Sub-item 2</a></li>
										<li><a href="docs/componentes/topbar.html#">Sub-item 3</a></li>
										<li><a href="docs/componentes/topbar.html#">Sub-item 4</a></li>
									</ul>
								</li>
								<li><a href="docs/componentes/topbar.html#">Sub-item 5</a></li>
							</ul>
						</li>

						<li class="divider"></li>

						<!-- Anchor -->
						<li><a href="docs/componentes/topbar.html#">Generic Button</a></li>
						<li class="divider"></li>

						<!-- Button -->
						<li class="has-form show-for-large-up">
							<a href="http://foundation.zurb.com/docs" class="button">Get Lucky</a>
						</li>
					</ul>
				</section>
			</nav>

			<h5 id="search-bar">Search Bar</h5>
			<pre class="margin-bottom"><code class="language-html"></code></pre>


			<h5 id="divider">Divider</h5>
			<pre class="margin-bottom"><code class="language-html"></code></pre>


			<h5 id="button">Button</h5>
			<pre class="margin-bottom"><code class="language-html"></code></pre>


			<hr class="large">
			<h3 id="remove-the-title" class="normal">Remove the Title</h3>
			<p>If you want a bar that doesn&#39;t include a title, just take out the content within the list item, like so:</p>
			<pre class="margin-bottom"><code class="language-html"></code></pre>


			<hr class="large">
			<h2 id="accessibility">Accessibility</h2>
			<p>The top bar is a complex component with a lot of different features. However, it&#39;s still fully keyboard and screen reader accessible. The main thing you need to add if upgrading from an older version of Foundation is the attribute <code>role=&quot;navigation&quot;</code> to the top bar container. Additionally, if your page uses top bar and off-canvas navigation, add the attribute <code>aria-hidden=&quot;true&quot;</code> to one of them&mdash;otherwise, the user&#39;s device will tab through (and possibly read) both of them before reaching any content.</p>
			<hr class="large">
			<h3 id="available-scss-variables" class="normal">Available SCSS Variables</h3>
			<p>We do include SCSS variable to help you control some of the styles for the top bar. Overall the styles are written mobile first, so they are much easier to override than the previous iteration of the top bar.</p>
			<pre class="margin-bottom"><code class="language-scss"></code></pre>



			<p><strong>Note:</strong> <code>rem-calc();</code> is a function we wrote to convert <code>px</code> to <code>rem</code>. It is included in <strong>_variables.scss</strong>.</p>
			<hr class="large">
			<h3 id="using-the-javascript" class="normal">Using the Javascript</h3>
			<div class="panel">
				Before you can use the top bar you&#39;ll want to verify that jQuery and <code>foundation.js</code> are available on your page. You can refer to the <a href="../javascript.html">Javascript documentation</a> on setting that up.
			</div>

			<p>Just add <code>foundation.topbar.js</code> AFTER the <code>foundation.js</code> file. Your markup should look something like this:</p>
			<pre class="margin-bottom"><code class="language-html"></code></pre>


			<p>Required Foundation Library: <code>foundation.topbar.js</code></p>
			<h5 id="optional-javascript-configuration">Optional Javascript Configuration</h5>
			<p>Top bar supports <code>data-options</code> configuration.</p>
			<pre class="margin-bottom"><code class="language-js"></code></pre>


			<hr class="large">
			<h3 id="adding-new-top-bar-after-page-load" class="normal">Adding New Top-bar After Page Load</h3>
			<p>If you add new content after the page has been loaded, you will need to reinitialize the Foundation JavaScript by running the following:</p>
			<pre class="margin-bottom"><code class="language-javascript"></code></pre>


			<p>Reflow will make Foundation check the DOM for any elements and re-apply any listeners to them.</p>
			<pre class="margin-bottom"><code class="language-javascript"></code></pre>

			<hr class="large">

			<h3 id="sass-errors-" class="normal">Sass Errors?</h3>
			<p>If the default &quot;foundation&quot; import was commented out, then make sure you import this file:</p>
			<h4>SCSS</h4>

			<pre class="margin-bottom"><code class="language-scss"></code></pre>


			<?= linkDocumentacaoOficial(array('append' => 'docs/components/topbar.html')) ?>

			<script>
				document.addEventListener('DOMContentLoaded', function() {
					activeNav('docs-componentes-topbar');
					activeNav('documentacao');
				}, false);
			</script>

		</div>
	</div>

<? require_once("footer.php"); ?>
