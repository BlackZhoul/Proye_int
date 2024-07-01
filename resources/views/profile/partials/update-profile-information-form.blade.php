<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            Información del Perfil
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            Visualice la información de su cuenta y dirección de correo electrónico.
        </p>
    </header>


    <div class="mt-6 space-y-6">

        <div>
            <x-input-label value="Name" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" value="{{$user->nombre}} {{$user->ape_materno}} {{$user->ape_paterno}}" disabled/>
        </div>


        <div>
            <x-input-label value="Email" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" value="{{$user->email}}" disabled/>
        </div>

        <div>
            <x-input-label value="Dirección" />
            <x-text-input id="direccion" name="direccion" type="text" class="mt-1 block w-full" value="{{$user->direccion}}" disabled/>
        </div>

        <div>
            <x-input-label value="Teléfono" />
            <x-text-input id="telefono" name="telefono" type="text" class="mt-1 block w-full" value="{{$user->telefono}}" disabled/>
        </div>

    </div>
</section>
