<div class="mt-4">
    <h3>Taylor Frontal Girón</h3>
    <div >
      <input type="radio"  name="tfg" value="operative" id="operative-tfg" 
      @if (isset($recordStatus[2]->status))
        @if ($recordStatus[2]->status == 'Operativa')
        checked
        @endif
        @endif
        >
        <label for="operative-tfg" >{{ 'Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="tfg" value="non-operative" id="non-operative-tfg" 
      @if (isset($recordStatus[2]->status))
      @if ($recordStatus[2]->status == 'No Operativa')
      checked
      @endif
      @endif
      >
        <label for="non-operative-tfg" >{{ 'No Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="tfg" value="operative-wl" id="operative-wl-tfg" 
      @if (isset($recordStatus[2]->status))
      @if ($recordStatus[2]->status == 'Operativa con Limitantes')
      checked
      @endif
      @endif
      >
        <label for="operative-wl-tfg" >{{ 'Operativa con Limintantes' }}</label>
    </div>
  
    <div>
      <input   type="text" class="form-control {{ $errors->has('tfglimitant')?'is-invalid':'' }} " name="tfglimitant" id="tfglimitant" value="{{isset($recordStatus[2]->limitation) ? $recordStatus[2]->limitation:old('tfglimitant')}}">
    </div>
  </div>