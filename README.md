Projeto Chirper
O Chirper é uma aplicação web para compartilhamento de mensagens curtas. O objetivo é permitir que o usuário escreva pensamentos rápidos, conhecidos como "chirps", e compartilhe-os com o mundo. Cada chirp é exibido na página principal e mostra o nome do usuário que postou, junto com a data de criação.



Tecnologias Utilizadas

Laravel: Framework PHP utilizado para gerenciar a lógica de back-end, lidar com rotas, e manipular o banco de dados.
Livewire: Ferramenta para desenvolvimento de interfaces dinâmicas no Laravel, usada para adicionar reatividade à aplicação sem a necessidade de JavaScript.
Bootstrap: Framework CSS utilizado para estilizar o layout e os componentes visuais, tornando a interface mais amigável e responsiva.
SQLite: Banco de dados leve utilizado para armazenar os chirps postados, oferecendo uma solução de armazenamento rápida e fácil de configurar.



Como Funciona

Criação de Chirps: O usuário pode escrever uma nova mensagem e definir um nome de usuário que será exibido junto ao chirp.
Listagem de Chirps: Todos os chirps criados são exibidos em uma lista, mostrando a mensagem, o nome do usuário e o tempo passado desde a criação.
Edição e Exclusão de Chirps: Para cada chirp, há opções de edição e exclusão.
Na edição, apenas o conteúdo da mensagem pode ser modificado, enquanto o nome do usuário e o ID são exibidos mas não editáveis.
Na exclusão, o sistema pede uma confirmação antes de remover o chirp do banco de dados.
Interface Responsiva: A interface é responsiva, se adaptando tanto para dispositivos móveis quanto para desktops. Em desktops, a área de exibição é centralizada e ocupa cerca de 50% da tela, enquanto em dispositivos móveis ocupa 100% da largura disponível.
Estrutura e Organização
A aplicação é organizada de forma que a lógica de exibição dos chirps e suas operações de criação, edição, e exclusão estão concentradas em um componente Livewire. O sistema de rotas e migrações para o banco de dados é gerenciado pelo Laravel.

