@extends('layout')

@section('content')
</br>
<div id="tablecontainer" style="width: 70%; align-content: center"></div>
<script type="application/javascript">

    $(document).ready(function () {

        $("#tablecontainer").jtable({
            title: "Lista de Modulos",
            paging: true,
            sorting: true,
            actions: {
                listAction: "modulos/list",
                createAction: "modulos/create",
                updateAction: "modulos/update",
                deleteAction: "modulos/delete"
            },
            fields: {
                id: {
                    key: true,
                    create: false,
                    edit: false,
                    list: false
                },
                descripcion: {
                    title: 'Modulo',
                    whidth: '30%',

                },
                url: {
                    title: 'url',
                    whidth: '40%'
                },
                icono: {
                    title: 'icono',
                    whidth: '20%'
                },
                idpadre: {
                    title: 'Modulo Padre',
                    whidth: '20%'
                }
            }

        });

        $("#tablecontainer").jtable('load');
    });
</script>
@overwrite