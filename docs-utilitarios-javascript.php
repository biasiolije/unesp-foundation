<? require_once("header.php"); ?>

	<div class="row almost full">
		<div class="large-3 columns">
			<? require_once("sidebar-documentacao.php"); ?>
		</div>
		<div class="large-9 columns margin-top-double padding-bottom-quad documentacao">

			<h1>Utilitários JavaScript</h1>
			<h3 class="subheader">O Foundation inclui um punhado de utilitários JavaScript para ajudá-lo a adiconar funcionalidades aos apps e plugins.</h3>

			<hr class="large">

			<h3 class="normal" id="using">Utilizando os utilitários JavaScript</h3>

			<p>Há duas formas de utilizar os utilitários do Foundation: chamando-os de dentro do namespace Foundation.utils ou herdando-os dentro de um objeto.</p>

			<h4>Foundation.utils</h4>

			<p>Desde que o arquivo <kbd>foundation.js</kbd> tenha sido carregado na página, você pode acessar qualquer dos utilitários do Foundation chamando <code>Foundation.utils.{function_name}</code>.</p>

			<p>Por exemplo, se você digitar o seguinte no consolde JavasScript, ele irá retornar uma string alfabética de 6 digitos.</p>

			<pre class="margin-bottom"><code class="language-javascript">// Cria uma string randômica de tamanho n
Foundation.utils.random_str(6);</code></pre>

			<h4>Herança de métodos</h4>

			<p>Se você tem um objeto JavaScrpt, você pode herdar qualquer um dos utilitários chamando o método <code>Foundation.inherit</code>. Para utilizá-lo, passe o objeto que você quer que herde os métodos, seguido de uma string com os métodos que você deseja, separados por espaço.</p>

			<pre class="margin-bottom"><code class="language-javascript">// Exemplo simples
var user = {};
Foundation.inherit(user, 'random_str data_options');

// Exemplo avançado
Pessoa = function() {
  this.init = function() {
    Foundation.inherit(this, 'random_str data_options');
  }
};

var user = new Pessoa();
user.init();</code></pre>

			<hr class="large">

			<h3 class="normal" id="selector">Engine de seleção</h3>

			<p>Apesar do engine de seleção do jQuery ser bastante versátil, ele pode ser um pouco lento as vezes. O seletor "S" do Foundation utiliza a API nativa do browser chamando o método <code>querySelectorAll()</code>, fazendo a seleção ser até 20% mais rápida.</p>

			<p>"S" pode ser utilizado como um substituto para o seletor $ do jQuery na maioria dos casos.</p>

			<div class="row">
				<div class="large-6 columns">
				<h4>Seletor do jQuery</h4>
					<pre class="margin-bottom"><code class="language-javascript">// Uma seleção simples
$('.class #id');

// Uma seleção com colchetes
$('label[for="input1"]');

// Uma seleção com escopo
$('dd > .content', '#accordion');</code></pre>
				</div>
				<div class="large-6 columns">
				<h4>Seletor &#8220;S&#8221; do Foundation</h4>
					<pre class="margin-bottom"><code class="language-javascript">// Uma seleção simples
Foundation.utils.S('.class #id');

// Uma seleção com colchetes
Foundation.utils.S('label[for="input1"]');

// Uma seleção com escopo
Foundation.utils.S('dd > .content', '#accordion');</code></pre>
				</div>
			</div>

			<p><h4>Assinatura do método</h4></p>
			<pre class="margin-bottom"><code class="language-javascript">// Argumentos:
//    Seletor (String): Seletor CSS descrevendo o(s) elemento(s) a serem retornados
//    como um objeto jQuery.
//
//    Escopo (String): Seletor CSS descrevendo a área a ser procurada. O padrão é o
//    documento.
//
// Retorna:
//    Element (jQuery Object): Objeco jQuery contendo os elemtos referentes ao
//    seletor dentro do escopo.

S(seletor, escopo) { ... }</code></pre>

			<hr class="large">
			<h3 class="normal" id="delay">Throttle &amp; Debounce</h3>

			<p>Muitas vezes quando você cria um callback é vangajoso adicionar um delay para que o ele não seja ativado multiplas vezes. O Foundation inclui dois dipos de delays para callbacks: <code>throttle</code> e <code>debounce</code>.</p>
			<p><strong>Throttle</strong> previne a função de ser executada mais de 1 vez a cada n milisegundos. Este recurso é geralmente utilizado em casos em que não é adequado chamar um callback a cada vez que um evento é disparado (durante uma ação contínua), mas você ainda quer disparar uma ação enquanto o evento é executado. Um exemplo disso seria a janela do navegador sendo redimensionada ou um animação ocorrendo.</p>
			<p><strong>Debounce</strong> previne a função de ser executada até que pare de ser invocada por n milisegundos. Este recurso é geralmente utilizado para impedir uma ação de ser realizada duas vezes, como clicar duas vezes em um botão de submit, ou impedir um evento de acontecer acidentalmente, como um evento acionado por um hover.</p>

			<div class="row">
				<div class="large-6 columns">
				<h4>Sem delay</h4>
					<pre class="margin-bottom"><code class="language-javascript">// Handler de click em um botão
$('.button').on('click', function(e){
  // Tratamento do click
});

// Redimensionamento
$(window).on('resize', function(e){
  // Ações responsivas
});</code></pre>
				</div>
				<div class="large-6 columns">
				<h4>Com delay</h4>
					<pre class="margin-bottom"><code class="language-javascript">// Handler de click em botão com debounce
$('.button').on('click', Foundation.utils.debounce(function(e){
  // Tratamento do click
}, 300, true));

// Redimensionamento com throttle
$(window).on('resize', Foundation.utils.throttle(function(e){
  // Ações responsivas
}, 300));</code></pre>
				</div>
			</div>

			<p><h4>Assinatura do método</h4></p>
			<pre class="margin-bottom"><code class="language-javascript">// Argumentos:
//    Func (Function): Função a ser tratada.
//
//    Delay (Integer): Intervalo de execução da função em milisegundos.
//
// Retorna:
//    Lazy_function (Function): Função com o throttle aplicado.

throttle(func, delay) { ... }

// Arguments:
//    Func (Function): Função a ser tratada.
//
//    Delay (Integer): Intervalo de execução da função em milisegundos.
//
//    Immediate (Bool): Se a função deve ser chamada no início do delay
//    em vez do final. o padrão é false.
//
// Returns:
//    Lazy_function (Function): Função com o debounce aplicado.

debounce(func, delay, immediate) { ... }</code></pre>


			<hr class="large">
			<h3 class="normal" id="data-options">Data Options</h3>

			<p>O método <code>data_options</code> analisa um conjunto de valores delimitados por ponto e vírgula no atributo <code>data-options</code> do elemento HTML selecionado. É util para permitir que configurações sejam passadas para um script ou plugin a partir do markup.</p>
			<div class="row">
				<div class="large-6 columns">
				<h4>HTML</h4>
					<pre class="margin-bottom"><code class="language-html">&lt;div id="target" data-options="delay:4;color:red;animal:unicorn"&gt;&lt;/div&gt;</code></pre>
				</div>
				<div class="large-6 columns">
				<h4>JavaScript</h4>
					<pre class="margin-bottom"><code class="language-javascript">var settings = Foundation.utils.data_options($('#target'));</code></pre>
				</div>
			</div>

			<h4>Assinatura do método</h4>

			<pre class="margin-bottom"><code class="language-javascript">// Argumentos:
//    el (jQuery Object): Elemento a ser analisado.
//    data_attr_name (string): Nome opctional do data-attribute a ser analisado. (padrão 'options').
//
// Returns:
//    Options (JavaScript Object): Conteúdo do atributo data-options do elemento.

data_options(el, data_attr_name) { ... }</code></pre>

			<hr class="large">

			<h3 class="normal" id="media-queries">Media Queries</h3>

			<p>Media queries são o coração da grande maioria das técnicas de CSS responsivo, mas podem ser um pouco complicadas de lidar. Para facilitar as coisas, foram incluídos 2 métodos de ajuda (<code>register_media</code> e <code>add_custom_rule</code>). Também foi feito um complemento no método nativo <code>matchMedia</code> para funcionar em todos os browsers que o Foundation suporta.</p>

			<p><strong>Register Media</strong> é usado para adicionar uma nova media query à lista acessível pelo JavaScript. Esta lista pode ser acessada através do <code>Foundation.media_queries</code>.</p>

			<p><strong>Add Custom Rules</strong> é usado para adiconar uma regra CSS customizada ao documento. Se uma media query é passada ao método, a regra será aplicada a esta media query somente, senão, globalmente.</p>

			<p><strong>Match Media</strong> pode ser usada para saber se o browser atualmente corresponde a uma media query passada como string. Para usar esta função, chame <code>matchMedia()</code> com a media query como argumento e verifique a propriedade <code>matches</code> (veja o exemplo abaixo).</p>
			
			<p>Em adição a isso, você pode verificar as media queries padrão do Foundation. Os métodos diponíveis são:</p>

			<pre class="margin-bottom"><code class="language-javascript">// Telas pequenas
Foundation.utils.is_small_only();
Foundation.utils.is_small_up();

// Telas médias
Foundation.utils.is_medium_only();
Foundation.utils.is_medium_up();

// Telas grandes
Foundation.utils.is_large_only();
Foundation.utils.is_large_up();

// Telas extra-grandes
Foundation.utils.is_xlarge_only();
Foundation.utils.is_xlarge_up();

// Telas gigantes
Foundation.utils.is_xxlarge_only();
Foundation.utils.is_xxlarge_up();</code></pre>

			<div class="row">
				<div class="large-6 columns">
				<h4>CSS</h4>
					<pre class="margin-bottom"><code class="language-css">meta.my-mq-custom {
  font-family: "/only screen and (min-width: 40em)/";
  width: 40em;
}</code></pre>
				</div>
				<div class="large-6 columns">
				<h4>JavaScript</h4>
					<pre class="margin-bottom"><code class="language-javascript">// Registrando uma media query custom
Foundation.utils.register_media('custom', 'my-mq-custom');

// Checando se ela está ativa
if (matchMedia(Foundation.media_queries['custom']).matches){
  ...
};

// Aplicando uma regra CSS customizada à media query
Foundation.utils.add_custom_rule('.js-generated-element { padding-top: ' + element.data('height') + 'px }', 'custom');</code></pre>
				</div>
			</div>

			<p><h4>Assinatura do método</h4></p>

			<pre class="margin-bottom"><code class="language-javascript">// Argumentos:
//    Media (String): String chave para o armazenamento da media query em 
//    Foundation.media_queries
//
//    Class (String): Nome para a meta-tag gerada

register_media(media, class) { ... }

// Arguments:
//    Rule (String): Regra CSS a ser adicionada ao documento.
//
//    Media (String): Media query opcional para a regra ser aplicada.

add_custom_rule(rule, media) { ... }</code></pre>

			<hr class="large">

			<h3 class="normal" id="image-loaded">Image Loaded</h3>

			<p>Enquanto vincular ao evento document.ready normalmente é o suficiente para plugins que manipulam o DOM, há situações em que você precisa de TODO o conteúdo do site carregado antes de começar a calcular informações como o tamanho de elementos. Isso é importante principlamente com imagens, que podem demorar um pouco para carregar e alterar o layout de uma págian significamente, dependendo do seu tamanho.</p>

			<p>Isso pode ser evitado utilizando-se o método <code>image_loaded</code>, que permite que você execute um callback quando uma imagem tenha terminado completamente de carregar. Passando-se como parâmetro um seletor jQuery que corresponda a várias imagens irá fazer com o que o callback seja executado somente quando todas tiverem carregado.</p>
			
			<p><h4>Exemplo</h4></p>

			<pre class="margin-bottom"><code class="language-javascript">Foundation.utils.image_loaded($('img.wait-for-me'), function(){
  console.log('Image Loaded! :)');
});</code></pre>

			<p><h4>Assinatura do método</h4></p>
			<pre class="margin-bottom"><code class="language-javascript">// Argumentos:
//    Image (jQuery Object): Imagem(ns) para se checar o carregamento.
//
//    Callback (Function): Função a ser executada quanto tudo estiver carregado.

image_loaded(image, callback) { ... }</code></pre>

			<hr class="large">

			<h3 class="normal" id="random">Random String</h3>

			<p>O método <code>random_str</code> é um auxílio para criação de strings randômicas de um tamanho definido. Este método é usado por alguns plugins do Foundation para uma considerável probabilidade de não haver colisão entre IDs de elementos criados sob demanda. Note que <code>random_str</code> não deve ser considerada criptograficamente segura.</p>

			<p><h4>Exemplo</h4></p>

			<pre class="margin-bottom"><code class="language-javascript">>> Foundation.utils.random_str(6);
"P47PGD"
>> Foundation.utils.random_str(6);
"JvuXFc"
>> Foundation.utils.random_str(6);
"XOxB7j"</code></pre>

			<p><h4>Assinatura do método</h4></p>

			<pre class="margin-bottom"><code class="language-javascript">// Argumentos:
//    Length (Integer): Tamanho da string a ser gerada. O padrão é um integer
//    randômico.
//
// Retorna:
//    Rand (String): String alfabética pseudo-randômica.

random_str(length) { ... }</code></pre>
			
			<hr class="large">

			<?= linkDocumentacaoOficial(array('append' => 'docs/utility-classes.html')) ?>

			<script>
				document.addEventListener('DOMContentLoaded', function() {
					activeNav('docs-utilitarios-javascript');
					activeNav('documentacao');
				}, false);
			</script>

		</div>
	</div>

<? require_once("footer.php"); ?>
