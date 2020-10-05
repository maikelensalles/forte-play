@include('admin.includes.alerts')

@csrf
<div class="form-group">
    <input type="text" class="form-control" name="titulo" placeholder="Título:" value="{{ $mensagem->titulo ?? old('titulo') }}">
</div>
<div class="form-group">
    <input type="text" class="form-control" name="alerta" placeholder="Mensagem:" value="{{ $mensagem->alerta ?? old('alerta') }}">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">Enviar</button>
</div>