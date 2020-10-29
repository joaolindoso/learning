<?php get_header() ?>
<?php
// require_once ('../menu.php');
?>
<style>
strong:hover, .fa-file-pdf-o{
  color: #a00100;
}
strong{
  color: #000;
}
label {
  font-size: 14px;
  color: #313a46;
  letter-spacing: 0.01em;
  font-family: "Roboto", sans-serif;}
  div.dataTables_wrapper div.dataTables_filter{
    width: inherit !important;
  }
  div.dataTables_wrapper div.dataTables_filter label{
    width: 100% !important;
  }

  @media only screen and (max-width: 375px) {
    .container-fluid{
      margin-top: 6px;
      padding-left: 6px;
    }
    div.dataTables_wrapper div.dataTables_filter input{
      width: 73% !important;
    }
  }
    div.dataTables_wrapper div.dataTables_filter input{
      width: 100% !important;
    }

  .dataTables_wrapper .dataTables_paginate .paginate_button{
    padding: 0 !important;
  }

  .container-fluid {
    padding-left: 0px!important;
    padding-right: 0px!important;
  }
  .col-sm-7.col-md-7{
    padding-bottom: 0.85em;
  }
  div.dataTables_wrapper div.dataTables_filter input{

    margin-left: 0!important;
  }
  .responsive-tabs .resp-tab-content, .shell{
    padding: 0!important;
  }
  thead {
    background: #a00100;
    color: white;
  }
  </style>
  <link href="css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  <body><!-- Page-->
    <div class="page text-center"><!-- Page Header-->

      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic context-dark" style="background-color: #990000">
        <div class="shell section-30 section-sm-top-20 section-sm-bottom-20"><h1 class="veil reveal-sm-block">
          PUBLICAÇÕES</h1>

        </div>
      </section>
      <!-- Page Content-->
      <main class="page-content"><!-- vertical link Tabs-->
        <section class="section-30 section-md-10 section-md-bottom-190">
          <div class="shell"><!-- Responsive-tabs-->
            <div data-type="vertical" class="responsive-tabs responsive-tabs-classic vertical">
              <ul data-group="tabs-lg-collapsed" class="resp-tabs-list tabs-1 text-center tabs-lg-collapsed">
                <li style="text-transform: none !important;">Editais em Aberto</li>
                <li style="text-transform: none !important;">Editais com Inscrições Finalizada</li>
                <li style="text-transform: none !important;">Portarias</li>
                <li style="text-transform: none !important;">Resoluções</li>
                <li style="text-transform: none !important;">Modelos</li>
                <li style="text-transform: none !important;">Estatuto</li>
                <li style="text-transform: none !important;">Regimento</li>
                <li style="text-transform: none !important;"><a href="docscursos/PERFIL_CAPA.pdf">Perfil Socioeconômico e Cultural</a> </li>
              </ul>
              <div data-group="tabs-lg-collapsed" class="resp-tabs-container text-sm-left tabs-lg-collapsed">
                <div>
                  <div class="inset-lg-left-10">
                    <div class="table-responsive clearfix">

                      <table id="example" class="table table-bordered responsive" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th data-priority="1">Publicação</th>
                            <!-- <th class="data" data-priority="2">Início</th>
                            <th class="data" data-priority="2">Término</th> -->

                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          require_once('../conexao.php'); //
                          $sql = mysql_query("select * from arquivos where TIPO not in (2,11,1) and IDARQUIVOPAI is null and SITUACAO = 3 and DATAFIM >= '".date('Y-m-d')."' order by IDARQUIVO DESC");
                          while($campos = mysql_fetch_object($sql)){?>
                            <tr>
                              <td>
                                  
                                <a title="<?php echo  utf8_decode(utf8_encode($campos->TITULO));?>" href="http://uemasul.edu.br/gestor/file/<?php echo  utf8_decode(utf8_encode($campos->ARQUIVO));?>" class="icon fa-file-pdf-o icon-xxs text-red"> <strong><?php echo  utf8_decode(utf8_encode($campos->TITULO)); ?></strong></a>

                                <?php
                                $sql2 = mysql_query("select * from arquivos where TIPO != 2 and IDARQUIVOPAI = ".$campos->IDARQUIVO);
                                while($arqfilho = mysql_fetch_object($sql2)) {
                                  ?>
                                  <a title="<?php echo  utf8_decode(utf8_encode($arqfilho->TITULO));?>" href="http://uemasul.edu.br/gestor/file/<?php echo  utf8_decode(utf8_encode( $arqfilho->ARQUIVO));?>"
                                    class="icon fa-file-pdf-o icon-xxs text-gray"> <?php echo utf8_decode(utf8_encode($arqfilho->TITULO));?></a>
                                    <?php
                                  }
                                  ?>
                                  <br>
                                  <?php
                                  echo utf8_decode(utf8_encode($campos->RESUMO));
                                  ?>
                                  <br>
                                  <?php
                                  // echo "Data de Início:" . convertdata($campos->DATAINICIO);
                                  // echo "Data de Término:" . convertdata($campos->DATAFIM);
                                  ?></td>
                                  <?php
                                }
                                ?>
                              </tr>
                            </tbody>
                      </table>
                      </div>
                  </div>
                </div>
                <div>
                  <div class="inset-lg-left-10">
                    <div class="table-responsive clearfix">

                      <table id="example2" class="table table-bordered responsive" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th data-priority="1">Publicação</th>
                            <!-- <th class="data" data-priority="2">Início</th>
                            <th class="data" data-priority="2">Término</th> -->

                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          require_once('../conexao.php'); //
                          $sql = mysql_query("select * from arquivos where TIPO = 0 and IDARQUIVOPAI is null and SITUACAO = 3 and DATAFIM < '".date('Y-m-d')."' order by IDARQUIVO DESC");
                          while($campos = mysql_fetch_object($sql)){?>
                            <tr>
                              <td>
                                <a title="<?php echo  utf8_decode(utf8_encode($arqfilho->TITULO));?>" href="http://uemasul.edu.br/gestor/file/<?php echo  utf8_decode(utf8_encode($campos->ARQUIVO));?>" class="icon fa-file-pdf-o icon-xxs text-red"> <strong><?php echo  utf8_decode(utf8_encode($campos->TITULO)); ?></strong></a>

                                <?php
                                $sql2 = mysql_query("select * from arquivos where TIPO = 0 and IDARQUIVOPAI = ".$campos->IDARQUIVO);
                                while($arqfilho = mysql_fetch_object($sql2)) {
                                  ?>
                                  <a title="<?php echo  utf8_decode(utf8_encode($arqfilho->TITULO));?>" href="http://uemasul.edu.br/gestor/file/<?php echo  utf8_decode(utf8_encode( $arqfilho->ARQUIVO));?>"
                                    class="icon fa-file-pdf-o icon-xxs text-gray"> <?php echo utf8_decode(utf8_encode($arqfilho->TITULO));?></a>
                                    <?php
                                  }
                                  ?>
                                  <br>
                                  <?php
                                  echo utf8_decode(utf8_encode($campos->RESUMO));
                                  ?>
                                  <br>
                                  <?php
                                  // echo "Data de Início:" . convertdata($campos->DATAINICIO);
                                  // echo "Data de Término:" . convertdata($campos->DATAFIM);
                                  ?></td>
                                  <?php
                                }
                                ?>
                              </tr>
                              <tr>
                                <td><a href="prt.edt/EDITALN25CCA.pdf" class="text-primary">EDITAL Nº 25/2017- PROGESA/UEMASUL</a></td>
                              </tr>
                              <tr>
                                <td><a href="prt.edt/HomologaDeferidoImperatripdf.pdf" class="text-primary">EDITAL Nº 29/2017- PROGESA/UEMASUL</a></td>
                              </tr>
                              <tr>
                                <td><a href="prt.edt/Resultado final Andia.pdf" class="text-primary">EDITAL Nº 28/2017-PROGESA/UEMASUL</a></td>
                              </tr>
                              <tr>
                                <td><a href="prt.edt/EDITAL DE PRORROGA27 CCENT-1.pdf" class="text-primary">EDITAL DE PRORROGAÇÃO / RETIFICAÇÃO Nº 27, DO EDITAL Nº 17/2017- PROGESA/UEMASUL</a></td>
                              </tr>
                              <tr>
                                <td><a href="prt.edt/HomologaAdministrao.pdf" class="text-primary">RESULTADO DA AVALIAÇÃO DAS INSCRIÇÕES NO EDITAL Nº 26/2017- PROGESA/UEMASUL - PROGESA/UEMASUL</a></td>
                              </tr>
                              <tr>
                                <td><a href="prt.edt/prorrogageografia.pdf" class="text-primary">EDITAL DE PRORROGAÇÃO Nº 23, DO EDITAL Nº 12/2017- PROGESA/UEMASUL</a></td>
                              </tr>
                              <tr>
                                <td><a href="prt.edt/prorrogacaoLIBRAS.pdf" class="text-primary">EDITAL DE PRORROGAÇÃO Nº 20, DO EDITAL Nº 15/2017- PROGESA/UEMASUL </a></td>
                              </tr>
                              <tr>
                                <td><a href="prt.edt/bati2017.pdf" class="text-primary">Programa de Bolsas de Apoio Técnico Institucional – BATI UEMASUL</a></td>
                                </tr>
                                <tr>
                                  <td><a href="prt.edt/RESULTADOCCHSTL.pdf" class="text-primary">RESULTADO PROVA DIDÁTICA CCHSTL</a></td>
                                </tr>
                                <tr>
                                  <td><a href="prt.edt/PORTARIA27.pdf" class="text-primary">PORTARIA Nº 27/2017-DIR. CCHSTL/UEMASUL</a></td>
                                </tr>
                                <tr>
                                  <td><a href="prt.edt/PORTARIA26.pdf" class="text-primary">PORTARIA Nº 26/2017-DIR. CCHSTL/UEMASUL </a></td>
                                </tr>
                                <tr>
                                  <td><a href="prt.edt/PORTARIA25.pdf" class="text-primary">PORTARIA Nº 25/2017-DIR. CCHSTL/UEMASUL </a></td>
                                </tr>
                                <tr>
                                  <td><a href="prt.edt/PORTARIA24.pdf" class="text-primary">PORTARIA Nº 24/2017-DIR. CCHSTL/UEMASUL</a></td>
                                </tr> <tr>
                                  <td><a href="prt.edt/PORTARIA23.pdf" class="text-primary">PORTARIA Nº 23/2017-DIR. CCHSTL/UEMASUL</a></td>
                                </tr> <tr>
                                  <td><a href="prt.edt/PORTARIA22-2017.pdf" class="text-primary">PORTARIA Nº 22/2017-DIR. CCHSTL/UEMASUL</a></td>
                                </tr>
                                <tr>
                                  <td><a href="prt.edt/HomologaGeografia.pdf" class="text-primary">EDITAL DE PRORROGAÇÃO Nº 20, DO EDITAL Nº 15/2017- PROGESA/UEMASUL </a></td>
                                  </tr>
                                <tr>
                                  <td><a href="prt.edt/HomologaGeografia.pdf" class="text-primary">resultado da avaliação das inscrições - EDITAL Nº 22/2017- PROGESA/UEMASUL</a></td>
                                </tr>
                                <tr>
                                  <td><a href="prt.edt/RETIFICAOEDITAL004.pdf" class="text-primary">RETIFICAÇÃO AO EDITAL 004/2017 – PROGESA/CSIS/DIVEXT </a></td>
                                </tr>
                                <tr>
                                  <td><a href="prt.edt/EDITALDISCIPLINASDERIAS.pdf" class="text-primary">EDITAL DISCIPLINAS DE FERIAS Nº 21/2017- PROGESA/UEMASUL</a></td>
                                </tr>
                                <tr>
                                  <td><a href="prt.edt/EDITALCCENT17.pdf" class="text-primary">EDITAL Nº 17/2017- PROGESA/UEMASUL</a></td>
                                </tr>
                                <tr>
                                  <td><a href="prt.edt/deferidosacai.pdf" class="text-primary">resultado da avaliação das inscrições - EDITAL Nº 19/2017- PROGESA/UEMASUL</a></td>
                                </tr>
                                <tr>
                                  <td><a href="prt.edt/EditalPIBICUEMASULAAILANDIA.pdf" class="text-primary">PIBIC EM REDE IMPERATRIZ- AÇAILÂNDIA - EDITAL UEMASU/PROPGI Nº 03/2017</a></td>
                                </tr>
                                <tr>
                                  <td><a href="prt.edt/EDITALADM16.pdf" class="text-primary">EDITAL Nº 16/2017- PROGESA/UEMASUL - PROGESA/UEMASUL</a></td>
                                </tr>
                                <tr>
                                  <td><a href="prt.edt/RESULTADODEISENO-2.pdf" class="text-primary">Resultado de Isenção EDITAL Nº 18/2017 - PROGESA/UEMASUL</a></td>
                                </tr>
                                <tr>
                                  <td><a href="prt.edt/EDITALLIBRAS.pdf" class="text-primary">Edital de Processo Seletivo Simplificado - PROGESA/UEMASUL</a></td>
                                </tr>
                                <tr>
                                  <td><a href="prt.edt/02_EDITALSELETIVOAcAILANDIA.pdf" class="text-primary">Edital de Processo Seletivo Simplificado - PROGESA/UEMASUL</a></td>
                                </tr>
                                <tr>
                                  <td><a href="prt.edt/NOTATECNICA.pdf" class="text-primary">NOTA TÉCNICA Nº 02 DADT/PROGESA-UEMASUL</a></td>
                                </tr>
                                <tr>
                                  <td><a href="prt.edt/CCHSL_EDITAL.pdf" class="text-primary">Processo Seletivo Simplificado EDITAL Nº 12/2017- PROGESA/UEMASUL</a></td>
                                </tr>
                                <tr>
                                  <td><a href="prt.edt/EDITALUEMASULSEG.pdf" class="text-primary">EDITAL DE CONVOÇÃO Nº 14/2017- PROGESA/UEMASUL/UEMA</a></td>
                                </tr>
                                <tr>
                                  <td><a href="prt.edt/convocacaoestagio.pdf" class="text-primary">CONVOCAÇÃO DE ESTÁGIÁRIOS CLASSIFICADOS NO PROCESSO SELETIVO DE ESTÁGIO</a></td>
                                </tr>
                                <tr>
                                  <td><a href="prt.edt/cONVOCACAO_SeletivoVet.pdf" class="text-primary">Convocação de aprovados - CCA/PROGESA</a></td>
                                </tr>
                                <tr>
                                  <td><a href="prt.edt/RESULTADOPROCESSOSDEADMISAO.pdf" class="text-primary">RESULTADO DA SOLICITAÇÃO DE READMISSÃO DE CURSO</a></td>
                                </tr>
                                <tr>
                                  <td><a href="prt.edt/02_EDITALSELETIVOAcAILANDIA.pdf" class="text-primary">Processo Seletivo Simplificado  - EDITAL Nº 08/2017- PROGESA/UEMASUL</a></td>
                                </tr>
                                <tr>
                                  <td><a href="prt.edt/EDITALBEXT-UEMASUL2017-18.pdf" class="text-primary">Edital/Programa Institucional de Bolsas de Extensão - PIBEXT</a></td>
                                </tr>

                                <tr>
                                  <td><a href="prt.edt/ANEXOS(PIBEXT20172018).pdf" class="text-primary">ANEXO I - PIBEXT/UEMASUL</a></td>
                                </tr>

                                <tr>
                                  <td><a href="prt.edt/ANEXOS (PIBEXT2017-2018).doc" class="text-primary">ANEXO I(DOC) - PIBEXT/UEMASUL</a></td>
                                </tr>

                                <tr>
                                  <td><a href="prt.edt/EDITALDERECURSOS.pdf" class="text-primary">DIVULGAÇÃO DO RESULTADO DE RECURSOS REFERENTES AO PROCESSO SELETIVO DE ESTÁGIO – DEM/CPP/PROGESA/UEMASUL</a></td>
                                  </tr>
                                  <tr>
                                    <td><a href="prt.edt/EDITALDERETIFICAO.pdf" class="text-primary">EDITAL DE RETIFICAÇÃO DE DATAS PARA ASSINATURA DE TERMO DE COMPROMISSO DE ESTÁGIO – DEM/CPP/PROGESA/UEMASUL</a></td>
                                    </tr>
                                    <tr>
                                      <td><a href="prt.edt/resultado final seletivo CCA.pdf" class="text-primary">RESULTADO FINAL SELETIVO CCA - CCA UEMASUL</a></td>
                                    </tr>
                                    <tr>
                                      <td><a href="prt.edt/portaria.pdf" class="text-primary">PORTARIA Nº 002/2017 - PROGESA/UEMASUL</a></td>
                                    </tr>
                                    <tr>
                                      <td><a href="prt.edt/resultadoestagioprogesa.pdf" class="text-primary">RESULTADO FINAL SELETIVO ESTÁGIO_ publicação - DEM/CPP/PROGESA/UEMASUL</a></td>
                                    </tr>
                                    <tr>
                                      <td><a href="prt.edt/RESULTADOPROVACCA.pdf" class="text-primary">resultados da prova didática do Processo Seletivo Simplificado - CCA UEMASUL</a></td>
                                    </tr>

                                    <tr>
                                      <td><a href="prt.edt/comissaoeleitoral.pdf" class="text-primary">COMISSÃO ELEITORAL/UEMASUL - PROGESA UEMASUL</a></td>
                                    </tr>
                                    <tr>
                                      <td><a href="prt.edt/estagioentrevistas.pdf" class="text-primary">DIVULGAÇÃO DO LOCAL E HORÁRIO DAS ENTREVISTAS - DEM/CPP/PROGESA/UEMASUL</a></td>
                                    </tr>
                                    <tr>
                                      <td><a href="prt.edt/Candidatos Deferidos_Med.Vet_CCA.pdf" class="text-primary">Lista de Candidatos Deferidos – CCA/UEMASUL</a></td>
                                    </tr>
                                    <tr>
                                      <td><a href="prt.edt/ASCOM.pdf" class="text-primary">HOMOLOGAÇÃO DAS INSCRIÇÕES DO EDITAL Nº 01/2017 - DEM/CPP/PROGESA/UEMASUL</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/uEMASUL_aditivo-1.pdf" class="text-primary">ADITIVO DO EDITAL Nº 01/2017 - DEM/CPP/PROGESA/UEMASUL</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/EDITALDEPRORROGAN.pdf" class="text-primary">EDITAL DE PRORROGAÇÃO Nº 07 - PROGESA/UEMASUL</a></td>
                                      </tr>

                                      <tr>
                                        <td><a href="prt.edt/editalestagiouemasul.pdf" class="text-primary">PROCESSO SELETIVO DE ESTÁGIO – NÃO OBRIGATÓRIO</a></td>
                                      </tr>

                                      <tr>
                                        <td><a href="prt.edt/RESULTADOFINALESTUDANTESCURSINHOPOPULAR2017.pdf" class="text-primary">RESULTADO FINAL DOS (AS) ESTUDANTES SELECIONADOS (AS) PARA O CURSINHO POPULAR/UEMASUL - Edital 001/2017</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/RESULTADOFINALMONITORESCURSINHOPOPULAR.pdf" class="text-primary">RESULTADO FINAL DO PROCESSO SELETIVO DE BOLSISTAS PARA O CURSINHO POPULAR/UEMASUL - Edital 001/2017</a></td>
                                      </tr>

                                      <tr>
                                        <td><a href="prt.edt/EditalUEMASULPIBIT-2017.pdf" class="text-primary">EDITAL UEMASUL PIBIT - UEMASUL/PROPGI Nº 02/2017</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/PlanodeTrabalhodoBolsistaPIBIT2017.docx" class="text-primary">INSTRUÇÕES PARA ELABORAÇÃO DO PLANO DE TRABALHO DO BOLSISTA</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/FormulriparaPontuaodoCurrculoLattesberh.doc" class="text-primary">PONTUAÇÃO DO CURRÍCULO LATTES (2013-2017)</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/FormulariodeInscricao-PIBIT2017.doc" class="text-primary">FICHA DE INSCRIÇÃO PROJETO/ORIENTADOR - PIBIT/UEMASUL - COTA 2017/2018</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/FormulariodeIndicacaodeBolsista-PIBIT.docx" class="text-primary">FORMULÁRIO DE INDICAÇÃO DE BOLSISTA - PIBIT/UEMASUL</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/EDITALCONVOCACAOPROP.pdf" class="text-primary">EDITAL DE CONVOCAÇÃO  - EDITAL Nº01/2017 - CCHSTL/UEMASUL/CAMPUS ACAILANDIA</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/Requerimento_isenCAo-1.pdf" class="text-primary">FORMULÁRIO DE REQUERIMENTO DE ISENÇÃO DE TAXA DE INSCRIÇÃO DO EDITAL Nº 006/2017 - PROGESA/UEMASUL</a></td>
                                      </tr>

                                      <tr>
                                        <td><a href="prt.edt/EDITAL06_CCA _UV-1.pdf" class="text-primary">EDITAL DE SELETIVO SIMPLIFICADO Nº 006/2017- PROGESA/UEMASUL</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/convocacaopedagogia.pdf" class="text-primary">CONVOCAÇÃO DOS APROVADOS NO PROCESSO SELETIVO SIMPLIFICADO -  CCHSL-UEMASUL</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/EDITALRESULTADOAcAILANDIA.pdf" class="text-primary">RESULTADO DO PROCESSO SELETIVO SIMPLIFICADO -  PROGESA-UEMASUL</a></td>
                                      </tr>


                                      <tr>
                                        <td><a href="prt.edt/editalacailandiaimpprogesa.pdf" class="text-primary">READMISSÃO DE CURSO -  DADT/PROGESA-UEMASUL</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/RETIFICAcaOEDITAL001.pdf" class="text-primary">PRORROGAÇÃO E RETIFICAÇÃO DO PROCESSO SELETIVO PARA MONITORES DO CURSINHO POPULAR DA UEMASUL  </a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/EDITALCURSINHOPOPULARINGRESSANTES2017.pdf" class="text-primary">CURSINHO POPULAR DA UNIVERSIDADE ESTADUAL DA REGIÃO TOCANTINA DO MARANHÃO - UEMASUL</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/RESULTADOSSELETIVOUEMASUL.pdf" class="text-primary">RESULTADO DE SELETIVO - PRÓ-REITORIA DE GESTÃO E SUSTENTABILIDADE ACADÊMICA </a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/EDITALCOMPARECERCURSINHO.pdf" class="text-primary">CURSINHO POPULAR DA UNIVERSIDADE ESTADUAL DA REGIÃO TOCANTINA DO MARANHÃO </a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/FormulariodeIndicacao.docx" class="text-primary">FORMULÁRIO DE INDICAÇÃO DE BOLSISTA</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/formulariodeinscricao.doc" class="text-primary">FICHA DE INSCRIÇÃO PROJETO/ORIENTADOR</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/FormularioPIBICUEMASUL.docx" class="text-primary">FORMULÁRIO DE INDICAÇÃO DE BOLSISTA - PIBIC/UEMASUL </a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/FormularioPIBICUEMASUL2.docx" class="text-primary">FORMULÁRIO DE INDICAÇÃO DE BOLSISTA - PIBIC/FAPEMA </a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/PIBIC-UEMA-FAPEMA.docx" class="text-primary">INSTRUÇÕES PARA ELABORAÇÃO DO PLANO DE TRABALHO DO BOLSISTA </a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/editalconvoca.pdf" class="text-primary">EDITAL DE CONVOCAÇÃO - PROGESA/UEMASUL/UEMA. </a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/fichaavaliacaouemasul.pdf" class="text-primary">FICHA DE AVALIAÇÃO UEMASUL</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/fichaavaliacaofapema.pdf" class="text-primary">FICHA DE AVALIAÇÃO FAPEMA</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/formpontuacao.pdf" class="text-primary">Lista de Candidatos Deferidos no Processo seletivo simplificado Edital Nº002/2017 - CCHSL/UEMASUL</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/deferidos01.pdf" class="text-primary">Lista de Candidatos Deferidos no Processo seletivo simplificado Edital Nº002/2017 - CCHSL/UEMASUL</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/deferidos_geo.pdf" class="text-primary">Lista de Candidatos Deferidos no Processo seletivo simplificado Edital Nº002/2017 - CCHSL/UEMASUL</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/formpontuacao.pdf" class="text-primary">PONTUAÇÃO DO CURRÍCULO LATTES  | PIBIC – FAPEMA/UEMASUL EDITAL UEMASUL/PROPGI</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/fichainscricao.pdf" class="text-primary">FICHA DE INSCRIÇÃO PROJETO/ORIENTADOR | PIBIC – FAPEMA/UEMASUL EDITAL UEMASUL/PROPGI</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/edital_PIBIC2017.pdf" class="text-primary">PIBIC – FAPEMA/UEMASUL EDITAL UEMASUL/PROPGI</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/convocacao02.pdf" class="text-primary">EDITAL DE CONVOCAÇÃO N.º 02/2017 - PROGESA/UEMASUL/UEMA.</a></td>
                                      </tr>
                                      <tr>
                                        <td ><a href="prt.edt/edt_prorrogacao01.pdf" class="text-primary">EDITAL DE PRORROGAÇÃO Nº 01, DO EDITAL Nº 003/2017</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/editalratificado01.pdf" class="text-primary">EDITAL DE RETIFICAÇÃO Nº 01, DO EDITAL Nº 003/2017</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/EDITAL_N05.pdf" class="text-primary">Seleção de Professor Substituto ao Centro de Ciências Humanas Sociais, Tecnológica e Letras – CCHSTL campus de Açailândia</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/04CECENT_seletivo_FINAL.pdf" class="text-primary">seleção de Professor Substituto ao Centro de Ciências Exatas, Naturais e Tecnológicas - CECENT</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/03CCA_seletivo_FINAL.pdf" class="text-primary">seleção de Professor Substituto ao Centro de Ciências Agrárias - CCA</a></td>
                                      </tr>
                                      <tr>
                                        <td><a href="prt.edt/02CCSH_seletivo_FINAL.pdf" class="text-primary">seleção de Professor Substituto ao Centro de Ciências Humanas Sociais e Letras- CCHSL</a></td>

                                      </tr>

                            </tbody>
                      </table>
                      </div>
                  </div>
                </div>
                          <div>
                            <div class="inset-lg-left-10">
                              <div class="table-responsive clearfix">

                                <table id="example3" class="table table-bordered responsive" cellspacing="0" width="100%">
                                  <thead>
                                    <tr>
                                      <th data-priority="1">Publicação</th>
                                      <!-- <th class="data" data-priority="2">Início</th>
                                      <th class="data" data-priority="2">Término</th> -->

                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    require_once('../conexao.php'); //
                                    $sql = mysql_query("select * from arquivos where TIPO = 1 and SITUACAO = 3 order by IDARQUIVO DESC");
                                    while($campos = mysql_fetch_object($sql)){?>
                                      <tr>
                                        <td>
                                          <a title="<?php echo  utf8_decode(utf8_encode($arqfilho->TITULO));?>" href="http://uemasul.edu.br/gestor/file/<?php echo  utf8_decode(utf8_encode($campos->ARQUIVO));?>" class="icon fa-file-pdf-o icon-xxs text-red"> <strong><?php echo  utf8_decode(utf8_encode($campos->TITULO)); ?></strong></a>

                                          <?php
                                          $sql2 = mysql_query("select * from arquivos where TIPO != 2 and IDARQUIVOPAI = ".$campos->IDARQUIVO);
                                          while($arqfilho = mysql_fetch_object($sql2)) {
                                            ?>
                                            <a title="<?php echo  utf8_decode(utf8_encode($arqfilho->TITULO));?>" href="http://uemasul.edu.br/gestor/file/<?php echo  utf8_decode(utf8_encode( $arqfilho->ARQUIVO));?>"
                                              class="icon fa-file-pdf-o icon-xxs text-gray"> <?php echo utf8_decode(utf8_encode($arqfilho->TITULO));?></a>
                                              <?php
                                            }
                                            ?>
                                            <br>
                                            <?php
                                            echo utf8_decode(utf8_encode($campos->RESUMO));
                                            ?>
                                            <br>
                                            <?php
                                            // echo "Data de Início:" . convertdata($campos->DATAINICIO);
                                            // echo "Data de Término:" . convertdata($campos->DATAFIM);
                                            ?></td>
                                            <?php
                                          }
                                          ?>
                                        </tr>
                                      </tbody>
                                </table>
                                </div>
                            </div>
                          </div>
                          <div>
                            <div class="inset-lg-left-10">
                              <div class="table-responsive clearfix">

                                <table id="example4" class="table table-bordered responsive" cellspacing="0" width="100%">
                                  <thead>
                                    <tr>
                                      <th data-priority="1">Publicação</th>
                                      <!-- <th class="data" data-priority="2">Início</th>
                                      <th class="data" data-priority="2">Término</th> -->

                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    require_once('../conexao.php'); //
                                    $sql = mysql_query("select * from arquivos where TIPO = 11 and IDARQUIVOPAI is null and SITUACAO = 3 order by IDARQUIVO DESC");
                                    while($campos = mysql_fetch_object($sql)){?>
                                      <tr>
                                        <td>
                                          <a title="<?php echo  utf8_decode(utf8_encode($arqfilho->TITULO));?>" href="http://uemasul.edu.br/gestor/file/<?php echo  utf8_decode(utf8_encode($campos->ARQUIVO));?>" class="icon fa-file-pdf-o icon-xxs text-red"> <strong><?php echo  utf8_decode(utf8_encode($campos->TITULO)); ?></strong></a>

                                          <?php
                                          $sql2 = mysql_query("select * from arquivos where TIPO = 11 and IDARQUIVOPAI = ".$campos->IDARQUIVO);
                                          while($arqfilho = mysql_fetch_object($sql2)) {
                                            ?>
                                            <a title="<?php echo  utf8_decode(utf8_encode($arqfilho->TITULO));?>" href="http://uemasul.edu.br/gestor/file/<?php echo  utf8_decode(utf8_encode( $arqfilho->ARQUIVO));?>"
                                              class="icon fa-file-pdf-o icon-xxs text-gray"> <?php echo utf8_decode(utf8_encode($arqfilho->TITULO));?></a>
                                              <?php
                                            }
                                            ?>
                                            <br>
                                            <?php
                                            echo utf8_decode(utf8_encode($campos->RESUMO));
                                            ?>
                                            <br>
                                            <?php
                                            // echo "Data de Início:" . convertdata($campos->DATAINICIO);
                                            // echo "Data de Término:" . convertdata($campos->DATAFIM);
                                            ?></td>
                                            <?php
                                          }
                                          ?>
                                        </tr>
                                      </tbody>
                                </table>
                                </div>
                            </div>
                          </div>





                              <div>
                                <div class="inset-lg-left-60"><h2 class="text-bold veil reveal-lg-block">Modelos de Documentos</h2>

                                  <div class="text-subline"></div>
                                  <div class="offset-top-30">

                                    <table data-responsive="true"  width="100%" class="table table-custom ">
                                      <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Ano</th>
                                      </tr>
                                      <tr>
                                        <td width="20%" class="text-center p"><a href="prt.edt/Manual de uso e aplicação Brasão UEMASUL.pdf" class="icon fa-file-o icon-xxs text-gray"></a></td>
                                        <td width="60%"><a href="prt.edt/Manual de uso e aplicação Brasão UEMASUL.pdf" class="text-primary">Manual de uso e aplicação Brasão UEMASUL</a></td>
                                        <td width="20%"class="text-bold text-black">2017   </td>
                                      </tr>

                                    </table>

                                  </div>
                                </div>
                              </div>


                              <div>
                                <div class="inset-lg-left-60"><h2 class="text-bold veil reveal-lg-block">Estatuto</h2>

                                  <div class="text-subline"></div>
                                  <div class="offset-top-30">
                                    <p style="text-align: justify">A  Universidade Estadual da Região Tocantina do Maranhão – UEMASUL foi criada pela  Lei Estadual nº 10.525 de 03 de novembro de 2016. O início de seu funcionamento  ocorreu em 1º de janeiro de 2017.<br /><br>
                                      Durante o  período de implantação da UEMASUL, no qual será também elaborado e aprovado o Estatuto  e demais normas complementares, esta será regida pelo que for vigente na UEMA no  dia 31 de dezembro de 2016 conforme registra a Lei 10.525/2016. Dessa forma, o  Estatuto e Regimentos da UEMA, definem de modo provisório os procedimentos de  organização e gestão acadêmico-administrativo da UEMASUL. </p>
                                      <br><br><center><a href="prt.edt/doucriacaouemasul.pdf"  class="btn btn-outline-warning" target="_blank">Acesse aqui a Lei 10.525/2016</a>
                                        <a href="prt.edt/estatuto_uema.pdf" class="btn btn-outline-danger" target="_blank"> Acesse aqui o Estatuto</a></center><br><br>
                                      </div>
                                    </div>
                                  </div>

                                  <div>
                                    <div class="inset-lg-left-60"><h2 class="text-bold veil reveal-lg-block">Regimento</h2>

                                      <div class="text-subline"></div>
                                      <div class="offset-top-30">
                                        <p>A  Universidade Estadual da Região Tocantina do Maranhão – UEMASUL foi criada pela  Lei Estadual nº 10.525 de 03 de novembro de 2016. O início de seu funcionamento  ocorreu em 1º de janeiro de 2017.<br /><br>
                                          Durante o  período de implantação da UEMASUL, no qual será também elaborado e aprovado o  Estatuto e demais normas complementares, esta será regida pelo que for vigente  na UEMA no dia 31 de dezembro de 2016 conforme registra a Lei 10.525/2016.  Dessa forma, o Estatuto e Regimentos da UEMA, definem de modo provisório os  procedimentos de organização e gestão acadêmico-administrativo da UEMASUL. </p>
                                          <br><a href="prt.edt/doucriacaouemasul.pdf" target="_blank"> Acesse aqui a Lei 10.525/2016</a><br><br>
                                          <table data-responsive="true"  width="100%" class="table table-custom table-primary table-fixed">
                                            <tr>
                                              <th WIDTH="10%">#</th>
                                              <th WIDTH="75%">Nome</th>
                                              <th width="15%">Download</th>
                                            </tr>
                                            <tr>
                                              <td>#</td>
                                              <td>Regimento dos Centros de Ciências e de Estudos Superiores</td>
                                              <td><a href="prt.edt/regimento_centros.pdf" class="btn btn-outline-danger" target="_blank"> baixar</a></td>
                                            </tr>
                                            <tr>
                                              <td>#</td>
                                              <td>Regimento dos Órgãos Deliberativos e Normativos</td>
                                              <td><a href="prt.edt/regimento_orgaos.pdf" class="btn btn-outline-danger" target="_blank"> baixar</a></td>
                                            </tr>
                                            <tr>
                                              <td>#</td>
                                              <td>Regimento das Pró-Reitorias</td>
                                              <td><a href="prt.edt/regimento_proreitorias.pdf" class="btn btn-outline-danger" target="_blank">baixar</a></td>
                                            </tr>
                                            <tr>
                                              <td>#</td>
                                              <td>Regimento da Reitoria</td>
                                              <td><a href="prt.edt/REGIMENTO%20DA%20REITORIA-UEMA.pdf" class="btn btn-outline-danger" target="_blank">baixar</a></td>
                                            </tr>
                                          </table>

                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </section>
                          </main>
                          <!-- Page Footer--><!-- Corporate footer-->

                        </div>
                        <!-- Global Mailform Output-->
                        <div id="form-output-global" class="snackbars"></div>
                        <!-- PhotoSwipe Gallery-->

                      </body>
                      <?php
                      require_once('../rodape.php');
                      ?>
                      <script src="js/core.min.js"></script>
                      <script src="js/script.js"></script>
                      <script src="js/jquery.dataTables.min.js"></script>
                      <script src="js/dataTables.responsive.min.js"></script>
                      <script src="js/dataTables.bootstrap4.min.js"></script>
                      <script src="js/readmore.min.js"></script>

                      <script>
                      $(document).ready(function() {
                        // $('#example').DataTable();
                        var table = $('#example').DataTable({
                          "dom": "<'row'<'col-sm-12 col-md-12'f> >" +
                          "<'row'<'col-sm-12'tr>>" +
                          "<'row'<'col-sm-3 col-md-3'i><'col-sm-9 col-md-9'p>>",
                          lengthChange: true,
                          "pageLength": 3,
                          responsive: true,
                           "order": false,
                         columnDefs:[
{ orderSequence:["desc"], targets:[0]} ,
],
                          "language": {
                            "info": "Listando _END_ de _MAX_ registros",
                            "emptytable": "",
                            "infoEmpty":      "",
                            "lengthMenu":     "Mostrar _MENU_ Registros",
                            "search":         "",
                            "searchPlaceholder": "Pesquisar Edital...",
                            "zeroRecords":    "Nenhum registro encontrado.",
                            "processing":     "Processando...",
                            "loadingRecords": "Carregado...",
                            "infoFiltered":   "(filtrado de _MAX_ registros)",
                            "paginate": {
                              "first":      "Primeiro",
                              "last":       "Último",
                              "next":       ">",
                              "previous":   "<"
                            }
                          },
                          buttons: {

                          }


                        });
                        var table = $('#example2').DataTable({
                          "dom": "<'row'<'col-sm-12 col-md-12'f> >" +
                          "<'row'<'col-sm-12'tr>>" +
                          "<'row'<'col-sm-3 col-md-3'i><'col-sm-9 col-md-9'p>>",
                        lengthChange: true,
                          "pageLength": 3,
                          responsive: true,
                         "order": false,
                         columnDefs:[
{ orderSequence:["desc"], targets:[0]} ,
],
                          "language": {
                            "info": "Listando _END_ de _MAX_ registros",
                            "emptytable": "",
                            "infoEmpty":      "",
                            "lengthMenu":     "Mostrar _MENU_ Registros",
                            "search":         "",
                            "searchPlaceholder": "Pesquisar Edital...",
                            "zeroRecords":    "Nenhum registro encontrado.",
                            "processing":     "Processando...",
                            "loadingRecords": "Carregado...",
                            "infoFiltered":   "(filtrado de _MAX_ registros)",
                            "paginate": {
                              "first":      "Primeiro",
                              "last":       "Último",
                              "next":       ">",
                              "previous":   "<"
                            }
                          },
                          buttons: {

                          }


                        });
                        var table = $('#example3').DataTable({
                          "dom": "<'row'<'col-sm-12 col-md-12'f> >" +
                          "<'row'<'col-sm-12'tr>>" +
                          "<'row'<'col-sm-3 col-md-3'i><'col-sm-9 col-md-9'p>>",
                      lengthChange: true,
                          "pageLength": 3,
                          responsive: true,
                                  "order": false,
                         columnDefs:[
{ orderSequence:["desc"], targets:[0]} ,
],
                          "language": {
                            "info": "Listando _END_ de _MAX_ registros",
                            "emptytable": "",
                            "infoEmpty":      "",
                            "lengthMenu":     "Mostrar _MENU_ Registros",
                            "search":         "",
                            "searchPlaceholder": "Pesquisar Portaria...",
                            "zeroRecords":    "Nenhum registro encontrado.",
                            "processing":     "Processando...",
                            "loadingRecords": "Carregado...",
                            "infoFiltered":   "(filtrado de _MAX_ registros)",
                            "paginate": {
                              "first":      "Primeiro",
                              "last":       "Último",
                              "next":       ">",
                              "previous":   "<"
                            }
                          },
                          buttons: {

                          }


                        });
                        var table = $('#example4').DataTable({
                          "dom": "<'row'<'col-sm-12 col-md-12'f> >" +
                          "<'row'<'col-sm-12'tr>>" +
                          "<'row'<'col-sm-3 col-md-3'i><'col-sm-9 col-md-9'p>>",
                      lengthChange: true,
                          "pageLength": 3,
                          responsive: true,
                          columnDefs: [
                            { responsivePriority: 1 },
                            { responsivePriority: 2 },
                            { responsivePriority: 2 },
                          ],
                          "language": {
                            "info": "Listando _END_ de _MAX_ registros",
                            "emptytable": "",
                            "infoEmpty":      "",
                            "lengthMenu":     "Mostrar _MENU_ Registros",
                            "search":         "",
                            "searchPlaceholder": "Pesquisar Resolução...",
                            "zeroRecords":    "Nenhum registro encontrado.",
                            "processing":     "Processando...",
                            "loadingRecords": "Carregado...",
                            "infoFiltered":   "(filtrado de _MAX_ registros)",
                            "paginate": {
                              "first":      "Primeiro",
                              "last":       "Último",
                              "next":       ">",
                              "previous":   "<"
                            }
                          },
                          buttons: {

                          }


                        });
                      } );
                    </script>
                    </html>
