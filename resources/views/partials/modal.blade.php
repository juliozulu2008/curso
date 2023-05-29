<div class="modal" id="modal-lead">
    <div class="modal-content">
        <h3 class="flow-text">Preencha todos os Campos</h3>
            <form action="{{ route('lead') }}" method="post">
                @csrf {{-- Tokemd e segurança Obrigatorio no Laravel --}}
                <div class="row">
                    {{-- Campo nome --}}
                    <div class="col s12 input-field">
                        <i class="material-icons prefix">person</i>
                        <input type="text" name="name" id="name">
                        <label for="name">Digite seu Nome:</label>
                    </div>
                    {{-- Campo telefone --}}
                    <div class="col s12 input-field">
                        <i class="material-icons prefix">smartphone</i>
                        <input type="tel" name="tel" id="tel">
                        <label for="tel">Digite seu Telefone:</label>
                    </div>
                    {{-- Campo E-mail --}}
                    <div class="col s12 input-field">
                        <i class="material-icons prefix">email</i>
                        <input type="email" name="email" id="email">
                        <label for="email">Digite seu E-mail:</label>
                    </div>
                    {{-- Botoes de ação --}}
                    <div class="col s12 input-field">
                        <input type="submit" value="enviar" class="btn btn-small purple">
                        <input type="reset" value="limpar" class="btn btn-small red">
                    </div>

                </div>


            </form>


    </div>
</div>
