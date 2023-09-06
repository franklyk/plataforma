<?php
/*
    ***********************************************
    MESSAGE.PHP - PARAMETRIZAÇÃO DE ROTINAS DE MENSAGENS DE NOSSA APLICAÇÃO.
    ***********************************************
    Copyright (c) 2022, Jeferson Souza MESTRES DO PHP
*/

namespace Models;

//Colocar sempre antes do model, logo abaixo da tag body
//Exibe as mensagens de erro, alerta, sucesso e informações sem o uso do AJAX e outras mensagens personalizadas.

class Message
{
    //Mensagem de Cuidado
    /**
     * @param string $text
     */
    public function MessageWarning(string $text){
        echo "
            <div id='notification-container'>
                <div class='notification'>
                    <p class='text-right font-text-light-middle'><a href='#' class='color-dark notification-close'><span class='fa fa-times-circle'></span></a></p>
                    <div class='espaco'></div>
                    <p class='text-center font-weight-heavy font-text-hard-extra color-dark notification-title'>
                        <span class='fa fa-exclamation-triangle'></span> <span class='notification-subtitle'>ATENÇÃO</span>
                    </p>
                   
                    <div class='espaco'></div>
                    <div class='status-warning'>
                        <div class='espaco'></div>
                        <p class='text-center font-text-light-extra color-white notification-message status-warning text-margin'>{$text}!</p>
                        <div class='espaco'></div>
                    </div>
                </div>
            </div>
        ";
    }

    //Mensagem de Sucesso

    /**
     * @param string $text
     */
    public function MessageSuccess(string $text){
        echo "
            <div id='notification-container'>
                <div class='notification'>
                    <p class='text-right font-text-light-middle'><a href='#' class='color-dark notification-close'><span class='fa fa-times-circle'></span></a></p>
                    <div class='espaco'></div>
                    <p class='text-center font-weight-heavy font-text-hard-extra color-dark notification-title'>
                        <span class='fa fa-check-square'></span> <span class='notification-subtitle'>SUCESSO</span>
                    </p>
                   
                    <div class='espaco'></div>
                    <div class='status-success'>
                        <div class='espaco'></div>
                        <p class='text-center font-text-light-extra color-white notification-message status-success text-margin'>{$text}!</p>
                        <div class='espaco'></div>
                    </div>
                </div>
            </div>
        ";
    }

    //Mensagem de Informações

    /**
     * @param string $text
     */
    public function MessageInfo(string $text){
        echo "
            <div id='notification-container'>
                <div class='notification'>
                    <p class='text-right font-text-light-middle'><a href='#' class='color-dark notification-close'><span class='fa fa-times-circle'></span></a></p>
                    <div class='espaco'></div>
                    <p class='text-center font-weight-heavy font-text-hard-extra color-dark notification-title'>
                        <span class='fa fa-info-circle'></span> <span class='notification-subtitle'>INFORMAÇÃO</span>
                    </p>
                   
                    <div class='espaco'></div>
                    <div class='status-info'>
                        <div class='espaco'></div>
                        <p class='text-center font-text-light-extra color-white notification-message status-info text-margin'>{$text}!</p>
                        <div class='espaco'></div>
                    </div>
                </div>
            </div>
        ";
    }

    //Mensagem de Erro

    /**
     * @param string $text
     */
    public function MessageError(string $text){
        echo "
            <div id='notification-container'>
                <div class='notification'>
                    <p class='text-right font-text-light-middle'><a href='#' class='color-dark notification-close'><span class='fa fa-times-circle'></span></a></p>
                    <div class='espaco'></div>
                    <p class='text-center font-weight-heavy font-text-hard-extra color-dark notification-title'>
                        <span class='fa fa-times-circle'></span> <span class='notification-subtitle'>ERRO</span>
                    </p>
                   
                    <div class='espaco'></div>
                    <div class='status-error'>
                        <div class='espaco'></div>
                        <p class='text-center font-text-light-extra color-white notification-message status-error text-margin'>{$text}!</p>
                        <div class='espaco'></div>
                    </div>
                </div>
            </div>
        ";
    }

    //Se acontece o multiplo acesso, (ver class loginauth) mostra a mensagem de que já existe outro dispositivo ativo

    /**
     * @param string $text
     */
    public function MessageAuth(string $text){
        echo "
            <div id='notification-container'>
                <div class='notification'>
                    <p class='text-right font-text-light-middle'><a href='#' class='color-dark notification-close'><span class='fa fa-times-circle'></span></a></p>
                    <div class='espaco'></div>
                    <p class='text-center font-weight-heavy font-text-hard-extra color-dark notification-title'>
                        <span class='fa fa-lock'></span> <span class='notification-subtitle'>CONTA ATIVA</span>
                    </p>
                   
                    <div class='espaco'></div>
                    <div class='status-warning'>
                        <div class='espaco'></div>
                        <p class='text-center font-text-light-extra color-white notification-message status-warning text-margin'>{$text}!</p>
                        <div class='espaco'></div>
                    </div>
                </div>
            </div>
        ";
    }

    //Mensagem quando o usuário tenta acessar um lugar permitido (apenas leitura) ou não permitido por várias vezes
    //Ou tenta fazer login x vezes e a msg notifica que na próxima será bloqueado
    /**
     * @param string $text
     */
    public function MessageNotification(string $text){
        echo "
            <div id='notification-container'>
                <div class='notification'>
                    <p class='text-right font-text-light-middle'><a href='#' class='color-dark notification-close'><span class='fa fa-times-circle'></span></a></p>
                    <div class='espaco'></div>
                    <p class='text-center font-weight-heavy font-text-hard-extra color-dark notification-title'>
                        <span class='fa fa-bullhorn'></span> <span class='notification-subtitle'>ATENÇÃO</span>
                    </p>
                   
                    <div class='espaco'></div>
                    <div class='status-warning'>
                        <div class='espaco'></div>
                        <p class='text-center font-text-light-extra color-white notification-message status-warning text-margin'>{$text}!</p>
                        <div class='espaco'></div>
                    </div>
                </div>
            </div>
        ";
    }

    //Mensagem de Erro quando o usuário erra a senha x vezes

    /**
     * @param string $text
     */
    public function MessageBlocked(string $text){
        echo "
            <div id='notification-container'>
                <div class='notification'>
                    <p class='text-right font-text-light-middle'><a href='#' class='color-dark notification-close'><span class='fa fa-times-circle'></span></a></p>
                    <div class='espaco'></div>
                    <p class='text-center font-weight-heavy font-text-hard-extra color-dark notification-title'>
                        <span class='fa fa-hand-paper'></span> <span class='notification-subtitle'>BLOQUEADO</span>
                    </p>
                   
                    <div class='espaco'></div>
                    <div class='status-error'>
                        <div class='espaco'></div>
                        <p class='text-center font-text-light-extra color-white notification-message status-error text-margin'>{$text}!</p>
                        <div class='espaco'></div>
                    </div>
                </div>
            </div>
        ";
    }

    //Mensagem de Erro quando o usuário acessar um arquivo SEM estar LOGADO

    /**
     * @param string $text
     */
    public function MessageNegative(string $text){
        echo "
            <div id='notification-container'>
                <div class='notification'>
                    <p class='text-right font-text-light-middle'><a href='#' class='color-dark notification-close'><span class='fa fa-times-circle'></span></a></p>
                    <div class='espaco'></div>
                    <p class='text-center font-weight-heavy font-text-hard-extra color-dark notification-title'>
                        <span class='fa fa-ban'></span> <span class='notification-subtitle'>NÃO PERMITIDO</span>
                    </p>
                   
                    <div class='espaco'></div>
                    <div class='status-warning'>
                        <div class='espaco'></div>
                        <p class='text-center font-text-light-extra color-white notification-message status-warning text-margin'>{$text}!</p>
                        <div class='espaco'></div>
                    </div>
                </div>
            </div>
        ";
    }

    //Mensagem de permissão, porém, apenas de leitura, não pode escrever, deletar ou salvar

    /**
     * @param string $text
     */
    public function MessagePermited(string $text){
        echo "
            <div id='notification-container'>
                <div class='notification'>
                    <p class='text-right font-text-light-middle'><a href='#' class='color-dark notification-close'><span class='fa fa-times-circle'></span></a></p>
                    <div class='espaco'></div>
                    <p class='text-center font-weight-heavy font-text-hard-extra color-dark notification-title'>
                        <span class='fa fa-search'></span> <span class='notification-subtitle'>LIMITADO</span>
                    </p>
                   
                    <div class='espaco'></div>
                    <div class='status-info'>
                        <div class='espaco'></div>
                        <p class='text-center font-text-light-extra color-white notification-message status-info text-margin'>{$text}!</p>
                        <div class='espaco'></div>
                    </div>
                </div>
            </div>
        ";
    }

    //Mensagem qdo usuário ESTÁ logado, mas não tem acesso a aquela page (diferente da messagenegative)

    /**
     * @param string $text
     */
    public function MessageNotPermited(string $text){
        echo "
            <div id='notification-container'>
                <div class='notification'>
                    <p class='text-right font-text-light-middle'><a href='#' class='color-dark notification-close'><span class='fa fa-times-circle'></span></a></p>
                    <div class='espaco'></div>
                    <p class='text-center font-weight-heavy font-text-hard-extra color-dark notification-title'>
                        <span class='fa fa-ban'></span> <span class='notification-subtitle'>INACESSÍVEL</span>
                    </p>
                   
                    <div class='espaco'></div>
                    <div class='status-error'>
                        <div class='espaco'></div>
                        <p class='text-center font-text-light-extra color-white notification-message status-error text-margin'>{$text}!</p>
                        <div class='espaco'></div>
                    </div>
                </div>
            </div>
        ";
    }

    //Mensagem que informa que um produto ou assinatura vai expirar

    /**
     * @param string $text
     */
    public function MessageExpired(string $text){
        echo "
            <div id='notification-container'>
                <div class='notification'>
                    <p class='text-right font-text-light-middle'><a href='#' class='color-dark notification-close'><span class='fa fa-times-circle'></span></a></p>
                    <div class='espaco'></div>
                    <p class='text-center font-weight-heavy font-text-hard-extra color-dark notification-title'>
                        <span class='fa fa-credit-card'></span> <span class='notification-subtitle'>EXPIRADO</span>
                    </p>
                   
                    <div class='espaco'></div>
                    <div class='status-error'>
                        <div class='espaco'></div>
                        <p class='text-center font-text-light-extra color-white notification-message status-error text-margin'>{$text}!</p>
                        <div class='espaco'></div>
                    </div>
                </div>
            </div>
        ";
    }

    //Mensagem que informa que você recebeu um bonus ou promoção

    /**
     * @param string $text
     */
    public function MessageBonus(string $text){
        echo "
            <div id='notification-container'>
                <div class='notification'>
                    <p class='text-right font-text-light-middle'><a href='#' class='color-dark notification-close'><span class='fa fa-times-circle'></span></a></p>
                    <div class='espaco'></div>
                    <p class='text-center font-weight-heavy font-text-hard-extra color-dark notification-title'>
                        <span class='fa fa-gift'></span> <span class='notification-subtitle'>GANHEI BÔNUS</span>
                    </p>
                   
                    <div class='espaco'></div>
                    <div class='status-info'>
                        <div class='espaco'></div>
                        <p class='text-center font-text-light-extra color-white notification-message status-info text-margin'>{$text}!</p>
                        <div class='espaco'></div>
                    </div>
                </div>
            </div>
        ";
    }

    //Mensagem Personalizada

    /**
     * @param string $text  //Texto da Mensagem
     * @param string $title //Título da Mensagem
     * @param string $status //Tipo de Status Que Definirá a Cor de Fundo da Mensagem(error[vermelho], info[azul], success[verde], warning[laranja], blackfriday[preto])
     */
    public function MessagePersonal(string $text, string $title, string $status){
        echo "
            <div id='notification-container'>
                <div class='notification'>
                    <p class='text-right font-text-light-middle'><a href='#' class='color-dark notification-close'><span class='fa fa-times-circle'></span></a></p>
                    <div class='espaco'></div>
                    <p class='text-center font-weight-heavy font-text-hard-extra color-dark notification-title'>
                        <span class='fa fa-info-circle'></span> <span class='notification-subtitle'>".mb_strtoupper($title)."</span>
                    </p>
                   
                    <div class='espaco'></div>
                    <div class='status-{$status}'>
                        <div class='espaco'></div>
                        <p class='text-center font-text-light-extra color-white notification-message status-{$status} text-margin'>{$text}!</p>
                        <div class='espaco'></div>
                    </div>
                </div>
            </div>
        ";
    }

}