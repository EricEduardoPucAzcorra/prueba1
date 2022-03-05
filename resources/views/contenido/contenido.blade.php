@extends('layout.index')
@section('contenido')

<template v-if="menu==0">
    <!-- home -->
    <home-component></home-component>

</template>
    
<template v-if="menu==1">
    <!-- servicios -->
    <servicio-component></servicio-component>
       
</template>

<template v-if="menu==2">
    <!-- Galeria -->
    <galeria-component></galeria-component>
</template>

<template v-if="menu==3">
    <!-- Blog -->
    <blog-component></blog-component>
</template>

<template v-if="menu==4">
    <!-- Contactos -->
    <contacto-component></contacto-component>
</template>

<template v-if="menu==5">
    <!-- Iniciar session -->
    <session-component></session-component>
</template>

@endsection