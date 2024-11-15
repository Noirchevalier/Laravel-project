To-Do List API
Esta é a API RESTful desenvolvida em Laravel que alimenta o aplicativo Flutter de lista de tarefas, permitindo o gerenciamento completo das tarefas (CRUD). A API fornece endpoints para criar, visualizar, editar e excluir tarefas, com o objetivo de tornar a experiência do usuário fluida e eficiente.

🛠 Tecnologias Utilizadas

Laravel: Framework PHP para desenvolvimento de APIs e aplicações web.

PHP: Linguagem de programação utilizada para o desenvolvimento do back-end.

MySQL: Banco de dados para armazenamento das informações das tarefas.

Composer: Gerenciador de dependências para PHP.

Insomnia/Postman: Ferramentas para teste dos endpoints da API (opcional).

🚀 Funcionalidades da API

Listar Tarefas: Retorna todas as tarefas cadastradas no banco de dados.

Criar Tarefa: Permite adicionar uma nova tarefa, com título e descrição.

Atualizar Tarefa: Edita uma tarefa existente.

Excluir Tarefa: Remove uma tarefa específica do banco de dados.

📂 Estrutura do Projeto

/app/Models: Contém o modelo Task, que representa uma tarefa no banco de dados.

/app/Http/Controllers: Inclui o TaskController, que gerencia as operações CRUD para as tarefas.

/routes/api.php: Arquivo onde os endpoints da API são definidos.

/database/migrations: Contém as migrations que criam a estrutura do banco de dados, incluindo a tabela de tarefas.

📲 Integração com o App Flutter

Esta API foi projetada para funcionar em conjunto com o aplicativo Flutter que consome os endpoints fornecidos para listar, criar, atualizar e excluir tarefas. 

Certifique-se de que a API está em execução para que o aplicativo Flutter consiga acessar os dados e realizar as operações de CRUD corretamente.

⚙️ Como Configurar e Rodar o Projeto

1. Clone o repositório: 
Clone o repositório para sua máquina local:

```
git clone https://github.com/seu-usuario/seu-repositorio-laravel.git
cd seu-repositorio-laravel
```

2. Instale as dependências do Laravel:
Execute o comando para instalar todas as dependências:

```
composer install
```
3. Configure o banco de dados:
4. Copie o arquivo .env.example para .env:
```
cp .env.example .env
```
No arquivo .env, configure as variáveis do banco de dados:
```
DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=nome_do_banco

DB_USERNAME=usuario

DB_PASSWORD=senha
```
6. Gere a chave da aplicação:
Crie uma chave única para a aplicação:

```
php artisan key:generate
```
5. Execute as migrations:
Crie as tabelas necessárias no banco de dados com o comando:

```
php artisan migrate
```
6. Inicialize o servidor:
Inicie o servidor local com o comando:

```
php artisan serve
```
A aplicação estará disponível em http://localhost:8000.

📋 Endpoints da API

GET /api/tasks - Lista todas as tarefas.

POST /api/tasks - Cria uma nova tarefa.

PUT /api/tasks/{id} - Atualiza uma tarefa existente.

DELETE /api/tasks/{id} - Exclui uma tarefa.

Exemplo de Requisição POST

Para criar uma nova tarefa:

json
Copiar código
POST /api/tasks
{
  "title": "Nova Tarefa",
  "description": "Descrição da tarefa"
}

🔄 Melhorias Futuras

Autenticação de Usuários: Implementar autenticação para proteger os dados de cada usuário.

Paginação: Adicionar paginação na listagem de tarefas para melhorar a performance.

Validações Avançadas: Incluir validações mais completas para os dados das tarefas.

Testes Automatizados: Adicionar testes para garantir a confiabilidade da API.
