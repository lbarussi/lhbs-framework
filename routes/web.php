<?php
    namespace Routes;
    use Config\Route;

    class web{
        public function process(){
            Route::get('/', 'AutenticarController@viewLogin')->name('view.login');
            Route::post('auth', 'AutenticarController@authLogin')->name('post.auth');
            Route::get('register', 'CadastroController@viewCadastro')->name('view.novoCadastro');
            Route::post('new-register', 'CadastroController@novoCadastro')->name('post.novoCadastro');
            Route::middleware('MiddlewareAuth@isLogged', function(){
                Route::prefix('dashboard', function(){
                    Route::get('/', 'HomeController@viewHome')->name('view.dashboard');
                });

                Route::prefix('cadastros/categorias', function(){
                    Route::get('cadastro', 'CategoriasController@viewCadastro')->name('view.cadastroCategoria');
                    Route::post('save', 'CategoriasController@novaCategoria')->name('post.saveCategoria');
                    Route::get('/', 'CategoriasController@categorias')->name('view.listCategorias');
                });

                Route::prefix('cadastros/cartoes', function(){
                    Route::get('/', 'CartoesController@viewCartoes')->name('view.cadastroCategoria');
                });
            });
        }
    }
?>