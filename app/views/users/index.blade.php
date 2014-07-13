@extends('layout')

@section('content')
</br>
<div id="tablecontainer" style="width: 70%; align-content: center"></div>
<script type="application/javascript">

    $(document).ready(function () {

        $("#tablecontainer").jtable({
            title: "Lista de Usuarios",
            paging: true,
            sorting: true,
            actions: {
                listAction: "users/list",
                createAction: "users/create",
                updateAction: "users/update",
                deleteAction: "users/delete"
            },
            fields: {
                id: {
                    key: true,
                    create: false,
                    edit: false,
                    list: false
                },
                nombres: {
                    title: 'Nombres',
                    whidth: '30%'
                },
                apellidos: {
                    title: 'Apellidos',
                    whidth: '40%'
                },
                username: {
                    title: 'Username',
                    whidth: '20%'
                },
                email: {
                    title: 'Email',
                    whidth: '20%'
                }
            }

        });

        $("#tablecontainer").jtable('load');
    });
</script>
@overwrite