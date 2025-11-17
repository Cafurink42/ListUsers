<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Nome do Projeto — Apresentação</title>

</head>
<body>
  <div class="wrap" role="main">
    <header>
      <div class="logo">PRJ</div>
      <div>
        <h1>Nome do Projeto</h1>
        <p class="lead">Breve descrição: uma frase curta que explica o propósito do projeto.</p>
        <div class="badges">
          <!-- Substitua os links das imagens por badges reais se desejar -->
          <img src="https://img.shields.io/badge/licença-MIT-blue" alt="licença">
          <img src="https://img.shields.io/badge/build-passing-green" alt="build">
          <img src="https://img.shields.io/badge/lang-JavaScript-yellow" alt="lang">
        </div>
      </div>
    </header>

    <section>
      <div class="grid">
        <div>
          <h2>🚀 Funcionalidades</h2>
          <ul>
            <li>Cadastro de produtos</li>
            <li>Validação para evitar itens vazios</li>
            <li>Geração e impressão de etiquetas (Zebra ZD230)</li>
            <li>Exportação / Importação (CSV)</li>
          </ul>

          <h2>🛠️ Tecnologias</h2>
          <p class="small">Ex.: JavaScript • HTML • CSS • LocalStorage • Node (opcional) • Drivers Zebra</p>

          <h2>📂 Estrutura do projeto</h2>
          <pre><code>
/meu-projeto
├─ src/
│  ├─ components/
│  ├─ services/
│  └─ styles/
├─ public/
├─ README.md
└─ package.json
          </code></pre>

          <h2>▶️ Como executar (exemplo)</h2>
          <pre><code># clonar
git clone https://github.com/SEU-USUARIO/SEU-PROJETO.git
cd SEU-PROJETO

# instalar (se aplicável)
npm install

# rodar em desenvolvimento
npm start
          </code></pre>

          <h2>⚙️ Configurações importantes</h2>
          <ul>
            <li>Variáveis de ambiente: <code>.env.example</code></li>
            <li>Instalar driver da impressora Zebra ZD230 (quando for imprimir via USB)</li>
            <li>Porta USB/permissões podem ser necessárias no SO</li>
          </ul>

          <h2>📦 Endpoints (API)</h2>
          <pre><code>GET  /api/produtos
POST /api/produtos
GET  /api/produtos/:id
