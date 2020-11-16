{literal}
<section id="app">
    <ul class="list-group mt-5">
        <li v-for="libro in libros" class="class='list-group-item">
            <h6>Titulo:</h6> {{libro.titulo}}
            <h6>Autor:</h6> {{libro.autor}} <br>
            Comentarios:
            <p v-if="libro.texto">{{libro.texto}} - Puntaje: {{ libro.puntos}}</p>
            <p v-else>El libro no posee comentarios</p>
            <form class="addCommentary" action="listarComentarios" method="POST">
                <input type="text" name="texto" placeholder="comentario aqui">
                <select name="puntaje">
                    <option value=1>1</option>
                    <option value=2>2</option>
                    <option value=3>3</option>
                    <option value=4>4</option>
                    <option value=5>5</option>
                <select>
                <button class='btn btn-success btn-sm' type="submit">Insertar Comentario</button>
        </li>
        <a class="btn btn-dark mt-5" href="{BASE_URL}home">Volver al catalogo</a>
    </ul>
</section>
{/literal}