# teste-jn2

O nosso desafio consiste na criação de um sistema de controle de clientes e suas respectivas placas de carro.

1. Você precisará construir uma base de dados com os seguintes campos:
   • ID;
   • Nome - obrigatório;
   • Telefone - obrigatório;
   • CPF - obrigatório, somente CPF com número válido deve ser aceito;
   • Placa do Carro - obrigatório.
2. Para o gerenciamento dessa base, você construirá uma API REST contendo os seguintes endpoints:
   Método
   Endpoint
   descrição
   POST
   /cliente-cadastro
   Cadatro de um novo cliente
   PUT
   cliente/{id}
   Edição de um cliente
   DELETE
   cliente/{id}
   Remoção de um cliente
   GET
   cliente/{id}
   Consulta dados de um cliente
   GET
   consulta/final-placa/{numero}
   Consulta todos os clientes, onde o último número é o número informado

3. Regras
   • Você deve construir o seu ambiente utilizando o docker e docker-compose (você pode utilizar uma receita de ambiente pronta, encontrada na internet);
   • Você deve utilizar um framework PHP de sua escolha;
   • Você será avaliado pela lógica e leitura do seu código, seguindo os princípios SOLID, PSR-4 e PSR-12.
   • Após o final do desenvolvimento, crie um repositório público do GIT, hospede o seu código e nos envie o endereço do repositório.
