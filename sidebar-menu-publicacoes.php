<div class="barralateral270">

    <button class="btn visible-xs-block btn-raised btn-default btn-block" type="button" data-toggle="collapse" data-target="#mobilkat" aria-expanded="false" aria-controls="mobilkat">
        Menu Publicações
    </button>

    <div class="collapse navbar-collapse" id="mobilkat" style="padding-left: 0px;">
        <ul class="nav navbar-nav navbar-dikey">
            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="cab-menu-lateral menu-item menu-item-type-post_type menu-item-object-page nav-item">
                <a title="Tipos de documento" class="nav-link">Tipos de documentos</a>
            </li>

            <li class='menu-item menu-item-type-taxonomy menu-item-object-category nav-item active'>
                <a href='https://www.uemasul.edu.br/portal/publicacoes/?td=1' class='nav-link'>EDITAIS</a>
            </li>

            <li class='menu-item menu-item-type-taxonomy menu-item-object-category nav-item active'>
                <a href='https://www.uemasul.edu.br/portal/publicacoes/?td=2' class='nav-link'>PORTARIAS</a>
            </li>

            <li class='menu-item menu-item-type-taxonomy menu-item-object-category nav-item active'>
                <a href='https://www.uemasul.edu.br/portal/publicacoes/?td=3' class='nav-link'>RESOLUÇÕES</a>
            </li>

            <li class='menu-item menu-item-type-taxonomy menu-item-object-category nav-item active'>
                <a href='https://www.uemasul.edu.br/portal/publicacoes/?td=4' class='nav-link'>SELETIVOS</a>
            </li>

            <li class='menu-item menu-item-type-taxonomy menu-item-object-category nav-item active'>
                <a href='https://www.uemasul.edu.br/portal/publicacoes/?td=5' class='nav-link'>CONCURSOS</a>
            </li>

            <li class='menu-item menu-item-type-taxonomy menu-item-object-category nav-item active'>
                <a href='https://www.uemasul.edu.br/portal/licitacoes' class='nav-link'>LICITAÇÕES</a>
            </li>

            <?php 
                /*
                $tipos = \SEATI\Publicacoes\GetData::getTipoDocumento();

                foreach ($tipos as $tipo) {
                    echo "<li class='menu-item menu-item-type-taxonomy menu-item-object-category nav-item active'>
                            <a title='{$tipo->nome}' href='?td={$tipo->id}' class='nav-link'>{$tipo->nome}</a>
                        </li>";
                }
                */ 
            ?>

        </ul>
    </div>
</div>