<html>
<head>

</head>

<body>
    <div>
        <form>
            Nome do Produto:
            <input type="text" name="nome">

            <br>
            Categoria do Produto:
            <select name="categoria">
                @foreach($categorias as $categoria)
                    <option>{{$categoria->nome;}}</option>
                @endforeach
            </select>

            <br>
            Marca do Produto:
            <select name="marca">
                @foreach($marcas as $marca)
                    <option>{{$marca->nome;}}</option>
                @endforeach
            </select>

            <br>
            Quantidade/Peso:
            <input type="text" name="quantidade">

            <br>
            Valor:
            <input type="text" name="valor">

            <br>
            <input type="submit">

        </form>
    </div>
</body>
</html>