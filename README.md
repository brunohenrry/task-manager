Instruções para Executar o Sistema de Gerenciamento de Tarefas

1. Pré-requisitos:
- PHP 8.3 instalado
- MySQL instalado
- Servidor local (ex.: XAMPP, WAMP ou Laravel Valet)

2. Configuração do Banco de Dados:
- Crie um banco de dados chamado 'task_manager'.
- Execute o script SQL fornecido em 'sql/database.sql' para criar a tabela 'tasks'.
- Ajuste as credenciais de conexão no arquivo 'config/Database.php' (usuário e senha do MySQL).

3. Configuração do Projeto:
- Coloque a pasta 'task-manager' no diretório raiz do seu servidor local (ex.: htdocs no XAMPP).
- Certifique-se de que o servidor PHP e o MySQL estejam rodando.

4. Acesso:
- Abra o navegador e acesse: http://localhost/task-manager/
- O sistema será exibido diretamente, sem necessidade de adicionar subpastas na URL.

5. Funcionalidades:
- Adicionar tarefas em "Adicionar Tarefa".
- Visualizar todas as tarefas na página principal.
- Marcar tarefas como concluídas ou reabri-las.
- Excluir tarefas.

6. Observações:
- O projeto utiliza PHP 8.3, PDO para conexão segura com o banco, e Bootstrap 5.3 para o layout.
- A estrutura segue orientação a objetos e boas práticas de organização.
