@extends('layouts.reporte')
@section('contenido')
<div class="container">
    <!-- Static navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Administración SAP</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Inicio</a></li>
                    <li><a href="reporte.html">Reporte</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <h1>Reporte de Alumnos</h1>
    <div class="container">
        <form class="searchbox">
            <input type="search" placeholder="Search......" name="search" class="searchbox-input" onkeyup="buttonUp();" required>
            <input type="submit" class="searchbox-submit" value="Búsqueda">
            <span class="searchbox-icon">Búsqueda</span>
        </form>
    </div>
    <div class="table-responsive flexcroll">
        <table class="table table-bordered flexcroll">
            <thead>
            <tr>
                <th>#</th>
                <th>Nombre y Apellido</th>
                <th>Descripción</th>
                <th>Opción</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td></td>
                <td></td>
                <td><div class="form-group">
                        <button class="btn btn-success">Edit</button>
                        <button class="btn btn-danger ">Eliminar</button>
                    </div></td>
            </tr>
            </tbody>
        </table>
    </div>
               @endsection