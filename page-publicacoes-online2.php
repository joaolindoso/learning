<?php get_header();  ?>

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
    .wp-publicacoes {
      background: none !important;
    }
  </style>
  
<div class="" id="">

		<div id="row">

        <?php
            
        $id = get_the_ID();
            
        if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                <h1><?php //the_title(); ?></h1>
                
                <div class="entry">

  				<?php
  					global $wpdb;
                    
  					$table_name = $wpdb->prefix . 'publicacoes';
  					$table_name_arquivos = $wpdb->prefix . 'publicacoes_arquivos';
  					$table_name_clientes = $wpdb->prefix . 'publicacoes_clientes';
  					$table_name_options = $wpdb->prefix . 'options';

  					$meses = array(1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril", 5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto", 9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro");

  					$anos = $wpdb->get_results( "SELECT DISTINCT YEAR(abertura) as ano FROM $table_name WHERE _status = 1 ORDER BY _datahora DESC" );
  					$anoCorrente = isset($_POST['selAno']) ? $_POST['selAno'] : date('Y');

  					$dtDepartamento = $wpdb->get_row( "SELECT option_value FROM $table_name_options WHERE option_name = 'wp-publicacoes-nomedepartamento'" );
  					$strNomeDepartamento = ($dtDepartamento->option_value != '') ? urldecode($dtDepartamento->option_value) : '';

  					$dtSolicita = $wpdb->get_row( "SELECT option_value FROM $table_name_options WHERE option_name = 'wp-publicacoes-solicitacadastro'" );
  					$solicitaCadastro = $dtSolicita->option_value;

            if ($_POST['selTipo'] != '') {
              $qrTipopublicacao = " AND tipo_publicacao = '{$_POST['selTipo']}' ";
            } else {
              $qrTipopublicacao = '';
            }

  					$myrows = $wpdb->get_results( "SELECT id, tipo_publicacao, titulo, processo, url, objeto, abertura, _repeticao, _usuario, _datahora FROM $table_name WHERE YEAR(abertura) = $anoCorrente $qrTipopublicacao AND _status = 1 ORDER BY _datahora DESC" );
  				?>
         
                  <div class="panel panel-default">
                    <div class="panel-heading">Filtro</div>
                    <div class="panel-body">
                     
                      <form class="form-horizontal" method="post">
                       
                        <div class="form-group">
                         
                          <label for="selTipo" class="col-xs-12 col-md-4 control-label">Tipo de publicação: </label>
                          
                          <div class="col-xs-12 col-md-6">
                           
                            <select class="form-control" name="selTipo" id="selTipo">
                              <option value="">TODOS</option>
                              
                              <option value="PORTARIAS"
                                  <?php echo ($_POST['selTipo'] == "PORTARIAS") ? " selected = 'selected' " : "" ?>>PORTARIAS</option>
                              
                              <option value="EDITAIS" 
                                  <?php echo ($_POST['selTipo'] == "EDITAIS") ? " selected = 'selected' " : "" ?>>EDITAIS</option>
                              
                              <option value="NORMAS" 
                                  <?php echo ($_POST['selTipo'] == "NORMAS") ? " selected = 'selected' " : "" ?>>NORMAS</option>
                              
                              <option value="CONCURSOS" 
                                  <?php echo ($_POST['selTipo'] == "CONCURSOS") ? " selected = 'selected' " : "" ?>>CONCURSOS</option>
                              
                              <option value="MANUAIS" 
                                  <?php echo ($_POST['selTipo'] == "MANUAIS") ? " selected = 'selected' " : "" ?>>MANUAIS</option>
                              
                              <option value="MODELOS" <?php echo ($_POST['selTipo'] == "MODELOS") ? " selected = 'selected' " : "" ?>>MODELOS</option>

                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                           
                            <label for="selAno" class="col-xs-12 col-sm-4 control-label">Ano:</label>
                            
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
						$myFiles = $wpdb->get_results( "SELECT id, nome_arquivo, nome_fisico, descricao, extensao, tamanho, _usuario, _publicacao, _datahora FROM $table_name_arquivos WHERE publicacao_id = {$dados->id} AND _status = 1 ORDER BY _datahora ASC" );

						$f = 0;

						$htmlArquivos = "";
						if (count($myFiles) == 0) {
							$htmlArquivos = "<li><strong>Nenhum arquivo cadastrado!</strong></li>";
						} else {
							while ($f < count($myFiles)) {
								$arquivo = $myFiles[$f];
								$upload_dir = wp_upload_dir();
								$usuario = get_userdata( $arquivo->_usuario );
								$dataPublicacao = new Datetime($arquivo->_publicacao);

                if ($solicitaCadastro) {
                  $link = "<a href='javascript:;' class='solicita-cadastro'>".urldecode($arquivo->descricao)."</a><br>";
                } else {
                  $link = "<a href='".$upload_dir['baseurl']."/publicacoes/{$arquivo->nome_fisico}'>".urldecode($arquivo->descricao)."</a><br>";
                }

								$htmlArquivos .= "
								<li>$link
									<span style='font-family: sans-serif; font-size: 10px;'>Tamanho: ({$arquivo->tamanho} Kb) Publicado em: {$dataPublicacao->format('d/m/Y')}</span>

                                      <form class='form-solicita-cadastro form-inline' method='post'>
                                        <input type='hidden' name='action' value='download' />
                                        <input type='hidden' name='arquivo' value='{$arquivo->id}' />
                                        <div class='panel panel-warning'>
                                          <div class='panel-body'>
                                            <div class='alert alert-info' role='alert'><strong>Atenção!</strong> - Informe os dados abaixo para realizar download do arquivo.</div>
                                            <div class='form-group'>
                                              <!--<label for='downNome'>Nome:</label>-->
                                              <input type='text' class='wp-publicacoes form-control' name='downNome' id='downNome' placeholder='Primeiro e Último nome'>
                                            </div>
                                            <div class='form-group'>
                                              <!--<label for='downEmail'>Email</label>-->
                                              <input type='email' class='wp-publicacoes form-control' name='downEmail' id='downEmail' placeholder='Email'>
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
            
                        $titulo = "{$dados->tipo_publicacao} N. ".urldecode($dados->titulo)." - $strNomeDepartamento $strRepeticao";
                        
            $item = sprintf("
              <div class='panel panel-default'>
                <div class='panel-heading'> <strong>%s</strong> </div>
                <div class='panel-body'>
  								<strong>Processo:</strong> %s<br>
  								<strong>Abertura:</strong> %s<br>
  								<strong>Objeto:</strong> %s<br>
  								<strong>Arquivos:</strong> <ul>%s</ul>
                </div>
              </div>", $titulo, urldecode($dados->processo), $strAbertura, urldecode($dados->objeto), $htmlArquivos);
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

<?php get_footer(); ?>
