<?
	function linkDocumentacaoOficial($params = array())
	{
		extract($params);
		ob_start();
		?>
		<h3 class="color primary">Documentação oficial do <strong>Foundation</strong></h3>
		<p>Para aprofundamento no assunto e mais customizações, consulte a <a target="_blank" href="http://foundation.zurb.com/<?= $append?$append:'' ?>">documentação oficial do Foundation <i class="fa fa-external-link"></i></a>.</p>
		<?
		return ob_get_clean();
	}

	function pageFooter($params = array())
	{
	}
?>