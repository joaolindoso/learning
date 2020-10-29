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

</style>
  
<?php

$publicacoes = null;
$filtroTipoDocumento = "";

if (isset($_GET['td'])) {
  $publicacoes = \SEATI\Publicacoes\GetData::getUltimasPublicacoes(20, $_GET['td']);

  $tipoDocumento = \SEATI\Publicacoes\GetData::getTipoDocumento($_GET['td']);
  $filtroTipoDocumento = "<h2 style='margin: 0px;'>Tipo Documento: <b>{$tipoDocumento[0]->nome}</b>.</h2>";
} else {
  $publicacoes = \SEATI\Publicacoes\GetData::getUltimasPublicacoes(20);
}

$plgDirectory = wp_upload_dir()['baseurl'];
$tmplDirectory = get_bloginfo('template_directory');

echo "<div class='row' style='margin-bottom: 15px;'>{$filtroTipoDocumento}</div>";
foreach ($publicacoes as $item) {

  $htmlArquivos = '';

  $titulo = urldecode($item->titulo);
  $resumo = urldecode($item->resumo);

  $arquivos = \SEATI\Publicacoes\GetData::getArquivosPublicados($item->id);

  foreach ($arquivos as $arquivo) {
    $nA = strtoupper(str_replace(strrchr($arquivo->nome_arquivo, '.'), '', $arquivo->nome_arquivo));
    $htmlArquivos .= "<li style='list-style: none;'>
      <a href='{$plgDirectory}/publicacoes/publicados/{$arquivo->arquivo_publicado}'>
        <img src='{$tmplDirectory}/images/icon-pdf.png' /> - {$nA}
      </a>
    </li>";
  }  

  echo "
  <div class='panel panel-default'>
    <div class='panel-heading'><b>{$titulo}</b></div>
    <div class='panel-body'>{$resumo}<hr>
    {$htmlArquivos}</div>
  </div>
  ";
}
