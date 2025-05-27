<div>
        <div id="login">
            <h2 class="text-center">Login</h2>
            <form action="./config/verification.php" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nome de Usúario</label>
                    <input type="text" name="name-user" class="form-control" id="exampleFormControlInput1" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Senha</label>
                    <input type="password" name="password-user" class="form-control" id="exampleFormControlInput1" placeholder="Senha" required>
                </div>

                <button type="submit" name="submit" class="btn btn-success px-3">Entrar</button>
            </form>
        </div>
</div>
