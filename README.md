# TheLastHopeSite2.0

**The Last Hope – Site (versão 2.0)**

Repositório contendo o site da comunidade *The Last Hope*, construído em PHP com front-end em CSS. O site atualmente possui páginas estáticas para times, jogadores, partidas e informações gerais, com planos de evolução para telas dinâmicas e painel de administração.

---

## 📑 Índice

1. [Descrição Geral](#-descrição-geral)  
2. [Funcionalidades Atuais](#-funcionalidades-atuais)  
3. [Objetivos e Evoluções Planejadas](#-objetivos-e-evoluções-planejadas)  
4. [Instalação & Configuração](#-instalação--configuração)   
5. [Contribuição](#-contribuição)    

---

## 📖 Descrição Geral

O site TheLastHopeSite2.0 serve como plataforma web para a comunidade *The Last Hope*.  
Ele disponibiliza páginas estáticas (HTML + PHP + CSS) onde são exibidos dados sobre times, jogadores, partidas, galerias de imagens etc.  

O projeto foi desenhado para ser **simples, modular e leve**, mas com intenção clara de evoluir para uma versão dinâmica com banco de dados e painel administrativo.

---

## ⚡ Funcionalidades Atuais

- Páginas estáticas para **times, jogadores, partidas, sobre e galeria**.  
- **CSS personalizado** para estilização.  
- **Sistema de includes** para cabeçalhos, rodapés e componentes reutilizáveis.  
- Estrutura inicial de banco de dados (`db/schema.sql`).  
- Configuração de conexão em `config/db.php`.  
- Organização modular de arquivos por seções temáticas.  

---

## 🚀 Objetivos e Evoluções Planejadas

- Migrar conteúdo estático para **dados dinâmicos via MySQL**.  
- Criar um **painel administrativo** para gerenciamento (CRUD de jogadores, times, partidas).  
- Melhorar **organização e manutenibilidade do código**.  
- Otimização do carregamento de imagens e estilos.  
- Expansão das funcionalidades das seções (estatísticas, histórico de partidas, etc.).  

---

## 🔧 Instalação & Configuração

1. **Clonar o repositório**  
   ```bash
   git clone https://github.com/JohanRossi/TheLastHopeSite2.0.git

2. **Instale o Xampp e habilite o Apache**

https://www.apachefriends.org/pt_br/index.html

## 🤝 Contribuição
- Faça um fork do projeto.

- Crie uma branch para sua feature (git checkout -b feature/nome-da-feature).

- Commit suas alterações (git commit -m 'Adiciona nova funcionalidade').

- Envie para a branch principal (git push origin feature/nome-da-feature).

- Abra um Pull Request.