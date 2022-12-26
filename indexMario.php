<?php
include_once ('MarcenariaController.php');
$MarcenariaController = new MarcenariaController();
if(isset($_POST['entrar'])){
    $MarcenariaController->Logar($_REQUEST);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style10.css">
    
    <script src="script.js"></script>
</head>
<body>
    <div class="imgtotal"><img src="images/nicho11.png" alt=""></div>
    <!--iniciando estrutura tela de login-->
    <div class="sec_screen_login">
        <div class="card_login">
            <div class="closeButt"><button onclick="closePageLogin()" class="closebutton">X</button></div>
            <div class="card_content">
                <div class="card_rotulo">LOG IN <img class="logoMarcaMario" src="images/logoMarcaMario.png" alt=""></div>
                <form class="login" action="index.php" method="post">
                    <div class="data">
                        <label>E-mail</label>
                        <input class="login_imputBox" name="emailInput" type="text" required>
                    </div>
                    <div class="data">
                        <label>Senha</label>
                        <input class="login_imputBox" name="senhaInput" type="password" required>
                    </div>
                    <ul>
                        <li class="entrar"><button onclick="openPageUsuario()" type="submit" name="entrar">Entrar</button></li>
                        <!--<li class="cadastrese"><button onclick="openPageCadastroUsuario()" >Cadastre-se</button></li>-->
                    </ul>
                <!--iniciando tela de cadastro usuario-->
                </form>
                <?php
                    include_once('CadastrarMarcenariaController.php');
                    $CadastrarMarcenaria = new CadastrarMarcenariaController();
                    if(isset($_POST['cadastrar'])){
                        print('ola1');
                        $CadastrarMarcenaria->Cadastrar($_POST);
                }
                ?>
                <form class="cadastro" action="index.php" method="post">
                    
                    <div class="data_cadastro">
                        <label>Nome</label>
                        <input class="cadastro_imputBox" name="nome" type="text" required>
                    </div>
                    <div class="data_cadastro">
                        <label>E-mail</label>
                        <input class="cadastro_imputBox" name="emailInput" type="text" required>
                    </div>
                    <div class="data_cadastro">
                        <label>Senha</label>
                        <input class="cadastro_imputBox" name="senhaInput" type="password" required>
                    </div>
                    <ul>
                        <li class="cadastrar"><button type="submit" name="cadastrar">Cadastrar</button></li>
                        <li class="cancelar_cadastro"><button onclick="closePageCadastroUsuario()">Cancelar</button></li>
                    </ul>
                </form>
                <!--iniciando tela de cadastro usuario-->
            </div>
        </div>
    </div>
    <!--finalizando estrutura tela de login-->
    <!-- <section> -->
        <!--INICIANDO ESTRUTURA DE TELA QUANDO ENTROU-->
        <!-- <div class="third_screen_login">
            <div class="card_cardScreen">
                <button class="closePageButt" id="closePageButt" onclick="closePageUsuario()" ><img src="images/cancel.png" alt=""></button>
                <div class="card_clientDados">
                    <div class="nome_foto">
                        <label class="nome_usuario_sessao" for="#">Nome S.</label>
                        <img class="foto_usuario_sessao" src="images/iconUsuario.png" alt="">
                    </div>
                    <form class="dados_cadastrais_usuario" action="#">
                        <label class="dados_pessoais_titulo">Dados Cadastrais</label>
                        <div class="data_info_usuario">
                            <label>Nome</label>
                            <input id="preencher" class="info_uso_input" name="nome_usuario" type="text" required readonly>
                        </div>
                        <div class="data_info_usuario">
                            <label>CPF</label>
                            <input id="preencher" class="info_uso_input" name="cpf_usuario" type="text" required readonly>
                        </div>
                        <div class="data_info_usuario">
                            <label>Telefone</label>
                            <input id="preencher" class="info_uso_input" name="telef_usuario" type="text" required readonly>
                        </div>
                        <label class="dados_pessoais_titulo">Dados De Entrega</label>
                        <div class="data_info_usuario">
                            <label>CEP</label>
                            <input id="preencher" class="info_uso_input" name="cep_usuario" type="text" onblur="buscaCep()" required readonly>
                        </div>
                        <div class="data_info_usuario">
                            <label>Logradouro</label>
                            <input id="preencher" class="info_uso_input" name="logradouro_usuario" type="text" required readonly>
                        </div>
                        <div class="data_info_usuario">
                            <label>Número</label>
                            <input id="preencher" class="info_uso_input" name="numeroLogradouro_usuario" type="text" required readonly>
                        </div><div class="data_info_usuario">
                            <label>Bairro</label>
                            <input id="preencher" class="info_uso_input" name="bairro_usuario" type="text" required readonly>
                        </div>
                        <div class="data_info_usuario">
                            <label>Cidade</label>
                            <input id="preencher" class="info_uso_input" name="cidade_usuario" type="text" required readonly>
                        </div>
                        <ul>
                            <li id="botao_alterarUsuarioDados" class="alterar"><button id="botao_alterarUsuarioDados_botao" onclick="botaoAlterarUsuarioDados()">Alterar</button></li>
                            <li class="confirm_alteracao"><button id="botao_confirm_alteracao" formaction="submite" type="submit">Confirmar</button></li>
                        </ul>
                    </form>
                </div>
                <div class="card_content_conta">
                    <div class="card_carrinho">
                        <div class="tag_carrinho"><img class="carrinhoCompraIcon" src="images/cart_compra.png" alt=""><label class="carrinhoNome" >Carrinho</label></div>
                        <div class="listagem">
                            <img src="images/empty.png" alt="empty"> -->
                            <!--inserir php para coletar os itens adcionados no carrinho-->
                            <!--se seleção for vazia mostrar imagem de vazio-->  
                        <!-- </div>
                        <div class="botoes_compra">
                            <button class="final_compra">Finalizar</button>
                            <input class="valor_total" type="text" readonly placeholder="Total">
                        </div>
                    </div>
                    <div class="card_hitCompras">
                        <div class="tag_hitCompras"><img class="histComp" src="images/history.png" alt=""><label class="historicoNome">Histórico</label></div>
                        <div class="listagem">
                            <img src="images/empty.png" alt="empty"> -->
                            <!--inserir php para coletar os itens adcionados no carrinho-->
                            <!--se seleção for vazia mostrar imagem de vazio-->
                        <!-- </div>
                    </div>
                </div>
            </div>
            <div class="card_cardScreen_adm">
                <button class="closePageButt" id="closePageButt" onclick="closePageUsuarioADM()"><img src="images/cancel.png" alt=""></button>
                <div class="card_clientDados">
                    <div class="nome_foto_adm">
                        <label class="nome_usuario_sessao" for="#">Admnist.</label>
                        <img class="foto_adm_sessao" src="images/logoMarcaMario.png" alt="">
                    </div>
                    <form class="dados_cadastrais_item" action="#">
                        <label class="titulo">Cadastrar item</label>
                        <label class="dados_geral_item">Geral</label>
                        <div class="data_info_usuario">
                            <label>Descrição</label>
                            <input id="preencher_it" class="info_item_input" name="descricao_item" type="text" required readonly>
                        </div>
                        <div class="data_info_usuario">
                            <label>Classificação</label>
                            <input id="preencher_it" class="info_item_input" name="class_item" type="text" required readonly>
                        </div>
                            <div class="separacao">
                                <div class="data_info_usuario">
                                    <label>Partições</label>
                                    <input id="preencher_it" class="info_item_input" name="particoes_item" type="text" required readonly>
                                </div>
                                <div class="data_info_usuario">
                                    <label>Material</label>
                                    <input id="preencher_it" class="info_item_input" name="material_item" type="text" required readonly>
                                </div>
                            </div>
                        <div class="data_info_usuario">
                            <label>preço de venda</label>
                            <input id="preencher_it" class="info_item_input" name="preco_item" type="text" required readonly>
                        </div>

                        <label class="dados_dimesoes_item">Dimensões</label>
                        
                        
                        <div class="separacao">
                            <div class="data_info_usuario">
                                <label>Altura</label>
                                <input id="preencher_it" class="info_item_input" name="particoes_item" type="text" required readonly>
                            </div>
                            <div class="data_info_usuario">
                                <label>Largura</label>
                                <input id="preencher_it" class="info_item_input" name="material_item" type="text" required readonly>
                            </div>
                        </div>
                        <div class="separacao">
                            <div class="data_info_usuario">
                                <label>Profund.</label>
                                <input id="preencher_it" class="info_item_input" name="particoes_item" type="text" required readonly>
                            </div>
                            <div class="data_info_usuario">
                                <label>Espessura</label>
                                <input id="preencher_it" class="info_item_input" name="material_item" type="text" required readonly>
                            </div>
                        </div>
                        <div class="botao_cadastro_item"><button class="botao_cadastro_novo_item" onclick="novoCadastro()">NOVO ITEM</button></div>
                        <ul id="opcoes_cadastro_item_botao">
                            <li id="botao_cadastra_item" class="cadastrar_item"><button id="botao_cadastra_itens">Cadastrar</button></li>
                            <li class="cancelar_cadastro"><button id="botao_cancelar_cadastro" onclick="cancelaCadastro()">Cancelar</button></li>
                        </ul>
                        <ul id="opcoes_alterar_item_botao">
                            <li id="botao_altera_item" class="altera_item"><button id="botao_altera_itens">Alterar</button></li>
                            <li class="cancelar_alteracao"><button id="botao_cancelar_alteracao" onclick="cancela_altCadastro()">Cancelar</button></li>
                        </ul>
                    </form>
                </div>
                <div class="card_content_conta">
                    <div class="card_carrinho">
                        <div class="tag_produtos"><img class="carrinhoCompraIcon" src="images/products.png" alt=""><label class="carrinhoNome" >Produtos</label></div>
                        <div class="tag_estoque"><img class="carrinhoCompraIcon" src="images/estoque.png" alt=""><label class="carrinhoNome" >Estoque</label></div>
                        <div class="listagem">
                            <img src="images/empty.png" alt="empty"> -->
                            <!--inserir php para coletar os itens adcionados no carrinho-->
                            <!--se seleção for vazia mostrar imagem de vazio-->  
                        <!-- </div>
                        <div class="botao_alt_item">
                            <button class="alterar_item" onclick="alteraCadastro()">Alterar</button>
                        </div>
                    </div>
                    <div class="card_hitCompras">
                        <div class="tag_hitVompras"><img class="histComp" src="images/history.png" alt=""><label class="historicoNome">Histórico De Vendas</label></div>
                        <div class="listagem">
                            <img src="images/empty.png" alt="empty"> -->
                            <!--inserir php para coletar os itens adcionados no carrinho-->
                            <!--se seleção for vazia mostrar imagem de vazio-->
                        <!-- </div>
                    </div>
                </div>
            </div>
        </div>
        FINALIZANDO ESTRUTURA DE TELA QUANDO ENTROU -->
        <div class="circle"></div>
        <header>
            <div class="logo_menu">
                <svg class="svglogo" width="70vh" viewBox="0 0 447 103" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="logotipoMario">
                    <g id="base">
                    <path id="divisao1" fill-rule="evenodd" clip-rule="evenodd" d="M14.82 44.7439L25.8956 51.1385V68.9273L14.82 75.3214V44.7439Z" fill="#424A4D"/>
                    <path id="divisao2" fill-rule="evenodd" clip-rule="evenodd" d="M29.2582 53.0797L41.1184 59.927V76.8098L29.2582 83.6572V53.0797Z" fill="#424A4D"/>
                    <path id="estrutEsquem" fill-rule="evenodd" clip-rule="evenodd" d="M11.2159 77.2622V40.1435L43.5463 58.8095V95.9282L11.2159 77.2622ZM46.692 102.138L50.4961 99.9405L46.692 97.7443V58.5052L81.7645 38.256L85.6805 40.5165V35.9951L45.3945 12.7359L7.54747 34.5868V79.5371L46.692 102.138V102.138ZM11.2163 36.7049L45.1473 17.1148L79.5739 36.991L45.6428 56.5814L11.2163 36.7049V36.7049Z" fill="#424A4D"/>
                    </g>
                    <g id="gavetaCompleta">
                    <path id="dentrogav" fill-rule="evenodd" clip-rule="evenodd" d="M53.186 57.7588L60.0205 61.7046L78.979 50.7591V42.8674L53.186 57.7588Z" fill="#424A4D"/>
                    <path id="gaveta" fill-rule="evenodd" clip-rule="evenodd" d="M60.0205 63.6499V99.1351L90.4287 81.5792V46.0936L60.0205 63.6499V63.6499ZM75.7056 78.4702L72.7613 76.7701V71.8832L82.9555 65.9977L85.9001 67.6978L75.7056 73.5836V78.4702V78.4702Z" fill="#424A4D"/>
                    </g>
                    <g id="portas">
                    <path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M51.0317 29.9758V31.0322L57.5816 34.814L60.1192 33.349V32.197L57.4988 33.7096L51.0317 29.9758Z" fill="#424A4D"/>
                    <path id="Vector_2" fill-rule="evenodd" clip-rule="evenodd" d="M33.4448 27.6302L64.6161 45.6265L62.7955 46.6783L33.4452 29.7324L33.4448 27.6302Z" fill="#424A4D"/>
                    <path id="Vector_3" fill-rule="evenodd" clip-rule="evenodd" d="M35.4551 38.9688V40.0256L42.005 43.8074L44.5426 42.3424V41.19L41.9219 42.703L35.4551 38.9688Z" fill="#424A4D"/>
                    </g>
                    <g id="teto">
                    <path id="Vector_4" fill-rule="evenodd" clip-rule="evenodd" d="M0.833511 33.5475V26.4344L45.63 0.571091L90.4287 26.4355V33.6714L45.5234 7.74538L0.833511 33.5475Z" fill="#424A4D"/>
                    <path id="Vector_5" fill-rule="evenodd" clip-rule="evenodd" d="M77.7461 9.90463V15.0463L86.3967 20.0406V9.90463H77.7461Z" fill="#424A4D"/>
                    </g>
                    <path id="M A R I O S A N T A N A" d="M131.461 77.1916H127.976V67.8201C127.976 66.808 128.02 65.6902 128.107 64.4669H128.02C127.838 65.4281 127.674 66.1199 127.528 66.5422L123.859 77.1916H120.975L117.24 66.6514C117.138 66.3674 116.974 65.6393 116.748 64.4669H116.65C116.744 66.0106 116.792 67.365 116.792 68.5301V77.1916H113.613V61.5288H118.78L121.98 70.8129C122.235 71.5556 122.42 72.302 122.537 73.052H122.602C122.799 72.1854 123.007 71.4318 123.225 70.791L126.425 61.5288H131.461V77.1916ZM161.159 77.1916H157.314L156.2 73.7073H150.629L149.526 77.1916H145.703L151.405 61.5288H155.588L161.159 77.1916ZM155.392 70.9985L153.71 65.7339C153.586 65.3407 153.498 64.8711 153.447 64.3249H153.36C153.324 64.7837 153.233 65.2388 153.087 65.6902L151.383 70.9985H155.392ZM188.618 77.1916H184.565L182.13 73.1612C181.948 72.8554 181.773 72.5823 181.605 72.342C181.438 72.1017 181.267 71.8978 181.092 71.7303C180.925 71.5556 180.746 71.4245 180.557 71.3371C180.375 71.2425 180.175 71.1951 179.956 71.1951H179.006V77.1916H175.478V61.5288H181.07C184.871 61.5288 186.772 62.9487 186.772 65.7885C186.772 66.3347 186.688 66.8407 186.52 67.3068C186.353 67.7655 186.116 68.1806 185.811 68.5519C185.505 68.9233 185.133 69.2437 184.696 69.5131C184.267 69.7825 183.786 69.9937 183.255 70.1466V70.1903C183.488 70.2631 183.713 70.3832 183.932 70.5507C184.15 70.7109 184.361 70.9002 184.565 71.1187C184.769 71.3371 184.962 71.5738 185.144 71.8286C185.334 72.0762 185.505 72.3202 185.658 72.5604L188.618 77.1916ZM179.006 64.172V68.5301H180.535C181.292 68.5301 181.9 68.3116 182.359 67.8747C182.825 67.4305 183.058 66.8808 183.058 66.2254C183.058 64.8565 182.239 64.172 180.601 64.172H179.006ZM205.984 77.1916H202.456V61.5288H205.984V77.1916ZM228.539 77.4646C226.296 77.4646 224.469 76.7365 223.056 75.2801C221.643 73.8165 220.937 71.9124 220.937 69.5677C220.937 67.092 221.654 65.0895 223.089 63.5604C224.523 62.0312 226.424 61.2667 228.79 61.2667C231.026 61.2667 232.832 61.9985 234.208 63.4621C235.591 64.9257 236.283 66.8553 236.283 69.251C236.283 71.7121 235.566 73.6964 234.131 75.2037C232.704 76.711 230.84 77.4646 228.539 77.4646ZM228.692 64.3031C227.454 64.3031 226.471 64.7691 225.743 65.7012C225.015 66.6259 224.651 67.8529 224.651 69.382C224.651 70.933 225.015 72.16 225.743 73.0629C226.471 73.9658 227.425 74.4173 228.605 74.4173C229.821 74.4173 230.785 73.9804 231.499 73.1066C232.213 72.2255 232.569 71.0058 232.569 69.4476C232.569 67.8238 232.224 66.5604 231.532 65.6575C230.84 64.7546 229.893 64.3031 228.692 64.3031ZM262.901 76.5908V73.0956C263.535 73.6272 264.223 74.0277 264.965 74.2971C265.708 74.5593 266.458 74.6903 267.215 74.6903C267.66 74.6903 268.045 74.6503 268.373 74.5702C268.708 74.4901 268.985 74.3809 269.203 74.2425C269.429 74.0969 269.596 73.9294 269.706 73.7401C269.815 73.5435 269.87 73.3323 269.87 73.1066C269.87 72.8007 269.782 72.5277 269.607 72.2874C269.433 72.0471 269.192 71.825 268.887 71.6211C268.588 71.4172 268.231 71.2206 267.816 71.0313C267.401 70.842 266.953 70.649 266.473 70.4524C265.249 69.9427 264.336 69.3201 263.731 68.5847C263.134 67.8492 262.835 66.9609 262.835 65.9196C262.835 65.1041 262.999 64.405 263.327 63.8225C263.655 63.2327 264.099 62.7485 264.66 62.3698C265.228 61.9912 265.883 61.7145 266.626 61.5397C267.368 61.3577 268.155 61.2667 268.985 61.2667C269.8 61.2667 270.521 61.3176 271.147 61.4196C271.781 61.5142 272.363 61.6635 272.895 61.8674V65.1332C272.633 64.9512 272.345 64.791 272.032 64.6526C271.726 64.5143 271.41 64.4014 271.082 64.314C270.754 64.2194 270.427 64.1502 270.099 64.1065C269.779 64.0628 269.473 64.041 269.181 64.041C268.781 64.041 268.417 64.081 268.089 64.1611C267.762 64.2339 267.485 64.3395 267.259 64.4779C267.033 64.6162 266.859 64.7837 266.735 64.9803C266.611 65.1696 266.549 65.3844 266.549 65.6247C266.549 65.8868 266.618 66.1235 266.757 66.3347C266.895 66.5386 267.092 66.7352 267.346 66.9245C267.601 67.1065 267.911 67.2886 268.275 67.4706C268.639 67.6454 269.05 67.8274 269.509 68.0167C270.135 68.2789 270.696 68.5592 271.191 68.8577C271.694 69.149 272.123 69.4803 272.48 69.8517C272.837 70.223 273.11 70.649 273.299 71.1296C273.488 71.6029 273.583 72.1563 273.583 72.7898C273.583 73.6636 273.416 74.3991 273.081 74.9962C272.753 75.586 272.305 76.0665 271.737 76.4379C271.169 76.802 270.507 77.0641 269.749 77.2243C268.999 77.3845 268.206 77.4646 267.368 77.4646C266.509 77.4646 265.69 77.3918 264.911 77.2462C264.139 77.1005 263.469 76.8821 262.901 76.5908ZM302.298 77.1916H298.454L297.339 73.7073H291.769L290.666 77.1916H286.843L292.544 61.5288H296.728L302.298 77.1916ZM296.531 70.9985L294.849 65.7339C294.725 65.3407 294.638 64.8711 294.587 64.3249H294.5C294.463 64.7837 294.372 65.2388 294.227 65.6902L292.523 70.9985H296.531ZM330.707 77.1916H327.147L320.692 67.3505C320.313 66.7752 320.051 66.3419 319.905 66.0507H319.861C319.92 66.6041 319.949 67.4488 319.949 68.5847V77.1916H316.618V61.5288H320.419L326.633 71.0641C326.917 71.4937 327.18 71.9197 327.42 72.342H327.463C327.405 71.9779 327.376 71.2607 327.376 70.1903V61.5288H330.707V77.1916ZM357.653 64.4014H353.186V77.1916H349.647V64.4014H345.202V61.5288H357.653V64.4014ZM385.898 77.1916H382.054L380.94 73.7073H375.369L374.266 77.1916H370.443L376.145 61.5288H380.328L385.898 77.1916ZM380.131 70.9985L378.449 65.7339C378.326 65.3407 378.238 64.8711 378.187 64.3249H378.1C378.063 64.7837 377.972 65.2388 377.827 65.6902L376.123 70.9985H380.131ZM414.308 77.1916H410.747L404.292 67.3505C403.913 66.7752 403.651 66.3419 403.505 66.0507H403.462C403.52 66.6041 403.549 67.4488 403.549 68.5847V77.1916H400.218V61.5288H404.019L410.234 71.0641C410.518 71.4937 410.78 71.9197 411.02 72.342H411.064C411.006 71.9779 410.976 71.2607 410.976 70.1903V61.5288H414.308V77.1916ZM444.028 77.1916H440.183L439.069 73.7073H433.498L432.395 77.1916H428.572L434.274 61.5288H438.457L444.028 77.1916ZM438.261 70.9985L436.579 65.7339C436.455 65.3407 436.367 64.8711 436.316 64.3249H436.229C436.193 64.7837 436.102 65.2388 435.956 65.6902L434.252 70.9985H438.261Z" fill="#595F61"/>
                    <path id="M&#195;&#147;VEIS PLANEJADOS" d="M302.113 96.0643H300.807V88.5431C300.807 87.9489 300.844 87.2218 300.917 86.3618H300.885C300.76 86.8673 300.648 87.2296 300.549 87.4485L296.718 96.0643H296.077L292.254 87.511C292.144 87.2609 292.032 86.8778 291.918 86.3618H291.886C291.928 86.81 291.949 87.5423 291.949 88.5587V96.0643H290.682V84.8528H292.418L295.858 92.6712C296.124 93.2706 296.296 93.7188 296.374 94.0159H296.421C296.645 93.4009 296.825 92.9422 296.961 92.6399L300.471 84.8528H302.113V96.0643ZM309.587 96.252C307.997 96.252 306.723 95.7281 305.764 94.6805C304.81 93.6328 304.333 92.2698 304.333 90.5915C304.333 88.788 304.821 87.3495 305.795 86.2757C306.77 85.202 308.096 84.6652 309.775 84.6652C311.323 84.6652 312.569 85.1864 313.512 86.2288C314.461 87.2713 314.935 88.6343 314.935 90.3178C314.935 92.1473 314.45 93.5937 313.481 94.657C312.511 95.7203 311.213 96.252 309.587 96.252ZM309.681 85.8536C308.503 85.8536 307.547 86.2784 306.812 87.1279C306.077 87.9775 305.709 89.093 305.709 90.4742C305.709 91.8554 306.066 92.9683 306.78 93.8126C307.5 94.6518 308.435 95.0714 309.587 95.0714C310.817 95.0714 311.787 94.67 312.496 93.8674C313.204 93.0647 313.559 91.9414 313.559 90.4977C313.559 89.0174 313.215 87.8733 312.527 87.0654C311.839 86.2575 310.89 85.8536 309.681 85.8536ZM311.636 81.2564L309.587 83.8208H308.594L310.338 81.2564H311.636ZM325.083 84.8528L320.932 96.0643H319.485L315.42 84.8528H316.882L319.986 93.7423C320.085 94.0289 320.16 94.3599 320.212 94.7352H320.244C320.285 94.4225 320.371 94.0863 320.502 93.7266L323.668 84.8528H325.083ZM332.636 96.0643H326.694V84.8528H332.385V86.0412H328.007V89.7705H332.057V90.9511H328.007V94.8759H332.636V96.0643ZM336.107 96.0643H334.794V84.8528H336.107V96.0643ZM338.539 95.6109V94.0628C338.716 94.2192 338.927 94.3599 339.172 94.485C339.422 94.6101 339.683 94.717 339.954 94.8056C340.23 94.889 340.506 94.9541 340.782 95.001C341.059 95.0479 341.314 95.0714 341.549 95.0714C342.356 95.0714 342.958 94.9228 343.355 94.6257C343.756 94.3234 343.957 93.8908 343.957 93.3279C343.957 93.0256 343.889 92.7624 343.753 92.5382C343.623 92.3141 343.441 92.1108 343.206 91.9284C342.972 91.7408 342.693 91.5636 342.369 91.3968C342.052 91.2248 341.708 91.0449 341.337 90.8573C340.947 90.6592 340.582 90.4586 340.243 90.2553C339.904 90.052 339.61 89.8279 339.359 89.5829C339.109 89.3379 338.911 89.0617 338.765 88.7542C338.625 88.4414 338.554 88.0766 338.554 87.6596C338.554 87.1488 338.666 86.7058 338.89 86.3305C339.114 85.95 339.409 85.6373 339.774 85.3923C340.139 85.1473 340.553 84.9649 341.017 84.845C341.486 84.7251 341.963 84.6652 342.448 84.6652C343.553 84.6652 344.358 84.7981 344.864 85.0639V86.5416C344.202 86.0829 343.352 85.8536 342.315 85.8536C342.028 85.8536 341.741 85.8848 341.455 85.9474C341.168 86.0047 340.913 86.1011 340.689 86.2367C340.464 86.3722 340.282 86.5468 340.141 86.7605C340.001 86.9742 339.93 87.2348 339.93 87.5423C339.93 87.829 339.982 88.0766 340.087 88.2851C340.196 88.4936 340.355 88.6838 340.563 88.8558C340.772 89.0278 341.025 89.1946 341.322 89.3562C341.624 89.5178 341.971 89.695 342.362 89.8878C342.763 90.0859 343.144 90.2944 343.503 90.5133C343.863 90.7322 344.178 90.9746 344.449 91.2404C344.72 91.5062 344.934 91.8007 345.09 92.1239C345.252 92.447 345.333 92.8171 345.333 93.2341C345.333 93.7866 345.223 94.2557 345.004 94.6414C344.791 95.0219 344.499 95.332 344.129 95.5718C343.764 95.8115 343.342 95.9835 342.862 96.0878C342.383 96.1972 341.877 96.252 341.345 96.252C341.168 96.252 340.949 96.2363 340.689 96.205C340.428 96.179 340.162 96.1373 339.891 96.08C339.62 96.0278 339.362 95.9627 339.117 95.8845C338.877 95.8011 338.684 95.7099 338.539 95.6109ZM353.276 91.8268V96.0643H351.963V84.8528H355.043C356.242 84.8528 357.17 85.1447 357.826 85.7285C358.488 86.3122 358.819 87.1358 358.819 88.1991C358.819 89.2624 358.452 90.1328 357.717 90.8104C356.987 91.488 355.999 91.8268 354.754 91.8268H353.276ZM353.276 86.0412V90.6384H354.652C355.559 90.6384 356.25 90.4325 356.724 90.0207C357.203 89.6038 357.443 89.0174 357.443 88.2616C357.443 86.7813 356.568 86.0412 354.816 86.0412H353.276ZM366.755 96.0643H360.938V84.8528H362.252V94.8759H366.755V96.0643ZM377.622 96.0643H376.168L374.98 92.9213H370.226L369.108 96.0643H367.646L371.946 84.8528H373.307L377.622 96.0643ZM374.55 91.7408L372.791 86.9638C372.733 86.8074 372.676 86.5572 372.619 86.2132H372.587C372.535 86.5311 372.475 86.7813 372.408 86.9638L370.664 91.7408H374.55ZM388.318 96.0643H386.707L380.937 87.1279C380.791 86.9038 380.672 86.6693 380.578 86.4243H380.531C380.573 86.6641 380.593 87.1775 380.593 87.9645V96.0643H379.28V84.8528H380.984L386.598 93.6484C386.832 94.0133 386.984 94.2635 387.051 94.399H387.083C387.03 94.0759 387.004 93.526 387.004 92.7493V84.8528H388.318V96.0643ZM397.2 96.0643H391.258V84.8528H396.949V86.0412H392.571V89.7705H396.621V90.9511H392.571V94.8759H397.2V96.0643ZM402.227 92.0457C402.227 93.3748 401.945 94.4094 401.382 95.1496C400.819 95.8845 400.066 96.252 399.123 96.252C398.685 96.252 398.325 96.1894 398.044 96.0643V94.7665C398.325 94.9697 398.69 95.0714 399.138 95.0714C400.322 95.0714 400.913 94.068 400.913 92.0613V84.8528H402.227V92.0457ZM413.368 96.0643H411.914L410.725 92.9213H405.972L404.854 96.0643H403.392L407.692 84.8528H409.052L413.368 96.0643ZM410.295 91.7408L408.536 86.9638C408.479 86.8074 408.421 86.5572 408.364 86.2132H408.333C408.281 86.5311 408.221 86.7813 408.153 86.9638L406.41 91.7408H410.295ZM415.025 96.0643V84.8528H418.121C422.072 84.8528 424.048 86.6745 424.048 90.3178C424.048 92.0483 423.498 93.44 422.398 94.4928C421.303 95.5405 419.836 96.0643 417.996 96.0643H415.025ZM416.339 86.0412V94.8759H418.012C419.482 94.8759 420.626 94.4824 421.444 93.6954C422.263 92.9083 422.672 91.7929 422.672 90.3491C422.672 87.4772 421.145 86.0412 418.09 86.0412H416.339ZM430.772 96.252C429.182 96.252 427.907 95.7281 426.948 94.6805C425.994 93.6328 425.518 92.2698 425.518 90.5915C425.518 88.788 426.005 87.3495 426.98 86.2757C427.954 85.202 429.281 84.6652 430.959 84.6652C432.507 84.6652 433.753 85.1864 434.696 86.2288C435.645 87.2713 436.119 88.6343 436.119 90.3178C436.119 92.1473 435.635 93.5937 434.665 94.657C433.696 95.7203 432.398 96.252 430.772 96.252ZM430.865 85.8536C429.687 85.8536 428.731 86.2784 427.996 87.1279C427.261 87.9775 426.894 89.093 426.894 90.4742C426.894 91.8554 427.251 92.9683 427.965 93.8126C428.684 94.6518 429.62 95.0714 430.772 95.0714C432.002 95.0714 432.971 94.67 433.68 93.8674C434.389 93.0647 434.743 91.9414 434.743 90.4977C434.743 89.0174 434.399 87.8733 433.711 87.0654C433.023 86.2575 432.075 85.8536 430.865 85.8536ZM437.8 95.6109V94.0628C437.977 94.2192 438.189 94.3599 438.433 94.485C438.684 94.6101 438.944 94.717 439.215 94.8056C439.492 94.889 439.768 94.9541 440.044 95.001C440.32 95.0479 440.576 95.0714 440.81 95.0714C441.618 95.0714 442.22 94.9228 442.616 94.6257C443.018 94.3234 443.218 93.8908 443.218 93.3279C443.218 93.0256 443.151 92.7624 443.015 92.5382C442.885 92.3141 442.702 92.1108 442.468 91.9284C442.233 91.7408 441.954 91.5636 441.631 91.3968C441.313 91.2248 440.969 91.0449 440.599 90.8573C440.208 90.6592 439.843 90.4586 439.505 90.2553C439.166 90.052 438.871 89.8279 438.621 89.5829C438.371 89.3379 438.173 89.0617 438.027 88.7542C437.886 88.4414 437.816 88.0766 437.816 87.6596C437.816 87.1488 437.928 86.7058 438.152 86.3305C438.376 85.95 438.671 85.6373 439.036 85.3923C439.4 85.1473 439.815 84.9649 440.279 84.845C440.748 84.7251 441.225 84.6652 441.709 84.6652C442.814 84.6652 443.62 84.7981 444.125 85.0639V86.5416C443.463 86.0829 442.614 85.8536 441.576 85.8536C441.29 85.8536 441.003 85.8848 440.716 85.9474C440.43 86.0047 440.174 86.1011 439.95 86.2367C439.726 86.3722 439.544 86.5468 439.403 86.7605C439.262 86.9742 439.192 87.2348 439.192 87.5423C439.192 87.829 439.244 88.0766 439.348 88.2851C439.458 88.4936 439.617 88.6838 439.825 88.8558C440.034 89.0278 440.286 89.1946 440.584 89.3562C440.886 89.5178 441.232 89.695 441.623 89.8878C442.025 90.0859 442.405 90.2944 442.765 90.5133C443.124 90.7322 443.44 90.9746 443.711 91.2404C443.982 91.5062 444.196 91.8007 444.352 92.1239C444.514 92.447 444.594 92.8171 444.594 93.2341C444.594 93.7866 444.485 94.2557 444.266 94.6414C444.052 95.0219 443.76 95.332 443.39 95.5718C443.025 95.8115 442.603 95.9835 442.124 96.0878C441.644 96.1972 441.139 96.252 440.607 96.252C440.43 96.252 440.211 96.2363 439.95 96.205C439.69 96.179 439.424 96.1373 439.153 96.08C438.882 96.0278 438.624 95.9627 438.379 95.8845C438.139 95.8011 437.946 95.7099 437.8 95.6109Z" fill="#282E30"/>
                    </g>
                </svg>
                <div class="menu">
                    <img class="burg_menu" src="images/burgButt.png" alt="menu" tabindex="0">
                    <div class="menu_showBurgMenu">
                        <ul>
                            <li><label>Log Out</label></li>
                            <li><label>Sobre</label></li>
                            <li><label>Contato</label></li>
                        </ul>
                        
                    </div>
                </div>                    
            </div>
            <div class="right_side">
                <div class="caixa_pesq"><input class="ent_pesq" type="text" ></div>
                <div class="btn_lup"><img class="lupa_icon" src="images/lupa.png" alt=""></div>
            </div>
        </header>
        <div class="left_menu">
            <div class="left_links">
                <ul>
                    <li>
                        <a class="linkWhite" href="galeriaMario.html">PRODUTOS</a>
                    </li>
                    <li>
                        <a class="linkBlack" href="email2.html">PLANEJAR</a>
                    </li>
                </ul>
            </div>
            <div class="icon_usu"><img onclick="openPageLogin()" class="icon_usuario" src="images/iconUsuario.png" alt=""></div>
        </div>
        <div class="main">
            <div class="box_items">
                <div class="item1"><img src="images/nicho1pequeno.png"></div>
                <div class="item2"><img src="images/nicho2pequeno.png"></div>
                <div class="item3"><img src="images/nicho3pequeno.png"></div>
                <div class="item4"></div>
            </div>
            <div class="item_view"></div>
        </div>
    </section>
</body>
</html>