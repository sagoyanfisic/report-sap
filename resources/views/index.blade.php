@extends('layout.master')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-10 col-md-7 col-lg-6">
            <form class="form-vertical" role="form">
                <fieldset>
                    <legend>Ingreso de incidentes</legend>
                    <div class="form-group">
                        <label for="input-text" class="control-label">Nombre y Apellido</label>
                        <input type="text" class="form-control" id="input-text" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="input-text" class="control-label">Nivel</label>
                        <select id="countries" name="countries" class="form-control" data-live-search="true">
                            <option value="" disabled="disabled">-</option>
                            <option value="1">Inicial</option>
                            <option value="2">Primaria</option>
                            <option value="3">Secundaria</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="input-text" class="control-label">Grado</label>
                        <select id="countries" name="countries" class="form-control" data-live-search="true">
                            <option value="" disabled="disabled">-</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="input-textLS" class="control-label">Seccion</label>
                        <select id="countries" name="countries" class="form-control" data-live-search="true">
                            <option value="" disabled="disabled">-</option>
                            <option value="1">A</option>
                            <option value="2">B</option>
                            <option value="3">C</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="comment">Descripción:</label>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="col-xs-12 col-sm-10 col-md-7 col-lg-6">
            <form class="form-vertical" role="form">
                <fieldset>
                    <img src="http://s3-us-west-2.amazonaws.com/s.cdpn.io/140497/profile/profile-512_1.jpg" alt="..." class="img-circle">
                    <div class="form-group">
                        <button class="btn btn-primary">Primary</button>
                        <button class="btn btn-success">Success</button>
                        <button class="btn btn-warning">Warning</button>
                    </div>
                </fieldset
                </fieldset>
            </form>
        </div>
    </div>
@endsection