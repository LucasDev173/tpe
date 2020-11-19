{literal}
<section id="app">
    <ul class="list-group mt-5">
        Comentarios - Puntaje
        <li v-for="comentario in comentarios" class="list-group-item">
            {{comentario.texto}} - {{comentario.puntos}}
        </li>
        <form id="addCommentary" action="api/InsertarComentario" method="POST">
                <input type="text" name="texto" placeholder="Insertar comentario">
                <select name="puntaje">
                    <option value=1>1</option>
                    <option value=2>2</option>
                    <option value=3>3</option>
                    <option value=4>4</option>
                    <option value=5>5</option>
                <select>
        <button class="btn btn-success btn-sm" type="submit">Insertar Comentario</button>
    </ul>
</section>
<a class="btn btn-dark mt-5" href='{/literal}{BASE_URL}{literal}home'>Volver al catalogo</a>
{/literal}