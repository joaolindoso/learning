<style media='screen'>

  .wp-publicacoes {
    background: none !important;
  }

  .lista-arquivos {
    list-style: none;
  }

  .lista-arquivos li {
    padding: 5px;
  }
    
  .titpub {
      text-transform: lowercase;
  }
    
  .titpub:first-letter {
      text-transform: capitalize !important;
  }

  .nomearquivo {
    color: #4a4a4a;
    font-size: 16px;
  }

</style>
<script type="text/javascript">
  jQuery(document).on('click', 'a.lnkDownload', function () {
    var raiz = jQuery(this).closest('form');
    raiz.submit();
  });
</script>

<?php

$publicacoes = null;
$filtroTipoDocumento = "";

if (isset($_GET['td'])) {
  $publicacoes = \SEATI\Publicacoes\GetData::getPublicacoesByTipoDocumento($_GET['td']);

  $tipoDocumento = \SEATI\Publicacoes\GetData::getTipoDocumento($_GET['td']);
  $filtroTipoDocumento = "<h1 class='titulopages titpub' style='margin-top: 0px;'><b>{$tipoDocumento[0]->nome}</b></h1>";
} else {
  $publicacoes = (object) \SEATI\Publicacoes\GetData::getPublicacoesByTipoDocumento();
}

  $paginacao = "
  <div style='text-align: center'>
  <nav aria-label='Page navigation example'>
    <ul class='pagination'>
      <li class='page-item' title='Anterior'><a class='page-link' href='{$publicacoes->link_anterior}'><</a></li>
      <li class='page-item'><span class='page-link' style='color: #000;'>P&aacute;gina {$publicacoes->page} de {$publicacoes->total_pages}</span></li>
      <li class='page-item' title='Pr&oacute;ximo'><a class='page-link' href='{$publicacoes->link_posterior}'>></a></li>
    </ul>
  </nav>
  </div>
  ";

  //echo $paginacao;

if (!isset($_GET['id'])) {

    if (($_GET['td'] == '1') OR ($_GET['td'] == '4') OR ($_GET['td'] == '5')) {

      $plgDirectory = wp_upload_dir()['baseurl'];
      $tmplDirectory = get_bloginfo('template_directory');

      echo "<div class='' style='margin-bottom: 35px; padding-bottom: 15px; border-bottom: 1px solid #eee;'>{$filtroTipoDocumento}</div>";
      foreach ($publicacoes as $item) {

        $htmlArquivos = '';
          
        $titulo = urldecode($item->titulo);
        $resumo = urldecode($item->resumo);
        $datapublicacao = $item->_datahora;

        $arquivos = \SEATI\Publicacoes\GetData::getArquivosPublicados($item->id);

        foreach ($arquivos as $arquivo) {
          $nA = (str_replace(strrchr($arquivo->nome_arquivo, '.'), '', $arquivo->nome_arquivo));
          $htmlArquivos .= "
          <li style='list-style: none; margin-bottom: 20px;'>
            <form class='form-solicita-cadastro' method='post'>
              <input type='hidden' name='pub_action' value='download' />
              <input type='hidden' name='arquivo' value='{$arquivo->id}' />
              <span style='color: #444444; font-size: 12px; font-weight: bold;'>&nbsp;&nbsp;&nbsp;&nbsp;{$arquivo->data_publicacao}</span>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <span class='agsdi-icon' style='color:#6e6e6e !important; font-size:28px;' data-icon='agsdi-file-pdf'>file pdf icon</span>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <span><a class='lnkDownload' href='javascript:;'>{$nA}</a></span>
            </form>
          </li>";
        }  

        echo "
        <div>
          <div>
                <div style='font-size: 12px; color: #444444;'><b>PUBLICADO EM</b> {$datapublicacao}</div>
                <a href='?td={$_GET['td']}&id={$item->id}'><span style='font-size: 16px;'>{$titulo}</span>
            </a>
            <br>
            <hr>
          </div>
        </div>
        ";
      }

    } else {

      $plgDirectory = wp_upload_dir()['baseurl'];
      $tmplDirectory = get_bloginfo('template_directory');

      echo "<div class='' style='margin-bottom: 35px; padding-bottom: 15px; border-bottom: 1px solid #eee;'>{$filtroTipoDocumento}</div>";

      foreach ($publicacoes as $item) {

        $htmlArquivos = '';

        $titulo = urldecode($item->titulo);
        $resumo = urldecode($item->resumo);
        $datapublicacao = $item->_datahora;

        $arquivos = \SEATI\Publicacoes\GetData::getArquivosPublicados($item->id);

        foreach ($arquivos as $arquivo) {
          if ($arquivo->rotulo_arquivo != '') {
            $nA = (str_replace(strrchr($arquivo->rotulo_arquivo, '.'), '', $arquivo->rotulo_arquivo));
          } else {
            $nA = (str_replace(strrchr($arquivo->nome_arquivo, '.'), '', $arquivo->nome_arquivo));
          }
          $htmlArquivos .= "
          <li style='list-style: none; margin-bottom: 20px;'>
            <form class='form-solicita-cadastro' method='post'>
              <input type='hidden' name='pub_action' value='download' />
              <input type='hidden' name='arquivo' value='{$arquivo->id}' />
              <span style='color: #444444; font-size: 12px; font-weight: bold;'>&nbsp;&nbsp;&nbsp;&nbsp;{$arquivo->data_publicacao}</span>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <span class='agsdi-icon' style='color:#6e6e6e !important; font-size:28px;' data-icon='agsdi-file-pdf'>file pdf icon</span>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <span><a class='lnkDownload' href='javascript:;'>{$nA}</a></span>
            </form>
          </li>";
        }

        echo "
            <div class='panel panel-default'>
              <div class='panel-heading'>&nbsp;&nbsp;&nbsp;&nbsp;<b><span style='font-size: 16px;'>{$titulo}</span></b></div>
              <div class='panel-body'>&nbsp;&nbsp;&nbsp;&nbsp;{$resumo}<hr>
              {$htmlArquivos}</div>
            </div>
            ";
      }

    }

} else {
  // mostra os detalhes dos arquivos

  echo "<div class='row' style='margin-left: 0px; margin-bottom: 35px; padding-bottom: 15px; border-bottom: 1px solid #eee;'>{$filtroTipoDocumento}</div>";
    
    $plgDirectory = wp_upload_dir()['baseurl'];
    $tmplDirectory = get_bloginfo('template_directory');
    
    $dirUploads = get_bloginfo('wpurl') . "/wp-content/uploads/publicacoes/publicados/";
    
    $htmlArquivos = '';

    $item = \SEATI\Publicacoes\GetData::getPublicacao($_GET['id']);

    $titulo = urldecode($item->titulo);
    $resumo = urldecode($item->resumo);
    $datapublicacao = $item->_datahora;
    
    $arquivos = \SEATI\Publicacoes\GetData::getArquivosPublicados($_GET['id']);
    
        foreach ($arquivos as $arquivo) {
          if ($arquivo->rotulo_arquivo != '') {
            $nA = (str_replace(strrchr($arquivo->rotulo_arquivo, '.'), '', $arquivo->rotulo_arquivo));
          } else {
            $nA = (str_replace(strrchr($arquivo->nome_arquivo, '.'), '', $arquivo->nome_arquivo));
          }
          $htmlArquivos .= "
          <li style='list-style: none; margin-bottom: 20px;'>
            <form class='form-solicita-cadastro' method='post'>
              <input type='hidden' name='pub_action' value='download' />
              <input type='hidden' name='arquivo' value='{$arquivo->id}' />
              <span style='color: #444444; font-size: 12px; font-weight: bold;'>&nbsp;&nbsp;&nbsp;&nbsp;{$arquivo->data_publicacao}</span>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <span class='agsdi-icon' style='color:#6e6e6e !important; font-size:28px;' data-icon='agsdi-file-pdf'>file pdf icon</span>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <span><a class='lnkDownload' href='javascript:;'>{$nA}</a></span>
            </form>
          </li>";
        } 

    echo "
    <span style='font-size: 12px; color: #444444;'><b>PUBLICADO EM:</b> {$datapublicacao}</span><br>
    <b><span style='font-size: 16px;'>{$titulo}</span></b><br><br>
    <p>{$resumo}</p><br>
      <div class='panel panel-default'>
        <div class='panel-heading'>&nbsp;&nbsp;&nbsp;&nbsp;<b>Arquivos:</b></div>
        <div class='panel-body'>{$htmlArquivos}</div>
      </div>
    ";

}

  //echo $paginacao;