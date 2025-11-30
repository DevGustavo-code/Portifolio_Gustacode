<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfólio Gustavo</title> 
  <link rel="stylesheet" href="filesCSS/animeContato.css">
  <link rel="stylesheet" href="filesCSS/apre.css">
  <link rel="stylesheet" href="filesCSS/curriculo.css">
  <link rel="stylesheet" href="filesCSS/footer_form.css">
  <link rel="stylesheet" href="filesCSS/habilidades.css">
  <link rel="stylesheet" href="filesCSS/menu.css">
  <link rel="stylesheet" href="filesCSS/projetos.css">
  <link rel="stylesheet" href="filesCSS/sobre.css">  
  <link rel="stylesheet" href="filesCSS/index.css">
  <link rel="stylesheet" href="filesCSS/butao.css">
   <link rel="icon" type="image/png" href="img/icone.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Press+Start+2P&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Share+Tech+Mono&family=Unica+One&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>
  <?php if (isset($_GET['sucesso']) && $_GET['sucesso'] == 1): ?>
<script>
    alert("✔ Mensagem enviada com sucesso!");
</script>
<?php endif; ?>

  <div class="menu">
    <div class="foto-area">
     <img src="img/perfil.jpg" alt="">
      <p>Gustavo</p>
    </div>

    <nav class="menu-links">
      <a href="#apresentacao" title="Apresentação">🏠<span>Apresentação</span></a>
      <a href="#sobre" title="Sobre mim">📗<span>Sobre mim</span></a>
      <a href="#habilidades" title="Habilidades">⚔️<span>Habilidades</span></a>
      <a href="#curriculo" title="Currículo">📜<span>Currículo</span></a>
      <a href="#projetos" title="Projetos">🏗️<span>Projetos</span></a>
      <a href="#contato" title="Contato">📞<span>Contato</span></a>
    </nav>
    
  </div> 

  <section class="apresentacao" id="apresentacao">
    <div class="conteudo">
      <h1 data-anime="down">👋 Olá! Eu sou <span>Gustavo</span></h1>
      <p>
        Bem-vindo(a) ao meu portfólio! Aqui você vai conhecer meus projetos, habilidades
        e um pouco da minha trajetória no mundo da tecnologia.
      </p>
      <a href="#sobre"><button class="btn-continuar">Explorar Portfólio 🚀</button></a> 
    </div>
  </section>

  <section class="sobre" id="sobre">
    <div  class="container-sobre">
      <div class="foto-sobre">
        <img data-anime="left" src="img/fotoGus.jpg" alt="Foto de Gustavo">
      </div>
      <div data-anime="left"  class="texto-sobre">
        <h2 >📗 Sobre mim</h2>
        <p >
          Olá! Eu sou <strong>Gustavo</strong>. Meu interesse pela área de tecnologia está relacionado a transformar ideias em realidade, como alguns projetos que você pode encontrar na seção de <strong>projetos</strong>. Tenho conhecimento em HTML e CSS para criação de páginas estáticas, além de JavaScript e PHP voltados ao back-end no desenvolvimento de sistemas. Também possuo experiência em MySQL para gerenciamento de banco de dados, além de Python para automação e aplicações envolvendo inteligência artificial.
        </p>
        <p >
          Aqui no meu portfólio, você encontrará projetos que refletem minhas habilidades e objetivos,
          construídos com dedicação, criatividade e muito café ☕.
        </p>
      </div>
    </div>
  </section>

<section class="habilidades" id="habilidades">
    <h2 data-anime="up">⚔️ Minhas Habilidades</h2>

    <div data-anime="left" class="container-habilidades">
        <div class="card">
            <div class="card-front">
                <h3>💻 HTML</h3>
            </div>
            <div class="card-back">
                <p>Estruturação de páginas usando boas práticas, semântica e acessibilidade.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-front">
                <h3>🎨 CSS</h3>
            </div>
            <div class="card-back">
                <p>Layouts modernos, responsivos e animações usando Flexbox e Grid.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-front">
                <h3>⚙️ JavaScript</h3>
            </div>
            <div class="card-back">
                <p>Manipulação do DOM, lógica de programação e interatividade em projetos.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-front">
                <h3>🐍 Python</h3>
            </div>
            <div class="card-back">
                <p>Automação, análise de dados e criação de pequenos projetos e jogos.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-front">
                <h3>🦾 PHP</h3>
            </div>
            <div class="card-back">
                <p>Desenvolvimento de sistemas dinâmicos, APIs e integração com banco de dados.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-front">
                <h3>🦾 MYSQL</h3>
            </div>
            <div class="card-back">
               <p>Modelagem, criação de tabelas otimizadas e consultas eficientes.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-front">
                <h3>🦾 GIT</h3>
            </div>
            <div class="card-back">
                <p>Versionamento com boas práticas, criação de branches e resolução de conflitos.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-front">
                <h3>🐧 LINUX</h3>
            </div>
            <div class="card-back">
            <p>Uso avançado de terminal, gerenciamento de pacotes e ambiente de desenvolvimento.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-front">
                <h3>🦾 Windows</h3>
            </div>
            <div class="card-back">
                <p>Configuração de ambientes de desenvolvimento, manutenção e organização.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-front">
                <h3>🧠 IA</h3>
            </div>
            <div class="card-back">
               <p>Utilização de ferramentas de IA para estudo, automação e suporte no desenvolvimento.</p>
            </div>
        </div>
    </div>
</section>

<div class="hard-skills">
  <h3 class="subtitulo-hards" data-anime="up">Habilidades Interpessoais</h3>
  <div class="hard-cards">
    <div data-anime="left" class="hard-card">
      <svg class="hard-ico" viewBox="0 0 24 24" width="44" height="44" aria-hidden="true">
        <path fill="currentColor" d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm-6 8v-1c0-1.66 3.34-3 6-3s6 1.34 6 3v1H6zM4 11c0 1.66 1.79 3 4 3 .21 0 .41-.02.61-.05C6.9 13.4 5 12.1 5 10.5 5 9.12 5.6 7.86 6.6 6.9 5.2 7.9 4 9.32 4 11z"/>
      </svg>
      <h4>Trabalho em Equipe</h4>
      <p>Participação ativa em projetos escolares e freelances, com comunicação clara e divisão organizada de tarefas.</p>
    </div>

    <div data-anime="left" class="hard-card">
      <svg class="hard-ico" viewBox="0 0 24 24" width="44" height="44" aria-hidden="true">
        <path fill="currentColor" d="M20 2H4a2 2 0 0 0-2 2v14l4-2 4 2 4-2 4 2V4a2 2 0 0 0-2-2z"/>
      </svg>
      <h4>Comunicação</h4>
      <p>Experiência com apresentações, documentação clara e explicação de soluções técnicas para diferentes públicos.</p>
    </div>

     <div data-anime="left" class="hard-card">
      <svg class="hard-ico" viewBox="0 0 24 24" width="44" height="44" aria-hidden="true">
        <path fill="currentColor" d="M12 2l4 8h8l-6 4 4 8-8-5-8 5 4-8-6-4h8z"/>
      </svg>
      <h4>Inovação</h4>
      <p>Criação de soluções práticas, aprimoramento constante e busca por métodos mais eficientes em cada projeto.</p>
    </div>
  </div>
</div>

<section  class="curriculo" id="curriculo">
  <div class="curriculo-container">
    <h2 data-anime="up" class="titulo-curriculo">Currículo</h2>

    <div data-anime="up" class="curriculo-item">
      <h3>Ensino Médio Técnico em ADS</h3>
      <span class="periodo">2022 - 2024</span>
      <p class="instituicao">Colégio Estadual Presidente Abraham Lincoln</p>
      <p class="desc">Desenvolvimento de páginas com HTML, CSS e JavaScript, conhecimentos em banco de dados, metodologias ágeis, design vetorial e prática em C, Python e Java.</p>
    </div>

    <div data-anime="up" class="curriculo-item">
      <h3>Cursos Profissionalizantes</h3>
      <span class="periodo">Desde 2022</span>
      <p class="instituicao">Alura</p>
      <p class="desc">Cursos concluídos em C, JavaScript, HTML, CSS, Python, SCRUM e PHP, ampliando conhecimento técnico e prático.</p>
    </div>

    <div data-anime="up" class="curriculo-item">
      <h3>Tecnologia em Análise e Desenvolvimento de Sistemas</h3>
      <span class="periodo">2025-2027</span>
      <p class="instituicao">IFPR</p>
      <p class="desc">Formação superior voltada para a análise, desenvolvimento e manutenção de sistemas computacionais. Ao longo do Curso, tive aprofundamento em C, HTML, CSS, PHP, elaboração de documentações técnicas, sistemas operacionais (Linux e Windows), manutenção de computadores (hardware e software), bancos de dados SQL, servidores e inglês básico.</p>
    </div>
  </div>
  <br>
  <a target="dowload" href="img/CurrículoGustavo.pdf"><button class="btn-continuar">Dowload Curriculo</button> </a>

</section>

<section id="projetos" class="projetos">
    <h2 data-anime="up" >💻 Meus Projetos</h2>
    <p  data-anime="down" class="descricao">
      Aqui estão alguns dos meus projetos mais marcantes — cada um feito com dedicação e muito código!
    </p>

    <div data-anime="left" class="projetos-container">
      <div class="card-projeto">
        <img src="img/tarefas.png" alt="Projeto 1">
        <h3>Python_tarefas</h3>
        <p>Projeto em Python que gera tarefas aleatórias com níveis de prioridade e salva tudo em tarefas.json.</p>
        <a target="_blank" href="https://github.com/DevGustavo-code/Python_tarefas" class="btn btn-open-modal">Ver Projeto</a>
      </div>

      <div  data-anime="left" class="card-projeto">
        <img src="img/arquitetura.png" alt="Projeto 2">
        <h3>Seminario_software</h3>
        <p>Site criado durante o ensino médio apresentando conceitos de arquitetura de software com HTML, CSS e JavaScript.</p>
        <a target="_blank" href="https://github.com/DevGustavo-code/Seminario_software" class="btn">Ver Projeto</a>
      </div>

      <div  data-anime="left" class="card-projeto">
        <img src="img/portifolio.png" alt="Projeto 3">
        <h3>Portfólio PHP</h3>
        <p>Portfólio desenvolvido em PHP, com sistema de contato criptografado, painel admin protegido e gerenciamento de mensagens.</p>
        <a target="_blank" href="https://github.com/DevGustavo-code/Portifolio_PHP" class="btn">Ver Projeto</a>
      </div>
    </div>
  <br>
    <a target="_blank" href="https://github.com/DevGustavo-code?tab=repositories"><button class="btn-continuar">Mais Projetos</button> </a>
</section>

<section id="contato" class="contato">
    <h2  data-anime="left">📬 Entre em Contato</h2>
    <p  data-anime="left">Tem um projeto, sugestão, crítica ou ideia? Me mande uma mensagem!</p>

    <form  data-anime="up" class="form-contato" action="back.php" method="post">
      <input name="nome" type="text" placeholder="Seu nome" required>
      <input name="email" type="email" placeholder="Seu e-mail" required>
      <textarea name="mensagem" placeholder="Sua mensagem" required></textarea>
      <button type="submit">Enviar</button>
    </form>
</section>

<footer class="footer">
    <p>© 2025 Gustavo — Todos os direitos reservados ⚡</p>
    <div class="social">
      <div class="contato-icones animate-scroll">
     <a href="https://www.linkedin.com/in/devgustavo-code/" target="_blank" class="icone">
       <i class="fab fa-linkedin"></i>
      </a>

     <a href="https://github.com/DevGustavo-code?tab=repositories" target="_blank" class="icone">
       <i class="fab fa-github"> </i>
     </a>

  <a href="https://wa.me/5541999100397" target="_blank" class="icone">
    <i class="fab fa-whatsapp"> </i>
  </a>
</div>

    </div>
</footer>

<script src="index.js"></script>
</body>
</html>
