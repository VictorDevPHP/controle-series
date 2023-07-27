<x-layout title="Nova Serie">

    <form action="/series/salvar" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome" form="form-label">Nome</label>
            <input type="text" id="nome" name="nome" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark mb-2">Submit</button>
    </form>

</x-layout>
