### HTML
<p>HTML - marcação hipertexto para o desenvolvimento de sites. Ele segue uma estrutura básica, deixando seus elementos posicionados de baixo pra cima.
O HTML é constítuidor por TAGs, que são abertas e fechadas com setas.
Como é uma linguagem de marcação, o desenvolvedor pode usar TAGs já definidas pelo HTML ou criar próprias.</p>

*< head > Conteúdo < /head >*
<p>A TAG <b>HEAD</b> serve para importar arquivos para o nosso site, alterar o título e outras coisas.
(Importar CSS, importar frameworks, título do site, ícone do site)</p>

*< body > Conteúdo < /body >*
<p>A TAG <b>BODY</b> serve para a real estruturação do site. Todas as divisões, imagens, conteúdos e textos do site devem entrar no body.</p>

*< div > < div >*
<p>Serve para criar divisões no site para criação de estruturas</p>

*class="nome"*
<p>Atribui um nome para a tag. Podemos repetir o 'class' quantas vezes quisermos.</p>

*id="nome"*
<p>Atribui nome para a tag. Podemos repetir o 'ID' apenas uma vez.</p>

*href="link/referencia"*
<p>Utilizado para anexar imagens, links e outros.</p>

*src="link/referencia"*
<p>Anexa uma imagem no site.</p>

*< a > Conteúdo < /a >*
<p>Usado para 'criar links clicáveis'</p>

*< span > Conteúdo < / span >*
<p>Serve para inserir 'palavras' no site.</p>

### CSS
É uma página de estilização para o nosso site HTML. Com ele, podemos adicionar cor de fundo, novas fontes e outros.
A configuração padrão de uma página CSS para iniciarmos o nosso projeto é:

> *{
>   margin: 0;
>   padding: 0;
> }

> body{
>   height: 100%;
> }

Como levar uma div inteira para o meio?
> display: flex;
> justify-content: center;
> align-itens: center;

### PHP
$_POST, $_GET são variáveis super globais que são usadas no PHP
$_POST é quando o usuário envia dados pra gente (formulário etc)
$_GET é quando a gente recebe dados do usuário (banco de dados)

filter_input = serve para filtrar os dados que estão entrando no banco de dados
Fazemos isso para evitar SQL injection (hackear o banco de dados com os próprios comandos)
Como filtrar dados com filter_input?
> olhar no login.php pra saber mas ou menos

> foreach(VARIÁVEL QUE QUEREMOS NAVEGAR as CRIAR UMA VARIÁVEL NOVA)
    variável que queremos navegar = array, banco de dados etc
    criar uma variável nova = variável que vai "salvar" os dados que estamos navegando (funciona como um i do laço for)

Fazendo CRUD

Inserindo dados (Create)
> $sqlcode = "INSERT INTO users(name,email,password) VALUES ('$name','$email','$password')";
> $sqlquery = $mysqli->query($sqlcode) or die("Falha na conexão do SQL: " . $mysqli);