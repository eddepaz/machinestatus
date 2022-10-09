
<h4>Generar información</h4>
    <form method="POST" action="{{ route('generarinformacion') }}">
    @csrf
    {{-- <div style="width: 25%">
        <input type="number" min="0" class="form-control" placeholder="Registros a seleccionar" name="registers">
    </div> --}}

    <div class="form-group twin-form twin-margin">
        <label for="init_date" class="control-label">{{ 'Fecha Inicio' }}</label>
        <input type="date" id="init_date" name="init_date" class="form-control" required>
    </div>
    <div class="form-group twin-form">
        <label for="end_date" class="control-label">{{ 'Fecha Final' }}</label>
        <input type="date" id="end_date" name="end_date" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Generar</button>
    </form>