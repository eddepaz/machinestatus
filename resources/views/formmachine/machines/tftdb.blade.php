<div class="mt-4">
    <h3>Taylor Frontal TDB</h3>
    <div >
      <input type="radio"  name="tftdb" value="operative" id="operative-tftdb" 
      @if (isset($recordStatus[0]->status))
        @if ($recordStatus[0]->status == 'Operativa')
        checked
        @endif
        @endif
        >
        <label for="operative-tftdb" >{{ 'Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="tftdb" value="non-operative" id="non-operative-tftdb" 
      @if (isset($recordStatus[0]->status))
      @if ($recordStatus[0]->status == 'No Operativa')
      checked
      @endif
      @endif
      >
        <label for="non-operative-tftdb" >{{ 'No Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="tftdb" value="operative-wl" id="operative-wl-tftdb" 
      @if (isset($recordStatus[0]->status))
      @if ($recordStatus[0]->status == 'Operativa con Limitantes')
      checked
      @endif
      @endif
      >
        <label for="operative-wl-tftdb" >{{ 'Operativa con Limintantes' }}</label>
    </div>
  
    <div>
      <input   type="text" class="form-control {{ $errors->has('tftdblimitant')?'is-invalid':'' }} " name="tftdblimitant" id="tftdblimitant" value="{{isset($recordStatus[0]->limitation) ? $recordStatus[0]->limitation:old('tftdblimitant')}}">
    </div>
  </div>