# Gestor de Produtos

## Requisitos

- Laravel 11
- Filament (admin panel)
- Livewire
- PHP 8.3

## Configurando o Projeto Localmente

### 1. Clone o repositório:
```bash
git clone https://github.com/ricardo006/gestor-produtos.git
cd gestor-produtos
```

### 2. Instale as dependências do PHP:
```bash
composer install
```

### 3. Configure o ambiente:
- Crie uma cópia do arquivo `.env.example` e renomeie para `.env`.
- Configure as variáveis de ambiente no arquivo `.env`, especialmente as relacionadas ao banco de dados:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=gestor_produtos
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Gere a chave do Laravel:
```bash
php artisan key:generate
```

### 5. Execute as migrações:
```bash
php artisan migrate
```

### 6. Crie um usuário do Filament:
Após rodar as migrações, crie um usuário do Filament com o seguinte comando:
```bash
php artisan make:filament-user
```

### 7. Instale as dependências do Node.js (opcional):
Caso queira compilar os assets do Filament:
```bash
npm install
npm run build
```

### 8. Inicie o servidor:
```bash
php artisan serve
```

### 9. Acesse o painel administrativo:
Abra o navegador e acesse: [http://localhost:8000/admin](http://localhost:8000/admin)

- **Usuário padrão:** `admin@example.com`
- **Senha padrão:** `password`

---

## Estrutura do Projeto

- `app/Models/Product.php`: Modelo de Produto.
- `app/Filament/Resources/ProductResource.php`: Recurso Filament para gerenciamento de produtos.
- `app/Http/Livewire/ProductSearch.php`: Componente Livewire para busca dinâmica.
- `app/Enums/ProductStatus.php`: Enum para status dos produtos (Ativo/Inativo).
- `database/migrations/`: Migrações para criação das tabelas no banco de dados.
- `resources/views/`: Views do Livewire e Filament.