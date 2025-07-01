<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk.svg" width="400"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre o QuestCheck

O QuestCheck é uma plataforma para organização de tarefas gamificada. Usuários podem criar, gerenciar e concluir tarefas (chamadas de "quests"), ganhando pontos ao finalizá-las e podendo trocar esses pontos por itens. O sistema incentiva a produtividade ao transformar o cumprimento de atividades em um jogo de recompensas, tornando o processo de organização mais motivador e divertido.

Principais funcionalidades:
- Cadastro de usuários.
- Criação, atualização, visualização e conclusão de tarefas/quests.
- Sistema de pontos atrelado à conclusão de tarefas.
- Possibilidade de marcar tarefas como concluídas ou falhadas.
- Interface para cadastro e gerenciamento de "quests".

Esta descrição foi feita por GitHub Copilot.

---

## Instalação

Siga o passo a passo abaixo para instalar e rodar o QuestCheck localmente:

1. **Clone o repositório:**
   ```bash
   git clone https://github.com/ossinkichi/QuestCheck.git
   cd QuestCheck/project
   ```

2. **Copie o arquivo de ambiente:**
   ```bash
   cp .env.example .env
   ```

3. **Instale as dependências do PHP (Laravel):**
   ```bash
   composer install
   ```

4. **Instale as dependências do Node.js:**
   ```bash
   npm install
   ```

5. **Gere a chave da aplicação Laravel:**
   ```bash
   php artisan key:generate
   ```

6. **Configure o arquivo `.env` com as informações do seu banco de dados.**

7. **Rode as migrações do banco de dados:**
   ```bash
   php artisan migrate
   ```

8. **Rode o servidor de desenvolvimento Laravel:**
   ```bash
   php artisan serve
   ```

9. **Compile os assets (JS/CSS) com Vite:**
   ```bash
   npm run dev
   ```

Pronto! O QuestCheck estará disponível em http://localhost:8000 ou na porta definida pelo Laravel.

---

## Sobre o Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
