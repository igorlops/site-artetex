<div id="section-contato">
    <div class="d-flex justify-content-center align-itens-center flex-column text-center">
        <div class="my-4">
            <h2 class="titulo-sections">Entre em contato conosco</h2>
            <p class="h5" style="color: #f37542">Preencha o formulário, em breve nossa equipe entrará em contato.</p>
        </div>
        <div class="container-formulario">
            <div class="formulario-model">
                <form method="POST" action="{{ route('contato.store') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required placeholder="Digite seu nome">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="Digite seu email">
                    </div>
                    <div class="form-group mb-3">
                        <label for="telefone">Telefone:</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" required placeholder="Digite seu telefone">
                    </div>
                    <div class="form-group">
                        <label for="mensagem">Mensagem:</label>
                        <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required placeholder="Digite uma mensagem"></textarea>
                    </div>
                    <button type="submit" class="btn btn-contato my-5">Enviar Mensagem</button>
                </form>
            </div>
        </div>
    </div>

</div>
