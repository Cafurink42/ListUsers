<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Nome do Projeto — Apresentação</title>
  <style>
    :root{
      --bg:#0f1724; --card:#0b1220; --muted:#9aa4b2; --accent:#06b6d4;
      --glass: rgba(255,255,255,0.03);
      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    }
    body{margin:0;background:linear-gradient(180deg,#071028 0%, #07172b 100%);color:#e6eef6;line-height:1.5}
    .wrap{max-width:980px;margin:36px auto;padding:28px;background:var(--glass);border-radius:12px;box-shadow:0 6px 30px rgba(2,6,23,0.6)}
    header{display:flex;gap:16px;align-items:center}
    .logo{width:72px;height:72px;border-radius:10px;background:linear-gradient(135deg,var(--accent),#7c3aed);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:20px}
    h1{margin:0;font-size:28px}
    p.lead{color:var(--muted);margin-top:6px}
    section{margin-top:22px;padding-top:6px;border-top:1px solid rgba(255,255,255,0.03)}
    h2{font-size:18px;margin:0 0 12px 0}
    ul{margin:0 0 12px 20px}
    pre{background:#071428;padding:12px;border-radius:8px;overflow:auto;color:#cfeffd}
    code{font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, "Roboto Mono", monospace}
    .badges img{height:20px;margin-right:8px;vertical-align:middle}
    .grid{display:grid;grid-template-columns:1fr 260px;gap:18px}
    .card{background:rgba(255,255,255,0.02);padding:14px;border-radius:10px}
    .small{font-size:13px;color:var(--muted)}
    .footer{margin-top:22px;font-size:13px;color:var(--muted);display:flex;justify-content:space-between;align-items:center}
    a{color:var(--accent);text-decoration:none}
    img.demo{max-width:100%;border-radius:8px;border:1px solid rgba(255,255,255,0.04)}
    @media(max-width:840px){.grid{grid-template-columns:1fr}}
  </style>
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
