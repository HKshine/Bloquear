# 🚫 Bloqueio de Acesso de site por Dispositivo (PC)

Este projeto consiste em um **script PHP** que bloqueia automaticamente o acesso ao site quando ele é aberto em **computadores (PCs)**, permitindo o acesso **apenas por dispositivos móveis** como smartphones e tablets.

Quando o acesso é feito por um PC, o utilizador visualiza uma página de **“Acesso Bloqueado”** com uma mensagem clara e estilizada.

## 🎯 Objetivo

- Restringir o acesso ao sistema apenas a **dispositivos móveis**
- Aumentar a segurança e o controle de acesso
- Forçar o uso da plataforma em ambiente mobile

## ⚙️ Funcionamento

O script analisa o **User-Agent** do navegador e identifica:

### ❌ Dispositivos bloqueados
- Windows
- macOS
- Linux (x86)
- ChromeOS

### ✅ Dispositivos permitidos
- Android
- iPhone / iPad
- Outros navegadores mobile

Caso o acesso seja feito por um PC, o script:
- Interrompe a execução da página
- Exibe uma tela de bloqueio com HTML e CSS embutido

## 🛠️ Tecnologias Utilizadas

- **PHP** – Detecção de User-Agent e controle de acesso  
- **HTML5** – Estrutura da página de bloqueio  
- **CSS3** – Estilização da mensagem de bloqueio  

## 📂 Estrutura do Projeto
projeto/
│
├── index.php
├── bloquepc.php
└── README.md


## 🔗 Como Usar

Inclua o arquivo `bloquepc.php` no início de qualquer página que deseja proteger:

```php
<?php include 'bloquepc.php'; ?>
⚠️ O include deve estar antes de qualquer saída HTML.
```
## Este Script foi desemvolvido pensando nos DEVS (em faze de criação de um site que não deve ser ainda aberto no PC para teste).
