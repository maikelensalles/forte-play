@include('admin.includes.alerts')

@csrf
<div class="form-group">
    <input type="text" class="form-control" name="nome" placeholder="Nome:" value="{{ $aplicativo->nome ?? old('nome') }}">
</div>
<div class="form-group">
    <input type="text" name="package" class="form-control" placeholder="Pacote:"  value="{{ $aplicativo->package ?? old('package') }}">
</div> 
<div class="form-group">
    <input type="text" name="link" class="form-control" placeholder="Link:"  value="{{ $aplicativo->link?? old('link') }}">
</div>

<div class="form-group">
    <input type="file" name="image" class="form-control">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">Enviar</button>
</div>