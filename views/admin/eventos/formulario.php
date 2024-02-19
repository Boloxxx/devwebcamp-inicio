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

    <div class="formulario__campo">
        <label for="descripcion" class="formulario__label">Selecciona el dia</label>

        <div class="formulario__radio">
            <?php foreach($dias as $dia) { ?>
                <div>
                    <label for="<?php echo strtolower($dia->nombre); ?>"><?php echo $dia->nombre; ?></label>

                    <input 
                    type="radio"
                    id="<?php echo strtolower($dia->nombre); ?>"
                    name="dia"
                    value="<?php echo $dia->id; ?>"
                    />
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="formulario__campo" id="horas">
        <label for="formulario__label">Seleccionar Hora</label>

        <ul class="horas">
            <?php foreach($horas as $hora) { ?>
            <li class="horas__hora"><?php echo $hora->hora ?></li>
            

            <?php } ?>
        </ul>
    </div>

</fieldset>

<fieldset class="formulario__fieldset">
        <legend class="formulario__legend">Informacion Extra</legend>

        <div class="formulario__campo">
        <label class="formulario__label" for="ponentes">Ponente</label>
        <input type="text"
        class="formulario__input"
        id="ponentes"
        placeholder="Buscar Ponente">
        </div>

        <div class="formulario__campo">
        <label class="formulario__label" for="ponentes">Lugares Disponibles</label>
        <input type="number"
        min="1"
        class="formulario__input"
        id="disponibles"
        name="disponibles"
        placeholder="Ej. 20">
        </div>
</fieldset>