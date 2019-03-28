<?php include 'header.php';?>

    <script>
        function calc_total(){
            var qtd = parseInt(document.getElementById('cQtd').value);
            tot = qtd * 1500;
            document.getElementById('cTot').value = tot;
        }
    </script>

    <section id="corpo-full">
        <article id="noticia-principal">
            <header id="cabecalho-artigo">
                <h3>Fale Conosco > Contato</h3>
                <h1>Formulário de Contato</h1>
                <h2>By Guilherme Longhini</h2>
                <h3 class="direita">Atualizado em 2018</h3>
            </header>
        </article>
    </section>


    <form method="POST" id="fContato" oninput="calc_total()">
        <fieldset id="usuario">
            <legend>Identificação do Usuário</legend>
                <p><label for="cNome">Nome:</label>
                    <input type="text" name="tNome" id="cNome" size="20" maxlength="30"placeholder="Nome Completo"/></p>

                <p><label for="cSenha">Senha:</label>
                    <input type="password" name="tSenha" id="cSenha" size="8" maxlength="8" placeholder="Digita uma senha"/></p>

                <p><label>E-mail:</label>
                    <input type="email" name="tEmail" id="cEmail" size="20" maxlength="40"/></p>

                <fieldset id="sexo">
                    <legend>Sexo</legend>
                        <input type="radio" name="tSexo" id="cMasc" checked/><label for="cMasc">Masculino</label></br>
                        <input type="radio" name="tSexo" id="cFem"/> <label for="cFem">Feminino</label>
                    </fieldset>
                <p>Data de Nascimento: <input type="date" name="tNasc" id="cNasc"/></p>
                
        </fieldset>

        <fieldset id="endereco">
            <legend>Endereço do Usuário</legend>
            <p><label for="cRua">Logradouro:</label>
                <input type="text" name="tRua" id="cRua" size="13" maxlength="80" placeholder="Rua, Av, Trava, ..."/></p>
            
            <p><label for="cNum">Número:</label>
                <input type="number" name="tNum" id="cNum" min="0" max="99999"/></p>

            <p><label for="cEst">Estado:</label>
            <select>
                <optgroup label="Região Sudeste">
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="SP">São Paulo</option>
                </optgroup>
                
                <optgroup label="Região Nordeste">
                    <option selected value="BA">Bahia</option>
                </optgroup>
            </select> </p>
            <p><label for="cCid">Cidade:</label>
            <input type="text" name="tCid" id="cCid" maxlength="40" size="20" placeholder="Sua Cidade" list="cidades"/></p>
            <datalist id="cidades">
                <option value="Rio de Janeiro"></option>
                <option value="Nova Iguaçu"></option>
                <option value="Niteroi"></option>
            </datalist>
        </fieldset>

        <fieldset id="mensagem">  
            <legend>Mensagem do Usuário</legend>
            <p><label for="cUrg">Grau de Urgência:</label>
                Mín<input type="range" name="tUrg" id="cUrg" min="0" max="10" step="2"/>Máx</p>
            <p><label for="cMsg">Mensagem:</label>
            <textarea name="tMsg" id="cMsg" cols="35" rows="5" placeholder="Deixe aqui sua mensagem"></textarea></p>
        </fieldset>
        
        <fieldset id="pedido">
            <legend>Quero um Google Glass</legend>
            <p><input type="checkbox" name="tPed" id="cPed" checked>
            <label for="cPed">Gostaria de adquirir um Google Glass quando disponível</label></p>
            
            <p><label for="cCor">Cor:</label>
            <input type="color" name="cCor" id="cCor" valeu="0000FF"/></p>
            
            <p><label for="cQtd">Quantidade:</label>
            <input type="number" name="tQtd" id="cQtd" min="0" max="5" value="0"></p>
            
            <p><label for="cTot">Preço Total:</label> R$
            <input type="text" name="tTot" id="cTot" placeholder="Total a pagar" readonly></p>
        </fieldset>

        <input type="image" name="tEnviar"src="_imagens/botao-enviar.png"/>
    </form>

<footer id="rodape">
    <p>Copyright &copy; 2018 - By Guilherme Longhini <br/>
    <a href="https://www.facebook.com/guilherme.longhini.1999" target="_blank">Facebook</a> | 
    <a href="https://www.instagram.com/longhini4/?hl=pt-br" target="_blank">Instagram</a></p>
</footer>
</body>
</html>