Ideia foi criar um CRUD para cadastro de doces. Nele é possível criar, editar, remover e listar os doces criados. Também existem tratamentos de erro para caso não exista nenhum produto criado, erros no formulário etc.

O banco de dados foi exportado e está junto nos docs. <br>
banco de dados MySQL: <b>doces.sql</b>


<b>rotas</b> em: routes -> web.php


<b> rotas API</b> em: routes -> api.php


API:

<b>GET</b><br>
http://127.0.0.1:8000/api/doces 

<b>GET by ID</b><br>
http://127.0.0.1:8000/api/doces/{id}

<b>POST</b> <br>
http://127.0.0.1:8000/api/doces

{"nome_produto":"brigadeiro",
 "preco_produto":"10.00",
 "peso":"50g",
 "descricao":"pote de brigadeiro",
 "data":"2022-12-12"
 }

<b>PUT</b> <br>
http://127.0.0.1:8000/api/doces/{id}

<b>DELETE</b><br>
http://127.0.0.1:8000/api/doces/{id}
