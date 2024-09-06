<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
      .box{
    color: #505D1B;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background-color: #EAF1BD;
    padding: 15px;
    border-radius: 15px;
    width: 20%;
}

fieldset{
    border: 3px solid #505D1B;
}
legend{
    border: 3px solid #667B30;
    padding: 10px;
    text-align: center;
    background-image: 
    linear-gradient(to right, #EAF1BD,#EAF1B1);
    border-radius: 8px;
}
.inputBox{
    position: relative;
}
.inputUser{
    background: none;
    border: none;
    border-bottom: 1px solid white;
    outline: none; 
    color: white;
    font-size: 15px;
    width: 100%;
    letter-spacing: 2px;
}
.labelInput{
    position: absolute;
    top: 0px;
    left: 0px;
    pointer-events: none;
    transition: .5s;
}
.inputUser:focus ~ .labelInput, .inputUser:valid ~ .labelInput{
    top: -20px;
    font-size: 12px;
    color: #0c8cf5;
}
#data-nascimento{
    border: none;
    padding: 8px;
    border-radius: 10px;
    outline: none;
    font-size: 15px;
}
#submit{
    background-image: linear-gradient(to right, #667B30,#667B3f);
    width: 100%;
    border: none;
    padding: 15px;
    color: white;
    font-size: 15px;
    cursor:  pointer;
    border-radius: 10px;
}

h1{
    font-size: 2em;
}

a{
    text-decoration: none;
    color: black;
    display: block;
    padding: 20px 5px;
    color: #eb282890;
}
    </style>

</head>
<body>
    <p><a href="index.html"><img src="imgs/arrow-insc.png" alt=""></a></p>

    <div class="box">
        <form action="">
        <fieldset>
          <legend><strong>Trabalhe Conosco</strong></legend>  
          <br>
          <div class="inputBox">
            <input type="text"name="nome" id="nome" class="inputUser" required>
            <label for="nome" class="labelInput">Nome Completo</label>
          </div>
          <br><br>
          <div class="inputBox">
            <input type="email"name="email" id=email class="inputUser" required>
            <label for="email" class="labelInput">Email</label>
          </div>
          <br><br>
          <div class="inputBox">
            <input type="tel"name="telefone" id="telefone" class="inputUser" required>
            <label for="telefone" class="labelInput">Telefone</label>

            <p>Sexo</p>
            <input type="radio" id="feminino" name="genero" value="feminino" required>
            <label for="feminino">Feminino</label>
            <br>
            <input type="radio" id="masculino" name="genero" value="masculino" required>
            <label for="masculino">Masculino</label>
            <br>
            <input type="radio" id="outro" name="genero" value="outro" required>
            <label for="outro">Outro</label>
            </div>
            <br>
            <div>
                <label for="data-nascimento"><strong>Data de Nascimento</strong></label>
                <input type="date"name="data-nascimento" id="data-nascimento"required>
            </div>
              <br><br>
              <div class="inputBox">
                <input type=""name="cpf" id="cpf" class="inputUser" required>
                <label for="cpf" class="labelInput">CPF</label>
            </div>
                <br>

            

                <input type="submit" name="submit" id="submit">
        </fieldset>
        </div>
        </form>
</body>
</html>
