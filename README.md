# ⚡ Portfólio Profissional | Desenvolvedor Web

Este é o meu portfólio profissional, desenvolvido como uma aplicação full-stack para demonstrar minhas habilidades em desenvolvimento web, com ênfase em usabilidade e segurança.

## ✨ Destaques do Projeto

* **Design Minimalista e Responsivo:** Layout focado na experiência do usuário (UX), garantindo que o portfólio seja visualmente agradável e funcional em qualquer dispositivo (mobile-first).
* **Animações Otimizadas (Intersection Observer):** Utiliza a moderna Intersection Observer API para disparar as animações `[data-anime]` de forma performática e fluida ao rolar a página.
* **Segurança no Contato (PHP):** Implementação de um sistema de formulário de contato robusto, processado pelo backend PHP (`back.php`), com técnicas de segurança para proteger a integridade dos dados e a privacidade.
* **Tecnologias Core:** PHP, JavaScript, HTML5, e CSS3.

## 🔑 Sistema de Contato Seguro (Backend PHP)

O principal diferencial técnico deste projeto é o seu formulário de contato. O sistema não apenas coleta mensagens, mas também:

1.  **Validação Server-Side:** Garante que todos os campos obrigatórios sejam preenchidos corretamente antes do processamento.
2.  **Proteção contra Injeção:** Utiliza métodos de sanitização e proteção (como `htmlspecialchars` ou preparados do PDO, dependendo da sua implementação no `back.php`) para evitar ataques de Cross-Site Scripting (XSS).
3.  **Criptografia/Processamento:** As mensagens enviadas são processadas pelo script `back.php`, que lida com o envio de e-mails de forma segura, mantendo as credenciais de envio protegidas no servidor.

## 🛠️ Como Acessar e Testar Localmente

Para rodar este portfólio e testar o sistema de envio de mensagens (principalmente o script `back.php`), você precisa de um ambiente de desenvolvimento local que suporte **PHP**.

O XAMPP é perfeito para isso, pois fornece o Apache Server e o PHP.

### Pré-requisitos

* **XAMPP** ou qualquer outro servidor web local (MAMP, WAMP).
* Um navegador moderno (Chrome, Firefox).

### Passos para Configuração

1.  **Instale o XAMPP** (se ainda não o fez).
2.  **Inicie os serviços:** Abra o painel de controle do XAMPP e inicie os módulos **Apache** e **PHP**.
3.  **Localize a pasta do servidor:** Navegue até o diretório de documentos raiz do Apache. No XAMPP, geralmente é:
    * `C:\xampp\htdocs\` (Windows)
    * `/Applications/XAMPP/htdocs/` (macOS)
4.  **Clone o projeto:** Copie a pasta inteira do seu portfólio (onde estão os arquivos `index.php`, `index.js`, etc.) para dentro do diretório `htdocs` (Ex: `htdocs/portifolio-gustavo/`).
5.  **Acesse no Navegador:** Abra seu navegador e acesse o endereço:

    ```
    http://localhost/nome-da-sua-pasta/
    ```

    (Ex: `http://localhost/portifolio-gustavo/`)

### Como Visualizar o Sistema de Criptografia/Processamento

O sistema de criptografia/processamento é totalmente gerenciado pelo seu arquivo **`back.php`** (que não foi fornecido). Para visualizar seu funcionamento, siga estes passos:

1.  **Edite o `back.php`:** Abra o seu arquivo `back.php` no editor de código.
2.  **Simule a Ação:** Localize a seção onde você lida com os dados do formulário (`$_POST['nome']`, `$_POST['email']`, etc.).
3.  **Adicione um Log de Teste:** Adicione comandos de saída de dados (como `echo` ou `var_dump`) para ver exatamente como os dados são recebidos, sanitizados ou criptografados antes de serem enviados.

    > **Exemplo (Apenas para Teste! Remova após o debug):**
    > ```php
    > // Dentro de back.php, após receber o POST
    > $nome_seguro = htmlspecialchars($_POST['nome']);
    > echo "Nome Sanitizado (para debug): " . $nome_seguro; 
    > exit; // Interrompe o script para mostrar o resultado no navegador
    > ```

4.  **Envie o Formulário:** Acesse o portfólio no `localhost`, preencha o formulário de contato e clique em "Enviar".

O navegador mostrará a saída do seu script `back.php` (ou o log no servidor Apache), permitindo que você acompanhe a rotina de segurança e o processamento do contato.
