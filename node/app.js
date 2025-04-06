// node/app.js

const http = require('http');

const hostname = '::'; // Obligatoire pour Alwaysdata
const port = process.env.PORT; // Alwaysdata injecte PORT

const server = http.createServer((req, res) => {
  res.writeHead(200, { 'Content-Type': 'text/html' });
  res.end(`
    <!DOCTYPE html>
    <html lang="fr">
    <head>
      <meta charset="UTF-8" />
      <title>Démo Node.js 🚀</title>
      <style>
        body {
          background-color: #f0f4f8;
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
          margin: 0;
          font-family: Arial, sans-serif;
        }
        .container {
          background: white;
          padding: 40px;
          border-radius: 15px;
          box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
          text-align: center;
          max-width: 500px;
        }
        h1 {
          color: #333;
          margin-bottom: 20px;
        }
        p {
          color: #666;
          margin-bottom: 20px;
        }
        a {
          text-decoration: none;
          color: #007BFF;
          transition: color 0.3s;
        }
        a:hover {
          color: #0056b3;
        }
      </style>
    </head>
    <body>
      <div class="container">
        <h1>Hello depuis Alwaysdata avec Node.js 🟢</h1>
        <p>Bienvenue sur ma démo Node.js hébergée sur Alwaysdata ! 🎉</p>
        <p><a href="/">Retour à l'accueil</a></p>
      </div>
    </body>
    </html>
  `);
});

server.listen(port, hostname, () => {
  console.log(`🚀 Server running at http://[${hostname}]:${port}/`);
});
