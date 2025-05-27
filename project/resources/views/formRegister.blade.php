<div>
        <div style="display: none;" id="register">
            <h2 class="text-center">Register</h2>
            <form action="config/verification.php" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nome de Usúario</label>
                    <input type="text" name="name-user" class="form-control" id="exampleFormControlInput1" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" name="email-user" class="form-control" id="exampleFormControlInput1" placeholder="Opcional">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Senha</label>
                    <input type="password" name="password-user" class="form-control" id="exampleFormControlInput1" placeholder="Senha" required>
                </div>

                <div class="mb3 text-center">
                    <label class="" for="termos">
                        <input type="checkbox" name="termos" id="termos" required>
                        Li e aceito todos os termos e condições
                    </label>
                </div>
                <br>

                <button type="submit" name="register" class="btn btn-success px-3">Registrar</button>
            </form>
        </div>
</div>
