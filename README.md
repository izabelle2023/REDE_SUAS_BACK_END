# REDE_SUAS_BACK_END (Laravel)

Backend em Laravel para gerenciar usuários fictícios e disponibilizar uma API para o frontend.  
Este backend foi desenvolvido para fins de estudo e teste, utilizando **banco de dados fictício** (arrays PHP) e **retornos manuais** para simular operações de autenticação, cadastro e listagem de usuários.

## Estrutura do Projeto

O backend possui os seguintes endpoints:

| Endpoint           | Método | Descrição |
|------------------|--------|-----------|
| `/acessar`        | POST   | Recebe `email` e `senha` via form-data, valida o usuário fictício e retorna autenticação em JSON ou mensagem de erro. |
| `/registrar`      | POST   | Recebe `email`, `senha` e `dt_nascimento` via form-data, valida idade e existência do email, cadastra o usuário fictício e retorna sucesso ou erro em JSON. |
| `/listagem-usuarios` | GET  | Retorna todos os usuários fictícios cadastrados no sistema em JSON. |

---

## Endpoints Detalhados

### 1. `/acessar`  

**Descrição:** Verifica se o email e senha enviados correspondem a um usuário cadastrado.  

**Requisição (POST):**

| Campo | Tipo | Obrigatório |
|-------|------|-------------|
| email | string | sim |
| senha | string | sim |

**Exemplo de resposta (sucesso):**
```json
{
  "status": "sucesso",
  "email": "teste@teste.com"
}
Exemplo de resposta (erro):

{
  "status": "erro",
  "mensagem": "Usuário não encontrado"
}
2. /registrar
Descrição: Cadastra um novo usuário fictício se ele tiver 18 anos ou mais e o email não estiver registrado.

Requisição (POST):

Campo	Tipo	Obrigatório
email	string	sim
senha	string	sim
dt_nascimento	string (YYYY-MM-DD)	sim
Exemplo de resposta (sucesso):

{
  "status": "sucesso",
  "mensagem": "Usuário registrado com sucesso"
}
Exemplo de resposta (erro):

{
  "status": "erro",
  "mensagem": "Usuário menor de idade ou email já registrado"
}
3. /listagem-usuarios
Descrição: Retorna todos os usuários fictícios cadastrados no sistema.

Requisição (GET): Sem parâmetros

Exemplo de resposta:

{
  "status": "sucesso",
  "usuarios": [
    {
      "email": "teste@teste.com",
      "senha": "123456",
      "dt_nascimento": "2000-01-01"
    },
    {
      "email": "izabelle@teste.com",
      "senha": "abc123",
      "dt_nascimento": "1995-05-10"
    }
  ]
}
Instalação
Clone o repositório:

git clone https://github.com/izabelle2023/REDE_SUAS_BACK_END.git
Entre na pasta do projeto:

cd REDE_SUAS_BACK_END
Instale as dependências via Composer:

composer install
Configure o arquivo .env (banco de dados fictício não é necessário, mas o Laravel exige):

cp .env.example .env
php artisan key:generate
Inicie o servidor local do Laravel:

php artisan serve
O backend estará disponível em:

http://127.0.0.1:8000
