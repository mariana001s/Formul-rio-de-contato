const express = require('express');
const bodyParser = require('body-parser');
const app = express();

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

// Serve arquivos estáticos da pasta "public"
app.use(express.static('public'));

app.post('/submit', (req, res) => {
    console.log(req.body);
    res.send('Dados recebidos!');
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
    console.log(`Servidor rodando em http://localhost:${PORT}`);
});

Options -Indexes
