# My Brechó - Brechó Virtual

## 📌 Sobre o Projeto
My Brechó é uma plataforma online desenvolvida em Laravel que permite aos usuários cadastrarem e venderem produtos usados. O objetivo é promover a economia circular e facilitar a compra e venda de itens de segunda mão.

## 🚀 Tecnologias Utilizadas
- PHP
- Laravel
- Bootstrap 5
- PostgreSQL
- Blade Templates

## ⚙️ Como Rodar o Projeto

1. **Clone o repositório:**
   ```sh
   git clone https://github.com/Nicolas229A/projeto_brecho.git
   ```
2. **Instale as dependências:**
   ```sh
   composer install
   ```
3. **Configure o banco de dados:**
   - Renomeie o arquivo `.env.example` para `.env`
   - Configure as credenciais do banco de dados
   ```env
   DB_CONNECTION=pgsql
   DB_HOST=127.0.0.1
   DB_PORT=5432
   DB_DATABASE=projeto-brecho
   DB_USERNAME=postgres
   DB_PASSWORD=suaSenha
   ```
   - Rode as migrações:
   ```sh
   php artisan migrate --seed
   ```

4. **Gere a chave da aplicação:**
   ```sh
   php artisan key:generate
   ```

5. **Inicie o servidor:**
   ```sh
   php artisan serve
   ```
   O site estará disponível em: [http://127.0.0.1:8000](http://127.0.0.1:8000)

## 📌 Funcionalidades
✅ Cadastro, edição e exclusão de itens 📦  
✅ Upload de imagens 📸   
✅ Interface responsiva 📱  

## 📜 Licença
Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

---
💡 Desenvolvido por **[Nicolas Almeida Valente](https://github.com/Nicolas229A)** 🚀

