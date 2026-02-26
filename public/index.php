<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal MSE - Admin</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container-fluid bg-dark p-5">
        <header class="row width-container bg-white rounded p-3 mb-4">
            <h1 class="title text-center">
                <i class="bi bi-lightning-charge-fill"></i>
                Portal MSE
            </h1>
        </header>

        <main class="row width-container">
            <form action="" class="container bg-white">
                <div class="form-group row my-4">
                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="text" name="pessoa" id="pessoa" value="Pessoa" class="form-control input-lg text-center" disabled readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="text" name="fornecedor" id="fornecedor" value="Fornecedor" class="form-control input-lg text-center" disabled readonly>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <div class="col-md-6 ">
                        <div class="input-group mb-1">
                            <input type="text" name="cnpj" id="cnpj" class="form-control input-lg" placeholder="CNPJ">
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="input-group mb-1">
                            <input type="text" name="razao_social" id="razao_social" class="form-control input-lg" placeholder="Razão Social">
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="input-group mb-1">
                            <input type="text" name="nome_fantasia" id="nome_fantasia" class="form-control input-lg" placeholder="Nome Fantasia">
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="input-group mb-1">
                            <input type="text" name="inscricao" id="inscricao" class="form-control input-lg" placeholder="Inscrição Estadual/Isento">
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="icms" class="form-label">ICMS:</label>
                            <input type="text" id="icms" name="icms" class="form-control input-lg" placeholder="ICMS" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="situacao" class="form-label">Situação:</label>
                            <input type="text" id="situacao" name="situacao" class="form-control input-lg" placeholder="ICMS" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-1">
                            <input type="tel" id="telefone" name="telefone" class="form-control input-lg" placeholder="Telefone">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-1">
                            <input type="email" id="email" name="email" class="form-control input-lg" placeholder="E-mail">
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <div class="col-md-6">
                        <div class="input-group mb-1">
                            <input type="text" id="endereco" name="endereco" class="form-control input-lg" placeholder="Endereço">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-1">
                            <input type="number" id="numero" name="numero" class="form-control input-lg" placeholder="Número">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-1">
                            <input type="text" id="complemento" name="complemento" class="form-control input-lg" placeholder="Complemento">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-1">
                            <input type="text" id="bairro" name="bairro" class="form-control input-lg" placeholder="Bairro">
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <div class="col-md-6">
                        <div class="input-group mb-1">
                            <select name="pais" id="pais" class="form-select input-lg">
                                <option value="Brazil" selected>Brasil</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-1">
                            <select name="estado" id="estado" class="form-select input-lg">
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AM">Amazonas</option>
                                <option value="AP">Amapá</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="PR">Paraná</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SE">Sergipe</option>
                                <option value="SP">São Paulo</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-1">
                            <input type="text" id="cep" name="cep" class="form-control input-lg" placeholder="CEP">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-1">
                            <select name="municipio" id="municipio" class="municipio form-select input-lg w-260" placeholder="Município" required>
                                <option value="">Município</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <div class="col-md-12 text-center">
                        <h3 class="mb-3">Fornecedor de:</h3>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="servicos" id="servicos" value="Serviços" class="form-check-input">
                            <label for="servicos" class="form-check-label">Serviços</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="materiais" id="materiais" value="Materiais" class="form-check-input">
                            <label for="materiais" class="form-check-label">Materiais</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="locacao" id="locacao" value="Locação" class="form-check-input">
                            <label for="locacao" class="form-check-label">Locação</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <div class="col-md-12 text-center d-flex flex-column align-items-center">
                        <h3 class="mb-3">Ramo de Atuação:</h3>
                        <div class="input-group" style="width: 50%;">
                            <select name="ramo_atuacao" id="ramo_atuacao" class="form-select form-select-sm">
                                <option value=""></option>
                                <option value="1" class="Locação" data-ramo="Locação">MAQUINAS LINHA AMARELA, TERRAPLANAGEM E ESCAVAÇÃO, LOCAÇÃO DE</option>
                                <option value="2" class="Locação" data-ramo="Locação">CAMINHÕES PARA TRANSPORTE, LOCAÇÃO DE</option>
                                <option value="3" class="Locação" data-ramo="Locação">VEICULOS, LOCAÇÃO DE</option>
                                <option value="4" class="Locação" data-ramo="Locação">GERADORES, LOCAÇÃO DE</option>
                                <option value="5" class="Locação" data-ramo="Locação">COMPRESSOR DE AR, LOCAÇÃO DE</option>
                                <option value="6" class="Locação" data-ramo="Locação">MAQUINAS DE FUNDAÇÃO, LOCAÇÃO DE</option>
                                <option value="7" class="Locação" data-ramo="Locação">ANDAIMES, LOCAÇÃO DE</option>
                                <option value="8" class="Locação" data-ramo="Locação">CIMBRAMENTO, LOCACAÇÃO DE</option>
                                <option value="9" class="Locação" data-ramo="Locação">GRUA, ELEVADORES, BALANCIM, LOCAÇÃO DE</option>
                                <option value="10" class="Locação" data-ramo="Locação">MAQUINAS E FERRAMENTAS, LOCAÇÃO DE</option>
                                <option value="11" class="Locação" data-ramo="Locação">RÁDIOS, LOCAÇÃO DE</option>
                                <option value="12" class="Locação" data-ramo="Locação">CONTAINERES, LOCAÇÃO DE</option>
                                <option value="13" class="Locação" data-ramo="Locação">SANITÁRIOS E BANHEIROS, LOCAÇÃO DE</option>
                                <option value="14" class="Locação" data-ramo="Locação">PLATAFORMAS, PTA, LOCAÇÃO DE</option>
                                <option value="15" class="Locação" data-ramo="Locação">INSTRUMENTOS, LOCAÇÃO DE</option>
                                <option value="16" class="Locação" data-ramo="Locação">MOVEIS, LOCAÇÃO DE</option>
                                <option value="17" class="Locação" data-ramo="Locação">IMÓVEIS, LOCAÇÃO DE</option>
                                <option value="1" class="Materiais" data-ramo="Materiais">EPI, EPC E UNIFORMES, FORNECIMENTO DE</option>
                                <option value="2" class="Materiais" data-ramo="Materiais">FERRAMENTAS, CONSUMIVEIS E MAQUINAS ELÉTRICAS, FORNECIMENTO DE</option>
                                <option value="3" class="Materiais" data-ramo="Materiais">COMPUTADORES E ACESSÓRIOS, FORNECIMENTO DE</option>
                                <option value="4" class="Materiais" data-ramo="Materiais">MÓVEIS E UTENSILIOS, FORNECIMENTO DE</option>
                                <option value="5" class="Materiais" data-ramo="Materiais">PAPELARIA, FORNECIMENTO DE ITENS DE</option>
                                <option value="6" class="Materiais" data-ramo="Materiais">BOMBAS, FORNECIMENTO DE</option>
                                <option value="7" class="Materiais" data-ramo="Materiais">GERADORES DE ENERGIA, FORNECIMENTO DE</option>
                                <option value="8" class="Materiais" data-ramo="Materiais">TRANSFORMADORES, FORNECIMENTO DE</option>
                                <option value="9" class="Materiais" data-ramo="Materiais">ELETROCALHAS, PERFILADOS, LEITOS E ACESSÓRIOS, FORNECIMENTO DE</option>
                                <option value="10" class="Materiais" data-ramo="Materiais">ELETRODUTOS E ACESSÓRIOS, FORNECIMENTO DE</option>
                                <option value="11" class="Materiais" data-ramo="Materiais">MOTORES ELÉTRICOS E ACESSÓRIOS, FORNECIMENTO DE</option>
                                <option value="12" class="Materiais" data-ramo="Materiais">LUMINÁRIAS, LAMPADAS E ACESSÓRIOS, FORNECIMENTO DE</option>
                                <option value="13" class="Materiais" data-ramo="Materiais">POSTES E ACESSÓRIOS, FORNECIMENTO DE</option>
                                <option value="14" class="Materiais" data-ramo="Materiais">TUBOS DE AÇO CARBONO E CONEXÕES, FORNECIMENTO DE</option>
                                <option value="15" class="Materiais" data-ramo="Materiais">TUBOS DE AÇÕ INOX E CONEXÕES, FORNECIMENTO DE</option>
                                <option value="16" class="Materiais" data-ramo="Materiais">SUPORTAÇÃO E FIXAÇÃO, ITENS, FORNECIMENTO DE</option>
                                <option value="17" class="Materiais" data-ramo="Materiais">VÁLVULAS E CONEXÕES, FORNECIMENTO DE</option>
                                <option value="18" class="Materiais" data-ramo="Materiais">INCÊNDIO, BICOS SPK, ACOPLAMENTOS, ACESSÓRIOS, FORNECIMENTO DE</option>
                                <option value="19" class="Materiais" data-ramo="Materiais">DUTOS CORRUGADOS E CONEXOES, FORNECIMENTO DE</option>
                                <option value="20" class="Materiais" data-ramo="Materiais">CAIXAS PRÉ-FABRICADAS E MANILHAS DE CONCRETO, FORNECIMENTO DE</option>
                                <option value="21" class="Materiais" data-ramo="Materiais">PAINÉIS, QUADROS ELÉTRICOS, CHAPARIA E ACESSÓRIOS, FORNECIMENTO DE</option>
                                <option value="22" class="Materiais" data-ramo="Materiais">AUTOMAÇÃO, INSTRUMENTAÇÃO, EQUIPAMENTOS DE, FORNECIMENTO DE</option>
                                <option value="23" class="Materiais" data-ramo="Materiais">BARRAMENTO BLINDADO E ACESSÓRIOS, FORNECIMENTO DE</option>
                                <option value="24" class="Materiais" data-ramo="Materiais">CABOS, CONDUTORES ELÉTRICOS, CABOS DE SINAL, FORNECIMENTO DE</option>
                                <option value="25" class="Materiais" data-ramo="Materiais">EXD, COMPONENTES A PROVA DE EXPLOSÃO, FORNECIMENTO DE</option>
                                <option value="26" class="Materiais" data-ramo="Materiais">SPDA, ATERRAMENTO, PARA-RAIOS, ACESSÓRIOS, FORNECIMENTO DE</option>
                                <option value="27" class="Materiais" data-ramo="Materiais">MÉDIA TENSÃO, CABINES, EQUIPAMENTOS E ACESSÓRIOS, FORNECIMENTO DE</option>
                                <option value="28" class="Materiais" data-ramo="Materiais">MATERIAIS PARA CONSTRUÇÃO CIVIL EM GERAL, FORNECIMENTO DE</option>
                                <option value="29" class="Materiais" data-ramo="Materiais">MATERIAIS ELÉTRICOS DIVERSOS, FORNECIMENTO DE</option>
                                <option value="30" class="Materiais" data-ramo="Materiais">MATERIAIS HIDRAULICOS DIVERSOS, FORNECIMENTO DE</option>
                                <option value="31" class="Materiais" data-ramo="Materiais">TUBOS E CONEXÕES DE PVC, CPVC, PEAD, PPR, FORNECIMENTO DE</option>
                                <option value="32" class="Materiais" data-ramo="Materiais">PRÉ-MOLDADOS, ELEMENTOS DE CONCRETO, POSTES, ETC, FORNECIMENTO DE</option>
                                <option value="33" class="Materiais" data-ramo="Materiais">FERRO E AÇO, CHAPAS, VERGALHÕES, PERFIS, ETC, FORNECIMENTO DE</option>
                                <option value="34" class="Materiais" data-ramo="Materiais">ALARME DE INCÊNDIO, INTRUSÃO, CONTROLE DE ACESSO, FORNECIMENTO DE</option>
                                <option value="35" class="Materiais" data-ramo="Materiais">TUBOS E CONEXÕES DE COBRE, FORNECIMENTO DE</option>
                                <option value="36" class="Materiais" data-ramo="Materiais">TINTAS E ACESSÓRIOS DE PINTURA, FORNECIMENTO DE</option>
                                <option value="37" class="Materiais" data-ramo="Materiais">GRELHAS, DIFUSORES, DUTOS, DAMPER E ACESSÓRIOS, FORNECIMENTO DE</option>
                                <option value="38" class="Materiais" data-ramo="Materiais">AHU, FANCOIL, VRF, ROOFTOP, E ACESSÓRIOS, FORNECIMENTO DE</option>
                                <option value="39" class="Materiais" data-ramo="Materiais">CHILLER, FORNECIMENTO DE</option>
                                <option value="40" class="Materiais" data-ramo="Materiais">LOUÇAS E METAIS SANITÁRIOS, FORNECIMENTO DE</option>
                                <option value="41" class="Materiais" data-ramo="Materiais">SISTEMA SIFONADO, GEBERIT, MEXICHEM, EPAMS, ETC, FORNECIMENTO DE</option>
                                <option value="42" class="Materiais" data-ramo="Materiais">FERRO FUNDIDO, K7, K9, PAM, ETC, FORNECIMENTO DE</option>
                                <option value="43" class="Materiais" data-ramo="Materiais">TORRE DE RESFRIAMENTO E ACESSÓRIOS, FORNECIMENTO DE</option>
                                <option value="44" class="Materiais" data-ramo="Materiais">FILTROS E ACESSÓRIOS, FORNECIMENTO DE</option>
                                <option value="45" class="Materiais" data-ramo="Materiais">ABRIGOS DE MANGUEIRA, HIDRANTES E ACESSÓRIOS, FORNECIMENTO DE</option>
                                <option value="46" class="Materiais" data-ramo="Materiais">BARRAMENTO DE COBRE NU, BARRAMENTO DE ALUMINIO, ACESSÓRIOS, FORNECIMENTO DE</option>
                                <option value="47" class="Materiais" data-ramo="Materiais">NO-BREAK, UPS, ESTABILIZADOR, ACESSÓRIOS, FORNECIMENTO DE</option>
                                <option value="48" class="Materiais" data-ramo="Materiais">MATERIAIS DE ESCRITÓRIO, PAPELARIA, ETC, FORNECIMENTO DE</option>
                                <option value="49" class="Materiais" data-ramo="Materiais">PRODUTOS DE MERCEARIA, LIMPEZA, ETC, FORNECIMENTO DE</option>
                                <option value="50" class="Materiais" data-ramo="Materiais">COMBUSTIVEIS, LUBRIFICANTES, FILTROS, FORNECIMENTO DE</option>
                                <option value="51" class="Materiais" data-ramo="Materiais">CONDULETES, CAIXAS DE PASSAGEM, ACESSÓRIOS EM ALUMINIO, FORNECIMENTO DE</option>
                                <option value="52" class="Materiais" data-ramo="Materiais">CANALETAS EM ALUMINIO E ACESSÓRIOS, FORNECIMENTO DE</option>
                                <option value="53" class="Materiais" data-ramo="Materiais">RABICHOS INJETADOS, CONECTORES, PLUGS E ACESSÓRIOS, FORNECIMENTO DE</option>
                                <option value="54" class="Materiais" data-ramo="Materiais">TOMADAS E ACESSÓRIOS, FORNECIMENTO DE</option>
                                <option value="55" class="Materiais" data-ramo="Materiais">VENTILADORES, EXAUSTORES, SOPRADORES, ETC, FORNECIMENTO DE</option>
                                <option value="56" class="Materiais" data-ramo="Materiais">PEÇAS PARA MANUTENÇÃO DE VEICULOS, FORNECIMENTO DE</option>
                                <option value="57" class="Materiais" data-ramo="Materiais">RESERVATÓRIOS METÁLICOS, TANQUES, FORNECIMENTO DE</option>
                                <option value="58" class="Materiais" data-ramo="Materiais">VALVULAS, FLANGES E CONEXÕES, FORNECIMENTO DE</option>
                                <option value="59" class="Materiais" data-ramo="Materiais">BRINDES, MATERIAL DE MARKETING, FORNECIMENTO DE</option>
                                <option value="60" class="Materiais" data-ramo="Materiais">MATERIAL GRAFICO, PLACAS, SINALIZAÇÃO, FORNECIMENTO DE</option>
                                <option value="1" class="Serviços" data-ramo="Serviços">INSTALAÇÕES ELÉTRICAS DE BT</option>
                                <option value="2" class="Serviços" data-ramo="Serviços">INSTALAÇÕES ELÉTRICAS DE MT</option>
                                <option value="3" class="Serviços" data-ramo="Serviços">INSTALAÇÕES DE COMBATE A INCÊNDIO, HIDRANTES E SPRINKLER</option>
                                <option value="4" class="Serviços" data-ramo="Serviços">INSTALAÇÕES HIDRAULICAS DE PVC, PEAD, CPVC, ETC.</option>
                                <option value="5" class="Serviços" data-ramo="Serviços">INSTALAÇÕES HIDRAULICAS DE AÇO CARBONO, INOX, ETC.</option>
                                <option value="6" class="Serviços" data-ramo="Serviços">EQUIPAMENTOS PESADOS, MONTAGEM DE</option>
                                <option value="7" class="Serviços" data-ramo="Serviços">GASES INDUSTRIAIS, MONTAGEM DE</option>
                                <option value="8" class="Serviços" data-ramo="Serviços">CLEAN UTILITIES, MONTAGEM DE</option>
                                <option value="9" class="Serviços" data-ramo="Serviços">DUTOS DE AR CONDICIONADO, MONTAGEM DE</option>
                                <option value="10" class="Serviços" data-ramo="Serviços">ISOLAMENTO TÉRMICO, MONTAGEM DE</option>
                                <option value="11" class="Serviços" data-ramo="Serviços">ANDAIMES E CIMBRAMENTO, MONTAGEM DE</option>
                                <option value="12" class="Serviços" data-ramo="Serviços">TANQUES DE AÇO, MONTAGEM DE</option>
                                <option value="13" class="Serviços" data-ramo="Serviços">ALVENARIA, EXECUÇÃO DE</option>
                                <option value="14" class="Serviços" data-ramo="Serviços">FORMAS E LAJES, MONTAGEM DE</option>
                                <option value="15" class="Serviços" data-ramo="Serviços">PAVIMENTAÇÃO, EXECUCAÇÃO DE</option>
                                <option value="16" class="Serviços" data-ramo="Serviços">PISOS DE CONCRETO, EXECUÇÃO DE</option>
                                <option value="17" class="Serviços" data-ramo="Serviços">PINTURA DE ALVENARIA, EXECUÇÃO DE</option>
                                <option value="18" class="Serviços" data-ramo="Serviços">PINTURA INDUSTRIAL DE TUBULAÇÕES E ESTRUTURAS METÁLICAS, EXECUÇÃO DE</option>
                                <option value="19" class="Serviços" data-ramo="Serviços">STEEL FRAME, MONTAGEM DE</option>
                                <option value="20" class="Serviços" data-ramo="Serviços">DRYWALL, MONTAGEM DE</option>
                                <option value="21" class="Serviços" data-ramo="Serviços">ESTRUTURA METÁLICA, MONTAGEM DE</option>
                                <option value="22" class="Serviços" data-ramo="Serviços">TERRAPLANAGEM, EXECUÇÃO DE</option>
                                <option value="23" class="Serviços" data-ramo="Serviços">IMPERMEABILIZAÇÃO, EXECUÇÃO DE</option>
                                <option value="24" class="Serviços" data-ramo="Serviços">LIMPEZA, SERVIÇOS DE</option>
                                <option value="25" class="Serviços" data-ramo="Serviços">TRANSPORTE, SERVIÇOS DE</option>
                                <option value="26" class="Serviços" data-ramo="Serviços">MONITORAMENTO, SEGURANÇA PATRIMONIAL, SERVIÇOS DE</option>
                                <option value="27" class="Serviços" data-ramo="Serviços">TREINAMENTO, CURSOS, SERVIÇOS DE</option>
                                <option value="28" class="Serviços" data-ramo="Serviços">HOSPEDAGEM, SERVIÇOS DE</option>
                                <option value="29" class="Serviços" data-ramo="Serviços">REFEIÇÃO, SERVIÇOS DE</option>
                                <option value="30" class="Serviços" data-ramo="Serviços">COMUNICAÇÃO, PROPAGANDA, MARKETING, SERVIÇOS DE</option>
                                <option value="31" class="Serviços" data-ramo="Serviços">CALIBRAÇÃO DE EQUIPAMENTOS, SERVIÇOS DE</option>
                                <option value="32" class="Serviços" data-ramo="Serviços">JARDINAGEM, PAISAGISMO, ETC, SERVIÇOS DE</option>
                                <option value="33" class="Serviços" data-ramo="Serviços">CERTIFICAÇÃO, INSPEÇÃO, QUALIDADE, CALIBRAGEM, ETC, SERVIÇOS DE</option>
                                <option value="34" class="Serviços" data-ramo="Serviços">EXAMES, SERVIÇOS MÉDICOS E HOSPITALARES, SERVIÇOS DE</option>
                                <option value="35" class="Serviços" data-ramo="Serviços">PROJETOS, CONSULTORIAS, LAUDOS, SERVIÇOS DE</option>
                                <option value="36" class="Serviços" data-ramo="Serviços">ADVOCACIA, CONTABILIDADE, ASSESSORIA, SERVIÇOS DE</option>
                                <option value="37" class="Serviços" data-ramo="Serviços">TI, PROGRAMAÇÃO, IMPLANTAÇÃO, SERVIÇOS DE</option>
                            </select>
                            </select>
                            <button class="btn btn-primary">
                                <i class="bi bi-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <div class="col-md-6">
                        <div class="input-group mb-1">
                            <input type="text" id="cnpj_login" name="cnpj_login" class="form-control input-lg" placeholder="CNPJ">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-1">
                            <input type="text" id="nome" name="nome" class="form-control input-lg" placeholder="Nome">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-1">
                            <input type="password" id="register_password" name="register_password" class="form-control input-lg" placeholder="Senha">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                <i class="bi bi-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-1">
                            <input type="password" id="register_password_verify" name="register_password_verify" class="form-control input-lg" placeholder="Senha">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                <i class="bi bi-eye"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <div class="col-md-12 text-end">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-chevron-right"></i> Cadastrar</button>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <div class="col-md-12 text-center">
                        <small>Já tem uma conta?</small> <a href="javascript:void(0)" class="link-underline link-underline-opacity-0 link-underline-opacity-75-hover"><small>Faça Login</small></a>
                    </div>
                </div>
            </form>
        </main>
    </div>
</body>

</html>