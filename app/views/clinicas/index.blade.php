@extends('layout')

@section('content')
</br>
<div id="tablecontainer" style="width: 70%; align-content: center"></div>
<script type="application/javascript">

    $(document).ready(function () {

        $("#tablecontainer").jtable({
            title: "Lista de clinicas",
            paging: true,
            sorting: true,
            actions: {
                listAction: "clinicas/list",
                createAction: "clinicas/create",
                updateAction: "clinicas/update",
                deleteAction: "clinicas/delete"
            },
            fields: {
                id: {
                    key: true,
                    create: false,
                    edit: false,
                    list: false
                },
                /*iduser: {
                    title: 'usuario',
                    whidth: '20%'
                },*/
                descripcion: {
                    title: 'Clinica',
                    whidth: '30%',

                },
                direccion: {
                    title: 'Dirección',
                    whidth: '40%'
                },
                latitud: {
                    title: 'Latitud',
                    whidth: '20%',
                    option:{
                        type: "textarea"
            }
                },
                longitud: {
                    title: 'Longitud',
                    whidth: '20%'
                }
            }

        });

        $("#tablecontainer").jtable('load');
    });
</script>
@overwrite