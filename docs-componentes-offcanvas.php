<? require_once("header.php"); ?>

	<div class="row almost full">
		<div class="large-3 columns">
			<? require_once("sidebar-documentacao.php"); ?>
		</div>
		<div class="large-9 columns margin-top-double padding-bottom-quad documentacao">

			<h1>Off-canvas</h1>

			<h3 class="subheader">Os menus off-canvas são posicionados fora da viewport e deslizam para dentro quando ativados. Configurar um layout com off-canvas no Foundation é super fácil.</h3>

			<hr class="large">
			<div class="off-canvas-wrap docs-wrap" data-offcanvas>
				<div class="inner-wrap">
					<nav class="tab-bar">
						<section class="left-small">
							<a class="left-off-canvas-toggle menu-icon" ><span></span></a>
						</section>

						<section class="right tab-bar-section">
							<h1 class="text-left">Foundation</h1>
						</section>
					</nav>

					<aside class="left-off-canvas-menu">
						<ul class="off-canvas-list">
							<li><label>Foundation</label></li>
							<li><a href="#">The Psychohistorians</a></li>
							<li><a href="#">The Encyclopedists</a></li>
							<li><a href="#">The Mayors</a></li>
							<li><a href="#">The Traders</a></li>
							<li><label>Foundation and Empire</label></li>
							<li><a href="#">The General</a></li>
							<li><a href="#">The Mule</a></li>
						</ul>
					</aside>

					<section class="main-section">
						<div class="row">
							<div class="large-12 columns">
								<br/>
								<h4>The Psychohistorians</h4>
								<p>Set in the year 0 F.E. (&quot;Foundation Era&quot;), The Psychohistorians opens on Trantor, the capital of the 12,000-year-old Galactic Empire. Though the empire appears stable and powerful, it is slowly decaying in ways that parallel the decline of the Western Roman Empire. Hari Seldon, a mathematician and psychologist, has developed psychohistory, a new field of science and psychology that equates all possibilities in large societies to mathematics, allowing for the prediction of future events.</p>

								<p>Using psychohistory, Seldon has discovered the declining nature of the Empire, angering the aristocratic members of the Committee of Public Safety, the de facto rulers of the Empire. The Committee considers Seldon&#39;s views and statements treasonous, and he is arrested along with young mathematician Gaal Dornick, who has arrived on Trantor to meet Seldon. Seldon is tried by the Committee and defends his beliefs, explaining his theories and predictions, including his belief that the Empire will collapse in 500 years and enter a 30,000-year dark age, to the Committee&#39;s members. </p>

							</div>
						</div>
					</section>

				<a class="exit-off-canvas"></a>

				</div>
			</div>

			<hr class="large">

			<h2 class="normal" id="basic">Básico</h2>

			<p>Você pode criar um off-canvas básico, <strong>sem estilos</strong>, com apenas um pouco de markup. Veja como:</p>

			<div class="row">
				<div class="large-6 columns">
				<h4>HTML</h4>
					<pre class="margin-bottom"><code class="language-html">&lt;div class="off-canvas-wrap" data-offcanvas&gt;
  &lt;div class="inner-wrap"&gt;

    &lt;a class="left-off-canvas-toggle" href="#" &gt;Menu&lt;/a&gt;

    &lt;!-- Menu Off-canvas --&gt;
    &lt;aside class="left-off-canvas-menu"&gt;
        &lt;!-- coloque qualquer coisa que quiser no menu off-canvas --&gt;
        &lt;ul&gt;
          &lt;li&gt;&lt;a href="#"&gt;Item 1&lt;/a&gt;&lt;/li&gt;
        ...
        &lt;/ul&gt;
    &lt;/aside&gt;

    &lt;!-- o conteúdo principal vai aqui --&gt;
    &lt;p&gt;Set in the year 0 F.E. ("Foundation Era"), The Psychohistorians opens on Trantor, the capital of the 12,000-year-old Galactic Empire. Though the empire appears stable and powerful, it is slowly decaying in ways that parallel the decline of the Western Roman Empire. Hari Seldon, a mathematician and psychologist, has developed psychohistory, a new field of science and psychology that equates all possibilities in large societies to mathematics, allowing for the prediction of future events.&lt;/p&gt;

    &lt;!-- fecha o menu off-canvas --&gt;
    &lt;a class="exit-off-canvas"&gt;&lt;/a&gt;

  &lt;/div&gt;
&lt;/div&gt;</code></pre>
				</div>
				<div class="large-6 columns">
					<h4>HTML renderizado</h4>
					<div class="off-canvas-wrap docs-wrap" data-offcanvas>
						<div class="inner-wrap">

							<a class="left-off-canvas-toggle" >Menu</a>

							<!-- Off Canvas Menu -->
							<aside class="left-off-canvas-menu">

								<ul>
									<li><a href="#">Item 1</a></li>
									<li><a href="#">Item 2</a></li>
									<li><a href="#">Item 3</a></li>
									<li><a href="#">Item 4</a></li>
									<li><a href="#">Item 5</a></li>
									<li><a href="#">Item 6</a></li>
									<li><a href="#">Item 7</a></li>
								</ul>

							</aside>

							<p>Set in the year 0 F.E. (&quot;Foundation Era&quot;), The Psychohistorians opens on Trantor, the capital of the 12,000-year-old Galactic Empire. Though the empire appears stable and powerful, it is slowly decaying in ways that parallel the decline of the Western Roman Empire. Hari Seldon, a mathematician and psychologist, has developed psychohistory, a new field of science and psychology that equates all possibilities in large societies to mathematics, allowing for the prediction of future events.</p>


							<!-- close the off-canvas menu -->
							<a class="exit-off-canvas"></a>

						</div>
					</div>

				</div>
			</div>

			<p>A base do off-canvas é simples. O layout todo é englobado pelo elemento <code>.off-canvas-wrap</code>. Em seguida vem o <code>.inner-wrap</code>. Você também precisa incluir o menu em si, que é o <code>.left-off-canvas-menu</code> ou <code>.right-off-canvas-menu</code>. Você precisa de um gatilho para abrir o seu menu off-canvas: <code>.left-off-canvas-toggle</code> ou <code>.right-off-canvas-toggle</code>. Finalmente, lembre-se de incluir o <code>.exit-off-canvas</code>, assim os usuários podem voltar à página principal.</p>

			<h3 class="normal" id="off-canvas-wrap">Off-canvas wrap</h3>
			<p>Este é o elemento mais externo. Contém todo o layout e escode o overflow.</p>
			<h4>HTML</h4>
			<pre class="margin-bottom"><code class="language-html">&lt;div class="off-canvas-wrap"&gt;&lt;!-- o layout vai todo aqui --&gt;&lt;/div&gt;</code></pre>

			<h3 class="normal" id="inner-wrap">Inner wrap</h3>
			<p>Este é o elemento que é animado. Todo o conteúdo da página precisa estar aqui.</p>
			<h4>HTML</h4>
			<pre class="margin-bottom"><code class="language-html">&lt;div class="off-canvas-wrap"&gt;
  &lt;main class="inner-wrap"&gt;&lt;!-- todo o conteúdo vai aqui --&gt;&lt;/main&gt;
&lt;/div&gt;</code></pre>

			<h3 class="normal" id="off-canvas-menu">Menu off-canvas</h3>
			<p>Este é o elemento que desliza para dentro quanto ativado. Você pode colocá-lo do lado direito ou esquerdo, e até mesmo criar dois menus, um de cada lado!</p>
			<h4>HTML</h4>
			<pre class="margin-bottom"><code class="language-html">&lt;nav class="left-off-canvas-menu"&gt;&lt;!-- coloque os seus links aqui --&gt;&lt;/nav&gt;
&lt;nav class="right-off-canvas-menu"&gt;&lt;!-- coloque mais links aqui --&gt;&lt;/nav&gt;</code></pre>

			<h3 class="normal" id="target-off-canvas-menu">Referenciando o menu off-canvas</h3>
			<p>Para referenciar um menu off-canvas, adiciona <code>.left-off-canvas-toggle</code> ou <code>.right-off-canvas-menu</code> ao seu layout. Clicando em um destes dois itens irá ativar o menu off-canvas correspondente.</p>
			<h4>HTML</h4>
			<pre class="margin-bottom"><code class="language-html">&lt;!-- referencia o menu-off canvas da esquerda --&gt;
&lt;a href="#" role="button" class="left-off-canvas-toggle"&gt;Menu da equerda&lt;/a&gt;
&lt;!-- referencia o menu off-canvas da direita --&gt;
&lt;a href="#" role="button" class="right-off-canvas-toggle"&gt;Menu da direita&lt;/a&gt;

&lt;nav class="left-off-canvas-menu"&gt;&lt;/nav&gt;
&lt;nav class="right-off-canvas-menu"&gt;&lt;/nav&gt;</code></pre>

			<h3 class="normal" id="exit-off-canvas-menu">Saindo do menu off-canvas</h3>
			<p>Inclua o <code>.exit-off-canvas</code> para fornecer uma forma de voltar à página principal. Isto é um overlay que cobre o <code>.inner-wrap</code> quando o off-canvas está ativo. Clicando-se nele, o menu off-canvas será fechado.</p>
			<h4>HTML</h4>
			<pre class="margin-bottom"><code class="language-html">&lt;button class="exit-off-canvas"&gt;&lt;/button&gt;</code></pre>

			<hr class="large">
			
			<h2 class="normal" id="advanced">Avançado</h2>
			<p>Usando os componentes pré-definidos, você pode criar um belo menu off-canvas direto da fábrica!</p>
			<div class="row">
				<div class="large-6 columns">
				<h4>HTML</h4>
					<pre class="margin-bottom"><code class="language-html">&lt;div class="off-canvas-wrap" data-offcanvas&gt;
  &lt;div class="inner-wrap"&gt;
    &lt;nav class="tab-bar"&gt;
      &lt;section class="left-small"&gt;
        &lt;a class="left-off-canvas-toggle menu-icon" href="#"&gt;&lt;span&gt;&lt;/span&gt;&lt;/a&gt;
      &lt;/section&gt;

      &lt;section class="middle tab-bar-section"&gt;
        &lt;h1 class="title"&gt;Foundation&lt;/h1&gt;
      &lt;/section&gt;

      &lt;section class="right-small"&gt;
        &lt;a class="right-off-canvas-toggle menu-icon" href="#"&gt;&lt;span&gt;&lt;/span&gt;&lt;/a&gt;
      &lt;/section&gt;
    &lt;/nav&gt;

    &lt;aside class="left-off-canvas-menu"&gt;
      &lt;ul class="off-canvas-list"&gt;
        &lt;li&gt;&lt;label&gt;Foundation&lt;/label&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;The Psychohistorians&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/aside&gt;

    &lt;aside class="right-off-canvas-menu"&gt;
      &lt;ul class="off-canvas-list"&gt;
        &lt;li&gt;&lt;label&gt;Users&lt;/label&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;Hari Seldon&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/aside&gt;

    &lt;section class="main-section"&gt;
      &lt;!-- content goes here --&gt;
    &lt;/section&gt;

  &lt;a class="exit-off-canvas"&gt;&lt;/a&gt;

  &lt;/div&gt;
&lt;/div&gt;</code></pre>	
				</div>

				<div class="large-6 columns">
					<h4>HTML renderizado</h4>
					<div class="off-canvas-wrap docs-wrap" data-offcanvas>
					<div class="inner-wrap">
						<nav class="tab-bar">
							<section class="left-small">
								<a class="left-off-canvas-toggle menu-icon" ><span></span></a>
							</section>

							<section class="middle tab-bar-section">
								<h1 class="title">Foundation</h1>
							</section>

							<section class="right-small">
								<a class="right-off-canvas-toggle menu-icon" ><span></span></a>
							</section>
						</nav>

						<aside class="left-off-canvas-menu">
							<ul class="off-canvas-list">
								<li><label>Foundation</label></li>
								<li><a href="#">The Psychohistorians</a></li>
								<li><a href="#">The Encyclopedists</a></li>
								<li><a href="#">The Mayors</a></li>
								<li><a href="#">The Traders</a></li>
								<li><a href="#">The Merchant Princes</a></li>
								<li><label>Foundation and Empire</label></li>
								<li><a href="#">The General</a></li>
								<li><a href="#">The Mule</a></li>
								<li><label>Second Foundation</label></li>
								<li><a href="#">Search by the Mule</a></li>
								<li><a href="#">Search by the Foundation</a></li>
							</ul>
						</aside>

						<aside class="right-off-canvas-menu">
							<ul class="off-canvas-list">
								<li><label>Users</label></li>
								<li><a href="#">Hari Seldon</a></li>
								<li><a href="#">R. Giskard Reventlov</a></li>
								<li><a href="#">R. Daneel Olivaw</a></li>
								<li><a href="#">The Mule</a></li>
								<li><a href="#">Dors Venabili</a></li>
								<li><a href="#">Yugo Amaryl</a></li>
								<li><a href="#">The Mule</a></li>
								<li><a href="#">Emperor Cleon I</a></li>
								<li><a href="#">Gaal Dornick</a></li>
								<li><a href="#">Bel Riose</a></li>
								<li><a href="#">Salvor Hardin</a></li>
								<li><a href="#">Bel Riose</a></li>
							</ul>
						</aside>

						<section class="main-section">
							<div class="row">
								<div class="large-12 columns">
									<br/>
									<h4 class="">The Psychohistorians</h4>

									<p>Set in the year 0 F.E. (&quot;Foundation Era&quot;), The Psychohistorians opens on Trantor, the capital of the 12,000-year-old Galactic Empire. Though the empire appears stable and powerful, it is slowly decaying in ways that parallel the decline of the Western Roman Empire. Hari Seldon, a mathematician and psychologist, has developed psychohistory, a new field of science and psychology that equates all possibilities in large societies to mathematics, allowing for the prediction of future events.</p>

									<p>Using psychohistory, Seldon has discovered the declining nature of the Empire, angering the aristocratic members of the Committee of Public Safety, the de facto rulers of the Empire. The Committee considers Seldon&#39;s views and statements treasonous, and he is arrested along with young mathematician Gaal Dornick, who has arrived on Trantor to meet Seldon. Seldon is tried by the Committee and defends his beliefs, explaining his theories and predictions, including his belief that the Empire will collapse in 500 years and enter a 30,000-year dark age, to the Committee&#39;s members.</p>

								</div>
							</div>
						</section>

						<a class="exit-off-canvas"></a>

				</div>
			</div>

			<p>	</div>
			</div></p>
			<h3 class="normal" id="tab-bar-container">Container da tab bar</h3>

			<p>O Foundation disponibiliza um elemento simples de nevagação chamado Tab Bar. É um componente básico, pensado para ser facilmente customizável. Primeiro, precisamos adicionar o container Tab Bar: <code>nav.tab-bar</code>.</p>

			<h4>HTML</h4>
			<pre class="margin-bottom"><code class="language-html">&lt;nav class="tab-bar"&gt;&lt;/nav&gt;</code></pre>

			<h3 class="normal" id="button-containers">Containers para botões</h3>
			<p>Os containers para botões, <code>div.left-small</code> e <code>div.right-small</code>, contém os botões de ativação.</p>

			<h4>HTML</h4>
			<pre class="margin-bottom"><code class="language-html">&lt;nav class="tab-bar"&gt;
  &lt;div class="left-small"&gt;&lt;/div&gt;
  &lt;div class="right-small"&gt;&lt;/div&gt;
&lt;/nav&gt;</code></pre>

			<h3 class="normal" id="menu-icon">Ícone de menu</h3>
			<p>Para adicionar o ícone de hamburguer quer todo mundo conhece e gosta, adicione a classe <code>.menu-icon</code> no seu trigger, e adicione um <code>span</code> dentro dele.</p>
			<pre class="margin-bottom"><code class="language-html">&lt;a role="button" href="#" class="right-off-canvas-toggle menu-icon" &gt;&lt;span&gt;&lt;/span&gt;&lt;/a&gt;</code></pre>

			<p>Agora coloque tudo junto...</p>

			<h4>HTML</h4>
			<pre class="margin-bottom"><code class="language-html">&lt;nav class="tab-bar"&gt;
  &lt;div class="left-small"&gt;
    &lt;a href="#" role="button" aria-controls="idOfLeftMenu" aria-expanded="false" class="left-off-canvas-toggle menu-icon" &gt;&lt;span&gt;&lt;/span&gt;&lt;/a&gt;
  &lt;/div&gt;
  &lt;div class="right-small"&gt;
    &lt;a href="#" role="button" aria-controls="idOfRightMenu" aria-expanded="false" class="right-off-canvas-toggle menu-icon" &gt;&lt;span&gt;&lt;/span&gt;&lt;/a&gt;
  &lt;/div&gt;
&lt;/nav&gt;</code></pre>

			<p>...e este será o resultado:</p>

			<nav class="tab-bar">
				<div class="left-small">
					<a href="#idOfLeftMenu" aria-controls="idOfLeftMenu"	role="button" aria-expanded="false" class="menu-icon" ><span></span></a>
				</div>
				<div class="right-small">
					<a href="#idOfRightMenu" aria-controls="idOfRightMenu" role="button" aria-expanded="false" class="menu-icon" ><span></span></a>
				</div>
			</nav>

			<p>&nbsp;</p>
			<h3 class="normal" id="tab-bar-section">Seções da tab bar</h3>
			<p>A última coisa que precisamos é uma seção para o conteúdo da tab bar. Adicione uma <code>section.tab-bar-section</code> dentro do <code>nav.tab-bar</code>.</p>

			<h4>HTML</h4>
			<pre class="margin-bottom"><code class="language-html">&lt;nav class="tab-bar"&gt;
  &lt;div class="left-small"&gt;
    &lt;a role="button" aria-expanded="false" aria-controls="idOfLeftMenu" class="left-off-canvas-toggle menu-icon" &gt;&lt;span&gt;&lt;/span&gt;&lt;/a&gt;
  &lt;/div&gt;
  &lt;section class="middle tab-bar-section"&gt;
    &lt;h1 class="title"&gt;Foundation&lt;/h1&gt;
  &lt;/section&gt;
  &lt;div class="right-small"&gt;
    &lt;a role="button" aria-expanded="false" aria-controls="idOfRightMenu" class="right-off-canvas-toggle menu-icon" &gt;&lt;span&gt;&lt;/span&gt;&lt;/a&gt;
  &lt;/div&gt;
&lt;/nav&gt;</code></pre>

			<p>Adicione uma classe <code>.left</code>, <code>.right</code> ou <code>.middle</code> dependendo do espaço que deseja ter a seção ocupando. Por exemplo, se você tem um container de botão à esquerda, deve adicionar a classe <code>.right</code> à seção da tab bar. isso permite que você coloque o conteúdo complementando o espaço restante ao lado dos botões.</p>

			<h4>HTML</h4>

			<pre class="margin-bottom"><code class="language-html">&lt;nav class="tab-bar"&gt;
  &lt;div class="left-small"&gt;&lt;/div&gt;
  &lt;div class="right tab-bar-section"&gt;&lt;!-- Eu me estico para preenchar à direita --&gt;&lt;/div&gt;
&lt;/nav&gt;

&lt;nav class="tab-bar"&gt;
  &lt;div class="left-small"&gt;&lt;/div&gt;
  &lt;div class="middle tab-bar-section"&gt;&lt;!-- Eu estou no meio --&gt;&lt;/div&gt;
  &lt;div class="right-small"&gt;&lt;/div&gt;
&lt;/nav&gt;

&lt;nav class="tab-bar"&gt;
  &lt;div class="right tab-bar-section"&gt;&lt;!-- Eu me estico totalmente à direita --&gt;&lt;/div&gt;
  &lt;div class="right-small"&gt;&lt;/div&gt;
&lt;/nav&gt;</code></pre>

			<nav class="tab-bar">
				<div class="right-small"><a class="menu-icon" ><span></span></a></div>
				<div class="left tab-bar-section"><h1>Seção à esquerda</h1></div>
			</nav>
			&nbsp;
			<nav class="tab-bar">
				<div class="left-small"><a class="menu-icon" ><span></span></a></div>
				<section class="middle tab-bar-section"><h1>Seção central</h1></section>
				<div class="right-small"><a class=" menu-icon" ><span></span></a></div>
			</nav>
			&nbsp;
			<nav class="tab-bar">
				<section class="right tab-bar-section"><h1>Seção à direita</h1></section>
				<div class="left-small"><a class="menu-icon"><span></span></a></div>
			</nav>

			<p>&nbsp;</p>
			<h3 class="normal" id="off-canvas-list">Listagem no off-canvas</h3>
			<p>Também está disponível um padrão de lista pré-definido que pode ser utilizado dentro do seu menu off-canvas. Inclua um elemento <code>ul.off-canvas-list</code> dentro do seu menu off-canvas. Para o título das seções do menu, englobe o conteúdo o do seu <code>li</code> dentro de um <code>label</code>.</p>
			<div class="row">
				<div class="large-6 columns">
					<h4>HTML</h4>
					<pre class="margin-bottom"><code class="language-html">&lt;nav class="left-off-canvas-menu"&gt;
  &lt;ul class="off-canvas-list"&gt;
    &lt;li&gt;&lt;label&gt;Foundation&lt;/label&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;The Psychohistorians&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;The Encyclopedists&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;The Mayors&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;The Traders&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;The Merchant Princes&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
				</div>
				<div class="large-6 columns">
					<h4>HTML renderizado</h4>
						<ul class="off-canvas-list doc-oc-list">
							<li><label>Foundation</label></li>
							<li><a href="#">The Psychohistorians</a></li>
							<li><a href="#">The Encyclopedists</a></li>
							<li><a href="#">The Mayors</a></li>
							<li><a href="#">The Traders</a></li>
							<li><a href="#">The Merchant Princes</a></li>
						</ul>
				</div>
			</div>

			<p>&nbsp;</p>
			<h3 class="normal" id="off-canvas-multilevel-menu">Menu off-canvas multi-nível</h3>

			<p>Além de tudo isso, ainda é possível criar menus off-canvas multi-níveis. Adiciona um <code>li.has-submenu</code> e inclua um <code>ul.left-submenu</code> or <code>ul.right-submenu</code>, dentro do início do submenu em questão. Em seguida, adicione um elemento <code>li.back</code> dentro da nova lista. Isso irá possibilitar menus multi-níveis.</p>

			<div class="row">
				<div class="large-6 columns">
				<h4>HTML</h4>
				<pre class="margin-bottom"><code class="language-html">&lt;div class="off-canvas-wrap" data-offcanvas&gt;
  &lt;div class="inner-wrap"&gt;
    &lt;nav class="tab-bar"&gt;
      &lt;section class="left-small"&gt;
        &lt;a class="left-off-canvas-toggle menu-icon" &gt;&lt;span&gt;&lt;/span&gt;&lt;/a&gt;
      &lt;/section&gt;

      &lt;section class="middle tab-bar-section"&gt;
        &lt;h1 class="title"&gt;Foundation&lt;/h1&gt;
      &lt;/section&gt;

      &lt;section class="right-small"&gt;
        &lt;a class="right-off-canvas-toggle menu-icon" &gt;&lt;span&gt;&lt;/span&gt;&lt;/a&gt;
      &lt;/section&gt;
    &lt;/nav&gt;

    &lt;aside class="left-off-canvas-menu"&gt;
      &lt;ul class="off-canvas-list"&gt;
        &lt;li&gt;&lt;label&gt;Foundation&lt;/label&gt;&lt;/li&gt;
        &lt;li class="has-submenu"&gt;&lt;a href="#"&gt;The Psychohistorians&lt;/a&gt;
            &lt;ul class="left-submenu"&gt;
                &lt;li class="back"&gt;&lt;a href="#"&gt;Back&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;label&gt;Level 1&lt;/label&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;Link 1&lt;/a&gt;&lt;/li&gt;
                &lt;li class="has-submenu"&gt;&lt;a href="#"&gt;Link 2 w/ submenu&lt;/a&gt;
                    &lt;ul class="left-submenu"&gt;
                        &lt;li class="back"&gt;&lt;a href="#"&gt;Back&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;label&gt;Level 2&lt;/label&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;The Encyclopedists&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;The Mayors&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;The Traders&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;The Merchant Princes&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/aside&gt;

    &lt;aside class="right-off-canvas-menu"&gt;
      &lt;ul class="off-canvas-list"&gt;
        &lt;li&gt;&lt;label&gt;Users&lt;/label&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;Hari Seldon&lt;/a&gt;&lt;/li&gt;
        &lt;li class="has-submenu"&gt;&lt;a href="#"&gt;R. Giskard Reventlov&lt;/a&gt;
            &lt;ul class="right-submenu"&gt;
                &lt;li class="back"&gt;&lt;a href="#"&gt;Back&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;label&gt;Level 1&lt;/label&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;Link 1&lt;/a&gt;&lt;/li&gt;
                &lt;li class="has-submenu"&gt;&lt;a href="#"&gt;Link 2 w/ submenu&lt;/a&gt;
                    &lt;ul class="right-submenu"&gt;
                        &lt;li class="back"&gt;&lt;a href="#"&gt;Back&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;label&gt;Level 2&lt;/label&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/aside&gt;

    &lt;section class="main-section"&gt;
      &lt;!-- content goes here --&gt;
    &lt;/section&gt;

  &lt;a class="exit-off-canvas"&gt;&lt;/a&gt;

  &lt;/div&gt;
&lt;/div&gt;</code></pre>
				</div>
				<div class="large-6 columns">
				<h4>HTML renderizado</h4>
				<div class="off-canvas-wrap docs-wrap">
				<div class="inner-wrap">
					<nav class="tab-bar">
						<section class="left-small">
							<a class="left-off-canvas-toggle menu-icon" ><span></span></a>
						</section>

						<section class="middle tab-bar-section">
							<h1 class="title">Foundation</h1>
						</section>

						<section class="right-small">
							<a class="right-off-canvas-toggle menu-icon" ><span></span></a>
						</section>
					</nav>

					<aside class="left-off-canvas-menu">
						<ul class="off-canvas-list">
							<li><label>Foundation</label></li>
							<li class="has-submenu"><a href="#">The Psychohistorians</a>
									<ul class="left-submenu">
											<li class="back"><a href="#">Back</a></li>
											<li><label>Level 1</label></li>
											<li><a href="#">Link 1</a></li>
											<li class="has-submenu"><a href="#">Link 2 w/ submenu</a>
													<ul class="left-submenu">
															<li class="back"><a href="#">Back</a></li>
															<li><label>Level 2</label></li>
															<li><a href="#">Link 1</a></li>
															<li><a href="#">Link 2</a></li>
															<li><a href="#">Link 3</a></li>
															<li><a href="#">Link 4</a></li>
													</ul>
											</li>
											<li><a href="#">Link 3</a></li>
											<li><a href="#">Link 4</a></li>
									</ul>
							</li>
							<li><a href="#">The Encyclopedists</a></li>
							<li><a href="#">The Mayors</a></li>
							<li><a href="#">The Traders</a></li>
							<li><a href="#">The Merchant Princes</a></li>
						</ul>
					</aside>

					<aside class="right-off-canvas-menu">
						<ul class="off-canvas-list">
							<li><label>Users</label></li>
							<li><a href="#">Hari Seldon</a></li>
							<li class="has-submenu"><a href="#">R. Giskard Reventlov</a>
									<ul class="right-submenu">
											<li class="back"><a href="#">Back</a></li>
											<li><label>Level 1</label></li>
											<li><a href="#">Link 1</a></li>
											<li class="has-submenu"><a href="#">Link 2 w/ submenu</a>
													<ul class="right-submenu">
															<li class="back"><a href="#">Back</a></li>
															<li><label>Level 2</label></li>
															<li><a href="#">R. Daneel Olivaw</a></li>
															<li><a href="#">The Mule</a></li>
															<li><a href="#">Dors Venabili</a></li>
															<li><a href="#">Yugo Amaryl</a></li>
															<li><a href="#">The Mule</a></li>
													</ul>
											</li>
											<li><a href="#">Emperor Cleon I</a></li>
											<li><a href="#">Gaal Dornick</a></li>
									</ul>
							</li> 
							<li><a href="#">Bel Riose</a></li>
							<li><a href="#">Salvor Hardin</a></li>
							<li><a href="#">Bel Riose</a></li>
						</ul>
					</aside>

					<section class="main-section">
						<div class="row">
							<div class="large-12 columns">
								<br/>
								<h4 class="">The Psychohistorians</h4>

								<p>Set in the year 0 F.E. (&quot;Foundation Era&quot;), The Psychohistorians opens on Trantor, the capital of the 12,000-year-old Galactic Empire. Though the empire appears stable and powerful, it is slowly decaying in ways that parallel the decline of the Western Roman Empire. Hari Seldon, a mathematician and psychologist, has developed psychohistory, a new field of science and psychology that equates all possibilities in large societies to mathematics, allowing for the prediction of future events.</p>

								<p>Using psychohistory, Seldon has discovered the declining nature of the Empire, angering the aristocratic members of the Committee of Public Safety, the de facto rulers of the Empire. The Committee considers Seldon&#39;s views and statements treasonous, and he is arrested along with young mathematician Gaal Dornick, who has arrived on Trantor to meet Seldon. Seldon is tried by the Committee and defends his beliefs, explaining his theories and predictions, including his belief that the Empire will collapse in 500 years and enter a 30,000-year dark age, to the Committee&#39;s members.</p>

							</div>
						</div>
					</section>

				<a class="exit-off-canvas"></a>

				</div>
			</div>
				</div>
			</div>

			<hr class="large">
			<h2 class="normal" id="accessibility">Acessibilidade</h2>

			<p>O menu off-canvas ainda não tem acessibilidade total. Devido ao fato de ele estar empurrado para fora da tela, o navegador ainda vai acessá-lo no ciclo de TABs, e leitores de tela irão ler cada item da navegação. Apesar disso, ele não irá aparecer na tela quando focado com o teclado.</p>
			
			<p>Se a pagina tem 2 navegações primárias, por exemplo um menu horizontal no topo para telas grandes e um off-canvas para telas menores, o melhor seria esconder um dos dois dos leitores de tela, para que somente um fizesse parte do ciclo. Adicione o atributo <code>aria-hidden=&quot;true&quot;</code> ao container de uma das navegações, o que irá informar aos dispositivos assistivos para ignorá-lo completamente.</p>

			<p>O menu off-canvas multi-níveis, uma adição recente ao Foundation, também ainda não possui acessibilidade total. O navegador irá passar pelos itens do topo do menu, mas não vai entrar dentro dos submenus.</p>

			<hr class="large">

			<h2 class="normal" id="using-the-javascript">Utilizando o JavaScript</h2>

			<div class="panel">
				Antes de você utilizar o off-canvas você deve verificar se o jQuery e o <code>foundation.js</code> estão disponíveis em sua página. Você pode dar uma olhada na <a href="../javascript.html">documentação do JavaScript</a> para fazer essas configurações.
			</div>

			<p>Simplesmente adicione o <code>foundation.offcanvas.js</code> DEPOIS do arquivo <code>foundation.js</code> (ou utilize somente o <code>foundation.min.js</code>, que já contem todos os plugins).  Seu markup ficará parecido com isso:</p>
			<pre class="margin-bottom"><code class="language-html">&lt;body&gt;

  ...

  &lt;script src="js/foundation/foundation.js"&gt;&lt;/script&gt;
  &lt;script src="js/foundation/foundation.offcanvas.js"&gt;&lt;/script&gt;
  &lt;!-- Outros plugins JS podem ser colocados aqui --&gt;

  &lt;script&gt;
    $(document).foundation();
  &lt;/script&gt;

&lt;/body&gt;</code></pre>


			<p>Biblioteca do Foundation necessária: <code>foundation.offcanvas.js</code></p>

			<hr class="large">

			<h3 class="normal" id="optional-javascript-configuration">Configuração opcional do JavaScript</h3>

			<p><strong>open_method</strong> <br> Default: <code>move</code> <br> Define como o off-canvas se comporta quando aberto. Pode ser <code>move</code>, <code>overlap_single</code> or <code>overlap</code>.</p>
			<p><strong>close_on_click</strong> <br/> Default: <code>false</code> <br> Controla se o menu deve se fechar sozinho ou não quando o usuário clicar em um de seus links.</p>
			<pre class="margin-bottom"><code class="language-javascript">$(document).foundation({
  offcanvas : {
    // Setá o método de abertura do off-canvas.
    // [ move | overlap_single | overlap ]
    open_method: 'move', 
    // O menu deve se fechar quando um link é clicado?
    // [ true | false ]
    close_on_click : false
  }
});</code></pre>

			<hr class="large">

			<h3 class="normal" id="event-bindings">Vinculo de eventos <small>(Event binding)</small></h3>

			<p>Há uma série de eventos a quais você pode vincular para disparar callbacks:</p>

			<pre class="margin-bottom"><code class="language-js">$(document).on('open.fndtn.offcanvas', '[data-offcanvas]', function () {
  var off_canvas_wrap = $(this);
});

$(document).on('close.fndtn.offcanvas', '[data-offcanvas]', function () {
  var off_canvas_wrap = $(this);
});</code></pre>
			<p>Por exemplo, para travar o scroll quando o menu estiver ativo:</p>
			<pre class="margin-bottom"><code class="language-js">$(document)
.on('open.fndtn.offcanvas', '[data-offcanvas]', function() {
  $('html').css('overflow', 'hidden');
})
.on('close.fndtn.offcanvas', '[data-offcanvas]', function() {
  $('html').css('overflow', 'auto');
})</code></pre>
			<h3 class="normal" id="programmatic-show-hide-toggle">Show / hide / toggle programático</h3>
			<p>O container <code>.off-canvas-wrap</code> pode ser referenciado para utilização de métodos JavaScript. No momento, a classe uma classe de movimentação precisa ser incluída: pode ser <code>move-right</code>, <code>move-left</code>, <code>offcanvas-overlap-left</code>, <code>offcanvas-overlap-right</code> ou <code>offcanvas-overlap</code>.</p>
			<pre class="margin-bottom"><code class="language-js">$('.off-canvas-wrap').foundation('offcanvas', 'show', 'move-right');
$('.off-canvas-wrap').foundation('offcanvas', 'hide', 'move-right');
$('.off-canvas-wrap').foundation('offcanvas', 'toggle', 'move-right');</code></pre>
			<hr class="large">
			<h3 class="normal" id="adding-off-canvas-after-page-load">Adicionando um off-canvas depois da página já carregada</h3>
			<p>Se você precisar adicionar um off-canvas depois da página já ser sido carregada, você vai precisar reiniciar o foundation da seguinte forma:</p>
			<pre class="margin-bottom"><code class="language-javascript">$(document).foundation();</code></pre>


			<p>Ou, no caso, você pode especificar o tipo de componente que deseja reinicializar utilizando o reflow:</p>
			<pre class="margin-bottom"><code class="language-javascript">$(document).foundation('offcanvas', 'reflow');</code></pre>

			<hr class="large">

			<?= linkDocumentacaoOficial(array('append' => 'docs/components/offcanvas.html')) ?>

			<script>
				document.addEventListener('DOMContentLoaded', function() {
					activeNav('docs-componentes-offcanvas');
					activeNav('documentacao');
				}, false);
			</script>

		</div>
	</div>

<? require_once("footer.php"); ?>
