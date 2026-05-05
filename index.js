const items = document.querySelectorAll("[data-anime]");

const handleIntersection = (entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add("animate");
    } else {
      entry.target.classList.remove("animate");
    }
  });
};

const observerOptions = {
  root: null,
  rootMargin: '0px 0px -15% 0px', 
  threshold: 0.0 
};


const observer = new IntersectionObserver(handleIntersection, observerOptions);

items.forEach(item => {
  observer.observe(item);
});

const translations = {
  pt: {
    themeDark: "Escuro",
    themeLight: "Claro",
    navHome: "Apresentação",
    navAbout: "Sobre mim",
    navSkills: "Habilidades",
    navResume: "Currículo",
    navProjects: "Projetos",
    navContact: "Contato",
    heroTitle: "👋 Olá! Eu sou <span>Gustavo</span>",
    heroDescription: "Bem-vindo(a) ao meu portfólio! Aqui você vai conhecer meus projetos, habilidades e um pouco da minha trajetória no mundo da tecnologia.",
    heroButton: "Explorar Portfólio 🚀",
    aboutTitle: "📗 Sobre mim",
    aboutTextOne: "Olá! Eu sou <strong>Gustavo</strong>. Meu interesse pela área de tecnologia está relacionado a transformar ideias em realidade, como alguns projetos que você pode encontrar na seção de <strong>projetos</strong>. Tenho conhecimento em HTML e CSS para criação de páginas estáticas, além de JavaScript e PHP voltados ao back-end no desenvolvimento de sistemas. Também possuo experiência em MySQL para gerenciamento de banco de dados, além de Python para automação e aplicações envolvendo inteligência artificial.",
    aboutTextTwo: "Aqui no meu portfólio, você encontrará projetos que refletem minhas habilidades e objetivos, construídos com dedicação, criatividade e muito café ☕.",
    skillsKicker: "Stack principal",
    skillsTitle: "Minhas Habilidades",
    skillsDescription: "Tecnologias que uso para criar interfaces, sistemas dinâmicos, automações e ambientes de desenvolvimento.",
    skillHtml: "Estrutura semântica, acessibilidade e organização de páginas.",
    skillCss: "Layouts responsivos, Flexbox, Grid, animações e identidade visual.",
    skillJs: "Interatividade, lógica, manipulação do DOM e recursos modernos.",
    skillPython: "Automação, scripts, análise de dados e projetos com IA.",
    skillPhp: "Sistemas dinâmicos, formulários, validação e integração backend.",
    skillMysql: "Modelagem de tabelas, consultas SQL e organização de dados.",
    skillGit: "Versionamento, branches, histórico de mudanças e colaboração.",
    skillLinux: "Terminal, pacotes, permissões e ambiente de desenvolvimento.",
    skillWindows: "Configuração, manutenção e organização do ambiente de trabalho.",
    skillAi: "Uso de ferramentas inteligentes para estudo, automação e produtividade.",
    softTitle: "Habilidades Interpessoais",
    softTeamTitle: "Trabalho em Equipe",
    softTeamText: "Participação ativa em projetos escolares e freelances, com comunicação clara e divisão organizada de tarefas.",
    softCommunicationTitle: "Comunicação",
    softCommunicationText: "Experiência com apresentações, documentação clara e explicação de soluções técnicas para diferentes públicos.",
    softInnovationTitle: "Inovação",
    softInnovationText: "Criação de soluções práticas, aprimoramento constante e busca por métodos mais eficientes em cada projeto.",
    resumeTitle: "Currículo",
    resumeHighSchoolTitle: "Ensino Médio Técnico em ADS",
    resumeHighSchoolInstitution: "Colégio Estadual Presidente Abraham Lincoln",
    resumeHighSchoolText: "Desenvolvimento de páginas com HTML, CSS e JavaScript, conhecimentos em banco de dados, metodologias ágeis, design vetorial e prática em C, Python e Java.",
    resumeCoursesTitle: "Cursos Profissionalizantes",
    resumeCoursesPeriod: "Desde 2022",
    resumeCoursesText: "Cursos concluídos em C, JavaScript, HTML, CSS, Python, SCRUM e PHP, ampliando conhecimento técnico e prático.",
    resumeCollegeTitle: "Tecnologia em Análise e Desenvolvimento de Sistemas",
    resumeCollegeText: "Formação superior voltada para a análise, desenvolvimento e manutenção de sistemas computacionais. Ao longo do Curso, tive aprofundamento em C, HTML, CSS, PHP, elaboração de documentações técnicas, sistemas operacionais (Linux e Windows), manutenção de computadores (hardware e software), bancos de dados SQL, servidores e inglês básico.",
    resumeButton: "Download Currículo",
    projectsTitle: "💻 Meus Projetos",
    projectsDescription: "Uma seleção de projetos que representam minha evolução técnica, meu cuidado com a interface e meu interesse por soluções práticas.",
    projectOneText: "Aplicação em Python para geração de tarefas aleatórias com níveis de prioridade e armazenamento automatizado em arquivo JSON.",
    projectTwoText: "Landing page desenvolvida para a disciplina de Desenvolvimento Web I, com foco em estrutura visual, organização do conteúdo e estilização responsiva.",
    projectThreeText: "Portfólio dinâmico com formulário de contato, painel administrativo protegido e gerenciamento de mensagens em ambiente web.",
    projectFourTag: "Estudos",
    projectFourTitle: "Projetos de Cursos",
    projectFourText: "Sistema desenvolvido em parceria para uma empresa de bordados, com foco no gerenciamento de recursos, organização de processos e apoio à operação diária.",
    projectFiveText: "Sistema bancário em linguagem C com áreas de administrador e cliente, simulando operações como saque, depósito, atualização cadastral e empréstimos.",
    projectSixTag: "PHP · MySQL",
    projectSixTitle: "Cronos Painel",
    projectSixText: "Sistema web de produtividade e controle de estudos, desenvolvido em PHP e MySQL, com foco em organização, clareza de uso e acompanhamento de rotina.",
    projectButton: "Ver Projeto",
    repositoriesButton: "Ver Repositórios",
    prevProject: "Projeto anterior",
    nextProject: "Próximo projeto",
    moreProjects: "Mais Projetos",
    contactTitle: "📬 Entre em Contato",
    contactDescription: "Tem um projeto, sugestão, crítica ou ideia? Me mande uma mensagem!",
    namePlaceholder: "Seu nome",
    emailPlaceholder: "Seu e-mail",
    messagePlaceholder: "Sua mensagem",
    sendButton: "Enviar",
    footerText: "© 2025 Gustavo — Todos os direitos reservados ⚡"
  },
  en: {
    themeDark: "Dark",
    themeLight: "Light",
    navHome: "Intro",
    navAbout: "About me",
    navSkills: "Skills",
    navResume: "Resume",
    navProjects: "Projects",
    navContact: "Contact",
    heroTitle: "👋 Hi! I'm <span>Gustavo</span>",
    heroDescription: "Welcome to my portfolio! Here you can explore my projects, skills, and part of my journey in technology.",
    heroButton: "Explore Portfolio 🚀",
    aboutTitle: "📗 About me",
    aboutTextOne: "Hi! I'm <strong>Gustavo</strong>. My interest in technology is connected to turning ideas into reality, like some projects you can find in the <strong>projects</strong> section. I know HTML and CSS for static pages, plus JavaScript and PHP focused on backend system development. I also have experience with MySQL for database management and Python for automation and artificial intelligence projects.",
    aboutTextTwo: "In this portfolio, you will find projects that reflect my skills and goals, built with dedication, creativity, and lots of coffee ☕.",
    skillsKicker: "Main stack",
    skillsTitle: "My Skills",
    skillsDescription: "Technologies I use to create interfaces, dynamic systems, automations, and development environments.",
    skillHtml: "Semantic structure, accessibility, and organized pages.",
    skillCss: "Responsive layouts, Flexbox, Grid, animations, and visual identity.",
    skillJs: "Interactivity, logic, DOM manipulation, and modern resources.",
    skillPython: "Automation, scripts, data analysis, and AI projects.",
    skillPhp: "Dynamic systems, forms, validation, and backend integration.",
    skillMysql: "Table modeling, SQL queries, and data organization.",
    skillGit: "Version control, branches, change history, and collaboration.",
    skillLinux: "Terminal, packages, permissions, and development environment.",
    skillWindows: "Configuration, maintenance, and workspace organization.",
    skillAi: "Use of intelligent tools for study, automation, and productivity.",
    softTitle: "Interpersonal Skills",
    softTeamTitle: "Teamwork",
    softTeamText: "Active participation in school and freelance projects, with clear communication and organized task division.",
    softCommunicationTitle: "Communication",
    softCommunicationText: "Experience with presentations, clear documentation, and explaining technical solutions to different audiences.",
    softInnovationTitle: "Innovation",
    softInnovationText: "Creation of practical solutions, continuous improvement, and search for more efficient methods in each project.",
    resumeTitle: "Resume",
    resumeHighSchoolTitle: "Technical High School in Systems Analysis",
    resumeHighSchoolInstitution: "Presidente Abraham Lincoln State School",
    resumeHighSchoolText: "Development of pages with HTML, CSS, and JavaScript, knowledge in databases, agile methodologies, vector design, and practice in C, Python, and Java.",
    resumeCoursesTitle: "Professional Courses",
    resumeCoursesPeriod: "Since 2022",
    resumeCoursesText: "Completed courses in C, JavaScript, HTML, CSS, Python, SCRUM, and PHP, expanding technical and practical knowledge.",
    resumeCollegeTitle: "Technology Degree in Systems Analysis and Development",
    resumeCollegeText: "Higher education focused on analysis, development, and maintenance of computer systems. During the course, I deepened my knowledge in C, HTML, CSS, PHP, technical documentation, operating systems, computer maintenance, SQL databases, servers, and basic English.",
    resumeButton: "Download Resume",
    projectsTitle: "💻 My Projects",
    projectsDescription: "A selection of projects that reflect my technical growth, attention to interface quality, and interest in practical solutions.",
    projectOneText: "Python application for generating random tasks with priority levels and automated storage in a JSON file.",
    projectTwoText: "Landing page created for a Web Development I class, focused on visual structure, content organization, and responsive styling.",
    projectThreeText: "Dynamic portfolio with contact form, protected admin panel, and message management in a web environment.",
    projectFourTag: "Studies",
    projectFourTitle: "Course Projects",
    projectFourText: "System developed in partnership for an embroidery company, focused on resource management, process organization, and day-to-day operational support.",
    projectFiveText: "Banking system in C with administrator and client areas, simulating operations such as withdrawals, deposits, profile updates, and loans.",
    projectSixTag: "PHP · MySQL",
    projectSixTitle: "Cronos Panel",
    projectSixText: "Web-based productivity and study tracking system built with PHP and MySQL, focused on organization, usability, and routine monitoring.",
    projectButton: "View Project",
    repositoriesButton: "View Repositories",
    prevProject: "Previous project",
    nextProject: "Next project",
    moreProjects: "More Projects",
    contactTitle: "📬 Contact Me",
    contactDescription: "Have a project, suggestion, feedback, or idea? Send me a message!",
    namePlaceholder: "Your name",
    emailPlaceholder: "Your email",
    messagePlaceholder: "Your message",
    sendButton: "Send",
    footerText: "© 2025 Gustavo — All rights reserved ⚡"
  }
};

const themeToggle = document.getElementById("themeToggle");
const languageToggle = document.getElementById("languageToggle");
const languageLabel = document.getElementById("languageLabel");

let currentLanguage = localStorage.getItem("portfolioLanguage") || "pt";
let currentTheme = "dark";

const applyLanguage = language => {
  const dictionary = translations[language];

  document.documentElement.lang = language === "pt" ? "pt-br" : "en";

  document.querySelectorAll("[data-i18n]").forEach(element => {
    if (element.closest("#projetos")) return;
    const key = element.dataset.i18n;
    if (dictionary[key]) element.textContent = dictionary[key];
  });

  document.querySelectorAll("[data-i18n-html]").forEach(element => {
    if (element.closest("#projetos")) return;
    const key = element.dataset.i18nHtml;
    if (dictionary[key]) element.innerHTML = dictionary[key];
  });

  document.querySelectorAll("[data-i18n-placeholder]").forEach(element => {
    const key = element.dataset.i18nPlaceholder;
    if (dictionary[key]) element.placeholder = dictionary[key];
  });

  languageLabel.textContent = language === "pt" ? "EN" : "PT";
  localStorage.setItem("portfolioLanguage", language);
};

const applyTheme = theme => {
  const isLight = theme === "light";
  const icon = themeToggle.querySelector("i");
  const label = themeToggle.querySelector("span");

  document.body.classList.toggle("light-theme", isLight);
  icon.className = isLight ? "fa-solid fa-sun" : "fa-solid fa-moon";
  label.dataset.i18n = isLight ? "themeLight" : "themeDark";
  label.textContent = translations[currentLanguage][label.dataset.i18n];
};

themeToggle.addEventListener("click", () => {
  currentTheme = currentTheme === "dark" ? "light" : "dark";
  applyTheme(currentTheme);
});

languageToggle.addEventListener("click", () => {
  currentLanguage = currentLanguage === "pt" ? "en" : "pt";
  applyLanguage(currentLanguage);
  applyTheme(currentTheme);
});

applyLanguage(currentLanguage);
applyTheme(currentTheme);
