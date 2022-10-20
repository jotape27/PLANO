<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <title>Cadastro</title>
    <script src="js/js.js"></script>
</head>

<body class="cadastro">
    <div class="preloader">
        <div class="loader"></div>
    </div>
    <div class="darkthemes">
        <input type="checkbox" class="checkbox" id="chk">
        <label class="label" for="chk">
            <div class="lua">
                <ion-icon name="moon-sharp"></ion-icon>
            </div>
            <div class="sol">
                <ion-icon name="sunny"></ion-icon>
            </div>
            <div class="ball"></div>
        </label>
    </div>
    <div class="img">
        <img src="img/plano-dark.png" class="img-dark">
        <img src="img/plano-light.png" class="img-light" hidden>
        <img class="imagem2" src="img/Spreadsheets-cuate.svg">
    </div>
    <form onsubmit="return validatePassword()" method="POST" action="php/crud_create.php">
        <fieldset class="field1">
            <div class="login">
                <h1 class="cadastro">Cadastro</h1>
                <div class="part1">
                    <div class="gap">
                        <div class="lado">
                            <div class="input-box">
                                <input type="text" name="nome" placeholder="⠀" required>
                                <span>Nome</span>
                            </div>
                            <div class="input-box">
                                <input type="text" name="sobrenome" placeholder="⠀" required>
                                <span>Sobrenome</span>
                            </div>
                        </div>
                        <div class="lado">
                            <div class="input-box">
                                <input type="text" name="celular" onkeydown="masktel()" id="celular" placeholder="⠀" maxlength="15" required>
                                <span>celular</span>
                                <p class="desc">digite apenas números</p>
                            </div>
                            <div class="input-box">
                                <input type="email" name="email" id="email" placeholder="⠀" required>
                                <span>email</span>
                            </div>
                        </div>
                        <div class="lado">
                            <div class="input-box">
                                <input type="date" id="date" name="nascimento" placeholder="⠀" required>
                                <span>data DE NasCimento</span>
                            </div>
                            <div class="input-box">
                                <input type="text" name="cpf" id="cpf" onkeydown="maskcpf()" maxlength="14" placeholder="⠀" required>
                                <span>CPF</span>
                                <p class="desc">digite apenas números</p>
                            </div>
                        </div>
                        <div class="lado">
                            <div class="input-box">
                                <input type="password" id="senha" placeholder="⠀" onkeyup="return validatePassword()" minlength=" 8" required>
                                <span>Senha</span>
                                <button type="button" class="toogle-show">
                                    <div class="show" onclick="show()">
                                        <ion-icon name="eye"></ion-icon>
                                    </div>
                                    <div class="hide" onclick="hide()">
                                        <ion-icon name="eye-off-sharp"></ion-icon>
                                    </div>
                                    <div class="alert" hidden>
                                        <ion-icon name="alert-outline"></ion-icon>
                                    </div>
                                </button>
                            </div>
                            <div class="input-box">
                                <input type="password" id="valsenha" name="valsenha" onkeyup="return validatePassword()" placeholder="⠀" minlength="8" required>
                                <span>confirmar Senha</span>
                                <button type="button" class="toogle-show">
                                    <div class="valshow" onclick="valshow()">
                                        <ion-icon name="eye"></ion-icon>
                                    </div>
                                    <div class="valhide" onclick="valhide()">
                                        <ion-icon name="eye-off-sharp"></ion-icon>
                                    </div>
                                    <div class="alert" hidden>
                                        <ion-icon name="alert-outline"></ion-icon>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div class="lado">
                            <div class="input-box">
                                <select name="genero" required>
                                    <option value="" hidden disabled selected>Selecione...</option>
                                    <option value="m">Masculino</option>
                                    <option value="f">Feminino</option>
                                    <option value="o">Outros</option>
                                </select>
                                <span>Gênero</span>
                            </div>
                            <div class="botao" onclick="closeCadastro()">
                                <button type="button">continuar</button>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="part2" hidden>
                    <div class="gap">
                        <div class="lado">
                            <div class="input-box">
                                <select id="estado" name="estado" required>
                                    <option value='' hidden disabled selected>Selecione...</option>
                                    <option value='AC'>Acre</option>
                                    <option value='AL'>Alagoas</option>
                                    <option value='AP'>Amapá</option>
                                    <option value='AM'>Amazonas</option>
                                    <option value='BA'>Bahia</option>
                                    <option value='CE'>Ceará</option>
                                    <option value='DF'>Distrito Federal</option>
                                    <option value='ES'>Espírito Santo</option>
                                    <option value='GO'>Goiás</option>
                                    <option value='MA'>Maranhão</option>
                                    <option value='MT'>Mato Grosso</option>
                                    <option value='MS'>Mato Grosso do Sul</option>
                                    <option value='MG'>Minas Gerais</option>
                                    <option value='PA'>Pará</option>
                                    <option value='PB'>Paraíba</option>
                                    <option value='PR'>Paraná</option>
                                    <option value='PE'>Pernambuco</option>
                                    <option value='PI'>Piauí</option>
                                    <option value='RJ'>Rio de Janeiro</option>
                                    <option value='RN'>Rio Grande do Norte</option>
                                    <option value='RS'>Rio Grande do Sul</option>
                                    <option value='RO'>Rondônia</option>
                                    <option value='RR'>Roraima</option>
                                    <option value='SC'>Santa Catarina</option>
                                    <option value='SP'>São Paulo</option>
                                    <option value='SE'>Sergipe</option>
                                    <option value='TO'>Tocantins</option>

                                </select>
                                <span>estado</span>
                            </div>
                            <div class="input-box">
                                <select name="cidade" id="cidade" required>
                                    <option value='' hidden disabled selected>Selecione um estado antes</option>
                                </select>
                                <span>cidade</span>
                            </div>
                        </div>
                        <div class="lado">
                            <div class="input-box">
                                <select name="logradouro" required>
                                    <option value="" hidden disabled selected>Selecione...</option>
                                    <option value="111">Avenida</option>
                                    <option value="222">Beco</option>
                                    <option value="333">Chácara</option>
                                    <option value="444">Condomínio</option>
                                    <option value="555">Distrito</option>
                                    <option value="666">Escadaria</option>
                                    <option value="777">Estação</option>
                                    <option value="888">Estrada</option>
                                    <option value="999">Favela</option>
                                    <option value="122">Fazenda</option>
                                    <option value="133">Ladeira</option>
                                    <option value="144">Morro</option>
                                    <option value="155">Parque</option>
                                    <option value="166">Residencial</option>
                                    <option value="177">Rodovia</option>
                                    <option value="188">Rua</option>
                                    <option value="199">Trevo</option>
                                    <option value="200">Vale</option>
                                    <option value="211">Via</option>
                                    <option value="233">Viaduto</option>
                                    <option value="244">Viela</option>
                                    <option value="255">Vila</option>
                                </select>
                                <span>logradouro</span>
                            </div>
                            <div class="input-box">
                                <input type="text" name="endereco" id="endereco" placeholder="⠀" required>
                                <span>endereço</span>
                            </div>
                        </div>
                        <div class="lado">
                            <div class="input-box">
                                <input type="text" id="cep" name="cep" onkeydown="maskcep()" maxlength="9" placeholder="⠀" required>
                                <span>cep</span>
                                <p class="desc">digite apenas números</p>
                            </div>
                            <div class="input-box">
                                <input type="number" name="numero" id="num" placeholder="⠀" required>
                                <span>número</span>
                            </div>
                        </div>
                        <div class="lado">
                            <div class="botao" onclick="openCadastro()">
                                <button type="button">VoLtar</button>
                            </div>
                            <div class="botao" onclick="closeEndereco()">
                                <button type="button">continuar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="part3" hidden>
                    <div class="gap">
                        <div class="lado">
                            <div class="input-box">
                                <select name="profissao" id="profissao">
                                    <option value="" hidden disabled selected>Selecione sua profissão</option>
                                    <option value="1110">Administrador(a)</option>
                                    <option value="1111">Advogado(a)</option>
                                    <option value="1112">Agente Ambiental</option>
                                    <option value="1113">Agricultor(a)</option>
                                    <option value="1114">Agrônomo(a)</option>
                                    <option value="1115">Agropecuarista</option>
                                    <option value="1116">Ajudante</option>
                                    <option value="1117">Almoxarife</option>
                                    <option value="1118">Analista</option>
                                    <option value="1119">Apicultor(a)</option>
                                    <option value="1120">Aposentado(a)</option>
                                    <option value="1121">Arquiteto(a)</option>
                                    <option value="1122">Artesão(ã)</option>
                                    <option value="1123">Assistente</option>
                                    <option value="1124">Atendente</option>
                                    <option value="1125">Ator/Atriz</option>
                                    <option value="1126">Auditor(a)</option>
                                    <option value="1127">Autônomo(a)</option>
                                    <option value="1128">Auxiliar</option>
                                    <option value="1129">Avicultor(a)</option>
                                    <option value="1130">Bailarina(o)</option>
                                    <option value="1131">Bancário(a)</option>
                                    <option value="1132">Biólogo(a)</option>
                                    <option value="1133">Biomédico(a)</option>
                                    <option value="1134">Cabeleireiro(a)</option>
                                    <option value="1135">Caminhoneiro(a)</option>
                                    <option value="1136">Carregador</option>
                                    <option value="1137">Catador(a)</option>
                                    <option value="1138">Catraqueiro</option>
                                    <option value="1139">Cirurgião(ã)</option>
                                    <option value="1140">Citricultor(a)</option>
                                    <option value="1141">Comerciante</option>
                                    <option value="1142">Construtor</option>
                                    <option value="1143">Consultor(a)</option>
                                    <option value="1144">Contador(a)</option>
                                    <option value="1145">Coordenador(a)</option>
                                    <option value="1146">Coreógrafo</option>
                                    <option value="1147">Corretor(a)</option>
                                    <option value="1148">Costureiro(a)</option>
                                    <option value="1149">Cozinheiro(a)</option>
                                    <option value="1150">Cronoanalista</option>
                                    <option value="1151">Cuidador(a)</option>
                                    <option value="1152">Dançarina</option>
                                    <option value="1153">Delegado</option>
                                    <option value="1154">Dentista</option>
                                    <option value="1155">Desenvolvedor</option>
                                    <option value="1156">Despachante</option>
                                    <option value="1157">Desempregado</option>
                                    <option value="1158">Diretor(a)</option>
                                    <option value="1159">Economista</option>
                                    <option value="1160">Eletricista</option>
                                    <option value="1161">Embalador(a)</option>
                                    <option value="1162">Empregada Doméstica</option>
                                    <option value="1163">Empresário(a)</option>
                                    <option value="1164">Encarregado(a)</option>
                                    <option value="1165">Enfermeiro(a)</option>
                                    <option value="1166">Engenheiro(a)</option>
                                    <option value="1167">Especialista em Banco de Dados</option>
                                    <option value="1168">Estudante</option>
                                    <option value="1169">Farmacêutica(o)</option>
                                    <option value="1170">Faturista</option>
                                    <option value="1171">Faxineira(o)</option>
                                    <option value="1172">Ferramenteiro</option>
                                    <option value="1173">Ferroviário</option>
                                    <option value="1174">Fisioterapeuta</option>
                                    <option value="1175">Floricultor(a)</option>
                                    <option value="1176">Fotógrafo(a)</option>
                                    <option value="1177">Funcionário(a) Público(a)</option>
                                    <option value="1178">Funileiro</option>
                                    <option value="1179">Geógrafo(a)</option>
                                    <option value="1180">Geólogo(a)</option>
                                    <option value="1181">Gerente</option>
                                    <option value="1182">Gestor(a)</option>
                                    <option value="1183">Impressor</option>
                                    <option value="1184">Industriário(a)</option>
                                    <option value="1185">Inspetor de Qualidade</option>
                                    <option value="1186">Instrumentista</option>
                                    <option value="1187">Intérprete</option>
                                    <option value="1188">Jardineiro</option>
                                    <option value="1189">Jornalista</option>
                                    <option value="1190">Lavrador(a)</option>
                                    <option value="1191">Marceneiro</option>
                                    <option value="1192">Matemático(a)</option>
                                    <option value="1193">Mecânico</option>
                                    <option value="1194">Medico(a)</option>
                                    <option value="1195">Metalúrgico</option>
                                    <option value="1196">Militar</option>
                                    <option value="1197">Motorista</option>
                                    <option value="1198">Nutricionista</option>
                                    <option value="1199">Odontólogo(a)</option>
                                    <option value="1210">Oleiro(a)</option>
                                    <option value="1211">Operador(a)</option>
                                    <option value="1212">Orientador(a)</option>
                                    <option value="1213">Outros...</option>
                                    <option value="1214">Pecuarista</option>
                                    <option value="1215">Pedagogo(a)</option>
                                    <option value="1216">Pedreiro</option>
                                    <option value="1217">Policial</option>
                                    <option value="1218">Policial Rodoviário</option>
                                    <option value="1219">Porteiro(a)</option>
                                    <option value="1220">Produtor(a)</option>
                                    <option value="1221">Professor(a)</option>
                                    <option value="1222">Programador(a)</option>
                                    <option value="1223">Psicólogo(a)</option>
                                    <option value="1224">Publicitário(a)</option>
                                    <option value="1225">Químico(a)</option>
                                    <option value="1226">Reciclador(a)</option>
                                    <option value="1227">Secretária(o)</option>
                                    <option value="1228">Segurança</option>
                                    <option value="1229">Serralherio</option>
                                    <option value="1230">Servidor(a) Público(a)</option>
                                    <option value="1231">Sociólogo</option>
                                    <option value="1232">Supervisor(a)</option>
                                    <option value="1233">Tabelião</option>
                                    <option value="1234">Taxista</option>
                                    <option value="1235">Tecelão</option>
                                    <option value="1236">Técnico(a) em ...</option>
                                    <option value="1237">Tecnólogo(a)</option>
                                    <option value="1238">Telefonista</option>
                                    <option value="1239">Tintureiro</option>
                                    <option value="1240">Torneiro Mecânico</option>
                                    <option value="1241">Tradutor(a)</option>
                                    <option value="1242">Urdidor</option>
                                    <option value="1243">Vendedor(a)</option>
                                    <option value="1244">Vidreiro(a)</option>
                                    <option value="1245">Vigilante</option>
                                    <option value="1246">Web Designer</option>
                                    <option value="1247">Zootécnico(a)</option>
                                </select>
                                <!--input type="text" id="dinh" name="renda" onkeydown="maskcep()" maxlength="9" placeholder="⠀" required-->
                                <span>profissão</span>
                            </div>
                            <div class="input-box">
                                <select name="perfil">
                                    <option value="" hidden disabled selected>Você se considera um...</option>
                                    <option value="11">Gastador</option>
                                    <option value="22">Moderado</option>
                                    <option value="33">Investidor</option>
                                </select>
                                <span>perfil</span>
                            </div>
                        </div>
                        <div class="lado">
                            <!--div class="input-box">
<input type="text" id="dinheiro2" name="gasto" onkeyup="maskMoeda2()" maxlength="14" placeholder="⠀" required>
<span>Gasto</span>
<p class="desc">todos os tipos de gastos somados</p>
</div-->
                            <div class="input-box subject">
                                <input type="text" id="dinheiro" name="renda" onkeyup="maskMoeda()" maxlength="14" placeholder="⠀" required>
                                <span>renda</span>
                                <p class="desc">todos os tipos de renda mensal somados</p>
                            </div>
                        </div>
                        <div class="lado">
                            <div class="botao" onclick="openEndereco()">
                                <button type="button">VoLtar</button>
                            </div>
                            <div class="botao" onclick="closePlan()">
                                <button type="button">continuar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="part4" hidden>
                    <div class="gap">
                        <h1 class="h1slide">Quantos porcentos da sua renda será destinada à:</h1>
                        <div class="lado">
                            <div class="range">

                                <div class="sliderValue">
                                    <span id="spanSlide1">50</span>
                                </div>
                                <div class="fieldSlide">
                                    <div class="value left">0</div>
                                    <div class="input-slide">
                                        <span>Gastos Fixos</span>
                                    </div>
                                    <input type="range" min="3" max="100" name="fixo" value="50" steps="1" id="slideFixo">
                                    <div class="value right">100</div>
                                </div>
                            </div>

                        </div>
                        <div class="lado">

                            <div class="range">

                                <div class="sliderValue">
                                    <span id="spanSlide2">50</span>
                                </div>
                                <div class="fieldSlide">
                                    <div class="value left">0</div>
                                    <div class="input-slide">
                                        <span>Gastos Variáveis</span>
                                    </div>
                                    <input type="range" min="3" max="100" name="variavel" value="50" steps="1" id="slideVariavel">
                                    <div class="value right">100</div>
                                </div>
                            </div>

                        </div>
                        <div class="lado">

                            <div class="range">

                                <div class="sliderValue">
                                    <span id="spanSlide3">50</span>
                                </div>

                                <div class="fieldSlide">
                                    <div class="value left">0</div>
                                    <div class="input-slide">
                                        <span>Gastos de Lazer</span>
                                    </div>
                                    <input type="range" min="3" max="100" name="lazer" value="50" steps="1" id="slideLazer">
                                    <div class="value right">100</div>
                                </div>
                            </div>

                        </div>
                        <div class="lado">

                            <div class="range">

                                <div class="sliderValue">
                                    <span id="spanSlide4">50</span>
                                </div>
                                <div class="fieldSlide">
                                    <div class="value left">0</div>
                                    <div class="input-slide">
                                        <span>Investimentos</span>
                                    </div>
                                    <input type="range" min="3" max="100" name="investimento" value="50" steps="1" id="slideInvestimento">
                                    <div class="value right">100</div>
                                </div>
                            </div>

                        </div>
                        <div class="lado">
                            <div class="botao" onclick="openPlan()">
                                <button type="button">VoLtar</button>
                            </div>
                            <div class="botao">
                                <button type="submit" name="btn-cadastro">Cadastrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="link">Caso possua uma conta, entre nela <a href="login.php">aqui</a></p>

        </fieldset>
    </form>

    <?php include_once 'php/footer.php'; ?>

    <script src="js/graficos.js"></script>
    <script src="js/cidades.js"></script>
    <script src="js/profissao.js"></script>
    <script src="js/selecionador.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="js/load.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>