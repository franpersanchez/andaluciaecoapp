<!-- Agricultura -->
<form  action="<?=$_SERVER['PHP_SELF'];?>" method="POST" id="form1">

<div style="width: 30%;    display: inline;    float:left;  padding:40px; margin-left:25%">

<div class="form-group">
<label for="PLA">Tipo de registro</label>
<input type="text"  name="PLA" value="PLA" readonly/>
</div>

<div class="form-group">
<label for="06">Versión</label>
<input type="number"  value="06"  readonly/>
</div>

<div class="form-group">
<label for="009">Alcance</label>
<input type="number"  value="009"  readonly/>
</div>

<div class="form-group">
<label for="tipoActuacion">Tipo de Actuación</label>
<select  name="tipoActuacion" required>
    <option value="AUDIN">Auditoria Inicial Anunciada</option>
    <option value="AUDSE">Auditoria Anual Anunciada</option>
    <option value="AUDEX">Auditoria Adicional Anunciada</option>
    <option value="AINNA">Auditoria Inicial No Anunciada</option>
    <option value="ASENA">Auditoria anual No Anunciada</option>
    <option value="AEXNA">Auditoria Adicional No Anunciada</option>
</select>
</div>


<div class="form-group">
<label for="01">Tipo de Entidad</label>
<input type="number"  value="01"  readonly/>
</div>

<div class="form-group">
<label for="muestras">¿Toma de muestras planificada?</label>
<select name="muestras"  required>
    <option value="N">N</option>
    <option value="S">S</option>
</select>
</div>

<div class="form-group">
<label for="CIFEntidad">CIF Entidad Certificación</label>
<input type="text" name="CIFEntidad" value="N0016648H" readonly>
</div>
</div>


<div style="width: 30%;    display: inline;    float:left;  padding:20px">
<div class="form-group">
<label for="CIFEntidad">NIF del Auditor</label>
<input type="text" name="NIFAuditor" required minlength="9" maxlength="9">
</div>

<div class="form-group">
<label for="fechaPrevista">Fecha prevista de la visita</label>
<input type="date" name="fechaPrevista" required data-date-format="DD MMM YYYY">
</div>





<div class="form-group">
<label for="CIFCliente">CIF/NIF del Cliente de la Entidad</label>
<input type="text" name="CIFCliente" required maxlength="10">
</div>

<div class="form-group">
<label for="CodigoSIPEA">Código del operador en SIPEA</label>
<small style="color:red; display:block">Código Sipea sin letra, únicamente la parte numérica</small>
<input type="text" name="CodigoSIPEA" required >
</div>

<div class="form-group">
<label for="tipoOderador">Tipo de Operador</label>
<select  name="tipoOperador" required>
    <option value="01">Productor Agricola</option>
    <option value="02">Productor Ganadero</option>
    <option value="03">Entidad de Producción Acuícola</option>
    <option value="04">Elaborador</option>
    <option value="05">Importador</option>
    <option value="06">Exportador</option>
    <option value="07">Comercializador Mayorista</option>
    <option value="08">Comercializador Minorista</option>
</select>
</div>

<div class="form-group">
<label for="provincia">Provincia de la Explotación</label>
<input type="number" name="provincia" required max="99" >
</div>

<div class="form-group">
<label for="municipio">Municipio de la Explotación</label>
<input type="number" name="municipio" required max="999" >
</div>

<div class="form-group">
<label for="observaciones" class="norequired">Observaciones</label>
<input type="text" name="observaciones"  maxlength="1000" >
</div>
</div>

<div style="display: inline;    float:left;  margin-top:20%">
<input class="btn btn-info" type="submit" name="PlaniActuacion" value="Escribir datos">
</div>



</form>





