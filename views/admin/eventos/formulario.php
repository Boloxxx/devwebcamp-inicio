<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Informacion Evento</legend>

    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre Evento</label>
        <input 
        type="text" 
        class="formulario__input" 
        id="nombre" 
        name="nombre" 
        placeholder="Nombre Evento"
        >
    </div>

    <div class="formulario__campo">
        <label for="descripcion" class="formulario__label">Descripcion</label>
        <textarea
        rows="8"
        class="formulario__input" 
        id="descripcion" 
        name="descripcion" 
        placeholder="Descripcion Evento"
        ></textarea>
    </div>

    <div class="formulario__campo">
        <label for="descripcion" class="formulario__label">Categoria o Tipo de Evento</label>
        <select
        class="formulario__select" 
        name="categoria_id" 
        id="categoria">
            <option value="">- Seleccionar -</option>
            <?php foreach($categorias as $categoria) { ?>
                <option value="<?php echo $categoria->id; ?>"><?php echo $categoria->nombre; ?></option>
            <?php } ?>
        </select>
    </div>



</fieldset>