<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <main class="container">

    <div class="row justify-content-center">

        <div class="col md-6 text-center mb-5">
            <h1>Login</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
            <div class="row">
                <div class="col-6">
                    <img src="foto.jpg" class="img" width="300px">
                </div>

                <div class="col-6 p-4 p-md-5 formulario">
                    <div class="w-100">
                        <h3>Acesso Restrito</h3>
                    </div>

                    <form>
                        <div class="form-group mb-3">
                            <label for="" class="label">Usuário/E-mail</label>
                            <input type="text" placeholder="Usuário" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="" class="label">Senha</label>
                            <input type="password" placeholder="Senha" class="form-control">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success">Acessar</button>
                            <a href="cadastrar.php" class="btn btn-secondary">Registrar</a>
                        </div>

                    </form>

                </div>
        
            </div>
            
        </div>
    </div>



    </main>
    





</body>
</html>