# Trabalho Final Programação Web II-ADS106

## Documentação Sistema de Informações sobre o Histórico e Uso das Salas e Ambientes da Univiçosa

### Grupo 06
- Vinicius Ferreira Fontes
- Maria Eduarda Rosa Pimenta
- Gabriel Batista Magnago

## 1. Introdução

### 1.1 Objetivo do Documento
Este documento tem como objetivo fornecer uma visão detalhada do site de gestão de salas da faculdade, incluindo suas funcionalidades, design, navegação e requisitos.

### 1.2 Escopo do Projeto
O site visa simplificar o acesso e a gestão das informações das salas da faculdade através do uso de códigos QR. Ele permite a visualização, edição e adição de informações das salas.

### 1.3 Público-Alvo
Este site destina-se a administradores, professores e pessoal de manutenção da faculdade.

## 2. Visão Geral do Site

### 2.1 Descrição
O site é uma plataforma web que facilita o acesso rápido e eficiente às informações das salas de aula através da leitura de códigos QR. Ele permite a visualização detalhada de informações das salas, além de uma área para adicionar e deletar as salas e suas informações.

### 2.2 Funcionalidades Principais
- Visualização de informações da sala via código QR.
- Painel Administrativo.
- Edição de informações existentes.
- Adição de novas informações.

## 3. Arquitetura e Tecnologias Utilizadas

### 3.1 Arquitetura
O site utiliza uma arquitetura cliente-servidor. O lado do servidor é desenvolvido no CodeIgniter, utilizando o servidor host do arteemusica.mus.br, e o lado do cliente é baseado em PHP, CSS e TailwindCSS.

### 3.2 Tecnologias
- Frontend: PHP, HTML5, CSS3, TailwindCSS
- Backend: PHP e Codeigniter
- Banco de Dados: MySQL

## 4. Navegação no Site

### 4.1 Página Inicial
A página inicial do painel administrativo apresenta opções para visualização, adição de informações das salas e deletar.

### 4.2 Visualização de Informações da Sala
Ao escanear o código QR, o usuário é direcionado para uma página que exibe as informações detalhadas da sala.

### 4.3 Deletar as Salas
A deleção de informações é realizada através de uma interface intuitiva e requer autenticação do usuário.

### 4.4 Adição de Informações da Sala
Permite a adição de novas informações para salas não cadastradas previamente.

## 5. Design e Interface do Usuário

### 5.1 Esquema de Cores
O design utiliza uma paleta de cores predominante de azul, cinza e branco para harmonizar com o ambiente acadêmico.

### 5.2 Layout Responsivo
A interface é projetada para ser acessível em diferentes dispositivos, garantindo uma experiência consistente.

### 5.3 Usabilidade
A navegação é intuitiva, com botões de ação claramente identificados, facilitando o uso para usuários de diferentes níveis de habilidade.

## 6. Funcionalidades Detalhadas

### 6.1 Visualização de Informações da Sala

#### 6.1.1 Dados Exibidos
- Nome da Sala
- Bloco
- Número de Ares Condicionados
- Número de Datashows
- Número de Cadeiras
- Número de Computadores

#### 6.1.2 Interação com o QR Code
Ao escanear o código QR, o usuário é automaticamente redirecionado para a página de visualização.

### 6.2 Edição de Informações da Sala

#### 6.2.1 Campos Editáveis
- Todos os campos mencionados na seção 6.1.1

#### 6.2.2 Autenticação de Usuário
A edição de informações requer autenticação do usuário, garantindo a segurança do sistema.

### 6.3 Adição de Informações da Sala

#### 6.3.1 Formulário de Adição
- Campos para inserção das informações mencionadas na seção 6.1.1

#### 6.3.2 Validação de Dados
O sistema valida os dados inseridos para garantir a consistência das informações.

## 7. Segurança

### 7.1 Autenticação
A autenticação de usuário é realizada utilizando [inserir método de autenticação] para garantir acesso seguro às funcionalidades de edição e adição.

### 7.2 Autorização
Níveis de autorização são implementados para garantir que apenas usuários autorizados possam acessar e modificar informações.

### 7.3 Proteção contra Injeção de Código
Medidas de segurança são implementadas para prevenir ataques de injeção de código.

## 8. Manutenção e Atualização

### 8.1 Procedimentos de Manutenção
Procedimentos de rotina são definidos para garantir a estabilidade e segurança contínuas do sistema.

### 8.2 Atualizações Futuras
Futuras atualizações podem incluir melhorias de usabilidade, novas funcionalidades e correções de segurança.

## 9. Anexos
### 9.1 Capturas de tela
- Desktop
![Home](/grupo/assets/HOME.png)
![footer](/grupo/assets/FOOTER.png)
![del](/grupo/assets/deletaar.png)
![inset](/grupo/assets/INSERIR.png)
![viewUnic](/grupo/assets/vISUALIZAR%20UNICO.png)
![view](/grupo/assets/uNICA%20vIEW.png)
- Mobile
![view](/grupo/assets/IMG-20231127-WA0015.jpg)
![view](/grupo/assets/IMG-20231127-WA0016.jpg)
![view](/grupo/assets/IMG-20231127-WA0017.jpg)
![view](/grupo/assets/IMG-20231127-WA0019.jpg)
![view](/grupo/assets/IMG-20231127-WA0020.jpg)

### 9.2 Fluxograma
![fluxograma](/grupo/assets/Fluxograma-ProgWebG6.png)

## 10. Conclusão
Em conclusão, o sistema desenvolvido para a Univiçosa apresenta uma abordagem
moderna e eficiente para a gestão das salas. A integração de códigos QR e o painel
administrativo oferecem uma solução acessível e intuitiva, promovendo a agilidade
na obtenção e manipulação de informações.
Ao longo deste documento, detalhamos a visão geral do site, suas funcionalidades
principais, a arquitetura e tecnologias utilizadas, a navegação no site, o design e
interface do usuário e as funcionalidades detalhadas . A implementação de um
sistema baseado em códigos QR facilita o acesso rápido às informações, enquanto
o painel administrativo oferece funcionalidades essenciais para a gestão eficaz das
salas.
A escolha das tecnologias, como o CodeIgniter para o lado do servidor e PHP,
HTML5, CSS3 e Tailwind para o lado do cliente, juntamente com o uso do MySQL
como banco de dados, auxiliam na construção do sistema.
Em resumo, o sistema ajudará a simplificar o acesso e administração das salas por
meio de códigos QR e do painel administrativo
