let estado = document.getElementById("estado");

/// muito chato procurar todos os municípios em cada estado
/// pq eu fui fazer isso
/// depois que eu fiz tudo veio a ideia de implementar uma API do IBGE
/// mas já tinha tudo pronto

const value_cidades = {
    'AC': ['Acrelândia', 'Assis Brasil', 'Brasiléia', 'Bujari', 'Capixaba', 'Cruzeiro do Sul', 'Epitaciolândia', 'Feijó', 'Jordão', 'Manoel Urbano', 'Marechal Thaumaturgo', 'Mâncio Lima', 'Plácido de Castro', 'Porto Acre', 'Porto Walter', 'Rio Branco', 'Rodrigues Alves', 'Santa Rosa do Purus', 'Sena Madureira', 'Tarauacá', 'Xapuri'],

    'AL': ['Água Branca', 'Anadia', 'Arapiraca', 'Atalaia', 'Barra de Santo Antônio', 'Barra de São Miguel', 'Batalha', 'Belém', 'Belo Monte', 'Boca da Mata', 'Branquinha', 'Cacimbinhas', 'Cajueiro', 'Campestre	', 'Campo Alegre	', 'Campo Grande	', 'Canapi', 'Capela', 'Carneiros', 'Chã Preta', 'Coité do Noia', 'Colônia Leopoldina', 'Coqueiro Seco', 'Coruripe', 'Craíbas', 'Delmiro Gouveia', 'Dois Riachos', 'Estrela de Alagoas', 'Feira Grande', 'Feliz Deserto', 'Flexeiras', 'Girau do Ponciano', 'Ibateguara', 'Igaci', 'Igreja Nova', 'Inhapi', 'Jacaré dos Homens', 'Jacuípe', 'Japaratinga', 'Jaramataia', 'Jequiá da Praia', 'Joaquim Gomes', 'Jundiá', 'Junqueiro', 'Lagoa da Canoa', 'Limoeiro de Anadia', 'Maceió', 'Major Izidoro', 'Mar VermelhoMajor Izidoro', 'Maragogi', 'Maravilha', 'Marechal Deodoro', 'Maribondo', 'Mata Grande', 'Matriz de Camaragibe', 'Messias', 'Minador do Negrão', 'Monteirópolis', 'Murici', 'Novo Lino', "Olho d'Água das Flores", "Olho d'Água do Casado", "Olho d'Água Grande", 'Olivença', 'Ouro Branco', 'Palestina', 'Palmeira dos Índios', 'Pão de Açúcar', 'Pariconha', 'Paripueira', 'Passo de Camaragibe', 'Passo de Camaragibe', 'Paulo Jacinto', 'Penedo', 'Piaçabuçu', 'Pilar', 'Pindoba', 'Piranhas', 'Poço das Trincheiras', 'Porto Calvo', 'Porto de Pedras', 'Porto Real do Colégio', 'Quebrangulo', 'Rio Largo', 'Roteiro', 'Santa Luzia do Norte', 'Santana do Ipanema', 'Santana do Mundaú', 'São Brás', 'São José da Laje', 'São José da Tapera', 'São Luís do Quitunde', 'São Miguel dos Campos', 'São Miguel dos Milagres', 'São Sebastião', 'Satuba', 'Senador Rui Palmeira', "Tanque d'Arca", 'Taquarana', 'Teotônio Vilela', 'Traipu', 'União dos Palmares', 'Viçosa',],
    
    'AP': ['Amapá', 'Calçoene', 'Cutias', 'Ferreira Gomes', 'Itaubal', 'Laranjal do Jari', 'Macapá', 'Mazagão', 'Oiapoque', 'Pedra Branca do Amapara', 'Porto Branco', 'Porto Grande', 'Pracuuba', 'Santana', 'Serra do navio', 'Tartarugalzinho', 'Vitória do Jari'],
    
    'AM': ['Alvarães', 'Amaturá', 'Anamã', 'Anori', 'Apuí', 'Atalaia do Norte', 'Autazes', 'Barcelos', 'Barreirinha', 'Benjamin Constant', 'Beruri', 'Boa Vista do Ramos', 'Boca do Acre', 'Borba', 'Caapiranga', 'Canutama', 'Carauari', 'Careiro', 'Careiro da Várzea', 'Coari', 'Codajás', 'Eirunepé', 'Envira', 'Fonte Boa', 'Guajará', 'Humaitá', 'Ipixuna', 'Iranduba', 'Itacoatiara', 'Itamarati', 'Itapiranga', 'Japurá', 'Juruá', 'Jutaí', 'Lábrea', 'Manacapuru', 'Manaquiri', 'Manaus', 'Manicoré', 'Maraã', 'Maués', 'Nhamundá', 'Nova Olinda do Norte', 'Novo Airão', 'Novo Aripuanã', 'Parintins', 'Pauini', 'Presidente Figueiredo', 'Rio Preto da Eva', 'Santa Isabel do Rio Negro', 'Santo Antônio do Içá', 'São Gabriel da Cachoeira', 'São Paulo de Olivença', 'São Sebastião do Uatumã', 'Silves', 'Tabatinga', 'Tapauá	', 'Tefé', 'Tonantins', 'Uarini', 'Urucará', 'Urucurituba',], 
    
    'BA': ['', ''],

    'CE': ['Abaiara', 'Acarape', 'Acaraú', 'Acopiara', 'Aiuaba', 'Alcântara', 'Altaneira', 'Alto Sant', 'Amontada', 'Antonina do Norte', 'Apuiarés', 'Aquiraz', 'Aracati', 'Aracoiaba', 'Ararendá', 'Araripe', 'Aratuba', 'Arneiroz', 'Assaré', 'Aurora', 'Baixio', 'Banabuiú', 'Barbalha', 'Barreira', 'Barro', 'Barroquinha', 'Baturité', 'Beberibe', 'Bela Cruz', 'Boa Viagem', 'Brejo Santo', 'Camocim', 'Campos Sales', 'Canindé', 'Capistrano', 'Caridade', 'Cariré', 'Caririaçu', 'Cariús', 'Carnaubal', 'Cascavel', 'Catarina', 'Catunda', 'Caucaia', 'Cedro', 'Chaval', 'Choró', 'Chorozinho', 'Coreaú', 'Crateús', 'Crato', 'Croatá', 'Cruz', 'Deputado Irapuan Pinheiro', 'Ereré', 'Eusébio', 'Farias Brito', 'Forquilha', 'Fortaleza', 'Fortim', 'Frecheirinha', 'General Sampaio', 'Graça', 'Granja', 'Granjeiro', 'Groaíras', 'Guaiúba', 'Guaraciaba do Norte', 'Guaramiranga', 'Hidrolândia', 'Horizonte', 'Ibaretama', 'Ibiapina', 'Ibicuitinga', 'Icapuí', 'Icó', 'Iguatu', 'Independência', 'Ipaporanga', 'Ipaumirim', 'Ipu', 'Ipueiras', 'Iracema', 'Irauçuba', 'Itaiçaba', 'Itaitinga', 'Itapajé', 'Itapipoca', 'Itapiúna', 'Itarema', 'Itatira', 'Jaguaretama', 'Jaguaribara', 'Jaguaribe', 'Jaguaruana', 'Jardim', 'Jati', 'Jijoca de Jericoacoara', 'Juazeiro do Norte', 'Jucás', 'Lavras da Mangabeira', 'Limoeiro do Norte', 'Madalena', 'Maracanaú', 'Maranguape', 'Marco', 'Martinópole', 'Massapê', 'Mauriti', 'Meruoca', 'Milagres', 'Milhã', 'Miraíma', 'Missão Velha', 'Mombaça', 'Monsenhor Tabosa', 'Morada Nova', 'Moraújo', 'Morrinhos', 'Mucambo', 'Mulungu', 'Nova Olinda', 'Nova Russas', 'Novo Oriente', 'Ocara', 'Orós', 'Pacajus', 'Pacatuba', 'Pacoti', 'Pacujá', 'Palhano', 'Palmácia', 'Paracuru', 'Paraipaba', 'Parambu', 'Paramoti', 'Pedra Branca', 'Penaforte', 'Pentecoste', 'Pereiro', 'Pindoretama', 'Piquet Carneiro', 'Pires Ferreira', 'Poranga', 'Porteiras', 'Potengi', 'Potiretama', 'Quiterianópolis', 'Quixadá', 'Quixelô', 'Quixeramobim', 'Quixeré', 'Redenção', 'Reriutaba', 'Russas', 'Saboeiro', 'Salitre', 'Santa Quitéria', 'Santana do Acaraú', 'Santana do Cariri', 'São Benedito', 'São Gonçalo do Amarante', 'São João do Jaguaribe', 'São Luís do Curu', 'Senador Pompeu', 'Senador Sá', 'Sobral', 'Solonópole', 'Tabuleiro do Norte', 'Tamboril', 'Tarrafas', 'Tauá', 'Tejuçuoca', 'Tianguá', 'Trairi', 'Tururu', 'Ubajara', 'Umari', 'Uruburetama', 'Uruoca', 'Varjota', 'Várzea Alegre', 'Viçosa do Ceará'],
    
    'DF': ['Distrito Federal'],

    'ES': ['Afonso Cláudio', 'Água Doce do Norte', 'Águia Branca', 'Alegre', 'Alfredo Chaves', 'Alto Rio Novo', 'Anchieta', 'Apiacá', 'Aracruz', 'Atílio Vivácqua', 'Baixo Guandu', 'Barra de São Francisco', 'Boa Esperança', 'Bom Jesus do Norte', 'Brejetuba', 'Cachoeiro de Itapemirim', 'Cariacica', 'Castelo', 'Colatina', 'Conceição da Barra', 'Conceição do Castelo', 'Divino de São Lourenço', 'Domingos Martins', 'Dores do Rio Preto', 'Ecoporanga', 'Fundão', 'Governador Lindenberg', 'Guaçuí', 'Guarapari', 'Ibatiba', 'Ibiraçu', 'Ibitirama', 'Iconha', 'Irupi', 'Itaguaçu', 'Itapemirim', 'Itarana', 'Iúna', 'Jaguaré', 'Jerônimo Monteiro', 'João Neiva', 'Laranja da Terra', 'Linhares', 'Mantenópolis', 'Marataízes', 'Marechal Floriano', 'Marilândia', 'Mimoso do Sul', 'Montanha', 'Mucurici', 'Muniz Freire', 'Muqui', 'Nova Venécia', 'Pancas', 'Pedro Canário', 'Pinheiros', 'Piúma', 'Ponto Belo', 'Presidente Kennedy', 'Rio Bananal', 'Rio Novo do Sul', 'Santa Leopoldina', 'Santa Maria de Jetibáta', 'Santa Teresa', 'São Domingos do Norte', 'São Gabriel da Palha', 'São José do Calçado', 'São Mateus', 'São Roque do Canaã', 'Serra', 'Sooretama', 'Vargem Alta', 'Venda Nova do Imigrante', 'Viana', 'Vila Pavão', 'Vila Valério', 'Vila Velha', 'Vitória'],
    
    'GO': ['Abadia de Goiás', 'Acreúna', 'Adelândia', 'Água Fria de Goiás', 'Água Limpa', 'Águas Lindas de Goiás', 'Alexânia', 'Aloândia', 'Alto Horizonte', 'Alto Paraíso de Goiás', 'Alvorada do Norte', 'Amaralina', 'ricano do Brasil', 'Amorinópolis', 'Anápolis', 'Anhanguera', 'Anicuns', 'Aparecida de Goiânia', 'Aparecida do Rio Doce', 'Aporé', 'Araçu', 'Aragarças', 'Aragoiânia', 'Araguapaz', 'Arenópolis', 'Aruanã', 'Aurilândia', 'Avelinópolis', 'Baliza', 'Barro Alto', 'Bela Vista de Goiás', 'Bom Jardim de Goiás', 'Bom Jesus de Goiás', 'Bonfinópolis', 'Bonópolis', 'Brazabrantes', 'Britânia', 'Buriti Alegre', 'Buriti de Goiás', 'Buritinópolis', 'Cabeceiras	', 'Cachoeira Alta', 'Cachoeira de Goiás', 'achoeira Dourada', 'Caçu', 'Caiapônia', 'Caldas Novas', 'Caldazinha', 'Campestre de Goiás', 'Campinaçu', 'Campinorte', 'Campo Alegre de Goiás', 'Campo Limpo de Goiás', 'Campos Belos', 'Campos Verdes', 'Carmo do Rio Verde', 'Castelândia', 'Catalão', 'Caturaí', 'Cavalcante', 'Ceres', 'Cezarina', 'Chapadão do Céu', 'Cidade Ocidental', 'Cocalzinho de Goiás', 'Colinas do Sul', 'Córrego do Ouro', 'Corumbá de Goiás', 'Corumbaíba', 'Cristalina', 'Cristianópolis', 'Crixás', 'Cromínia', 'Cumari', 'Damianópolis', 'Damolândia', 'Davinópolis', 'Diorama', 'Divinópolis de Goiás', 'Doverlândia', 'Edealina', 'Edéia', 'Estrela do Norte', 'Faina', 'Fazenda Nova', 'Firminópolis', 'Flores de Goiás', 'Formosa', 'Formoso', 'Gameleira de Goiás', 'Goianápolis', 'Goiandira', 'Goianésia', 'Goiânia', 'Goianira', 'Goiás', 'Goiatuba', 'Gouvelândia', 'Guapó', 'Guaraíta', 'Guarani de Goiás', 'Guarinos', 'Heitoraí', 'Hidrolândia', 'Hidrolina', 'Iaciara', 'Inaciolândia', 'Indiara', 'Inhumas', 'Ipameri', 'Ipiranga de Goiás', 'Iporá', 'Israelândia', 'Itaberaí', 'Itaguari', 'Itaguaru', 'Itajá', 'Itapaci', 'Itapirapuã', 'Itapuranga', 'Itarumã', 'Itauçu', 'Itumbiara', 'Ivolândia', 'Jandaia', 'Jaraguá', 'Jataí', 'Jaupaci', 'Jesúpolis', 'Joviânia', 'Jussara', 'Lagoa Santa', 'Leopoldo de Bulhões', 'Luziânia', 'Mairipotaba', 'Mambaí', 'Mara Rosa', 'Marzagão', 'Matrinchã', 'Maurilândia', 'Mimoso de Goiás', 'Minaçu', 'Mineiros', 'Moiporá', 'Monte Alegre de Goiás', 'Montes Claros de Goiás', 'Montividiu', 'Montividiu do Norte', 'Morrinhos', 'Morro Agudo de Goiás', 'Mossâmedes', 'Mozarlândia', 'Mundo Novo', 'Mutunópolis', 'Nazário', 'Nerópolis', 'Niquelândia', 'Nova América', 'Nova Aurora', 'Crixás', 'Nova Glória', 'Nova Iguaçu de Goiás', 'Nova Roma', 'Nova Veneza', 'Novo Brasil', 'Novo Gama', 'Novo Planalto', 'Orizona', 'Ouro Verde de Goiás', 'Ouvidor', 'Padre Bernardo', 'Palestina de Goiás', 'Palmeiras de Goiás', 'Palmelo', 'Palminópolis', 'Panamá	', 'Paranaiguara', 'Paraúna', 'Perolândia', 'Petrolina de Goiás	', 'Pilar de Goiás', 'Piracanjuba', 'Piranhas', 'Pirenópolis', 'Pires do Rio', 'Planaltina', 'Pontalina', 'Porangatu', 'Porteirão', 'Portelândia', 'Posse', 'Professor Jamil', 'Quirinópolis', 'Rialma', 'Rianápolis', 'Rio Quente', 'Rio Verde', 'Rubiataba', 'Sanclerlândia', 'Santa Bárbara de Goiás', 'Santa Cruz de Goiás	', 'Santa Fé de Goiás', 'Santa Helena de Goiás', 'Santa Isabel', 'Santa Rita do Araguaia', 'Santa Rita do Novo Destino', 'Santa Rosa de Goiás', 'Santa Tereza de Goiás', 'Santa Terezinha de Goiás', 'Santo Antônio da Barra', 'Santo Antonio de Goiás', 'Santo Antônio do Descoberto', 'São Domingos', 'São Francisco de Goiás', 'São João da Paraúna', "João d'Aliança", 'São Luís de Montes Belos', 'São Luiz do Norte', 'São Miguel do Araguaia', 'São Miguel do Passa', 'São Patrício', 'São Simão', 'Senador Canedo', 'Serranópolis', 'Silvânia', 'Simolândia', "Sítio d'Abadia", 'Taquaral de Goiás', 'Teresina de Goiás', 'Terezópolis de Goiás', 'Três Ranchos', 'Trindade', 'Trombas', 'Turvânia', 'Turvelândia', 'Uirapuru', 'Uruaçu', 'Uruana', 'Urutaí', 'Valparaíso de Goiás', 'Varjão', 'Vianópolis', 'Vicentinópolis', 'Vila Boa', 'Vila Propício'],

    'MA': ['Açailândia', 'Afonso Cunha', 'Água Doce do Maranhão', 'Alcântara', 'Aldeias Altas', 'Altamira do Maranhão', 'Alto Alegre do Maranhão', 'Alto Alegre do Pindaré', 'Alto Parnaíba   ', 'Amapá do Maranhão  ', 'Amarante do Maranhão ', 'Anajatuba', 'Anapurus', 'Apicum-Açu', 'Araguana', 'Araioses', 'Arame', 'Arari', 'Axixá', 'Bacabal', 'Bacabeira', 'Bacuri', 'Bacurituba', 'Balsas', 'Barão de Grajaú', 'Barra do Corda', 'Barreirinhas', 'Bela Vista do Maranhão', 'Belágua', 'Benedito Leite', 'Bequimão', 'Bernardo do Mearim', 'Boa Vista do Gurupi', 'Bom Jardim', 'Bom Jesus das Selvas', 'Bom Lugar', 'Brejo', 'Brejo de Areia', 'Buriti', 'Buriti Bravo', 'Buriticupu', 'Buritirana', 'Cachoeira Grande', 'Cajapió', 'Cajari', 'Campestre do Maranhão', 'Cândido Mendes', 'Cantanhede', 'Capinzal do Norte', 'Carolina', 'Carutapera', 'Caxias', 'Cedral', 'Central do Maranhão', 'Centro do Guilherme', 'Centro Novo do Maranhão', 'Chapadinha', 'Cidelândia', 'Codó', 'Coelho Neto', 'Colinas', 'Conceição do Lago Açu', 'Coroatá', 'Cururupu', 'Davinópolis', 'Dom Pedro', 'Duque Bacelar', 'Esperantinópolis', 'Estreito', 'Feira Nova do Maranhão', 'Fernando Falcão', 'Formosa da Serra Negra', 'Fortaleza dos Nogueiras', 'Fortuna', 'Godofredo Viana', 'Gonçalves Dias', 'Governador Archer', 'Governador Edison Lobão', 'Governador Eugênio Bavg', 'Governador Luiz Rocha', 'Governador Newton Bello', 'Governador Nunes Freire', 'Graça Aranha', 'Grajaú', 'Guimarães', 'Humberto de Campos', 'Icatu', 'Igarapé do Meio', 'Igarapé Grande', 'Imperatriz', 'Itaipava do Grajaú', 'Itapecuru - Mirim', 'Itinga do Maranhão', 'Jatobá', 'Jenipapo dos Vieiras', 'João Lisboa', 'Joselândia', 'Junco do Maranhão', 'Lago da Pedra', 'Lago do Junco', 'Lago dos Rodrigues', 'Lago Verde', 'Lagoa do Mato', 'Lagoa Grande do Mara', 'Lajeado Novo', 'Lima Campos', 'Loreto', 'Luís Domingues', 'Magalhães de Almeida', 'Maracaçumé', 'Marajá do Sena', 'Maranhãozinho', 'Mata Roma', 'Matinha', 'Matões', 'Matões do Norte', 'Milagres do Maranhão', 'Mirador', 'Miranda do Norte', 'Mirinzal', 'Monção', 'Montes Altos', 'Morros', 'Nina Rodrigues', 'Nova Colinas', 'Nova Iorque', 'Nova Olinda do Maranhão', "Olho d'Água das Cunhãs", 'Olinda Nova do Maranhão', 'Paço do Lumiar', 'Palmeirândia', 'Paraibano', 'Parnarama', 'Passagem Franca', 'Pastos Bons	', 'Paulino Neves', 'Paulo Ramos', 'Pedreiras', 'Pedro do Rosário', 'Penalva', 'Peri Mirim', 'Peritoró', 'Pindaré - Mirim', 'Pinheiro', 'Pio XII', 'Pirapemas', 'Poção de Pedras', 'Porto Franco', 'Porto Rico do Maranhão', 'Presidente Dutra', 'Presidente Juscelino', 'Presidente Médici', 'Presidente Sarney', 'Presidente Vargas', 'Primeira Cruz', 'Raposa', 'Riachão', 'Ribamar Fiquene', 'Rosário', 'Sambaíba', 'Santa Filomena do Maranhão', 'Santa Helena', 'Santa Inês', 'Santa Luzia', 'Santa Luzia do Paruá', 'Santa Quitéria do Maranhão', 'Santa Rita', 'Santana do Maranhão', 'Santo Amaro do Maranhão', 'Santo Antônio dos Lopes', 'São Benedito do Rio Preto', 'São Bento', 'São Bernardo', 'São Domingos do Azeitão', 'São Domingos do Maranhão', 'São Félix de Balsas', 'São Francisco do Brejão', 'São Francisco do Maranhão', 'São João Batista', 'São João do Caru', 'São João do Paraíso', 'São João do Soter', 'São João dos Patos', 'São José de Ribamar', 'São José dos Basílios', 'São Luís', 'São Luís Gonzaga do Maranhão', 'São Mateus do Maranhão', 'São Pedro da Água Branca', 'São Pedro dos Crentes', 'São Raimundo das Mangabeiras', 'São Raimundo do Doca Bezerra', 'São Roberto', 'São Vicente Ferrer', 'Satubinha ', 'Senador Alexandre Costa', 'Senador La Rocque', 'Serrano do Maranhão', 'Sítio Novo', 'Sucupira do Norte', 'Sucupira do Riachão', 'Tasso Fragoso', 'Timbiras', 'Timon', 'Trizidela do Vale', 'Tufilândia', 'Tuntum', 'Turiaçu', 'Turilândia', 'Tutóia', 'Urbano Santos', 'Vargem Grande', 'Viana', 'Vila Nova dos Martírios', 'Vitória do Mearim', 'Vitorino Freire	', 'Zé Doca'],

    'MT': ['', ''],

    'MS': ['', ''],

    'MG': ['', ''],

    'PA': ['', ''],

    'PB': ['', ''],

    'PR': ['', ''],

    'PE': ['', ''],

    'PI': ['', ''],

    'RJ': ['', ''],

    'RN': ['', ''],

    'RS': ['', ''],

    'RO': ['', ''],

    'RR': ['', ''],

    'SC': ['', ''],

    'SP': ['', ''],

    'SE': ['', ''],

    'TO': ['', '']
};

estado.onchange = function () {
    let estado = this.value;
    let selCidades = document.getElementById('cidade');

    /// ; Limpa as opçoes
    selCidades.innerHTML = "";


    /// ; pega as cidades disponiveis 
    let cidades = value_cidades[estado];
    selCidades.innerHTML += "<option hidden disabled selected>Selecione sua cidade</option>";
    cidades.forEach(function (cidade) {
        /// ;  cria elemento option
        /// ; let opt = document.createElement("option", value = cidade);
        selCidades.innerHTML += "<option value='" + cidade + "'>" + cidade + "</option>";

        /// ; adiciona nome da cidade
        //opt.innerHTML = cidade;

        /// ; adiciona opção no select
        //selCidades.appendChild(opt);

        /// ; essas linhas de código acima poderiam ser substituídas por:
        /// ; selCidades.innerHTML += "<option>"+cidade+"</option>";

    });
}
