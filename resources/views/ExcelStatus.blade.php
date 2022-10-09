
{{-- <h1>Chiquita Guatemala, S.A.</h1>
<h3>Reporte de Máquinas</h3> --}}
<br><br>
<table class="table table-bordered dataTable table-hover " id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%; text-align: center;">
    <tbody style="text-align: center;">

        
            <tr>
                <th style="background: #3576a5; color: #ffffff; text-align:center">Horario</th>
                <th style="background: #3576a5; color: #ffffff; text-align:center">Maquina</th>
                <th style="background: #3576a5; color: #ffffff; text-align:center">Status</th>
                <th style="background: #3576a5; color: #ffffff; text-align:center">Limitante</th>
            </tr>
            @foreach ($recordStatusDB->sortBy('date_register') as $data)
            
            <tr>
                <th>{{ $data->date_register }}</th>
                <th>{{ $data->machine }}</th>
                <th>{{ $data->status }}</th>
                <th>{{ $data->limitation }}</th>
            </tr>
                
            @endforeach


          

    </tbody>
</table>
