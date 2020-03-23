<style>
    main {
        min-height: calc(100vh - 150px);
    }
</style>
<?php require_once("./inc/head.php") ?>
<?php require_once("./inc/header.php") ?>
<?php $tituloPagina = "Formulário de Cadastro para Revendedor" ?>

<body>

    <h2>Seja um Revendedor Xiaomi</h2>
    <p class="txt-form">Não sabe como começar? <br>
        Nós iremos te ajudar, faça seu cadastro que entraremos em contato.
    </p>
    <main class="container">
        <article class="row">
            <section class="col-12 mx-auto bg-light my-5 py-5 rounded border">
                <h3 class="col-12 text-center my-3"><?= $tituloPagina ?></h3>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="sobrenome">Sobrenome</label>
                            <input type="text" class="form-control" id="sobrenome" name="sobrenome" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="cidade">Cidade</label>
                            <input type="text" class="form-control" id="cidade" name="cidade" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="estado">Estado</label>
                            <select id="estado" class="form-control" name="estado" required>
                                <option selected disabled>Escolher...</option>
                                <?php $ufs = ["SP", "RJ"]; ?>
                                <?php foreach ($ufs as $estado) : ?>
                                    <option><?= $estado; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="cep">CEP</label>
                            <input type="text" class="form-control" id="cep" placeholder="00000-000" name="cep" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="email@email.com.br" name="cep" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Aceito receber e-mail.
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar Informações</button>
                </form>
            </section>
        </article>
    </main>
</body>
<footer>
    <ul class="final">
        <li>Lojinha da Xiaomi</li>
        <li><a href="https://www.instagram.com/lojinhadaxiaomi/" title="Acesse Nossa Página no Instagram"><i class="fab fa-instagram"></i> Instagram</a></li>
        <li><a href="tel:+5511945041565" title="Ligar para Lojinha"><i class="fas fa-phone"></i> 11 94504-1565 </a></li>
    </ul>
    <!-- testecc -->
</footer>