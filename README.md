<h1>Api com laravel ultilizando autenticação com JWT</h1>

<h2>Rotas ultilizadas no insomnia:</h2>

Listar usuarios(GET): http://localhost:8000/api/users<br>
obs:para listar os usuarios é preciso que o user esteja logado, para isso o token gerado na hora do login, deve ser informado na parte (Auth bearer token)<br><br>

Login(POST): http://localhost:8000/api/auth/login<br>
obs: para fazer a autenticação, é preciso inserir o email e senha do usuario<br><br>

Logout(POST): http://localhost:8000/api/auth/logout<br>
obs: para fazer o logout é preciso informar o token gerado na autenticação na parte (Auth bearer token), após feito, o antigo token se tornará invalido<br><br>

Links usados nesta aplicação para estudos

AUTENTICAÇÃO EM API REST UTILIZANDO JWT | LARAVEL TIPS #018 <br>
https://www.youtube.com/watch?v=Ri-DLFeepbM<br><br>

Documentação JWT<br>
https://jwt-auth.readthedocs.io/en/develop/quick-start/<br><br>

Miguel gabriel b. dos santos



