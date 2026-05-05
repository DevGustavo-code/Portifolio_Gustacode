<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfólio Gustavo</title> 
  <link rel="icon" type="image/png" href="img/icone.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Press+Start+2P&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Share+Tech+Mono&family=Unica+One&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="filesCSS/index.css">

</head>

<body>
  <?php if (isset($_GET['sucesso']) && $_GET['sucesso'] == 1): ?>
<script>
    alert("✔ Mensagem enviada com sucesso!");
</script>
<?php endif; ?>

  <div class="site-controls" aria-label="Preferências do site">
    <button id="themeToggle" class="site-control-btn" type="button" aria-label="Alternar tema">
      <i class="fa-solid fa-moon"></i>
      <span data-i18n="themeDark">Escuro</span>
    </button>
    <button id="languageToggle" class="site-control-btn" type="button" aria-label="Change language">
      <i class="fa-solid fa-language"></i>
      <span id="languageLabel">EN</span>
    </button>
  </div>
  <div class="menu">
    <div class="foto-area">
     <img src="img/perfil.jpg" alt="">
      <p>Gustavo</p>
    </div>

    <nav class="menu-links">
      <a href="#apresentacao" title="Apresentação"><i class="fa-solid fa-house"></i><span data-i18n="navHome">Apresentação</span></a>
      <a href="#sobre" title="Sobre mim"><i class="fa-solid fa-book"></i><span data-i18n="navAbout">Sobre mim</span></a>
      <a href="#habilidades" title="Habilidades"><i class="fa-solid fa-laptop-code"></i><span data-i18n="navSkills">Habilidades</span></a>
      <a href="#curriculo" title="Currículo"><i class="fa-solid fa-graduation-cap"></i><span data-i18n="navResume">Currículo</span></a>
      <a href="#projetos" title="Projetos"><i class="fa-solid fa-folder-plus"></i><span data-i18n="navProjects">Projetos</span></a>
      <a href="#contato" title="Contato"><i class="fa-solid fa-envelope"></i><span data-i18n="navContact">Contato</span></a>
    </nav>
    
  </div> 

  <section class="apresentacao" id="apresentacao">
    <div class="conteudo">
      <h1 data-anime="down" data-i18n-html="heroTitle">👋 Olá! Eu sou <span>Gustavo</span></h1>
      <p data-i18n="heroDescription">
        Bem-vindo(a) ao meu portfólio! Aqui você vai conhecer meus projetos, habilidades
        e um pouco da minha trajetória no mundo da tecnologia.
      </p>
      <a href="#sobre"><button class="btn-continuar" data-i18n="heroButton">Explorar Portfólio 🚀</button></a> 
    </div>
  </section>

  <section class="sobre" id="sobre">
    <div  class="container-sobre">
      <div class="foto-sobre">
        <img data-anime="left" src="img/fotoGus.jpg" alt="Foto de Gustavo">
      </div>
      <div data-anime="left"  class="texto-sobre">
        <h2 data-i18n="aboutTitle">📗 Sobre mim</h2>
        <p data-i18n-html="aboutTextOne">
          Olá! Eu sou <strong>Gustavo</strong>. Meu interesse pela área de tecnologia está relacionado a transformar ideias em realidade, como alguns projetos que você pode encontrar na seção de <strong>projetos</strong>. Tenho conhecimento em HTML e CSS para criação de páginas estáticas, além de JavaScript e PHP voltados ao back-end no desenvolvimento de sistemas. Também possuo experiência em MySQL para gerenciamento de banco de dados, além de Python para automação e aplicações envolvendo inteligência artificial.
        </p>
        <p data-i18n="aboutTextTwo">
          Aqui no meu portfólio, você encontrará projetos que refletem minhas habilidades e objetivos,
          construídos com dedicação, criatividade e muito café ☕.
        </p>
      </div>
    </div>
  </section>

<section class="habilidades" id="habilidades">
    <div class="skills-header" data-anime="up">
      <span class="skills-kicker" data-i18n="skillsKicker">Stack principal</span>
      <h2 data-i18n="skillsTitle">Minhas Habilidades</h2>
      <p data-i18n="skillsDescription">Tecnologias que uso para criar interfaces, sistemas dinâmicos, automações e ambientes de desenvolvimento.</p>
    </div>

    <div data-anime="left" class="container-habilidades">
        <article class="skill-card">
          <div class="skill-icon"><i class="fa-brands fa-html5"></i></div>
          <div class="skill-content">
            <h3>HTML</h3>
            <p data-i18n="skillHtml">Estrutura semântica, acessibilidade e organização de páginas.</p>
            <div class="skill-meter"><span style="width: 90%"></span></div>
          </div>
        </article>

        <article class="skill-card">
          <div class="skill-icon"><i class="fa-brands fa-css3-alt"></i></div>
          <div class="skill-content">
            <h3>CSS</h3>
            <p data-i18n="skillCss">Layouts responsivos, Flexbox, Grid, animações e identidade visual.</p>
            <div class="skill-meter"><span style="width: 86%"></span></div>
          </div>
        </article>

        <article class="skill-card">
          <div class="skill-icon"><i class="fa-brands fa-js"></i></div>
          <div class="skill-content">
            <h3>JavaScript</h3>
            <p data-i18n="skillJs">Interatividade, lógica, manipulação do DOM e recursos modernos.</p>
            <div class="skill-meter"><span style="width: 78%"></span></div>
          </div>
        </article>

        <article class="skill-card">
          <div class="skill-icon"><i class="fa-brands fa-python"></i></div>
          <div class="skill-content">
            <h3>Python</h3>
            <p data-i18n="skillPython">Automação, scripts, análise de dados e projetos com IA.</p>
            <div class="skill-meter"><span style="width: 74%"></span></div>
          </div>
        </article>

        <article class="skill-card">
          <div class="skill-icon"><i class="fa-brands fa-php"></i></div>
          <div class="skill-content">
            <h3>PHP</h3>
            <p data-i18n="skillPhp">Sistemas dinâmicos, formulários, validação e integração backend.</p>
            <div class="skill-meter"><span style="width: 76%"></span></div>
          </div>
        </article>

        <article class="skill-card">
          <div class="skill-icon"><i class="fa-solid fa-database"></i></div>
          <div class="skill-content">
            <h3>MySQL</h3>
            <p data-i18n="skillMysql">Modelagem de tabelas, consultas SQL e organização de dados.</p>
            <div class="skill-meter"><span style="width: 72%"></span></div>
          </div>
        </article>

        <article class="skill-card">
          <div class="skill-icon"><i class="fa-brands fa-git-alt"></i></div>
          <div class="skill-content">
            <h3>Git</h3>
            <p data-i18n="skillGit">Versionamento, branches, histórico de mudanças e colaboração.</p>
            <div class="skill-meter"><span style="width: 70%"></span></div>
          </div>
        </article>

        <article class="skill-card">
          <div class="skill-icon"><i class="fa-brands fa-linux"></i></div>
          <div class="skill-content">
            <h3>Linux</h3>
            <p data-i18n="skillLinux">Terminal, pacotes, permissões e ambiente de desenvolvimento.</p>
            <div class="skill-meter"><span style="width: 68%"></span></div>
          </div>
        </article>

        <article class="skill-card">
          <div class="skill-icon"><i class="fa-brands fa-windows"></i></div>
          <div class="skill-content">
            <h3>Windows</h3>
            <p data-i18n="skillWindows">Configuração, manutenção e organização do ambiente de trabalho.</p>
            <div class="skill-meter"><span style="width: 80%"></span></div>
          </div>
        </article>

        <article class="skill-card">
          <div class="skill-icon"><i class="fa-solid fa-brain"></i></div>
          <div class="skill-content">
            <h3>IA</h3>
            <p data-i18n="skillAi">Uso de ferramentas inteligentes para estudo, automação e produtividade.</p>
            <div class="skill-meter"><span style="width: 73%"></span></div>
          </div>
        </article>
    </div>
</section>

<div class="hard-skills">
  <h3 class="subtitulo-hards" data-anime="up" data-i18n="softTitle">Habilidades Interpessoais</h3>
  <div class="hard-cards">
    <div data-anime="left" class="hard-card">
      <svg class="hard-ico" viewBox="0 0 24 24" width="44" height="44" aria-hidden="true">
        <path fill="currentColor" d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm-6 8v-1c0-1.66 3.34-3 6-3s6 1.34 6 3v1H6zM4 11c0 1.66 1.79 3 4 3 .21 0 .41-.02.61-.05C6.9 13.4 5 12.1 5 10.5 5 9.12 5.6 7.86 6.6 6.9 5.2 7.9 4 9.32 4 11z"/>
      </svg>
      <h4 data-i18n="softTeamTitle">Trabalho em Equipe</h4>
      <p data-i18n="softTeamText">Participação ativa em projetos escolares e freelances, com comunicação clara e divisão organizada de tarefas.</p>
    </div>

    <div data-anime="left" class="hard-card">
      <svg class="hard-ico" viewBox="0 0 24 24" width="44" height="44" aria-hidden="true">
        <path fill="currentColor" d="M20 2H4a2 2 0 0 0-2 2v14l4-2 4 2 4-2 4 2V4a2 2 0 0 0-2-2z"/>
      </svg>
      <h4 data-i18n="softCommunicationTitle">Comunicação</h4>
      <p data-i18n="softCommunicationText">Experiência com apresentações, documentação clara e explicação de soluções técnicas para diferentes públicos.</p>
    </div>

     <div data-anime="left" class="hard-card">
      <svg class="hard-ico" viewBox="0 0 24 24" width="44" height="44" aria-hidden="true">
        <path fill="currentColor" d="M12 2l4 8h8l-6 4 4 8-8-5-8 5 4-8-6-4h8z"/>
      </svg>
      <h4 data-i18n="softInnovationTitle">Inovação</h4>
      <p data-i18n="softInnovationText">Criação de soluções práticas, aprimoramento constante e busca por métodos mais eficientes em cada projeto.</p>
    </div>
  </div>
</div>

<section  class="curriculo" id="curriculo">
  <div class="curriculo-container">
    <h2 data-anime="up" class="titulo-curriculo" data-i18n="resumeTitle">Currículo</h2>

    <div data-anime="up" class="curriculo-item">
      <h3 data-i18n="resumeHighSchoolTitle">Ensino Médio Técnico em ADS</h3>
      <span class="periodo">2022 - 2024</span>
      <p class="instituicao" data-i18n="resumeHighSchoolInstitution">Colégio Estadual Presidente Abraham Lincoln</p>
      <p class="desc" data-i18n="resumeHighSchoolText">Desenvolvimento de páginas com HTML, CSS e JavaScript, conhecimentos em banco de dados, metodologias ágeis, design vetorial e prática em C, Python e Java.</p>
    </div>

    <div data-anime="up" class="curriculo-item">
      <h3 data-i18n="resumeCoursesTitle">Cursos Profissionalizantes</h3>
      <span class="periodo" data-i18n="resumeCoursesPeriod">Desde 2022</span>
      <p class="instituicao">Alura</p>
      <p class="desc" data-i18n="resumeCoursesText">Cursos concluídos em C, JavaScript, HTML, CSS, Python, SCRUM e PHP, ampliando conhecimento técnico e prático.</p>
    </div>

    <div data-anime="down" class="curriculo-item">
      <h3 data-i18n="resumeCollegeTitle">Tecnologia em Análise e Desenvolvimento de Sistemas</h3>
      <span class="periodo">2025-2027</span>
      <p class="instituicao">IFPR</p>
      <p class="desc" data-i18n="resumeCollegeText">Formação superior voltada para a análise, desenvolvimento e manutenção de sistemas computacionais. Ao longo do Curso, tive aprofundamento em C, HTML, CSS, PHP, elaboração de documentações técnicas, sistemas operacionais (Linux e Windows), manutenção de computadores (hardware e software), bancos de dados SQL, servidores e inglês básico.</p>
    </div>
  </div>
  <br>
  <a target="dowload" href="img/CurrículoGustavo.pdf"><button class="btn-continuar" data-i18n="resumeButton">Dowload Curriculo</button> </a>

</section>

<section id="projetos" class="projetos">
    <h2 data-anime="up" data-i18n="projectsTitle">💻 Meus Projetos</h2>
    <p  data-anime="down" class="descricao" data-i18n="projectsDescription">
      Aqui estão alguns dos meus projetos mais marcantes — cada um feito com dedicação e muito código!
    </p>

    <div id="carouselProjetos" class="carousel slide projetos-carousel" data-bs-ride="carousel" data-anime="left">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselProjetos" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Projeto 1"></button>
        <button type="button" data-bs-target="#carouselProjetos" data-bs-slide-to="1" aria-label="Projeto 2"></button>
        <button type="button" data-bs-target="#carouselProjetos" data-bs-slide-to="2" aria-label="Projeto 3"></button>
        <button type="button" data-bs-target="#carouselProjetos" data-bs-slide-to="3" aria-label="Projeto 4"></button>
        <button type="button" data-bs-target="#carouselProjetos" data-bs-slide-to="4" aria-label="Projeto 5"></button>
        <button type="button" data-bs-target="#carouselProjetos" data-bs-slide-to="5" aria-label="Projeto 6"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <article class="card-projeto">
            <div class="projeto-imagem">
              <img src="img/tarefas.png" alt="Tela do projeto Python Tarefas">
            </div>
            <div class="projeto-conteudo">
              <span class="projeto-tag">Python</span>
              <h3>Python_tarefas</h3>
              <p data-i18n="projectOneText">Aplicação em Python para geração de tarefas aleatórias com níveis de prioridade e armazenamento automatizado em arquivo JSON.</p>
              <a target="_blank" href="https://github.com/DevGustavo-code/Python_tarefas" class="btn" data-i18n="projectButton">Ver Projeto</a>
            </div>
          </article>
        </div>

        <div class="carousel-item">
          <article class="card-projeto">
            <div class="projeto-imagem">
              <img src="img/ps2games.png" alt="Tela do projeto PS2 Games">
            </div>
            <div class="projeto-conteudo">
              <span class="projeto-tag">HTML · CSS</span>
              <h3>Ps2 Games</h3>
              <p data-i18n="projectTwoText">Landing page desenvolvida para a disciplina de Desenvolvimento Web I, com foco em estrutura visual, organização do conteúdo e estilização responsiva.</p>
              <a target="_blank" href="https://github.com/DevGustavo-code/PS2-Games" class="btn" data-i18n="projectButton">Ver Projeto</a>
            </div>
          </article>
        </div>

        <div class="carousel-item">
          <article class="card-projeto">
            <div class="projeto-imagem">
              <img src="img/portifolio.png" alt="Tela do projeto Portfólio PHP">
            </div>
            <div class="projeto-conteudo">
              <span class="projeto-tag">PHP · Segurança</span>
              <h3>Portfólio PHP</h3>
              <p data-i18n="projectThreeText">Portfólio dinâmico com formulário de contato, painel administrativo protegido e gerenciamento de mensagens em ambiente web.</p>
              <a target="_blank" href="https://github.com/DevGustavo-code/Portifolio_Gustacode" class="btn" data-i18n="projectButton">Ver Projeto</a>
            </div>
          </article>
        </div>

        <div class="carousel-item">
          <article class="card-projeto">
            <div class="projeto-imagem">
              <img src="img/cabel.png" alt="Tela do projeto Cabel Bordados">
            </div>
            <div class="projeto-conteudo">
              <span class="projeto-tag">Freelance</span>
              <h3>Laravel + Js</h3>
              <p data-i18n="projectFourText">Sistema desenvolvido em parceria para uma empresa de bordados, com foco no gerenciamento de recursos, organização de processos e apoio à operação diária.(Detalhes e link de prototipo baseado no original em breve)</p>
              <a target="_blank" href="https://github.com/DevGustavo-code?tab=repositories" class="btn" data-i18n="repositoriesButton">Ver Repositórios</a>
            </div>
          </article>
        </div>

        <div class="carousel-item">
          <article class="card-projeto">
            <div class="projeto-imagem">
              <img src="img/bancoc.png" alt="Tela do projeto Banco C">
            </div>
            <div class="projeto-conteudo">
              <span class="projeto-tag">Sistema Bancário</span>
              <h3>Banco C</h3>
              <p data-i18n="projectFiveText">Sistema bancário em linguagem C com áreas de administrador e cliente, simulando operações como saque, depósito, atualização cadastral e empréstimos.</p>
              <a target="_blank" href="https://github.com/DevGustavo-code/Banco-C" class="btn" data-i18n="repositoriesButton">Ver Projeto</a>
            </div>
          </article>
        </div>

        <div class="carousel-item">
          <article class="card-projeto">
            <div class="projeto-imagem">
              <img src="img/cronos.png" alt="Tela do projeto Cronos Painel">
            </div>
            <div class="projeto-conteudo">
              <span class="projeto-tag" data-i18n="projectSixTag">PHP + MYSql</span>
              <h3 data-i18n="projectSixTitle">CronosPainel</h3>
              <p data-i18n="projectSixText">Sistema web de produtividade e controle de estudos, desenvolvido em PHP e MySQL, com foco em organização, clareza de uso e acompanhamento de rotina.</p>
              <a target="_blank" href="https://github.com/DevGustavo-code/CronosPainel" class="btn" data-i18n="repositoriesButton">Ver Projeto</a>
            </div>
          </article>
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselProjetos" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden" data-i18n="prevProject">Projeto anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselProjetos" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden" data-i18n="nextProject">Próximo projeto</span>
      </button>
    </div>
  <br>
    <a target="_blank" href="https://github.com/DevGustavo-code?tab=repositories"><button class="btn-continuar" data-i18n="moreProjects">Mais Projetos</button> </a>
</section>

<section id="contato" class="contato">
    <h2  data-anime="left" data-i18n="contactTitle">📬 Entre em Contato</h2>
    <p  data-anime="left" data-i18n="contactDescription">Tem um projeto, sugestão, crítica ou ideia? Me mande uma mensagem!</p>

    <form  data-anime="up" class="form-contato" action="back.php" method="post">
      <input name="nome" type="text" placeholder="Seu nome" data-i18n-placeholder="namePlaceholder" required>
      <input name="email" type="email" placeholder="Seu e-mail" data-i18n-placeholder="emailPlaceholder" required>
      <textarea name="mensagem" placeholder="Sua mensagem" data-i18n-placeholder="messagePlaceholder" required></textarea>
      <button type="submit" data-i18n="sendButton">Enviar</button>
    </form>
</section>

<footer class="footer">
    <p data-i18n="footerText">© 2025 Gustavo — Todos os direitos reservados ⚡</p>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="index.js"></script>
</body>
</html>
