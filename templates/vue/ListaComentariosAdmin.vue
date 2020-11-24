{literal}
<section id="app">
    <ul class="list-group mt-5">
        Comentarios - Puntaje
        <li v-for="comentario in comentarios" class="list-group-item">
            {{comentario.texto}} - {{comentario.puntos}}
            
            <button v-on:click="Eliminar(comentario.idc)" class="btn btn-outline-danger btn-sm ml-2">Eliminar comentario</button>
        </li>
        <form id="addCommentary" action="InsertarComentario" method="POST" class="mt-4">
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
{/literal}