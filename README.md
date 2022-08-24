"# cadastro_php"
>> esse é um testa para uma empresa especifica 

>> tem que desenvolver um cadastro usando a linguagem php.

>> campo CPF utilizando JQuery Mask

>> Aplicar validação nos campos do formulário utilizando JQuery Validate (em especial, no campo Email).

>> Ao enviar o formulário, armazenar dados no Banco de Dados SQL enviando através do JQuery AJAX para o PHP.

>> Executar o SQL no PHP com PDO.

>>Validar se Email ou CPF já está cadastrado no banco de dados.

>>Criptografar CPF antes de armazena-lo no banco de dados.

>>Ao armazenar no banco de dados, retornar mensagem de sucesso de forma assíncrona.

>>Adicionar na tabela da página (abaixo do formulário) os dados inseridos e limpar o formulário, permitindo novos cadastros.

>>Ao carregar a página, a tabela deve obter todos os dados cadastrados e lista-los.

>>O CPF deve ser exibido descriptografado.


>> REGRAS:

>>A página com formulário e tabela NÃO devem conter elementos em PHP para preenchimento da tabela com dados.

>>Todos os dados para preenchimento da tabela devem ser obtidos utilizando JQuery AJAX.

>>A forma de criptografia do CPF não é definida, podendo usar qual método achar melhor. >>Porém, o mesmo deve ter a possibilidade de ser descriptografado.

>>O retorno do BackEnd deve ser em .JSON para uso no JavaScript (Ajax).
>>Utilizar CDN para todos os arquivos externos (Jquery, Jquery Mask, Jquery Validate, etc...).

>>Com uso de CDN, deve ser criado apenas quatro arquivos no teste, o index.php (com o formulário e tabela) e o connection.php (com conexão com o banco de dados).
 # Index.php -> FrontEnd
 # Scripts.js -> FrontEnd
 # Style.css -> FrontEnd (opcional)
 # Connection.php -> BackEnd

>>O arquivo Connection.php deve verificar se a requisição recebida pelo JQuery AJAX é POST ou GET, executando funções diferentes.

>>Ao receber um GET, ele deve retornar os registros do banco de dados.

>>Ao receber um POST, ele deve adicionar o registro no banco de dados.

>>É permitido o uso de Bootstrap.css para estilização e responsividade.

>>Os arquivos finais (junto ao .sql de criação do banco de dados) devem ser enviados em um .ZIP em resposta a este email 

