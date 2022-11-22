<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <main class="container">

    <div class="row justify-content-center">

        <div class="col md-6 text-center mb-5">
            <h1>Cadastro</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
            <div class="row">
                <div class="col-6 p-4 p-md-5 formulario">
                    <!-- <div class="w-100">
                        <h3>Cadastro</h3>
                    </div> -->

                    <form>

                        <div class="row">

                            <div class="col-6 form-group mb-3">
                                <input type="text" placeholder="Nome" class="form-control">
                            </div>

                            <div class="col-6 form-group mb-3">
                                <input type="text" placeholder="Sobrenome" class="form-control">
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group mb-3">
                                <input type="email" placeholder="E-mail" class="form-control">
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-6 form-group mb-3">
                                <input type="password" placeholder="Senha" class="form-control">
                            </div>

                            <div class="col-6 form-group mb-3">
                                <input type="password" placeholder="Confirmação de senha" class="form-control">
                            </div>

                        </div>


                        <div class="row">

                            <div class="form-group mb-3">
                                <input type="date" placeholder="Data de nascimento" class="form-control">
                            </div>

                        </div>


                        <div class="row">

                            <div class="col-6 form-group mb-3">
                                <input type="text" placeholder="Endereço" class="form-control">
                            </div>

                            <div class="col-6 form-group mb-3">
                                <input type="number" placeholder="Número" class="form-control">
                            </div>

                        </div>


                        <div class="row">

                            <div class="col-6 form-group mb-3">
                                <input type="text" placeholder="Cidade" class="form-control">
                            </div>

                            <div class="col-6 form-group mb-3">
                                <select name="estado" class="form-control" placeholder="Selecione o estado"> 
                                    <option value="estado">Selecione o Estado</option> 
                                    <option value="ac">Acre</option> 
                                    <option value="al">Alagoas</option> 
                                    <option value="am">Amazonas</option> 
                                    <option value="ap">Amapá</option> 
                                    <option value="ba">Bahia</option> 
                                    <option value="ce">Ceará</option> 
                                    <option value="df">Distrito Federal</option> 
                                    <option value="es">Espírito Santo</option> 
                                    <option value="go">Goiás</option> 
                                    <option value="ma">Maranhão</option> 
                                    <option value="mt">Mato Grosso</option> 
                                    <option value="ms">Mato Grosso do Sul</option> 
                                    <option value="mg">Minas Gerais</option> 
                                    <option value="pa">Pará</option> 
                                    <option value="pb">Paraíba</option> 
                                    <option value="pr">Paraná</option> 
                                    <option value="pe">Pernambuco</option> 
                                    <option value="pi">Piauí</option> 
                                    <option value="rj">Rio de Janeiro</option> 
                                    <option value="rn">Rio Grande do Norte</option> 
                                    <option value="ro">Rondônia</option> 
                                    <option value="rs">Rio Grande do Sul</option> 
                                    <option value="rr">Roraima</option> 
                                    <option value="sc">Santa Catarina</option> 
                                    <option value="se">Sergipe</option> 
                                    <option value="sp">São Paulo</option> 
                                    <option value="to">Tocantins</option> 
                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group d-grid gap-2">
                                            <button class="btn btn-success">Salvar</button>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group d-grid gap-2">
                                            <a href="index.php" class="btn btn-secondary">Voltar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>

                <div class="col-6 d-flex justify-content-center">
                    <img src="foto.jpg" class="img" width="300px">
                </div>
        
            </div>
            
        </div>
    </div>



    </main>
    





</body>
</html>