<!--
Esta página é encaixada em outro container
-->

<div class="row">

<script type="text/javascript">
  jQuery(document).ready(function () {
    jQuery('.form-solicita-cadastro').fadeOut();
  });

  jQuery(document).on('click', 'a.solicita-cadastro', function () {
    var raiz = jQuery(this).closest('li');
    var form = raiz.find('form');
    form.show();
  });

  jQuery(document).on('click', 'button.btn-download', function () {
    var raiz = jQuery(this).closest('form');
    var varNome = raiz.find('#downNome');
    var varEmail = raiz.find('#downEmail');

    if (jQuery.trim(varNome.val()) === "") {
      alert("Campo nome deve ser preenchido.");
      return false;
    }

    if (jQuery.trim(varEmail.val()) === "") {
      alert("Campo e-mail deve ser preenchido.");
      return false;
    }

    raiz.submit();
  });
</script>

<style media="screen">
  .wp-pregoes {
    background: none !important;
  }
</style>

<div class="col-xs-12 col-md-12">
		<div id="noticias">
        <?php
        $id = get_the_ID();
        if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                <div class="entry">

  				<?php
  					global $wpdb;
  					$table_name = $wpdb->prefix . 'pregoes';
  					$table_name_arquivos = $wpdb->prefix . 'pregoes_arquivos';
  					$table_name_clientes = $wpdb->prefix . 'pregoes_clientes';
  					$table_name_options = $wpdb->prefix . 'options';
  					$meses = array(1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril", 5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto", 9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro");

  					$anos = $wpdb->get_results( "SELECT DISTINCT YEAR(abertura) as ano FROM $table_name WHERE _status = 1 ORDER BY _datahora DESC" );

  					$anoCorrente = isset($_POST['selAno']) ? $_POST['selAno'] : date('Y');

  					$dtDepartamento = $wpdb->get_row( "SELECT option_value FROM $table_name_options WHERE option_name = 'wp-pregoes-nomedepartamento'" );

  					$strNomeDepartamento = ($dtDepartamento->option_value != '') ? urldecode($dtDepartamento->option_value) : '';

  					$dtSolicita = $wpdb->get_row( "SELECT option_value FROM $table_name_options WHERE option_name = 'wp-pregoes-solicitacadastro'" );

  					$solicitaCadastro = $dtSolicita->option_value;

            if ($_POST['selTipo'] != '') {
              $qrTipoLicitacao = " AND tipo_licitacao = '{$_POST['selTipo']}' ";
            } else {
              $qrTipoLicitacao = '';
            }

  					$myrows = $wpdb->get_results( "SELECT id, tipo_licitacao, titulo, processo, url, objeto, abertura, _repeticao, _usuario, _datahora FROM $table_name WHERE YEAR(abertura) = $anoCorrente $qrTipoLicitacao AND _status = 1 ORDER BY _datahora DESC" );
  				?>

          <div class="panel panel-default">
            <div class="panel-heading">Filtro</div>
            <div class="panel-body">
              <form class="form-horizontal" method="post">
                <div class="form-group">
                  <label for="selTipo" class="col-xs-12 col-md-4 control-label">Tipo de licitação: </label>

                  <div class="col-xs-12 col-md-6">
                    <select class="form-control" name="selTipo" id="selTipo">
                      <option value="">TODOS</option>

                      <option value="ATA DE ABERTURA" <?php echo ($_POST['selTipo'] == "ATA DE ABERTURA") ? " selected = 'selected' " : "" ?>>ATA DE ABERTURA</option>

                      <option value="CONCORRÊNCIA" <?php echo ($_POST['selTipo'] == "CONCORRÊNCIA") ? " selected = 'selected' " : "" ?>>CONCORRÊNCIA</option>

                      <option value="CONCURSO" <?php echo ($_POST['selTipo'] == "CONCURSO") ? " selected = 'selected' " : "" ?>>CONCURSO</option>

                      <option value="CONVITE" <?php echo ($_POST['selTipo'] == "CONVITE") ? " selected = 'selected' " : "" ?>>CONVITE</option>

                      <option value="PREGÃO ELETRÔNICO" <?php echo ($_POST['selTipo'] == "PREGÃO ELETRÔNICO") ? " selected = 'selected' " : "" ?>>PREGÃO ELETRÔNICO</option>

                      <option value="PREGÃO PRESENCIAL" <?php echo ($_POST['selTipo'] == "PREGÃO PRESENCIAL") ? " selected = 'selected' " : "" ?>>PREGÃO PRESENCIAL</option>

                      <option value="PROCEDIMENTOS AUXILIARES" <?php echo ($_POST['selTipo'] == "PROCEDIMENTOS AUXILIARES") ? " selected = 'selected' " : "" ?>>PROCEDIMENTOS AUXILIARES</option>

                      <option value="RDC" <?php echo ($_POST['selTipo'] == "RDC") ? " selected = 'selected' " : "" ?>>RDC</option>

                      <option value="TOMADA DE PREÇO" <?php echo ($_POST['selTipo'] == "TOMADA DE PREÇO") ? " selected = 'selected' " : "" ?>>TOMADA DE PREÇO</option>

                    </select>

                  </div>

                </div>

                <div class="form-group">

                    <label for="selAno" class="col-xs-12 col-sm-4 control-label">Ano de abertura: </label>

                    <div class="col-xs-12 col-md-6">

                      <select name="selAno" id="selAno" class="form-control">

                            <?php
                            $a = 0;
                            while ($a < count($anos) ) {
                                $ano = $anos[$a];
                                $selecionado = ($anoCorrente == $ano->ano) ? " selected='selected' " : "";
                                echo "<option value='{$ano->ano}' $selecionado>{$ano->ano}</option>";
                                $a++;
                            }
                            ?>
                        </select>
                    </div>
                  </div>
                </div>
                <div class="form-group text-center">
                  <button type="submit" class="btn btn-primary text-center" name="btFiltro" id="btFiltro">Filtrar</button>
                </div>
              </form>
            </div>
          </div>

					<?php

					$x = 0;

					while ($x < count($myrows)) {

						$dados = $myrows[$x];

						$dataAbertura = new Datetime($dados->abertura);

						$strAbertura = $dataAbertura->format('d'). " de ".$meses[intval($dataAbertura->format('m'))]." de ".$dataAbertura->format('Y')." &agrave;s ".$dataAbertura->format('H:i')." hs";

						$myFiles = $wpdb->get_results( "SELECT id, nome_arquivo, nome_fisico, descricao, extensao, tamanho, _usuario, _publicacao, _datahora FROM $table_name_arquivos WHERE pregao_id = {$dados->id} AND _status = 1 ORDER BY _datahora ASC" );

						$f = 0;
						$htmlArquivos = "";

						if (count($myFiles) == 0) {

							$htmlArquivos = "<li><strong>Nenhum arquivo cadastrado.</strong></li>";

						} else {

							while ($f < count($myFiles)) {
								$arquivo = $myFiles[$f];
								$upload_dir = wp_upload_dir();
								$usuario = get_userdata( $arquivo->_usuario );
								$dataPublicacao = new Datetime($arquivo->_publicacao);

                if ($solicitaCadastro) {

                  $link = "<a href='javascript:;' class='solicita-cadastro'>{$arquivo->nome_fisico} ({$arquivo->tamanho} Kb)</a>";

                } else {

                  $link = "<a href='".$upload_dir['baseurl']."/pregoes/{$arquivo->nome_fisico}'>{$arquivo->nome_fisico} ({$arquivo->tamanho} Kb)</a>";

                }

								$htmlArquivos .= "

								<li>

									$link

									<span style='font-size: 10px;'>Publicado em: {$dataPublicacao->format('d/m/Y')}</span>

									<p style='font-style: italic;'>".urldecode($arquivo->descricao)."<br/></p>
                      <form class='form-solicita-cadastro form-inline' method='post'>

                        <input type='hidden' name='action' value='download' />

                        <input type='hidden' name='arquivo' value='{$arquivo->id}' />

                        <div class='panel panel-warning'>

                          <div class='panel-body'>

                            <div class='alert alert-info' role='alert'><strong>Atenção!</strong> - Informe os dados abaixo para realizar download do arquivo.</div>

                            <div class='form-group'>

                              <!--<label for='downNome'>Nome:</label>-->

                              <input type='text' class='wp-pregoes form-control' name='downNome' id='downNome' placeholder='Primeiro e Último nome'>

                            </div>

                            <div class='form-group'>

                              <!--<label for='downEmail'>Email</label>-->

                              <input type='email' class='wp-pregoes form-control' name='downEmail' id='downEmail' placeholder='Email'>

                            </div>

                            <button type='button' class='btn btn-download btn-default'><span class='glyphicon glyphicon-download'></span> &nbsp; Fazer download</button>

                          </div>

                        </div>

                      </form>

								</li>
								";
								$f++;
							}
						}

						$strRepeticao = ($dados->_repeticao == 1) ? " - REPETIÇÃO" : "";

						$strDepartamento = ($dados->departamento != "") ? " - ".urldecode($dados->departamento) : "";

            $url = ($dados->tipo_licitacao == "PREGÃO ELETRÔNICO") ? "<strong>URL ComprasNet:</strong> <a href='{$dados->url}' target='_blank'>{$dados->url}</a> <br />" : "";

            $titulo = "{$dados->tipo_licitacao} N. ".urldecode($dados->titulo)." - $strNomeDepartamento $strRepeticao";

            //print_r ($item); 

            $item = sprintf("

              <div class='panel panel-default'>

                <div class='panel-heading'> <strong>%s</strong> </div>

                <div class='panel-body'>

  								<strong>Processo:</strong> %s<br />

  								<strong>Abertura:</strong> %s<br />

                  %s

  								<strong>Objeto:</strong> %s<br />

  								<strong>Arquivos:</strong> <ul>%s</ul>

                </div>

              </div>

						", $titulo, urldecode($dados->processo), $strAbertura, $url, urldecode($dados->objeto), $htmlArquivos);
            echo $item;
						$x++;
					}

?>
                </div>
                <?php edit_post_link('Editar','','.'); ?>
            </div>
        <?php endwhile; endif; ?>
		</div>
	</div><!-- fim-col -->

</div>