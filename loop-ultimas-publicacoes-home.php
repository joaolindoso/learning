<script type="text/javascript">
  jQuery(document).on('click', 'a.lnkDownload', function () {
    var raiz = jQuery(this).closest('form');
    raiz.submit();
  });
</script>

<div class="clearfix"></div>
<h4 class="centratexto">ÚLTIMAS <b>PUBLICAÇÕES</b></h4>

<div id="quadroultimaspublicacoes">

    <?php
        $upload_dir = wp_upload_dir();
        $ress = \SEATI\Publicacoes\GetData::getUltimasPublicacoes(5);

        foreach ($ress as $i => $value) {
            $arquivos = \SEATI\Publicacoes\GetData::getArquivosPublicados($value->id);

            ?>
            <div style="margin-bottom: 30px;">                
                <div style="float: left; margin-right: 12px;">
                    <!-- <img src="<?php // bloginfo('template_directory') ?>/images/icon-pdf.png" /> -->
                    <span class='agsdi-icon' style='color:#6e6e6e !important; font-size:28px;' data-icon='agsdi-file-pdf'>file pdf icon</span>
                </div>
                <div>
                    <?php
                        switch ($ress[$i]->tipo_documento_id) {
                            case 1:
                                echo "<p><b><a href='publicacoes/?td=1&id={$ress[$i]->id}'>{$ress[$i]->titulo}</a></b></p>";
                            break;
                            case 4:
                                echo "<p><b><a href='publicacoes/?td=4&id={$ress[$i]->id}'>{$ress[$i]->titulo}</a></b></p>";
                            break;
                            case 5:
                                echo "<p><b><a href='publicacoes/?td=5&id={$ress[$i]->id}'>{$ress[$i]->titulo}</a></b></p>";
                            break;
                            default:
                                echo "<p><b><a href='publicacoes/?td={$ress[$i]->tipo_documento_id}'>{$ress[$i]->titulo}</a></b></p>";
                        }

                        foreach ($arquivos as $arquivo) {

                            if ($arquivo->rotulo_arquivo != '') {
                                $nA = $arquivo->rotulo_arquivo;
                              } else {
                                $nA = $arquivo->nome_publicado;
                              }
                              
                            echo "<div style='margin-left:35px;'><form class='form-solicita-cadastro' method='post'>
                              <input type='hidden' name='pub_action' value='download' />
                              <input type='hidden' name='arquivo' value='{$arquivo->id}' />";

                            echo "<a class='lnkDownload' href='javascript:;'>&#10141; " . $nA . "</a><br /></form></div>";
                            break;
                        }
                    ?>
                </div>
            </div>
            <?php
        }
    ?>

</div>

<div class="col-md-12 mobile-saiba-mais" style="margin-top: 30px;">
    <a class="botao-saiba-mais" href="publicacoes" rel="bookmark">
        VER TODOS <i class="fas fa-angle-right"></i>
    </a>
</div>