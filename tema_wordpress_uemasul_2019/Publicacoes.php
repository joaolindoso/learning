<?php
namespace SEATI\Publicacoes;

class GetData
{

    static public function getTipoDocumento ($id = null) {

        global $wpdb;
        global $wp_publicacoes_db_version;
        global $publicacoes_table_name;
        global $publicacoes_table_name_arquivos;
        global $publicacoes_table_name_publicados;
        global $publicacoes_table_name_setor;
        global $publicacoes_table_name_tipodocumento;
        
        $query = "SELECT 
        id,
        nome,
        _status
        FROM $publicacoes_table_name_tipodocumento ";

        if ($id != null) {
            $query .= " WHERE id = {$id} ";
        }

        $query .= " ORDER BY nome ASC";

        $myrows = $wpdb->get_results( urldecode($query) );

        return $myrows;

    }

    /**
     * RERTORNA TODAS AS PUBLICAÇÕES QUE POSSUEM ARQUIVOS PUBLICADOS.
     */
    static public function getUltimasPublicacoes ( $limit = 10, $tipoDocumento = null ) {

        global $wpdb;
        global $wp_publicacoes_db_version;
        global $publicacoes_table_name;
        global $publicacoes_table_name_arquivos;
        global $publicacoes_table_name_publicados;
        global $publicacoes_table_name_setor;
        global $publicacoes_table_name_tipodocumento;
        
        $query = "SELECT 
        p.id,
        titulo,
        resumo,
        DATE_FORMAT(data_inicio, '%d/%m/%Y') as dataInicio,
        DATE_FORMAT(data_termino, '%d/%m/%Y') as dataTermino,
        DATE_FORMAT(p._datahora, '%d/%m/%Y %H:%i:%s') as _datahora,
        p.usuario_id,
        tipo_documento_id,
        td.nome as tipo_documento,
        setor_id,
        s.nome as setor,
        p._status 
        FROM $publicacoes_table_name p 
            JOIN $publicacoes_table_name_tipodocumento td ON p.tipo_documento_id = td.id 
            JOIN $publicacoes_table_name_setor s ON p.setor_id = s.id
            JOIN $publicacoes_table_name_arquivos wpa ON p.id = wpa.publicacao_id
            JOIN $publicacoes_table_name_publicados wpp ON wpa.id = wpp.arquivos_id
        WHERE p._status = 1 AND NOT wpp.id IS NULL";

        if ($tipoDocumento != null) {
            $query .= " AND td.id = {$tipoDocumento} ";
        }

        $query .= " GROUP BY p.id ORDER BY wpp._datahora DESC LIMIT {$limit}";

        $myrows = $wpdb->get_results( urldecode($query) );

        return $myrows;

    }

    /**
     * RERTORNA OS ARQUIVOS APROVADOS DE UMA PUBLICAÇÃO.
     */
    static public function getArquivosPublicados ( $publicacaoId ) {

        global $wpdb;
        global $wp_publicacoes_db_version;
        global $publicacoes_table_name;
        global $publicacoes_table_name_arquivos;
        global $publicacoes_table_name_publicados;
        global $publicacoes_table_name_setor;
        global $publicacoes_table_name_tipodocumento;
        
        $query = "SELECT 
                        wpa.id as id, 
                        wpa.publicacao_id as publicacao_id, 
                        wpa.nome_arquivo as nome_arquivo, 
                        wpa.nome_fisico as nome_fisico, 
                        wpa.usuario_id as usuario_id, 
                        wpa.descricao as descricao, 
                        wpa.extensao as extensao, 
                        wpa.tamanho as tamanho, 
                        DATE_FORMAT(wpa._datahora, '%d/%m/%Y %H:%i') as _datahora, 
                        
                        wpp.id as publicado_id, 
                        wpp.nome_fisico as arquivo_publicado,  
                        wpp.rotulo_arquivo as rotulo_arquivo, 
                        DATE_FORMAT(wpp._datahora, '%d/%m/%Y %H:%i') as data_publicacao
                    FROM $publicacoes_table_name_arquivos wpa 
                        JOIN $publicacoes_table_name_publicados wpp ON wpp.arquivos_id = wpa.id 
                        WHERE wpa._status = 1 AND wpa.publicacao_id = {$publicacaoId} 
                        ORDER BY wpa._datahora DESC";

        $myrows = $wpdb->get_results( urldecode($query) );

        return $myrows;

    }

    static public function getPublicacoesByTipoDocumento ( $tipo = null, $registroInicial = null, $registroFinal = null ) {

        global $wpdb;
        global $wp_publicacoes_db_version;
        global $publicacoes_table_name;
        global $publicacoes_table_name_arquivos;
        global $publicacoes_table_name_publicados;
        global $publicacoes_table_name_setor;
        global $publicacoes_table_name_tipodocumento;
        
        $query = "SELECT 
        p.id,
        titulo,
        resumo,
        DATE_FORMAT(data_inicio, '%d/%m/%Y') as dataInicio,
        DATE_FORMAT(data_termino, '%d/%m/%Y') as dataTermino,
        DATE_FORMAT(p._datahora, '%d/%m/%Y %H:%i:%s') as _datahora,
        p.usuario_id,
        p.tipo_documento_id,
        td.nome as tipo_documento,
        p.setor_id,
        s.nome as setor,
        p._status,
        (SELECT _datahora FROM $publicacoes_table_name_arquivos wpa JOIN $publicacoes_table_name_publicados wpp ON wpa.id = wpp.arquivos_id WHERE wpa.publicacao_id = p.id) as ultima_publicacao
        FROM $publicacoes_table_name p 
            JOIN $publicacoes_table_name_tipodocumento td ON p.tipo_documento_id = td.id 
            JOIN $publicacoes_table_name_setor s ON p.setor_id = s.id
        WHERE p._status = 1 ";

        if ($tipo != null) {
            $query .= " AND td.id = {$tipo} ";
        }

        $query .= " ORDER BY ultima_publicacao DESC";

        if (($registroInicial != null) && ($registroFinal != null)) {
            $query .= " LIMIT {$registroInicial}, {$registroFinal}";
        }

        $myrows = $wpdb->get_results( urldecode($query) );

        return $myrows;

    }

    /**
     * RERTORNA TODAS AS PUBLICAÇÕES QUE POSSUEM ARQUIVOS PUBLICADOS.
     */
    static public function getPublicacao ( $id ) {

        global $wpdb;
        global $wp_publicacoes_db_version;
        global $publicacoes_table_name;
        global $publicacoes_table_name_arquivos;
        global $publicacoes_table_name_publicados;
        global $publicacoes_table_name_setor;
        global $publicacoes_table_name_tipodocumento;
        
        $query = "SELECT DISTINCT
        p.id,
        titulo,
        resumo,
        DATE_FORMAT(data_inicio, '%d/%m/%Y') as dataInicio,
        DATE_FORMAT(data_termino, '%d/%m/%Y') as dataTermino,
        DATE_FORMAT(p._datahora, '%d/%m/%Y %H:%i:%s') as _datahora,
        p.usuario_id,
        tipo_documento_id,
        td.nome as tipo_documento,
        setor_id,
        s.nome as setor,
        p._status 
        FROM $publicacoes_table_name p 
            JOIN $publicacoes_table_name_tipodocumento td ON p.tipo_documento_id = td.id 
            JOIN $publicacoes_table_name_setor s ON p.setor_id = s.id
            JOIN $publicacoes_table_name_arquivos wpa ON p.id = wpa.publicacao_id
            JOIN $publicacoes_table_name_publicados wpp ON wpa.id = wpp.arquivos_id
        WHERE p._status = 1 AND NOT wpp.id IS NULL AND p.id = {$id}";

        $myrows = $wpdb->get_results( urldecode($query) );

        //print_r($myrows); die();

        return $myrows[0];

    }
}
