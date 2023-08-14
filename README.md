# Teste JN2

## Sistema de clientes e placas

O nosso desafio consiste na criação de um sistema de controle de clientes e suas respectivas placas de carro.

1. Você precisará construir uma base de dados com os seguintes campos:
    - ID;
    - Nome - obrigatório;
    - Telefone - obrigatório;
    - CPF - obrigatório, somente CPF com número válido deve ser aceito;
    - Placa do Carro - obrigatório.
2. Para o gerenciamento dessa base, você construirá uma **API REST** contendo os seguintes endpoints:
 <table>
     <thead>
         <th>Método</th>
         <th>Endpoint</th>
         <th>Descrição</th>
     </thead>
     <tbody>
         <tr>
             <td>POST</td>
             <td>/cliente-cadastro</td>
             <td>Cadatro de um novo cliente</td>                
         </tr>
         <tr>
             <td>PUT</td>
             <td>cliente/{id}</td>
             <td>Edição de um cliente</td>                
         </tr>
         <tr>
             <td>DELETE</td>
             <td>cliente/{id}</td>
             <td>Remoção de um cliente</td>                
         </tr>
         <tr>
             <td>GET</td>
             <td>cliente/{id}</td>
             <td>Consulta dados de um cliente</td>                
         </tr>
         <tr>
             <td>GET</td>
             <td>consulta/final-placa/{numero}</td>
             <td>Consulta todos os clientes, onde o último número é o número informado</td>                
         </tr>            
     </tbody>
 </table>

3. Regras
    - Você deve construir o seu ambiente utilizando o docker e docker-compose (você pode utilizar uma receita de ambiente pronta, encontrada na internet);
    - Você deve utilizar um **framework PHP** de sua escolha;
    - Você será avaliado pela lógica e leitura do seu código, seguindo os princípios **SOLID**, **PSR-4** e **PSR-12**.
    - Após o final do desenvolvimento, crie um repositório público do GIT, hospede o seu código e nos envie o endereço do repositório.
