---
title: Contact
description: Get in touch with us
---
@extends('_layouts.master')

@section('body')
<div class="flex-auto w-full container max-w-8xl mx-auto px-4 py-8 lg:px-8">
    <h1>Contact</h1>

    <p class="mb-8">
        Os sitios estáticos non poden xestionar o envío de formularios. Non obstante, hai servizos de terceiros, como <a href="https://fieldgoal.io" title="FieldGoal">FieldGoal</a> de Tighten, que poden aceptar o envío do formulario, enviarlle o resultado por correo electrónico e redireccionar a volta a unha páxina de agradecemento.
    </p>
    <p>Contacta con nós en {{ $page->contact_email }}</p>

    <form action="/contact" class="mb-12">
        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-full md:w-1/2 mb-6 md:mb-0 px-3">
                <label class="block mb-2 text-gray-800 text-sm font-semibold" for="contact-name">
                    Nome
                </label>

                <input type="text" id="contact-name" placeholder="Menda Lerenda" name="name" class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3" required>
            </div>

            <div class="w-full px-3 md:w-1/2">
                <label class="block text-gray-800 text-sm font-semibold mb-2" for="contact-email">
                    Correo electrónico
                </label>

                <input type="email" id="contact-email" placeholder="email@dominio.com" name="email" class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3" required>
            </div>
        </div>

        <div class="w-full mb-12">
            <label class="block text-gray-800 text-sm font-semibold mb-2" for="contact-message">
                Mensaxe
            </label>

            <textarea id="contact-message" rows="4" name="message" class="block w-full border shadow rounded-lg outline-none appearance-none mb-2 px-4 py-3" placeholder="A lovely message here." required></textarea>
        </div>

        <div class="flex justify-end w-full">
            <input type="submit" value="Submit" class="block bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold leading-snug tracking-wide uppercase shadow rounded-lg cursor-pointer px-6 py-3 transform hover:scale-110 motion-reduce:transform-none">
        </div>
    </form>
    @stop
</div>