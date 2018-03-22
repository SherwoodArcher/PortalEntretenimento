<?php 
include_once "classes/category.php";
include_once "classes/commons.php";

class HtmlBuilder{

    public function HeaderBuilder(){
        echo "<!DOCTYPE html>
                <html lang='en'>
                    <head>
                        <title>Boom - Onde a diversão nao estoura o bolso</title>
                        <meta charset='utf-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1'>";
        $this->LinkBuilder();
        $this->MetaBuilder();
        $this->FaviconBuilder();
        echo "      </head>
                    <body>";
        $this->SearchMenuBuilder();
        $this->LoginMenuBuilder();
        $this->EsqueciMenuBuilder();
    }

    ####################################################
    ###Funções privadas referentes ao Header Builder ###
    ####################################################
    private function LinkBuilder(){
        echo "          <!-- Link -->";
        echo "          <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
                        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
                        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
                        <link rel='stylesheet' type='text/css' href='css/custom.css'>
                        <script src='js/busca.js'></script>
                        <script src='js/login.js'></script>
                        <script src='js/esqueci.js'></script>";
        echo "          <!-- End Link -->";
    }
    private function MetaBuilder(){
        echo "          <!-- Meta -->";
        echo "          <meta name='viewport' content='width=device-width, initial-scale=1' />
                        <meta name='author' content='Boom' />
                        <meta name='description' content='Boom - Onde você encontra a diversão que você procura, no preço justo e o mais próximo possível' />
                        <meta name='keywords' content='boom, diversão, entretenimento, na faixa' />
                        <meta property='og:url' content='".get_current_url(false)."' />
                        <meta property='og:title' content='Boom | Onde a diversão não estoura o bolso' />
                        <meta property='og:description' content='Boom - Onde você encontra a diversão que você procura, no preço justo e o mais próximo possível' />
                        <meta property='og:image' content='/favicon-360x360.png' />";
        echo "          <!-- End Meta -->";
    }
    private function FaviconBuilder(){
        echo "          <!-- Favicon -->";
        echo "          <link rel='shortcut icon' href='/favicon.ico' />
                        <link rel='shortcut icon' href='/favicon.png' />
                        <link rel='apple-touch-icon' sizes='57x57' href='/apple-icon-57x57.png' />
                        <link rel='apple-touch-icon' sizes='60x60' href='/apple-icon-60x60.png' />
                        <link rel='apple-touch-icon' sizes='72x72' href='/apple-icon-72x72.png' />
                        <link rel='apple-touch-icon' sizes='76x76' href='/apple-icon-76x76.png' />
                        <link rel='apple-touch-icon' sizes='114x114' href='/apple-icon-114x114.png' />
                        <link rel='apple-touch-icon' sizes='120x120' href='/apple-icon-120x120.png' />
                        <link rel='apple-touch-icon' sizes='144x144' href='/apple-icon-144x144.png' />
                        <link rel='apple-touch-icon' sizes='152x152' href='/apple-icon-152x152.png' />
                        <link rel='apple-touch-icon' sizes='180x180' href='/apple-icon-180x180.png' />
                        <link rel='icon' type='image/png' sizes='16x16' href='/favicon-16x16.png' />
                        <link rel='icon' type='image/png' sizes='32x32' href='/favicon-32x32.png' />
                        <link rel='icon' type='image/png' sizes='36x36' href='/android-icon-36x36.png' />
                        <link rel='icon' type='image/png' sizes='48x48' href='/android-icon-48x48.png' />
                        <link rel='icon' type='image/png' sizes='72x72' href='/android-icon-72x72.png' />
                        <link rel='icon' type='image/png' sizes='96x96' href='/favicon-96x96.png' />
                        <link rel='icon' type='image/png' sizes='144x144' href='/android-icon-144x144.png' />
                        <link rel='icon' type='image/png' sizes='192x192' href='/android-icon-192x192.png' />
                        <link rel='manifest' href='/manifest.json' />
                        <meta name='msapplication-TileColor' content='#ffffff' />
                        <meta name='msapplication-TileImage' content='/ms-icon-144x144.png' />
                        <meta name='theme-color' content='#000000' />";
        echo "          <!-- End Favicon -->";
    }
    
    private function SearchMenuBuilder(){
        echo "          <!-- SearchMenu -->";
        echo "          <div id='search'>
                            <div class='close'>×</div>
                            <form>
                                <input type='search' value='' placeholder='digite aqui ...' />
                                <div class='linkBranco'>
                                    <a type='submit'>procurar</a>
                                </div>
                            </form>
                        </div>";
        echo "          <!-- End SearchMenu -->";
    }
    private function LoginMenuBuilder(){
        echo "          <!-- LoginMenu -->";
        echo "          <div id='login'>
                            <div class='close'>×</div>
                            <form>
                                <div class='login'>login</div>
                                <label for='email'>usuário:</label>
                                <input type='email' value='' id='email' placeholder='exemplo@exemplo.com.br' required /><br/>

                                <label for='senha'>senha:</label><br/>
                                <input type='password' id='senha' required placeholder='********' /><br/>
                                <div class='linkBranco'>
                                    <a type='submit'>entrar</a><br/><br/>
                                    <a href='cadastrousuario.html'>não é cadastrado? cadastre-se aqui!</a><br/><br/>
                                    <a href='#esqueci'>esqueceu sua senha? clique aqui</a>
                                </div>
                            </form>
                        </div>";
        echo "          <!-- End LoginMenu -->";
    }

    private function EsqueciMenuBuilder(){
        echo "          <!-- EsqueciMenu -->";
        echo "          <div id='esqueci'>
                            <div class='close'>×</div>
                            <form>
                                <div class='esqueci'>esqueci minha senha</div>
                                <label for='email'>email:</label>
                                <input type='email' value='' id='email' placeholder='exemplo@exemplo.com.br' required /><br/>

                                <div class='linkBranco'>
                                    <a type='submit'>reenviar senha</a><br/><br/>
                                </div>
                            </form>
                        </div>   ";
        echo "          <!-- End EsqueciMenu -->";
    }

    ####################################################
    ### Fim das funções do Header Builder            ###
    ####################################################

    public function MenuBuilder(){
        $category = new Category();
        $sql_menu_categories = "SELECT category_id, category_name FROM category WHERE category_level = 1 ";
        $stmt = $category->selectDB($sql_menu_categories,null,"Category");

        echo "          <!-- Menu -->";
        echo "          <nav class='navbar navbar-inverse navbar-fixed-top'>
                            <div class='container-fluid'>

                                <!-- Botão para utilizar em resposividade -->
                                <div class='navbar-header'>

                                    <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#BarraDeNavegacao'>
                                        <span class='icon-bar'></span>
                                        <span class='icon-bar'></span>
                                        <span class='icon-bar'></span>
                                    </button>

                                    <!-- Logo do Site -->
                                    <a class='navbar-brand' href='index.html'><img src='img/logo.png' class='logo'></a>
                                    <div class='nomeLogo'>Boom</div>

                                    <div class='mobile navbar-toggle float-right' style='margin-right: 3.5%;'>
                                        <div class='desktop-hide linkBranco'>
                                            <a href='#search'><span class='glyphicon glyphicon-search'></span></a>                  
                                        </div>
                                    </div>

                                    <div class='mobile navbar-toggle float-right'>
                                        <div class='desktop-hide linkBranco'>
                                            <a href='#login'><span class='glyphicon glyphicon-user'></span></a>                     
                                        </div>
                                    </div>

                                </div>

                                <div class='collapse navbar-collapse' id='BarraDeNavegacao'>
                                    <!-- Categorias da Barra de Navegação -->
                                    <ul class='nav navbar-nav navbar-right'>";
                                foreach($stmt as $category){
                                echo "  <li><a href='".$category->getCategory_Id()."'>".$category->getCategory_Name()."</a></li>";
                                }
        echo "                          <li class='mobile-hide'><a href='#login'><span class='glyphicon glyphicon-user'></span></a></li>                    
                                        <li class='mobile-hide'><a href='#search'><span class='glyphicon glyphicon-search'></span></a></li>
                                    </ul>
                                    <!-- Fim das Categorias da Barra de Navegação -->

                                </div>                                
                            </div>
                            <!-- Fim da Div Container -->
                        </nav>";
        echo "          <!-- End Menu -->";
        unset($category);
    }

    public function PostBuilder($post_id){

        //Conecta no Banco de Dados
        
        //Cria objeto Post
        $post = new Post;
        //Passa os registros do banco para as propriedades do objeto
        $post->setPost_Id = $conexao;
        //Cria o HTML para exibição
        echo "SELECT * FROM Post Where post_id = ".$post_id." ORDER BY ";
        
  
    }

    public function __construct(){
        
    }

}
?>