# acessando os assets com a base_url

declarar o s link para acesso aos arquivos css, js, img no diretório assets

# <link rel="stylesheet" href="<?=base_url('assets/css/cover.css')?>" >

obs- adicionar o caminho ('url') no arquivo autoload.php em:

# $autoload['helper'] = array('url');

## acessa páginas
1- configurar as classes(funcões para as páginas) nas páginas criadas no Controllers
2- incluir as páginas nas rotas em router.php.
3- configurar o arquivo .htacess: (responsável por diversas configurações do servidor Apache)
Obs: Nõ funciona no windows (usar  web.config- pesquisar)

<IfModule mod_rewrite.c> # modo de escrita
 RewriteEngine On            // ativa a engine de escrita das Urls
 RewriteCond %{REQUEST_FILENAME} !-f 
 RewriteCond %{REQUEST_FILENAME} !-d  //se o arquivo  com o nome  não existir segue a regra de reescrita a seguir

RewriteCond ^(.*)$ index.php/$1 [L] //regra de reescrita da Url, onde ele recupera o valor passado logo após o domínio
 </IfModule>

 4 Criar as páginas relacionadas  no diretório views 

 5 ACESSAR O ENDEREÇO COMO NO EXEMPLO:

 example.com/index.php/blog/
OBS: NÃO ESQUECER DE COLOCAR  index.php/   ANTES DA PÁGINA REQUERIDA

## Trabalhando com Hooks (mimificação do html)
1- habilitar o hooks nas variáveis de configuração em config.php (mude para TRUE)
2- Adicionar configuração do  hooks em hooks.php como:

$hook['display_override'][] =array(
    'class' => '',
    'function' => 'compress',
    'filename' => 'compress.php',
    'filepath' => 'hooks'
);

3- criar o arquivo compress.php no diretório hooks
4- segue congfigurações no arquivo compress.php (ver comandos)